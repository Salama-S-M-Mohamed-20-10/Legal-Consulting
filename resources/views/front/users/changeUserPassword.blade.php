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
        <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/signIn.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/contact.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/changeUserPassword.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/userInformation.css')}}">
    </head>
    <body>
        <!-- start NavBar-->
        @include('front.includes.navbar')
        <!--end NavBar-->

        <!--start info-->
        <div class="info">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8">
                      <div class="box shadow-lg p-3 mb-5 bg-white rounded">
                          <div class="shape">تغيير كلمة السر</div>
                          @include('front.alerts.success')
                          @include('front.alerts.errors')
                          <form action="{{route('users.updateUserPassword')}}" method="POST">
                              @csrf
                              <input type="hidden" name="id" value="{{session('userData')[0]['id']}}">
                              <div class="mb-5">
                                  <input type="password" name="password" class="form-control data" id="validationTooltipUsernamePrepend" aria-describedby="emailHelp"><!--required-->
                                  <label for="exampleInputEmail1" class="form-label">:كلمة المرور</label>
                                  @error('password')
                                     <div class="text-danger">{{$message}}</div>
                                  @enderror
                              </div>
                              <div class="mb-5">
                                  <input type="password" name="confirm_password" class="form-control data" id="validationTooltipUsernamePrepend" aria-describedby="emailHelp"><!--required-->
                                  <label for="exampleInputEmail1" class="form-label">:تاكيد كلمة المرور</label>
                                  @error('confirm_password')
                                     <div class="text-danger">{{$message}}</div>
                                  @enderror
                              </div>
                              <div class="changes">
                                  <button class="btn cancel">الغاء</button>
                                  <button type="submit" class="btn save">حفظ</button>
                               </div>
                          </form>
                      </div>
                      
                  </div>
                  <div class="col-lg-4 col-sm-12 dash">
                      <div class="card" style="width: 18rem;">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="{{route('users.userInformation')}}">بيانتي <i class="fas fa-tachometer-alt"></i></a>
                            </li>
                            <li class="list-group-item">
                              <a href="{{route('users.changeUserPassword')}}">تغيير كلمة السر <i class="fas fa-key"></i></a>
                            </li>
                          </ul>
                        </div>
                  </div>
            </div>
          </div>
        </div>
        <!--end info-->
        <!--start footer-->
          @include('front.includes.footer')
          <!--end footer-->
          <!-- JavaScript Bundle with Popper -->
          <script src="{{asset('assets/javascript/jquery.min.js')}}"></script>
          <script src="{{asset('assets/javascript/bootstrap.bundle.min.js')}}"></script>
          <script src="{{asset('assets/javascript/intlTelInput.js')}}"></script>
          <script src="{{asset('assets/javascript/js.js')}}"></script>
      </body>
  </html>