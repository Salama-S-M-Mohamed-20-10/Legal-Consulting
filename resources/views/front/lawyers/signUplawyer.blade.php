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
								<!--  -->

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
										<li>
											<span class="round-btn">3</span>
										</li>
									</ul>
								<!--  -->

										<h4>Personal Details</h4>
										<form class="was-validated" action="">
											
											<div class="form-group">
												<label for="">رقم الهاتف</label><br>
												<input type="tel" class="form-control contact"  name="phone" id="phone" style="width: 542px;" required>
											</div>
											
											<div class="form-group">
												<label for="">محافظتك</label>
												<select class="form-select" id="city" aria-label="Default select example" onchange="select_city()" required>
														<option value="" selected> حدد المحافظة</option>
														<option value="Cairo">القاهرة</option>
														<option value="Geza">الجيزة</option>
														<option value="Alex">الاسكندرية</option>
														<option value="Sahel">الساحل الشمالي</option>
														<option value="Qalubia">القليوبية</option>
														<option value="Gharbia">الغربية</option>
														<option value="Menofia">المنوفية</option>
														<option value="Fayom">الفيوم</option>
														<option value="Daqhlia">الدقهلية</option>
														<option value="Sharqia">الشرقية</option>
														<option value="Bhera">البحيرة</option>
														<option value="Domiat">دمياط</option>
														<option value="Matrooh">مطروح</option>
														<option value="Asut">اسيوط</option>
														<option value="Ismalia">الاسماعيلية</option>
														<option value="Ghardaa">الغردقة</option>
														<option value="Sharm">شرم الشيخ</option>
														<option value="Boursaid">بورسعيد</option>
														<option value="Sues">السويس</option>
														<option value="Suhag">سوهاج</option>
														<option value="Menia">المنيا</option>
														<option value="Quafrelshikh">كفر الشيخ</option>
														<option value="Auxer">الاقصر</option>
														<option value="Quena">قنا</option>
														<option value="Banisuef">بني سويف</option>
													</select>
											</div>
											<div class="form-group">
												<label for="">منطقتك</label>
												<select class="form-select" id="All_mnt2a" aria-label="Default select example" required>
														<option selected="" disabled value="">حدد محافظتك اولا</option>
												</select>
												<select class="form-select" id="cairo" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="msr_elgdeda">مصر الجديدة</option>
														<option value="mdina_nasr">مدينة نصر</option>
														<option value="elm3ady">المعادي</option>
														<option value="eltgmoa">التجمع</option>
														<option value="hadaqe">حدائق القبة</option>
														<option value="elebor">مدينة العبور</option>
														<option value="elmenil">المنيل</option>
														<option value="shobra">شبرا</option>
														<option value="westElbalad">وسط البلد</option>
												</select>
													<select class="form-select" id="Geza" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="dokki">الدقي</option>
														<option value="october">6 اكتوبر</option>
														<option value="elharm">الهرم</option>
														<option value="fiesl">فيصل</option>
														<option value="sheikhzayed">الشيخ زايد</option>
														<option value="hdaqeelahram">حدائق الاهرام</option>
														<option value="elagoza">العجوزة</option>
														<option value="bolaadakror">بولاق الدكرور</option>
													</select>
													<select class="form-select" id="alex" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="mhtet_elraml">محطة الرمل</option>
														<option value="roshdy">رشدي</option>
														<option value="smohaa">سموحة</option>
														<option value="sedi_gaber">سيدي جابر</option>
														<option value="loran">لوران</option>
														<option value="elagmy">العجمي</option>
														<option value="elasafra">العصافرة</option>
														<option value="elmontazah">المنتزه</option>
														<option value="elamria">العامرية</option>
													</select>
													<select class="form-select" id="sahel" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="elsahel_elshmaly">الساحل الشمالي</option>
													</select>
													<select class="form-select" id="qalubia" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="shebin_elkanater">شبين القناطر</option>
														<option value="banha">بنها</option>
														<option value="qlube">قليوب</option>
													</select>
													<select class="form-select" id="gharbia" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="smnood">سمنود</option>
														<option value="tanta">طنطا</option>
														<option value="kafe_elzayat">كفر الزيات</option>
														<option value="elmhala_elkobra">المحلة الكبري</option>
													</select>
													<select class="form-select" id="menofia" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="ashmoon">اشمون</option>
														<option value="shebin_elkoom">شبين الكوم</option>
														<option value="mnoof">منوف</option>
														<option value="elsadat">مدينة السادات</option>
														<option value="berkat_elsabea">بركة السبع</option>
													</select>
													<select class="form-select" id="fayom" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="abshoey">ابشواي</option>
														<option value="madenat_elfayom">مدينة الفيوم</option>
													</select>
													<select class="form-select" id="daqhlia" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="aga">اجا</option>
														<option value="belkas">بلقاس</option>
														<option value="sherieen">شربين</option>
														<option value="senbloyen">السنبلاوين</option>
														<option value="elmnsoura">المنصورة</option>
														<option value="met_ghamr">ميت غمر</option>
													</select>
													<select class="form-select" id="sharqia" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="abo_hamad">ابو حماد</option>
														<option value="blbees">بلبيس</option>
														<option value="zakasiek">الزقازيق</option>
														<option value="menia_elamh">منيا القمح</option>
														<option value="faquos">فاقوس</option>
													</select>
													<select class="form-select" id="bhera" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="damnhour">دمنهور</option>
														<option value="kafr_eldawar">كفر الدوار</option>
													</select>
													<select class="form-select" id="domiat" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="domiat_elgdeda">مدينة دمياط الجديدة</option>
														<option value="domiat">مدينة دمياط</option>
													</select>
													<select class="form-select" id="matrooh" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="marsa_matrooh">مرسي مطروح</option>
													</select>
													<select class="form-select" id="asut" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="abnob">ابنوب</option>
														<option value="diroot">ديروط</option>
														<option value="mnfloot">منفلوط</option>
														<option value="markz_asut">مركز اسيوط</option>
													</select>
													<select class="form-select" id="ismalia" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="madint_elesmalia">مدينة الاسماعيلية</option>
													</select>
													<select class="form-select" id="ghardaa" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="madint_elghrdaa">مدينة الغردقة</option>
													</select>
													<select class="form-select" id="sharm" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="madint_sharm_elshekh">مدينة شرم الشيخ</option>
													</select>
													<select class="form-select" id="boursaid" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="madint_boursaid">مدينة بورسعيد </option>
														<option value="bourfoad">بور فؤاد</option>
													</select>
													<select class="form-select" id="sues" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="madint_elsues">مدينة السويس </option>
													</select>
													<select class="form-select" id="suhag" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="madint_suhag">مدينة سوهاج </option>
													</select>
													<select class="form-select" id="menia" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="markez_elmenia">مركز المنيا </option>
													</select>
													<select class="form-select" id="quafrelshikh" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="markez_kafrelsheikh">مركز كفر الشيخ </option>
													</select>
													<select class="form-select" id="auxer" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="markez_kafrelsheikh">مدينة الاقصر </option>
														<option value="esna">اسنا</option>
													</select>
													<select class="form-select" id="quena" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="markez_quena">مركز قنا</option>
													</select>
													<select class="form-select" id="banisuef" aria-label="Default select example" style="display:none" required>
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option value="madinat_banisuef">مدينة بني سويف</option>
													</select>
											</div>
											<div class="form-group">
												<label for="">اختر تخصصك</label>
												<select class="form-select" aria-label="Default select example" required>
													<option selected value="">اختر التخصص</option>
													<option value="1">محامي عام</option>
													<option value="2">المحامي الجنائي</option>
													<option value="3">محامي الملكية الفكرية</option>
													<option value="4">محامي الافلاس</option>
													<option value="5">محامي الاصابات الشخصية</option>
													<option value="6">محامي سوء الممارسة الطبية</option>
													<option value="7">محامي العمل</option>
													<option value="8">محامي الدعاوي المدنية</option>
													<option value="9">محامي تعويض العمال</option>
													<option value="10">محامي التخطيط العمراني</option>
													<option value="11">محامي المؤسسة</option>
												</select>
											</div>

											<div class="form-group" style="margin-bottom: 40px;">
												<label for="">اختر صورة</label><br>
												<form action="upload.php" method="post" enctype="multipart/form-data">
													<input type="file" name="fileToUpload" id="fileToUpload">
												</form>
											</div>

											<hr class="mt-4 mb-4">
											<div class="button-row">
												<input type="button" value="Previous" class="previous">
												<input type="button" value="Next" class="next">
											</div>
											
										</form>

								</div>
								<!--  -->

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
											
											<div class="form-group">
												<label for=""> العنوان</label>
												<input type="text" name="adress" placeholder="عنوان المكتب بالتفصيل*" id="" class="form-control " required>
											</div>
											<div class="form-group">
												<label for="">كلمة المرور</label>
												<input type="text" name="password" id="" class="form-control" required>
											</div>
											<div class="form-group">
												<label for="">تاكيد كلمة المرور</label>
												<input type="password" name="confirm" id="" class="form-control" required>
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
