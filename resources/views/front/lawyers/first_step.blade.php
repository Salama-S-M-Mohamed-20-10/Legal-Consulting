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
										<form class="was-validated needs-validation" novalidate action="">
											
											<div class="form-group">
													<label for=""> الاسم الاول</label>
												<input type="text" class="form-control is-invalid ddd" id="validationCustom03"  required>
												<div class="invalid-feedback">
													Please choose a username.
												</div>
											</div>
											<div class="form-group">
													<label for=""> اللقب</label>
												<input type="text" class="form-control" id="validationServer01"  required>
											</div>

											<div class="form-group">
													<label for="">البريد الالكتروني</label>
												<input type="email" class="form-control info"  id="exampleInputEmail1"  aria-describedby="emailHelp" required>
											</div>
											<div class="form-group">
												<label for=""> كلمة المرور</label>
												<input type="password" class="form-control" id="inputPassword4" required>
											</div>
											<div class="form-group">
													<label class="form-group">النوع</label><br>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="ذكر" >
														<label class="form-check-label" for="exampleRadios1">
														  ذكر
														</label>
													  </div>
													  <div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="انثي">
														<label class="form-check-label" for="exampleRadios2">
														  انثي
														</label>
													  </div>
												</div>

												
												
											<hr class="mt-4 mb-4">
											
											<div class="button-row" >
												<input type="button" value="Next" class="next">
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
