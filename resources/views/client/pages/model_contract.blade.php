@extends('client.layouts.layout')
@section('breadcrum')
Hợp đồng
@endsection
@push('css')
<style>
    .contract {
        font-family: Arial;
        font-size: 10pt;
    }
</style>
@endpush

@section('page')
<div class="container text-center">


    <div class="contract">
        <div>
            <p style="font-size:10pt; line-height:150%; margin:0pt; text-align:center"><span
                    style="font-family:Arial; font-size:10pt; font-weight:bold; text-decoration:none">HỢP
                    ĐỒNG</span><span style="font-family:Arial; font-size:10pt; font-weight:bold"> LÀM GIA SƯ</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt; text-align:center"><span
                    style="font-family:Arial; font-size:10pt; font-style:italic; font-weight:normal">Số:
                    ……………../HĐGS</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt; text-align:center"><span
                    style="font-family:Arial; font-size:10pt; font-style:italic; font-weight:bold">&nbsp;</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt; font-style:italic">Hôm nay, ngày... tháng... năm... tại
                    (địa điểm)</span><span style="font-family:Arial; font-size:10pt; font-style:italic">
                    ………………………………..</span><span style="font-family:Arial; font-size:10pt; font-style:italic">... chúng
                    tôi gồm có:</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt; font-weight:bold">Bên A</span><span
                    style="font-family:Arial; font-size:10pt">: (Bên thuê dịch vụ)</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">Họ
                    và tên:........................................</span><span
                    style="font-family:Arial; font-size:10pt">.......................</span><span
                    style="font-family:Arial; font-size:10pt">..........................................................................</span>
            </p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">Sinh
                    năm</span><span
                    style="font-family:Arial; font-size:10pt">:...........................................................................................</span><span
                    style="font-family:Arial; font-size:10pt">..............................................</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">Địa
                    chỉ thường
                    trú:...........................................................................................................................</span><span
                    style="font-family:Arial; font-size:10pt">.</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">Điện
                    thoại:......................................................................................................................................</span><span
                    style="font-family:Arial; font-size:10pt">.</span><span
                    style="font-family:Arial; font-size:10pt">..</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt">&nbsp;</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt; font-weight:bold">Bên B</span><span
                    style="font-family:Arial; font-size:10pt">: (Bên thực hiện dịch vụ)</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">Họ
                    và tên:.............</span><span
                    style="font-family:Arial; font-size:10pt">...........................</span><span
                    style="font-family:Arial; font-size:10pt">..................................................................................................</span><span
                    style="font-family:Arial; font-size:10pt"> </span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">Sinh
                    năm</span><span
                    style="font-family:Arial; font-size:10pt">:..............................................................</span><span
                    style="font-family:Arial; font-size:10pt">.............................</span><span
                    style="font-family:Arial; font-size:10pt">...............................................</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">Địa
                    chỉ liên
                    lạc:...............................................................................................................................</span><span
                    style="font-family:Arial; font-size:10pt">...</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">Điện
                    thoại:.......................................................................................................................................</span><span
                    style="font-family:Arial; font-size:10pt">..</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt">&nbsp;</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt; font-style:italic">Sau khi trao đổi và bàn bạc hai bên đi
                    đến thống nhất lập hợp đồng dịch vụ với nội dung và điều khoản sau:</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt">&nbsp;</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt; font-weight:bold">Điều 1: Đối tượng hợp đồng</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">Bên
                    A đồng ý để bên B (Là:...........................) làm gia sư dạy kèm các môn:....... lớp:...... cho
                    cháu (nêu họ, tên, tuổi từng cháu) với yêu cầu sau:</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Địa điểm học: tại tư gia của bên A tại số nhà:..... đường (nêu địa danh)</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Thời gian học theo lịch sau: vào các ngày:......... kể từ ngày... tháng... năm... đến ngày...
                    tháng... năm...</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">- Về
                    giáo trình: Bên B biên soạn trên cơ sở giáo trình............ và được bên A thông qua</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt">&nbsp;</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt; font-weight:bold">Điều 2: Thù lao và phương thức thanh
                    toán</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Bên A đồng ý trả cho bên B một giờ giảng cho một cháu là....... đồng</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">- Số
                    tiền này sẽ được thanh toán hàng tuần vào cuối giờ giảng của ngày thứ bảy.</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Đồng tiền thanh toán là đồng Việt Nam</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Hình thức thanh toán: Bằng tiền mặt</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt">&nbsp;</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt; font-weight:bold">Điều 3: Nghĩa vụ của bên A</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Đôn đốc, nhắc nhở con em mình học đúng giờ</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Bảo đảm địa điểm, thời gian, dụng cụ giảng dạy và phương tiện giúp cho học sinh đạt kết quả (bảng,
                    phấn hoặc bút viết và ánh sáng).</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Thanh toán tiền thù lao cho bên B đầy đủ và đúng hạn</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt">&nbsp;</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt; font-weight:bold">Điều 4: Nghĩa vụ của bên B</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Bảo đảm giờ học cho hai cháu đúng lịch (nếu vì một lý do nào đó mà phải nghỉ dạy phải điện thoại báo
                    trước cho bên A ít nhất là 3 giờ và phải dạy bù vào một ngày khác do hai bên thỏa thuận ngay sau đó,
                    nhưng số buổi nghỉ không được quá 3 buổi/tháng.</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">- Có
                    giáo trình, giáo án theo đúng yêu cầu</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Bảo đảm hết khóa học trình độ của các cháu phải đạt được......</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Giữ gìn bí mật về những thông tin của gia cảnh trong suốt thời gian giảng dạy cũng như sau này (hoặc
                    nói cách khác là không làm phương hại đến gia đình của bên A) mà trong thời gian giảng dạy tại gia
                    đình.</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Không được chuyển giao nghĩa vụ cho người thứ ba nếu chưa được bên A chấp nhận.</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt">&nbsp;</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt; font-weight:bold">Điều 5: Những thỏa thuận khác</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Sau thời gian học tập là một tháng nếu xét thấy trình độ cũng như học lực của các cháu hoặc cháu....
                    không đạt được hiệu quả như mong muốn thì bên B có quyền ngưng hợp đồng trước thời hạn.</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">-
                    Hai bên cam kết thực hiện đầy đủ các điều khoản ghi trong hợp đồng, nếu có vấn đề bất lợi gì phát
                    sinh, các bên phải chủ động trao đổi, bàn bạc giúp đỡ lẫn nhau trên cơ sở bình đẳng, tôn trọng và
                    hiểu biết lẫn nhau.</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt">&nbsp;</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt; font-weight:bold">Điều 6: Thời gian có hiệu lực của hợp
                    đồng</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span style="font-family:Arial; font-size:10pt">Hợp
                    đồng có hiệu lực kể từ ngày... tháng... năm... đến ngày... tháng... năm... và được lập thành hai
                    bản, mỗi bên giữ một bản để theo dõi thực hiện.</span></p>

            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt">&nbsp;</span></p>



            <div class="row row-cols-2 text-center ">
                <div class="col font-weight-bold">ĐẠI DIỆN BÊN A</div>
                <div class="col font-weight-bold">ĐẠI DIỆN BÊN B</div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="col">(ký tên)</div>
                <div class="col">(ký tên)</div>
            </div>
            <p style="font-size:10pt; line-height:150%; margin:0pt"><span
                    style="font-family:Arial; font-size:10pt">&nbsp;</span></p>
        </div>

    </div>
</div>
@endsection

@push('script')

@endpush