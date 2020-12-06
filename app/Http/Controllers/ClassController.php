<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function regist(Request $request,$l_id)
    {
        $lop=\DB::table('lop')->where('l_id',$l_id)->first();
        if($lop){
            if($lop->l_hocphi!=0){
                return redirect()->route('VNPay');
            }
        }
        return redirect()->route('404');
    }
    public function VNPay(Request $request,$l_id)
    {
        $lop=\DB::table('lop')->where('l_id',$l_id)->first();
        if($lop){
            $gd_id=\DB::table('giaodich')->insertGetId([
                'l_id'=>$lop->l_id,
                'tk_id'=>\Auth::id(),
                'gd_tongtien'=>$lop->l_hocphi
            ]);
            if($lop->l_hocphi!=0){

                session(['cost_id' => $request->id]);
                session(['url_prev' => url()->previous()]);
                $vnp_TmnCode = 'UDOPNWS1'; //Mã website tại VNPAY
                $vnp_HashSecret = 'EBAHADUGCOEWYXCMYZRMTMLSHGKNRPBN'; //Chuỗi bí mật
                $vnp_Url = 'http://sandbox.vnpayment.vn/paymentv2/vpcpay.html';
                $vnp_Returnurl = 'http://localhost/CongDongGiaSu/public/payment/return-vnpay';//url link return vnpay
                $vnp_TxnRef = \Crypt::encrypt($gd_id); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                $vnp_OrderInfo = 'Thanh toán hóa đơn phí dich vụ';
                $vnp_OrderType = 'billpayment';
                $vnp_Amount = $lop->l_hocphi*100; // số tiền *100
                $vnp_Locale = 'vn'; //ngôn ngữ
                $vnp_IpAddr = request()->ip();
        
                $inputData = array(
                    'vnp_Version' => '2.0.0',
                    'vnp_TmnCode' => $vnp_TmnCode,
                    'vnp_Amount' => $vnp_Amount,
                    'vnp_Command' => 'pay',
                    'vnp_CreateDate' => date('YmdHis'), //Ngày tạo
                    'vnp_CurrCode' => 'VND',
                    'vnp_IpAddr' => $vnp_IpAddr,
                    'vnp_Locale' => $vnp_Locale,
                    'vnp_OrderInfo' => $vnp_OrderInfo,
                    'vnp_OrderType' => $vnp_OrderType,
                    'vnp_ReturnUrl' => $vnp_Returnurl,
                    'vnp_TxnRef' => $vnp_TxnRef,
                );
        
                if (isset($vnp_BankCode) && $vnp_BankCode != '') {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }
                ksort($inputData);
                $query = '';
                $i = 0;
                $hashdata = '';
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&'.$key.'='.$value;
                    } else {
                        $hashdata .= $key.'='.$value;
                        $i = 1;
                    }
                    $query .= urlencode($key).'='.urlencode($value).'&';
                }
        
                $vnp_Url = $vnp_Url.'?'.$query;
                if (isset($vnp_HashSecret)) {
                    // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
                    $vnpSecureHash = hash('sha256', $vnp_HashSecret.$hashdata);
                    $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash='.$vnpSecureHash;
                }
                return redirect($vnp_Url);
            }
        }
        return redirect()->route('404');

        
    }

    public function return(Request $request)
    {
        // dd($request);
        
        $url = session('url_prev', '/');
        if ($request->vnp_ResponseCode == '00') {
            // thành công
            $gd_id=\Crypt::decrypt($request->vnp_TxnRef);
            \DB::table('giaodich')
            ->where('gd_id',$gd_id)
            ->update(
                [
                    'gd_trangthai'=>1
                ]
            );
            //  "vnp_Amount" => "5100000000"
            // "vnp_TxnRef" => "20200421224518" mã đơn
            // $this->apSer->thanhtoanonline(session('cost_id'));

            return redirect($url)->with('success', 'Đã thanh toán phí dịch vụ');
        }
        session()->forget('url_prev');

        return redirect($url)->with('errors', 'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
}
