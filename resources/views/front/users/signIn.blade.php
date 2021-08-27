<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- belong to responsive-->
        <title>محاميك</title>
        <!-- icon -->
        <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/icon.png')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/signIn.css')}}">
    </head>
    <body>
        <!-- start NavBar-->
        @include('front.includes.navbar')
        <!--end NavBar-->

        <!--start sing-->
        <div class="singIn">
            <div class="box shadow-lg p-3 mb-5 bg-white rounded">
              @include('front.alerts.errors')
              <form action="{{route('users.login')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  @error('email')
                     <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                  @error('password')
                     <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">تذكر كلمة المرور</label>
                </div>
                <button type="submit" class="btn btn-primary enter">الدخول</button>
              </form>
              <div class="forget">
                <a href="./forget.html">هل نسيت كلمة المرور؟</a>
              </div>
              <div class="facebook">
                <a href="#"><i class="fab fa-facebook-f"></i><p>فعل بحسابك علي الفيسبوك</p></a>
              </div>
              <div class="signUp">
                <a href="{{route('users.getRegister')}}">لا تملك حساب؟</a>
              </div>
            </div>
        </div>

        <!--end sing-->
        <!--start footer-->
        @include('front.includes.footer')
          <!--end footer-->
          <!-- JavaScript Bundle with Popper -->
          <script src="{{asset('assets/javascript/jquery.min.js')}}"></script>
          <script src="{{asset('assets/javascript/bootstrap.bundle.min.js')}}"></script>
          <script src="{{asset('assets/javascript/js.js')}}"></script>
      </body>
  </html>