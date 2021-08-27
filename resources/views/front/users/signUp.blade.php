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
        <link rel="stylesheet" href="{{asset('assets/css/signUp.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/intlTelInput.css')}}">
    </head>
    <body>
        <!-- start NavBar-->
        @include('front.includes.navbar')
        <!--end NavBar-->

        <!--start sing-->
        <div class="signUp">
            <div class="box shadow-lg p-3 mb-5 bg-white rounded">
              @include('front.alerts.success')
              @include('front.alerts.errors')
              <form action="{{route('users.storeUser')}}" method="POST">
                @csrf
                <div class="shape mt-2"><p>انشأ حسابك</p></div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">:الاسم</label>
                  <input name="name" value="{{old('name')}}" type="text" class="form-control info" placeholder="اسمك بالكامل" id="validationTooltipUsernamePrepend" aria-describedby="emailHelp"><!--required-->
                  @error('name')
                     <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">:البريد الالكتروني</label>
                    <input name="email" value="{{old('email')}}" type="email" class="form-control info" placeholder="ex@such.com" id="exampleInputEmail1"  aria-describedby="emailHelp"><!--required-->
                    @error('email')
                       <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">:رقم الهاتف</label><br>
                    <input type="tel" value="{{old('phone')}}" class="form-control" placeholder="رقم الهاتف" name="phone" id="phone" style="width: 300px;"><!--required-->
                    @error('phone')
                       <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">:النوع</label><br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="ذكر">
                      <label class="form-check-label" for="inlineRadio1">ذكر</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="انثي">
                      <label class="form-check-label" for="inlineRadio2">انثي</label>
                    </div>
                    @error('gender')
                       <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">:تاريخ الميلاد</label>
                    <input name="date" value="{{old('date')}}" type="date" class="form-control info" placeholder="تاريخ ميلادك" id="exampleInputEmail1" aria-describedby="emailHelp"><!--required-->
                    @error('date')
                       <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">:الرقم السري</label>
                    <input name="password" value="{{old('password')}}" type="password" class="form-control info" id="exampleInputEmail1" aria-describedby="emailHelp"><!--required-->
                    @error('password')
                       <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary enter">انشاء</button>
                <hr class="mt-5 mb-5">
                <p class="or">لو انت مسجل <span><a href="{{route('users.getLogin')}}">دخول</a></span></p>
              </form>
            </div>
        </div>

        <!--end sing-->
        <!--start footer-->
        @include('front.includes.footer')
          <!--end footer-->
          <!-- JavaScript Bundle with Popper -->
          <script src="{{asset('assets/javascript/jquery.min.js')}}"></script>
          <script src="{{asset('assets/javascript/bootstrap.bundle.min.js')}}"></script>
          <script src="{{asset('assets/javascript/intlTelInput.js')}}"></script>
          <script src="{{asset('assets/javascript/js.js')}}"></script>
          <script>
          /* foooor signUp  telephone */
          var input = document.querySelector("#phone");
            window.intlTelInput(input, {
          // any initialisation options go here
            });
          </script>
      </body>
  </html>