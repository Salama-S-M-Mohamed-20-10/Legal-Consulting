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
						
						
								<!--  -->
								<div class="form-box">


								<!--  -->
									<ul class="active-button">
										<li class="active">
											<span class="round-btn">1</span>
										</li>
										<li class="active">
											<span class="round-btn">2</span>
										</li>
										<li class="active">
											<span class="round-btn">3</span>
										</li>
									</ul>
								<!--  -->

										<h4>booking Details</h4>
										<form class="was-validated" action="" novalidate>
											
                                        <div class="form-group" style="margin-bottom: 40px;">
												<label for="">اختر صورة</label><br>
												<form action="upload.php" method="post" enctype="multipart/form-data">
													<input type="file" name="fileToUpload" id="fileToUpload">
												</form>
											</div>
											

											<hr class="mt-4 mb-4">
											<div class="button-row">
												<input type="button" value="Previous" class="previous">
												<input type="submit" value="Submit" class="submit">
											</div>
											
										</form>

								</div>
								<!--  -->

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
