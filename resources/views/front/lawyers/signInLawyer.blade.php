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
        <link rel="stylesheet" href="{{asset('assets/css/signLawyer.css')}}">
    </head>
    <body>
        <!-- start NavBar-->
        @include('front.includes.navbar')
        <!--end NavBar-->

        <!--start sing-->
        <div class="signLawyer">
            <div class="overlay"></div>
            <div class="box shadow-lg p-3 mb-5 bg-white rounded">
              @include('front.alerts.success')
              @include('front.alerts.errors')
              <form class="needs-validation" action="{{route('lawyers.login')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="validationCustom01" class="form-label">البريد الالكتروني</label>
                  <input name="email" value="{{old('email')}}" type="email" class="form-control" id="validationCustom01" aria-describedby="emailHelp" placeholder="Email"><!--required-->
                  <div class="invalid-feedback">
                    Please enter a message in the textarea.
                  </div>
                  @error('email')
                     <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">كلمة المرور</label>
                  <input name="password" value="{{old('password')}}" type="password" class="form-control" id="exampleInputPassword1" placeholder="password"><!--required-->
                  @error('password')
                     <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary enter">الدخول</button>
              </form>
              <div class="forget">
                <a href="./forgetPassLawyer.html">هل نسيت كلمة المرور؟</a>
              </div>
              <div class="signUp">
                <a href="{{route('signup')}}">لا تملك حساب؟</a>
              </div>
              <hr>
              <div class="row">
                  <div class="col-lg-6">
                    <div class="facebook">
                        <a href="#"><i class="fab fa-facebook-f"></i><p>سجل بالفيسبوك</p></a>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="google">
                        <a href="#"><i class="fab fa-google"></i><p>سجل بجوجل</p></a>
                    </div>
                  </div>
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