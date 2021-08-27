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
        <link rel="stylesheet" href="{{asset('assets/css/intlTelInput.css')}}">
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
                          <div class="shape">الملف الشخصي</div>
                          @include('front.alerts.success')
                          @include('front.alerts.errors')
                          <form class="row g-3 needs-validation" novalidate action="{{route('users.updateUserInformation')}}" method="POST">
                              @csrf
                              <input type="hidden" name="id" value="{{session('userData')[0]['id']}}">
                              <div class="mb-5">
                                  <input type="text" name="name" value="{{session('userData')[0]['name']}}" class="form-control data" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                  <label for="validationCustomUsername" class="form-label">:الاسم</label>
                                  <div class="invalid-feedback">
                                    برجاء اختيار اسم
                                  </div>
                                  @error('name')
                                     <div class="text-danger">{{$message}}</div>
                                  @enderror
                              </div>
                              <div class="mb-5">
                                  <input type="email" name="email" value="{{session('userData')[0]['email']}}" class="form-control data" id="validationCustom02" aria-describedby="emailHelp" required>
                                  <label for="validationCustom02" class="form-label">:البريد الالكتروني</label>
                                  <div class="invalid-feedback">
                                    برجاء ادخال بريدك الالكتروني
                                  </div>
                                  @error('email')
                                      <div class="text-danger">{{$message}}</div>
                                  @enderror
                              </div>
                              <div class="mb-3 dis">
                    
                                  <input type="tel" class="form-control data" placeholder="رقم الهاتف" name="phone" value="{{session('userData')[0]['phone']}}" id="phone" style="width: 412px;" required>
                                  <label for="validationCustom03" class="form-label">:رقم الهاتف</label>
                                  <div class="invalid-feedback">
                                    برجاء كتابة رقم الهاتف
                                  </div>
                                  @error('phone')
                                    <div class="text-danger">{{$message}}</div>
                                  @enderror
                              </div>
                              <div class="mb-3">
                                  <input type="date" name="date" value="{{session('userData')[0]['date']}}" class="form-control data" placeholder="تاريخ ميلادك" id="validationCustom04" aria-describedby="emailHelp" required>
                                  <label for="validationCustom04" class="form-label">:تاريخ الميلاد</label>
                                  <div class="invalid-feedback">
                                    برجاء كتابة تاريخ ميلادك
                                  </div>
                                  @error('date')
                                     <div class="text-danger">{{$message}}</div>
                                  @enderror
                              </div>
                              <div class="changes">
                                <button class="btn cancel"  type="submit">الغاء</button>
                                <button class="btn save"  type="submit">حفظ التعديلات</button>
                            </div>
                          </form>
                          
                      </div>
                      
                  </div>
                  <div class="col-lg-4">
                      <div class="card" style="width: 18rem;">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">بيانتي <i class="fas fa-tachometer-alt"></i>
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