<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Image/teacher.svg')}}" />
    <title>Cộng đồng gia sư | Đăng nhập</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <style>
        /* Made with love by Mutiullah Samim*/

        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,
        body {
            background-image: url("{{ asset('hand-read-board-underwater-blackboard-training-797673-pxhere.com.jpg') }}");

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
    </style>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Đăng nhập</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    @if($error = Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                        <p>{{$error}}</p>
                    </div>
                    @endif
                    <form action="{{route('account.login')}}" method="post">
                        @csrf
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
                            <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                        </div>
                        <div class="row align-items-center remember d-inline">
                            <input type="checkbox" name="remember">Ghi nhớ
                        </div>
                        <div class="form-group d-inline">
                            <input type="submit" value="Đăng nhập" class="btn float-right login_btn" id="signin">
                        </div>
                    </form>
                    <div class="">
                        <div class="d-flex justify-content-left links">
                            Tài khoản demo:
                        </div>
                        <div class="d-flex justify-content-left links">
                            &nbsp;&nbsp;&nbsp;&nbsp;Gia sư: giasu1-giasu
                        </div>
                        <div class="d-flex justify-content-left links">
                            &nbsp;&nbsp;&nbsp;&nbsp;Học viên: hocvien1-hocvien
                        </div>
                        <div class="d-flex justify-content-left links">
                            &nbsp;&nbsp;&nbsp;&nbsp;Admin: admin-admin
                        </div>
                    </div>
                    <div class="alert alert-danger" id="error" role="alert">

                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Bạn chưa có tài khoản?<a href="{{route('account.register')}}">Đăng ký</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Quên mật khẩu?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
                $('#error').hide();
                $('#signin').click(function (e) {
                    if(username=='' || password==''){
                    $('#error').text("Chưa điền tài khoản và mật khẩu");
                    $('#error').show();
                    return false;

                }
                else{
                    $('#error').text(e.responseJSON);
                    $('#error').show();
                    return false;
                }
                });
    });
    </script>
</body>

</html>