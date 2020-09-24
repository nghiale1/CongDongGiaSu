@extends('client.layouts.layout')
@section('breadcrum')
Hợp đồng
@endsection
@push('css')
<style>
        input[type="text"] {
                border: 1px solid;
                border-top: none;
                border-left: none;
                border-right: none;
        }

        .contract {
                font-family: Arial;
                font-size: 10pt;
        }

        .date {
                width: 42px;
        }
</style>
@endpush

@section('page')
<div class="container text-center">
        <div class="white">

                <div class="contract center">
                        <table class="table table-borderless text-left" width='595px'>
                                <tr class="text-center">

                                        <td>HỢP ĐỒNG LÀM GIA SƯ</td>
                                </tr>
                                <tr class="text-center">

                                        <td>Số:<input type="text">/HĐGS</td>
                                </tr>
                                <tr>

                                        <td>Hôm nay, ngày <input type="text" class="date">
                                                tháng<input type="text" class="date">
                                                năm<input type="text" class="date">tại (địa điểm)<input type="text">.
                                                chúng tôi
                                                gồm
                                                có:
                                        </td>
                                </tr>
                                <tr>

                                        <td>Bên A: (Bên thuê dịch vụ) <input type="text"></td>
                                </tr>
                                <tr>

                                        <td>Họ và tên:<input type="text">
                                        </td>
                                </tr>
                                <tr>

                                        <td>Sinh năm:<input type="text">
                                        </td>
                                </tr>
                                <tr>

                                        <td>Địa chỉ thường
                                                trú:<input type="text">
                                        </td>
                                </tr>
                                <tr>

                                        <td>Điện thoại:<input type="text">
                                        </td>
                                </tr>
                                <tr>

                                        <td>Bên B: (Bên thực hiện dịch vụ)</td>
                                </tr>
                                <tr>

                                        <td>Họ và
                                                tên:<input type="text">
                                        </td>
                                </tr>
                                <tr>

                                        <td>Sinh năm:<input type="text">
                                        </td>
                                </tr>
                                <tr>

                                        <td>Địa chỉ liên
                                                lạc:<input type="text">
                                        </td>
                                </tr>
                                <tr>

                                        <td>Điện thoại:<input type="text">
                                        </td>
                                </tr>
                                <tr>

                                        <td>Sau khi trao đổi và bàn bạc hai bên đi đến thống nhất lập hợp đồng dịch vụ
                                                với nội
                                                dung và điều khoản sau:</td>
                                </tr>
                                <tr>

                                        <td>Điều 1: Đối tượng hợp đồng</td>
                                </tr>
                                <tr>

                                        <td>Bên A đồng ý để bên B (Là:<input type="text">) làm gia sư dạy kèm các
                                                môn:<input type="text"> lớp:<input type="text"> cho cháu (nêu họ, tên,
                                                tuổi từng
                                                cháu) với yêu cầu sau:
                                        </td>
                                </tr>
                                <tr>

                                        <td>- Địa điểm học: tại tư gia của bên A tại số nhà:. đường (nêu địa danh)</td>
                                </tr>
                                <tr>

                                        <td>- Thời gian học theo lịch sau: vào các ngày:. kể từ ngày<input type="text">
                                                tháng<input type="text"> năm<input type="text">
                                                đến ngày<input type="text"> tháng<input type="text"> năm<input
                                                        type="text"></td>
                                </tr>
                                <tr>

                                        <td>- Về giáo trình: Bên B biên soạn trên cơ sở giáo trình và được bên A
                                                thông qua</td>
                                </tr>
                                <tr>

                                        <td>Điều 2: Thù lao và phương thức thanh toán</td>
                                </tr>
                                <tr>

                                        <td>- Bên A đồng ý trả cho bên B một giờ giảng cho một cháu là <input
                                                        type="text"> đồng
                                        </td>
                                </tr>
                                <tr>

                                        <td>- Số tiền này sẽ được thanh toán hàng tuần vào cuối giờ giảng của ngày thứ
                                                bảy.</td>
                                </tr>
                                <tr>

                                        <td>- Đồng tiền thanh toán là đồng Việt Nam</td>
                                </tr>
                                <tr>

                                        <td>- Hình thức thanh toán: Bằng tiền mặt</td>
                                </tr>
                                <tr>

                                        <td>Điều 3: Nghĩa vụ của bên A</td>
                                </tr>
                                <tr>

                                        <td>- Đôn đốc, nhắc nhở con em mình học đúng giờ</td>
                                </tr>
                                <tr>

                                        <td>- Bảo đảm địa điểm, thời gian, dụng cụ giảng dạy và phương tiện giúp cho học
                                                sinh
                                                đạt kết quả (bảng, phấn hoặc bút viết và ánh sáng).</td>
                                </tr>
                                <tr>

                                        <td>- Thanh toán tiền thù lao cho bên B đầy đủ và đúng hạn</td>
                                </tr>
                                <tr>

                                        <td>Điều 4: Nghĩa vụ của bên B</td>
                                </tr>
                                <tr>

                                        <td>- Bảo đảm giờ học cho hai cháu đúng lịch (nếu vì một lý do nào đó mà phải
                                                nghỉ dạy
                                                phải điện thoại báo trước cho bên A ít nhất là 3 giờ và phải dạy bù vào
                                                một ngày
                                                khác do hai bên thỏa thuận ngay sau đó, nhưng số buổi nghỉ không được
                                                quá 3
                                                buổi/tháng.</td>
                                </tr>
                                <tr>

                                        <td>- Có giáo trình, giáo án theo đúng yêu cầu</td>
                                </tr>
                                <tr>

                                        <td>- Bảo đảm hết khóa học trình độ của các cháu phải đạt được..</td>
                                </tr>
                                <tr>

                                        <td>- Giữ gìn bí mật về những thông tin của gia cảnh trong suốt thời gian giảng
                                                dạy cũng
                                                như sau này (hoặc nói cách khác là không làm phương hại đến gia đình của
                                                bên A)
                                                mà trong thời gian giảng dạy tại gia đình.</td>
                                </tr>
                                <tr>

                                        <td>- Không được chuyển giao nghĩa vụ cho người thứ ba nếu chưa được bên A chấp
                                                nhận.
                                        </td>
                                </tr>
                                <tr>

                                        <td>Điều 5: Những thỏa thuận khác</td>
                                </tr>
                                <tr>

                                        <td>- Sau thời gian học tập là một tháng nếu xét thấy trình độ cũng như học lực
                                                của các
                                                cháu hoặc cháu không đạt được hiệu quả như mong muốn thì bên B có quyền
                                                ngưng hợp đồng trước thời hạn.</td>
                                </tr>
                                <tr>

                                        <td>- Hai bên cam kết thực hiện đầy đủ các điều khoản ghi trong hợp đồng, nếu có
                                                vấn đề
                                                bất lợi gì phát sinh, các bên phải chủ động trao đổi, bàn bạc giúp đỡ
                                                lẫn nhau
                                                trên cơ sở bình đẳng, tôn trọng và hiểu biết lẫn nhau.</td>
                                </tr>
                                <tr>

                                        <td>Điều 6: Thời gian có hiệu lực của hợp đồng</td>
                                </tr>
                                <tr>

                                        <td>Hợp đồng có hiệu lực kể từ ngày <input type="text" class="date"> tháng<input
                                                        type="text" class="date">
                                                năm<input type="text" class="date"> đến
                                                ngày<input type="text" class="date">
                                                tháng<input type="text" class="date">
                                                năm<input type="text" class="date"> và
                                                được lập thành hai bản, mỗi bên giữ một bản để theo dõi thực hiện.</td>
                                </tr>
                                <tr>

                                        <td>
                                                <table class="table table-borderless text-center">
                                                        <tr>
                                                                <td class="ce">ĐẠI DIỆN BÊN A</td>
                                                                <td>ĐẠI DIỆN BÊN A</td>
                                                        </tr>
                                                        <tr>
                                                                <td></td>
                                                        </tr>
                                                        <tr>
                                                                <td></td>
                                                        </tr>
                                                        <tr>
                                                                <td>(Ký tên)</td>
                                                                <td>(Ký tên)</td>
                                                        </tr>
                                                </table>
                                        </td>
                                </tr>

                        </table>

                </div>
        </div>

</div>
@endsection

@push('script')

@endpush