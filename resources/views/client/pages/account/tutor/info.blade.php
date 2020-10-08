@push('css')
<style>
    a.save {
        color: #542eff;
    }

    a.save:hover {
        background-color: rgb(253 200 0);
    }

    .teached {
        background-color: #32cf3a;
        padding: 0 4px 1px 4px;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        margin-right: 3px;
    }

    .frame-avatar {
        width: 150px;
        height: 150px;
        overflow: hidden;
    }

    .avatar {
        min-width: 100%;
        min-height: 100%;
    }

    .btn-grey {
        background-color: #f5f4f7;
        color: #542eff;
    }

    .edit {
        color: #542eff;
        background-color: transparent;
        border: 0;
        padding: 5px 10px;
    }

    .edit:hover {
        background-color: #0000000d;
        border-radius: 0.25rem;
    }

    .tare-edit {
        width: 100%;
        height: auto;
        overflow-y: auto;
        resize: none;
        background-color: #f0f2f5;
        border: 1px solid #ccd0d5;
        border-radius: 6px;
        font-size: 15px;
        padding: 8px;
    }

    .btn-update {
        display: inline-block;
        background-color: #f0f2f5;
        border: 0;
        padding: 7px 12px;
        margin-right: 5px;
        border-radius: 0.25rem;
        font-size: 15px;
    }
</style>
@endpush
<div class="col-md-3 frame-avatar">
    <img src="{{asset('client/img/Nghia2.jpg')}}" alt="" class="avatar">
</div>
<div class="col-md-9 baseline">
    <h4 class="inline">Minh Nghĩa</h4>
    {{-- <span class="h5" style="float: right;">40.000/giờ</span> --}}
    <h5 class="font-weight-light inp-intro">
        An Experienced Student and Teacher of the English Language
    </h5>
    <button class="edit" data-for="inp-intro">Chỉnh sửa</button>
    <p>
        <div class="review">
            <span class="star-white">

                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span class="star-yellow" style="width:100%">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </span>
            </span>
        </div>

        75 đánh giá
    </p>
    <table>
        <tr>
            <td class="text-center">
                <span class="teached">10</span>
            </td>
            <td>
                <p class="teached-class">

                    lớp đã dạy
                </p>
            </td>
        </tr>
        <tr>
            <td class="text-center">
                <i class="fa fa-map-marker" aria-hidden="true" style="color: #32cf3a"></i>
            </td>
            <td>
                <p>
                    <b>

                        <span class="address">Hiệp Bình Chánh, Thủ Đức</span>
                        <button class="edit" data-for="address">Chỉnh sửa</button>
                    </b>
                </p>
            </td>
        </tr>
    </table>

    <a class="btn btn-grey inline float-md-right save">
        <span style="font-weight: 600;">
            <i class="fa fa-bookmark-o" aria-hidden="true" style="font-weight: 600;"></i> Lưu thông
            tin</span>
    </a>

</div>
<div class="col-md-12 intro">
    <h5>Giới thiệu</h5><button class="edit" data-for="inp-des">Chỉnh sửa</button>
    <p class="inp-des">
        I graduated summa cum laude from the University of North Carolina at Chapel Hill with a B.A.
        in Comparative Literature and Anthropology, class of 2019. I also had the privilege of
        attending Duke University through the Robertson Scholars Leadership Program, a highly
        competitive full merit scholarship whose recipients enjoy dual enrollment status at UNC and
        Duke. During the 2016-17 academic year, I attended the University of Oxford (St. Edmund
        Hall) as a visiting student in English, History and Creative Writing.
        <br>
        <br>
        With two years’ experience as an editorial assistant in the publishing industry and a
        history of strong working relationships with literary scholars at three of the world’s most
        prestigious universities, I have developed a broad understanding of fiction, nonfiction, and
        the English language that incorporates an unusual diversity of theoretical and practical
        perspectives. Because I've also taught English to students from a variety of backgrounds all
        around the world, I'm well-positioned to help you get ahead in any English class from
        elementary school to college, or simply to learn the language itself!
    </p>
</div>
@push('script')
<script>
    $(document).ready(function () {
            $('.edit').click(function (e) { 
                e.preventDefault();
                var obj=$(this).attr('data-for');
                var value=$('.'+obj).text();
                var height=$('.'+obj).height();
                var data='<textarea  placeholder="Mô tả về bạn"  class="tare-edit" style="height:'+(height+25)+'px">'+value.trim()+'</textarea>';
                var btn='<button class="btn-update">Hủy</button><button class="btn-update">Lưu</button>'
                $('.'+obj).html(data);
                $(this).remove();
                $('.'+obj).append(btn);
                // $(selector).html(htmlString);
                // alert(value);
                
            });
        });
</script>
@endpush