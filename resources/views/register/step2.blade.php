
@extends('layouts.app')

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
										<li>
											<span class="round-btn">3</span>
										</li>
									</ul>
								<!--  -->

										<h4>Personal Details</h4>
                                        <h1>Step 2</h1>
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
										<form class="was-validated" action="/lawyers/register2" method="POST">
                                        @csrf
											
											<div class="form-group">
												<label for="">رقم الهاتف</label><br>
												<input type="tel" class="form-control contact"  name="phone" value="{{ session()->get('register.phone') }}" id="phone" style="width: 542px;" required>
											</div>


















                                                <div class="form-group">
												<label for="">محافظتك</label>
												<select class="form-select" name="governorate" value="{{ session()->get('register.governorate') }}" id="city" aria-label="Default select example" onchange="select_city()" required>
														<option value="" selected> حدد المحافظة</option>
														<option @if( session()->get('register.governorate') == 'Cairo' ) selected @endif value="Cairo">القاهرة</option>
														<option @if( session()->get('register.governorate') == 'Geza' ) selected @endif value="Geza">الجيزة</option>
														<option @if( session()->get('register.governorate') == 'Alex' ) selected @endif value="Alex">الاسكندرية</option>
														<option @if( session()->get('register.governorate') == 'Sahel' ) selected @endif value="Sahel">الساحل الشمالي</option>
														<option @if( session()->get('register.governorate') == 'Qalubia' ) selected @endif value="Qalubia">القليوبية</option>
														<option @if( session()->get('register.governorate') == 'Gharbia' ) selected @endif value="Gharbia">الغربية</option>
														<option @if( session()->get('register.governorate') == 'Menofia' ) selected @endif value="Menofia">المنوفية</option>
														<option @if( session()->get('register.governorate') == 'Fayom' ) selected @endif value="Fayom">الفيوم</option>
														<option @if( session()->get('register.governorate') == 'Daqhlia' ) selected @endif value="Daqhlia">الدقهلية</option>
														<option @if( session()->get('register.governorate') == 'Sharqia' ) selected @endif value="Sharqia">الشرقية</option>
														<option @if( session()->get('register.governorate') == 'Bhera' ) selected @endif value="Bhera">البحيرة</option>
														<option @if( session()->get('register.governorate') == 'Domiat' ) selected @endif value="Domiat">دمياط</option>
														<option @if( session()->get('register.governorate') == 'Matrooh' ) selected @endif value="Matrooh">مطروح</option>
														<option @if( session()->get('register.governorate') == 'Asut' ) selected @endif value="Asut">اسيوط</option>
														<option @if( session()->get('register.governorate') == 'Ismalia' ) selected @endif value="Ismalia">الاسماعيلية</option>
														<option @if( session()->get('register.governorate') == 'Ghardaa' ) selected @endif value="Ghardaa">الغردقة</option>
														<option @if( session()->get('register.governorate') == 'Sharm' ) selected @endif value="Sharm">شرم الشيخ</option>
														<option @if( session()->get('register.governorate') == 'Boursaid' ) selected @endif value="Boursaid">بورسعيد</option>
														<option @if( session()->get('register.governorate') == 'Sues' ) selected @endif value="Sues">السويس</option>
														<option @if( session()->get('register.governorate') == 'Suhag' ) selected @endif value="Suhag">سوهاج</option>
														<option @if( session()->get('register.governorate') == 'Menia' ) selected @endif value="Menia">المنيا</option>
														<option @if( session()->get('register.governorate') == 'Quafrelshikh' ) selected @endif value="Quafrelshikh">كفر الشيخ</option>
														<option @if( session()->get('register.governorate') == 'Auxer' ) selected @endif value="Auxer">الاقصر</option>
														<option @if( session()->get('register.governorate') == 'Quena' ) selected @endif value="Quena">قنا</option>
														<option @if( session()->get('register.governorate') == 'Banisuef' ) selected @endif value="Banisuef">بني سويف</option>
													</select>
											</div>







											
											<div class="form-group">
											
												<label for="">منطقتك</label>
												<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="All_mnt2a" aria-label="Default select example">
														<option @if( session()->get('register.region') == '' ) selected @endif value="">حدد محافظتك اولا</option>
												</select>



												<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="cairo" aria-label="Default select example" style="display:none">
														<option @if( session()->get('register.region') == '' ) selected @endif value="">حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'msr_elgdeda' ) selected @endif value="msr_elgdeda">مصر الجديدة</option>
														<option @if( session()->get('register.region') == 'mdinat_nasr' ) selected @endif value="mdinat_nasr">مدينة نصر</option>
														<option @if( session()->get('register.region') == 'elm3ady' ) selected @endif value="elm3ady">المعادي</option>
														<option @if( session()->get('register.region') == 'eltgmo3' ) selected @endif value="eltgmo3">التجمع</option>
														<option @if( session()->get('register.region') == 'hadaqe_elqoba' ) selected @endif value="hadaqe_elqoba">حدائق القبة</option>
														<option @if( session()->get('register.region') == 'elebor' ) selected @endif value="elebor">مدينة العبور</option>
														<option @if( session()->get('register.region') == 'elmenial' ) selected @endif value="elmenial">المنيل</option>
														<option @if( session()->get('register.region') == 'shobra' ) selected @endif value="shobra">شبرا</option>
														<option @if( session()->get('register.region') == 'westElbalad' ) selected @endif value="westElbalad">وسط البلد</option>
												</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="Geza" aria-label="Default select example" style="display:none">
														<option selected value="">حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'dokki' ) selected @endif value="dokki">الدقي</option>
														<option @if( session()->get('register.region') == 'october' ) selected @endif value="october">6 اكتوبر</option>
														<option @if( session()->get('register.region') == 'elharm' ) selected @endif value="elharm">الهرم</option>
														<option @if( session()->get('register.region') == 'fiesl' ) selected @endif value="fiesl">فيصل</option>
														<option @if( session()->get('register.region') == 'sheikhzayed' ) selected @endif value="sheikhzayed">الشيخ زايد</option>
														<option @if( session()->get('register.region') == 'hadaqe_elahram' ) selected @endif value="hadaqe_elahram">حدائق الاهرام</option>
														<option @if( session()->get('register.region') == 'el3agoza' ) selected @endif value="el3agoza">العجوزة</option>
														<option @if( session()->get('register.region') == 'bolaa_adakror' ) selected @endif value="bolaa_adakror">بولاق الدكرور</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="alex" aria-label="Default select example" style="display:none">
														<option selected value="">حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'mahatet_elraml' ) selected @endif value="mahatet_elraml">محطة الرمل</option>
														<option @if( session()->get('register.region') == 'roshdy' ) selected @endif value="roshdy">رشدي</option>
														<option @if( session()->get('register.region') == 'semohaa' ) selected @endif value="semohaa">سموحة</option>
														<option @if( session()->get('register.region') == 'sedi_gaber' ) selected @endif value="sedi_gaber">سيدي جابر</option>
														<option @if( session()->get('register.region') == 'loran' ) selected @endif value="loran">لوران</option>
														<option @if( session()->get('register.region') == 'elagmy' ) selected @endif value="elagmy">العجمي</option>
														<option @if( session()->get('register.region') == 'elasafra' ) selected @endif value="elasafra">العصافرة</option>
														<option @if( session()->get('register.region') == 'elmontazah' ) selected @endif value="elmontazah">المنتزه</option>
														<option @if( session()->get('register.region') == 'elamria' ) selected @endif value="elamria">العامرية</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="sahel" aria-label="Default select example" style="display:none">
														<option selected value="">حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'elsahel_elshmaly' ) selected @endif value="elsahel_elshmaly">الساحل الشمالي</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="qalubia" aria-label="Default select example" style="display:none">
														<option selected value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'shebin_elkanater' ) selected @endif value="shebin_elkanater">شبين القناطر</option>
														<option @if( session()->get('register.region') == 'banha' ) selected @endif value="banha">بنها</option>
														<option @if( session()->get('register.region') == 'qlube' ) selected @endif value="qlube">قليوب</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="gharbia" aria-label="Default select example" style="display:none">
														<option selected value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'smanood' ) selected @endif value="smanood">سمنود</option>
														<option @if( session()->get('register.region') == 'tanta' ) selected @endif value="tanta">طنطا</option>
														<option @if( session()->get('register.region') == 'kafr_elzayat' ) selected @endif value="kafr_elzayat">كفر الزيات</option>
														<option @if( session()->get('register.region') == 'elmahala_elkobra' ) selected @endif value="elmahala_elkobra">المحلة الكبري</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="menofia" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'ashmoon' ) selected @endif value="ashmoon">اشمون</option>
														<option @if( session()->get('register.region') == 'shebin_elkoom' ) selected @endif value="shebin_elkoom">شبين الكوم</option>
														<option @if( session()->get('register.region') == 'menoof' ) selected @endif value="menoof">منوف</option>
														<option @if( session()->get('register.region') == 'elsadat' ) selected @endif value="elsadat">مدينة السادات</option>
														<option @if( session()->get('register.region') == 'berkat_elsabea' ) selected @endif value="berkat_elsabea">بركة السبع</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="fayom" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'abshouay' ) selected @endif value="abshouay">ابشواي</option>
														<option @if( session()->get('register.region') == 'madenat_elfayom' ) selected @endif value="madenat_elfayom">مدينة الفيوم</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="daqhlia" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'aga' ) selected @endif value="aga">اجا</option>
														<option @if( session()->get('register.region') == 'belkas' ) selected @endif value="belkas">بلقاس</option>
														<option @if( session()->get('register.region') == 'sherieen' ) selected @endif value="sherieen">شربين</option>
														<option @if( session()->get('register.region') == 'elsenblawen' ) selected @endif value="elsenblawen">السنبلاوين</option>
														<option @if( session()->get('register.region') == 'elmansoura' ) selected @endif value="elmansoura">المنصورة</option>
														<option @if( session()->get('register.region') == 'met_ghamr' ) selected @endif value="met_ghamr">ميت غمر</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="sharqia" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'abo_hamad' ) selected @endif value="abo_hamad">ابو حماد</option>
														<option @if( session()->get('register.region') == 'belbees' ) selected @endif value="belbees">بلبيس</option>
														<option @if( session()->get('register.region') == 'elzakaziek' ) selected @endif value="elzakaziek">الزقازيق</option>
														<option @if( session()->get('register.region') == 'menia_elamh' ) selected @endif value="menia_elamh">منيا القمح</option>
														<option @if( session()->get('register.region') == 'faquos' ) selected @endif value="faquos">فاقوس</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="bhera" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if(session()->get('register.region') == 'damnhour' ) selected @endif value="damnhour">دمنهور</option>
														<option @if(session()->get('register.region') == 'kafr_eldawar' ) selected @endif value="kafr_eldawar">كفر الدوار</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="domiat" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'domiat_elgdeda' ) selected @endif value="domiat_elgdeda">مدينة دمياط الجديدة</option>
														<option @if( session()->get('register.region') == 'domiat' ) selected @endif value="domiat">مدينة دمياط</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="matrooh" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'marsa_matrooh' ) selected @endif value="marsa_matrooh">مرسي مطروح</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="asut" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'abnob' ) selected @endif value="abnob">ابنوب</option>
														<option @if( session()->get('register.region') == 'diroot' ) selected @endif value="diroot">ديروط</option>
														<option @if( session()->get('register.region') == 'mnfloot' ) selected @endif value="mnfloot">منفلوط</option>
														<option @if( session()->get('register.region') == 'markz_asut' ) selected @endif value="markz_asut">مركز اسيوط</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="ismalia" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'madint_elesmalia' ) selected @endif value="madint_elesmalia">مدينة الاسماعيلية</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="ghardaa" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'madint_elghrdaa' ) selected @endif value="madint_elghrdaa">مدينة الغردقة</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="sharm" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'madint_sharm_elshekh' ) selected @endif value="madint_sharm_elshekh">مدينة شرم الشيخ</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="boursaid" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'madint_boursaid' ) selected @endif value="madint_boursaid">مدينة بورسعيد </option>
														<option @if( session()->get('register.region') == 'bourfoad' ) selected @endif value="bourfoad">بور فؤاد</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="sues" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'madint_elsues' ) selected @endif value="madint_elsues">مدينة السويس </option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="suhag" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'madint_suhag' ) selected @endif value="madint_suhag">مدينة سوهاج </option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="menia" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'markez_elmenia' ) selected @endif value="markez_elmenia">مركز المنيا </option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="quafrelshikh" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'markez_kafrelsheikh' ) selected @endif value="markez_kafrelsheikh">مركز كفر الشيخ </option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="auxer" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'markez_kafrelsheikh' ) selected @endif value="markez_kafrelsheikh">مدينة الاقصر </option>
														<option @if( session()->get('register.region') == 'esna' ) selected @endif value="esna">اسنا</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="quena" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'markez_quena' ) selected @endif value="markez_quena">مركز قنا</option>
													</select>
													<select class="form-select" name="region" value="{{ session()->get('register.gender') }}" id="banisuef" aria-label="Default select example" style="display:none">
														<option selected="" value="" disabled>حدد المنطقة</option>
														<option @if( session()->get('register.region') == 'madinat_banisuef' ) selected @endif value="madinat_banisuef">مدينة بني سويف</option>
													</select>
											</div>



											<div class="form-group">
												<label for="">اختر تخصصك</label>
												<select name="specialty" value="{{ session()->get('register.specialty') }}" class="form-select" aria-label="Default select example" required>
													<option selected value="">اختر التخصص</option>
													<option @if( session()->get('register.specialty') == 'محامي عام' ) selected @endif value="محامي عام">محامي عام</option>
													<option @if( session()->get('register.specialty') == 'المحامي الجنائي' ) selected @endif value="المحامي الجنائي">المحامي الجنائي</option>
													<option @if( session()->get('register.specialty') == 'محامي الملكية الفكرية' ) selected @endif value="محامي الملكية الفكرية">محامي الملكية الفكرية</option>
													<option @if( session()->get('register.specialty') == 'محامي الافلاس' ) selected @endif value="محامي الافلاس">محامي الافلاس</option>
													<option @if( session()->get('register.specialty') == 'محامي الاصابات الشخصية' ) selected @endif value="محامي الاصابات الشخصية">محامي الاصابات الشخصية</option>
													<option @if( session()->get('register.specialty') == 'محامي سوء الممارسة الطبية' ) selected @endif value="محامي سوء الممارسة الطبية">محامي سوء الممارسة الطبية</option>
													<option @if( session()->get('register.specialty') == 'محامي العمل' ) selected @endif value="محامي العمل">محامي العمل</option>
													<option @if( session()->get('register.specialty') == 'محامي الدعاوي المدنية' ) selected @endif value="محامي الدعاوي المدنية">محامي الدعاوي المدنية</option>
													<option @if( session()->get('register.specialty') == 'محامي تعويض العمال' ) selected @endif value="محامي تعويض العمال">محامي تعويض العمال</option>
													<option @if( session()->get('register.specialty') == 'محامي التخطيط العقاري' ) selected @endif value="محامي التخطيط العقاري">محامي التخطيط العقاري</option>
													<option @if( session()->get('register.specialty') == 'محامي المؤسسة' ) selected @endif value="محامي المؤسسة">محامي المؤسسة</option>
												</select>
											</div>
                                            


											

                                            <div class="form-group">
												<label for=""> العنوان</label>
												<input type="text" name="address" value="{{ session()->get('register.address') }}" placeholder="عنوان المكتب بالتفصيل*" id="" class="form-control " required>
											</div>

											<hr class="mt-4 mb-4">
											<div class="button-row">
                                                <a type="button" href="/lawyers/register1" class="btn btn-warning" style="padding:10px;">Back to Step 1</a>
                                                <button type="submit" class="btn btn-primary" style="margin-left:10px;padding:10px;width:80px">Next</button>
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
