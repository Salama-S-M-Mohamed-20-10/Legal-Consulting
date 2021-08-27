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
                                        <h1>Step 3</h1>
                                        <hr>
                                        @if(isset($register->lawyerPhoto))
                                        <img style="width:150px;height:150px" alt="Lawyer Image" src="/storage/photo/{{$register->lawyerPhoto}}"/>
                                        @endif
										<form class="was-validated" action="{{route('register3')}}" method="post" enctype="multipart/form-data" novalidate><!--/lawyers/register3 This Is For Action-->
                                        <!--<div class="form-group" style="margin-bottom: 40px;">
												<label for="">اختر صورة</label><br>
												<form action="upload.php" method="post" enctype="multipart/form-data">
													<input type="file" name="fileToUpload" id="fileToUpload">
												</form>
											</div>-->



                                            {{ csrf_field() }}
                                            <h3>Upload Image</h3><br/><br/>

                                            <div class="form-group">
                                                <input type="file" {{ (!empty($register->lawyerPhoto)) ? "disabled" : ''}} class="form-control-file" name="photo" id="photo" aria-describedby="fileHelp">
                                                <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Review Details</button>
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

											<hr class="mt-4 mb-4">
										</form>
                                        @if(isset($register->lawyerPhoto))
                                        <form action="/lawyers/remove-image" method="post">
                                            {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">Remove Image</button>
                                        </form>
                                        @endif

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
