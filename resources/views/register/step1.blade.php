
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="shortcut icon" type="image/png" href="{{asset('assets/images/icon.png')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/signIn.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/signLawyer.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/intlTelInput.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/intlTelInput.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/signUpLawyer.css')}}">
	 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	 	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style2.css')}}">
</head>
<body>

<!-- start NavBar-->
@include('front.includes.navbar')
    <!--end NavBar-->
    <div class="container">
		<div class="row">
        <div class="col-xl-12">
				
				<div class="multistep-container">
					
					<div class="mutistep-form-area">
                        <div class="form-box">

								<!--  -->
									<ul class="active-button">
										<li class="active">
											<span class="round-btn">1</span>
										</li>
										<li>
											<span class="round-btn">2</span>
										</li>
										<li>
											<span class="round-btn">3</span>
										</li>
										
									</ul>
								<!--  -->


										<h4>Login Detail</h4>
                                        <h1>Step 1</h1>
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
										@include('front.alerts.success')
										<form class="was-validated needs-validation" novalidate action="/lawyers/register1" method="POST">
                                        @csrf
											
											<div class="form-group">
												<label for=""> الاسم الاول</label>
                                                <input type="text" class="form-control is-invalid ddd" id="validationCustom03" name="firstName" placeholder="Enter First Name" value="{{ session()->get('register.firstName') }}" required>
												<!--<div class="invalid-feedback">
													Please choose a username.
												</div>-->
											</div>
											<div class="form-group">
												<label for=""> اللقب</label>
												<input type="text" class="form-control is-invalid ddd" id="validationCustom03" name="lastName" placeholder="Enter Last Name" value="{{ session()->get('register.lastName') }}" required>
											</div>

											<div class="form-group">
												<label for="">البريد الالكتروني</label>
												<input type="text" class="form-control is-invalid ddd" id="validationCustom03" name="email" placeholder="Enter Email" value="{{ session()->get('register.email') }}" required>
											</div>
											<div class="form-group">
												<label for=""> كلمة المرور</label>
												<input type="password" class="form-control is-invalid ddd" id="validationCustom03" name="password" placeholder="Enter Password" value="{{ session()->get('register.password') }}" required>
											</div>
											




												<div class="form-group">
												<label for="">النوع</label>
												<select name="gender" value="{{ session()->get('register.gender') }}" class="form-select" aria-label="Default select example" required>
													<option selected value="">النوع</option>
													<option  @if( session()->get('register.gender') == 'ذكر' ) selected @endif value="ذكر">ذكر</option>
													<option @if( session()->get('register.gender') == 'انثي' ) selected @endif value="انثي">انثي</option>
												</select>
												</div>




                                            

												

												
												
											<hr class="mt-4 mb-4">
											
											<div class="button-row" >
                                                <button type="submit" class="btn btn-primary">Next</button>
											</div>
											
										</form>

								</div>
                                </div>
                                
                                </div>
                                </div>
                                </div>
                                </div>


<!--start footer-->
@include('front.includes.footer')
           <!--end footer-->
		  <script src="{{asset('assets/javascript/jquery.min.js')}}"></script>
          <script src="{{asset('assets/javascript/bootstrap.bundle.min.js')}}"></script>
          <script src="{{asset('assets/javascript/intlTelInput.js')}}"></script>
		  <script src="{{asset('assets/javascript/code.js')}}"></script>
          <script src="{{asset('assets/javascript/js.js')}}"></script>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		/* foooor signUp  telephone */
		var input = document.querySelector("#phone");
			window.intlTelInput(input, {
		// any initialisation options go here
			});
		</script>
	
   
</body>
</html>
