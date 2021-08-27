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
        <link rel="stylesheet" href="{{asset('assets/css/contact.css')}}">
    </head>
    <body>
        <!-- start NavBar-->
        @include('front.includes.navbar')
        <!--end NavBar-->

        <!--start sing-->
        <div class="signUp">
            <div class="box shadow-lg p-3 mb-5 bg-white rounded">
              <form action="{{route('users.userContact')}}" method="POST">
              @csrf
                  <div class="shape mt-3 mb-5"><p>تواصل معنا</p></div>
                  @include('front.alerts.success')
                  @include('front.alerts.errors')
                  @if(session('userData') != null)
                  <input name="name" value="{{session('userData')[0]['name']}}" type="hidden">
                  <input name="phone" value="{{session('userData')[0]['phone']}}" type="hidden">
                  @endif
                  @if(session('userData') == null)
                <div class="mb-3 dis">
                  <input name="name" value="{{old('name')}}" type="text" class="form-control contact"  placeholder="اسمك بالكامل" id="validationTooltipUsernamePrepend" aria-describedby="emailHelp"><!--required-->
                  <label for="exampleInputEmail1" class="form-label">:الاسم</label>
                  @error('name')
                      <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
                
                <div class="mb-3 dis">
                    
                    <input name="phone" value="{{old('phone')}}" type="tel" class="form-control contact" placeholder="رقم الهاتف" name="phone" id="phone" style="width: 284px;"><!--required-->
                    <label for="exampleInputEmail1" class="form-label">:رقم الهاتف</label>
                    @error('phone')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                @endif
                <div class="mb-3 dis">
                    <input name="email" value="{{old('email')}}" type="email" class="form-control contact" style="font-size:15px" placeholder="Write Your Gmail To Send Solving To It" id="exampleInputEmail1"  aria-describedby="emailHelp"><!--required-->
                    <label for="exampleInputEmail1" class="form-label">:البريد الالكتروني</label>
                    @error('email')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea name="comment" value="{{old('comment')}}" class="form-control" placeholder="Leave a comment here"  style="width: 284px;" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2" style="margin-left: 200px;">تعليقك او شكوتك</label>
                        @error('comment')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>
                </div>
                <button type="submit" class="btn btn-primary enter">ارسال</button>
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