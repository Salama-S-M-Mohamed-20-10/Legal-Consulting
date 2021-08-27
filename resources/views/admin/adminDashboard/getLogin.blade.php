<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>محاميك</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{asset('assets/lawyerDashboard/favicon.ico')}}" type="image/x-icon" />

        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/bootstrap/dist/css/bootstrap-rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/ionicons/dist/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/icon-kit/dist/css/iconkit.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lawyerDashboard/dist/css/theme.css')}}">
        <script src="{{asset('assets/lawyerDashboard/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-7 col-lg-7 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('{{asset('assets/images/admin.jpg')}}')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="../index.html"><img src="{{asset('assets/lawyerDashboard/src/img/logo.png')}}" alt=""></a>
                            </div>
                            <h3 class="text-center">مرحباً بك فى محاميك</h3>
                            <form action="{{route('admins.login')}}" method="POST">
                            @csrf
                            @include('admin.includes.alerts.success')
                            @include('admin.includes.alerts.errors')
                                <div class="form-group">
                                    <input name="email" value="{{old('email')}}" type="text" class="form-control" placeholder="البريد الإلكتروني"><!--required-->
                                    <i class="ik ik-mail"></i>
                                    @error('email')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="password" value="{{old('password')}}" type="password" class="form-control" placeholder="كلمة السر"><!--required-->
                                    <i class="ik ik-lock"></i>
                                    @error('password')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                            <span class="custom-control-label">&nbsp;تذكرني</span>
                                        </label>
                                    </div>
                                    <div class="col text-left">
                                        <a href="forgot-password.html">نسيت كلمة السر</a>
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                    <button type="submit" class="btn btn-theme">دخول</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="../lawyerDashboard/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="{{asset('assets/lawyerDashboard/plugins/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('assets/lawyerDashboard/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/lawyerDashboard/dist/js/theme.js')}}"></script>

    </body>
</html>
