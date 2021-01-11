<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Image/teacher.svg')}}" />
    <title>Cộng đồng gia sư | Đăng ký</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('client/asset/styles.css')}}"> --}}
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <style>
        /* Made with love by Mutiullah Samim*/

        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,
        body {
            background-image: url('./hand-read-board-underwater-blackboard-training-797673-pxhere.com.jpg');
            /* background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg'); */
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            background-position: bottom center;
            font-family: 'Work Sans', sans-serif;
            /* font-family: 'Numans',
                sans-serif; */
        }

        .container {
            height: 100%;
            align-content: center;
        }

        .card {
            /* height: 370px; */
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0, 0, 0, 0.5) !important;
        }

        .social_icon span {
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
        }

        .social_icon span:hover {
            color: white;
            cursor: pointer;
        }

        .card-header h3 {
            color: white;
        }

        .social_icon {
            position: absolute;
            right: 20px;
            top: -45px;
        }

        .input-group-prepend span {
            width: 50px;
            background-color: #FFC312;
            color: black;
            border: 0 !important;
        }

        input:focus {
            outline: 0 0 0 0 !important;
            box-shadow: 0 0 0 0 !important;

        }

        .remember {
            color: white;
        }

        .remember input {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn {
            color: black;
            background-color: #FFC312;
            /* width: 100px; */
        }

        .login_btn:hover {
            color: black;
            background-color: white;
        }

        .links {
            color: white;
        }

        .links a {
            margin-left: 4px;
        }

        .field-icon {
            right: 6px;
            top: 10px;
            position: absolute;
            z-index: 9999;
        }

        .input-group>.form-control:not(:first-child) {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        #error {
            display: none;
        }

        .sign-control li.current a {
            background-color: #e44d3a;
            color: #fff;
        }

        .signup-tab ul li.current a {
            background-color: #e44d3a;
            color: #fff;
        }

        /* =============== signup-tab ============== */
        .choice {
            width: 100%;
            display: table;
        }

        .choice div {
            /* border-radius: 50%; */
            display: table-cell;
            height: 38px;

            text-align: center;
            vertical-align: middle
        }

        #Giasu {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        #Hocvien {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .selected {
            width: 60vh;
            background-color: #FFC312;
        }

        .tab-role {
            width: 40vh;
            background-color: white;
        }

        .hide {
            display: none;
        }

        /* ============ login-resources ============= */
    </style>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Đăng ký</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    {{-- <form method="" action=""> --}}
                    <form method="post" action="{{route('account.signup')}}">
                        @csrf
                        <div class="input-group form-group">
                            <div class="choice" class="form-control">
                                <div class="selected chooseHide" id="Giasu" href="#" title="" data-value="tutor">Gia sư
                                </div>
                                <div class="tab-role chooseHide" id="Hocvien" href="#" title="" data-value="student">Học
                                    viên</div>
                            </div>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-id-card"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control" placeholder="Họ tên">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-venus-mars"
                                        aria-hidden="true"></i></span>
                            </div>
                            <select name="gender" id="gender" class="form-control" placeholder="Giới tính">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>

                        </div>
                        <div class="cm">
                            {{-- chuyenmon --}}
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-trophy"
                                            aria-hidden="true"></i></span>
                                </div>
                                <select name="cm_id" id="cm_id" class="form-control" placeholder="Chuyên môn">
                                    @foreach ($cm as $item)

                                    <option value="{{$item->cm_id}}">@if ($item->lv_id)
                                        {{$item->lv_ten}} -
                                        @endif {{$item->cm_ten}}</option>
                                    @endforeach
                                </select>

                            </div>
                            {{-- dtnh --}}
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-graduation-cap"
                                            aria-hidden="true"></i></span>
                                </div>
                                <select name="dtnh_id" id="dtnh_id" class="form-control"
                                    placeholder="Đối tượng người học">
                                    @foreach ($dtnh as $item)

                                    <option value="{{$item->dtnh_id}}">{{$item->dtnh_ten}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Mật khẩu">
                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="confirm" id="confirm" class="form-control"
                                placeholder="Nhập lại mật khẩu">
                            <span toggle="#confirm" class="fa fa-fw fa-eye field-icon toggle-confirm"></span>
                        </div>
                        <div class="alert alert-danger" id="error" role="alert"></div>
                        <div class="form-group">
                            <input type="submit" value="Đăng ký" id="signup" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Bạn đã có tài khoản?<a href="{{route('account.login_view')}}">Đăng nhập</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".chooseHide").click(function (e) { 
                e.preventDefault();
            var role = $(this).attr('data-value');
            if(role=='tutor'){
                $('.cm').removeClass('hide');
            }
            else{
                $('.cm').removeClass('hide');
                $('.cm').addClass('hide');

            }
                
            });
        $('#signup').click(function(e) {

            e.preventDefault();
            var name = $("input[name='name']").val();
            var gender = $("#gender").val();
            var cm_id = $("#cm_id").val();
            var dtnh_id = $("#dtnh_id").val();
            var username = $("input[name='username']").val();
            var password = $("input[name='password']").val();
            var confirm = $("input[name='confirm']").val();
            var role = $(".selected").attr('data-value');
            if (name == '' || username == ''|| password == ''|| confirm == '') {
                $('#error').text("Không được để trống");
                $('#error').show();
                return false;
            } else if ( password != confirm) {
                $('#error').text("Mật khẩu không giống");
                $('#error').show();
                return false;
            } 

            $.ajax({
                type: "POST",
                url: "{!! route('account.signup') !!}",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                data: {
                    name: name,
                    gender: gender,
                    username: username,
                    password: password,
                    cm_id: cm_id,
                    dtnh_id: dtnh_id,
                    confirm: confirm,
                    role: role
                },
                success: function(response) {

                    window.location = "{{ route('account.login_view') }}"
    },
    error: function(e) {
    if(e.responseJSON.message!=undefined){

        $('#error').text(e.responseJSON.message);
        $('#error').show();
    }else{

        $('#error').text(e.responseJSON);
        $('#error').show();
    }

    }
    });
    });
    });
    </script>
    <script>
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
            });
            $(".toggle-confirm").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <script>
        $('#Giasu').on("click", function(){
        $('#Hocvien').removeClass('selected');
        $('#Hocvien').addClass('tab-role');
        $(this).removeClass('tab-role');
        $(this).addClass('selected');
        return false;
    });
        $('#Hocvien').on("click", function(){
        $('#Giasu').removeClass('selected');
        $('#Giasu').addClass('tab-role');
        $(this).removeClass('tab-role');
        $(this).addClass('selected');
        return false;
    });
    </script>
</body>

</html>