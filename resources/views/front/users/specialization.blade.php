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
        <link rel="stylesheet" href="{{asset('assets/css/specializization.css')}}">
        
    </head>
    <body>
        <!-- start NavBar-->
        @include('front.includes.navbar')
        <!--end NavBar-->

        <!--start spcilization-->
        <div class="time">
          <div class="overlay"></div>
            <div class="container">
                <div class="content">
                    <div class="inf">
                        <div class="one">
                            <div class="ex">
                                <h2>محامي عام</h2>
                                <p>على عكس المحامين المتخصصين في مجال معين من مجالات القانون، يتمتّع محامي الممارسة العامة بممارسة تتناول مجموعة واسعة من المسائل القانونية. سيكون لدى محامي الممارسة العامة مجالات مختلفة من القانون يكونون فيها أكثر راحة، لذلك إذا كنت تتشاور مع محامي ممارسة عامة، فمن الحكمة دائماً مناقشة تجربته في التعامل مع نوع المشكلة القانونية التي تواجهها.</p>
                                <div class="search">
                                 <a href="{{route('users.lawyerWithSpecialization','محامي عام')}}" ><i class="fas fa-search-location"></i>ابحث بالتخصص</a>
                                </div> 
                            </div>
                        </div>
                        <div class="two">
                          <div class="ex">
                            <h2>المحامي الجنائي</h2>
                            <p>إذا تم اتهامك أنت أو أحد أفراد أسرتك بارتكاب جريمة، سيكون المحامي الجنائي على دراية في المجالات المتعلقة بالقانون الجنائي، بما في ذلك القضايا المتعلقة بالكفالة، والمحاكمة، والاعتقال، والطعن وأي قضايا تتعلق بالمحاكمة الجنائية نفسها.</p>
                            <div class="search">
                            <a href="{{route('users.lawyerWithSpecialization','المحامي الجنائي')}}" ><i class="fas fa-search-location"></i>ابحث بالتخصص</a>
                            </div> 
                          </div>  
                        </div>
                    </div>    
                </div>
                <div class="content">
 
                    <div class="inf">
                        <div class="one">
                          <div class="ex">
                            <h2>محامي الملكية الفكرية</h2>
                            <p>يُعرف باسم محامي الملكية الفكرية، متخصص فيما يتعلق بالمسائل المتعلقة بالملكية الفكرية، مثل حقوق النشر والعلامات التجارية وبراءات الاختراع والتصميم الصناعي والأسرار التجارية.</p>
                            <div class="search">
                            <a href="{{route('users.lawyerWithSpecialization','محامي الملكية الفكرية')}}" ><i class="fas fa-search-location"></i>ابحث بالتخصص</a>
                            </div> 
                          </div>
                        </div>
                        <div class="two">
                          <div class="ex">
                            <h2>محامي الافلاس</h2>
                            <p>إذا كنت تواجه صعوبات مالية وتفكر في إجراءات الإفلاس، فستحتاج إلى استشارة محامي الإفلاس. يمكن لهذا النوع من المحامين تقديم النصح لك بشأن أهليتك للإفلاس، وأنواع الإفلاس التي ترغب في النظر فيها، والنوع الأفضل بالنسبة لظروفك الخاصة، وأي بدائل محتملة للإفلاس قد ترغب في استكشافها.</p>
                            <div class="search">
                            <a href="{{route('users.lawyerWithSpecialization','محامي الافلاس')}}" ><i class="fas fa-search-location"></i>ابحث بالتخصص</a>
                            </div> 
                          </div>
                        </div>
                    </div>    
                </div>
                <div class="content">
                  <div class="inf">
                      <div class="one">
                          <div class="ex">
                              <h2>محامي الاصابات الشخصية</h2>
                              <p>إذا عانيت من إصابات في حادث، على سبيل المثال حادث سيارة، فإن نوع المحامي الذي ترغب في رؤيته هو محام إصابة شخصي. هذه الأنواع من المحامين متخصصة في الحصول على تعويض في شكل الأضرار عن الإصابات الناجمة من أطراف أخرى.</p>

                              <div class="search">
                              <a href="{{route('users.lawyerWithSpecialization','محامي الاصابات الشخصية')}}" ><i class="fas fa-search-location"></i>ابحث بالتخصص</a>
                              </div> 
                          </div>
                      </div>
                      <div class="two">
                        <div class="ex">
                          <h2>محامي سوء الممارسة الطبية</h2>
                          <p>يرتكب الأطباء أخطاء من حين لآخر، وإذا كنت تواجه عواقب خطأ طبي مثل خطأ في التشخيص الطبي أو علاج غير دقيق، فيمكن للمحامي المتخصص في مشكلات سوء الممارسة الطبية أن يكون مفيداً بشكل خاص.</p>
                          <div class="search">
                          <a href="{{route('users.lawyerWithSpecialization','محامي سوء الممارسة الطبية')}}" ><i class="fas fa-search-location"></i>ابحث بالتخصص</a>
                          </div> 
                        </div>
                      </div>
                  </div>    
              </div>

              <div class="content">
 
                <div class="inf">
                    <div class="one">
                      <div class="ex">
                        <h2>محامي العمل</h2>
                        <p>سواء كانت شركة تواجه مشكلة مع موظف، أو شخص يواجه مشاكل مع الشركة التي يعمل بها، يمكن لمحامي التوظيف تقديم المشورة بشأن المشكلات القانونية التي تنشأ من عقد العمل أو في إطار علاقة العمل.</p>
                        <div class="search">
                        <a href="{{route('users.lawyerWithSpecialization','محامي العمل')}}" ><i class="fas fa-search-location"></i>ابحث بالتخصص</a>
                        </div> 
                      </div>
                    </div>
                    <div class="two">
                      <div class="ex">
                        <h2>محامي الدعاوي المدنية</h2>
                        <p>مقاضاة شخص ما، أو الرد على دعوى قضائية ضد شخص ما ضدك، حيث إن المحامي المتخصص في الدعاوى المدنية سيكون أفضل خيار قانوني لك. قد تجد أيضاً أن المحامين المختلفين سيتخصصون في مجالات التقاضي المختلفة أيضاً.</p>
                        <div class="search">
                        <a href="{{route('users.lawyerWithSpecialization','محامي الدعاوي المدنية')}}" ><i class="fas fa-search-location"></i>ابحث بالتخصص</a>
                        </div> 
                      </div>
                    </div>
                </div>    
            </div>
            <div class="content">
 
              <div class="inf">
                  <div class="one">
                    <div class="ex">
                      <h2>محامي تعويض العمال</h2>
                      <p>إذا كنت قد أصبت أثناء عملك، أو اضطررت إلى مواجهة وفاة أحد أفراد أسرتك نتيجة لحادث في مكان العمل أو مرض مهني، فيمكن للمحامي المتخصص في قانون تعويض العمّال أن يساعدك في التغلب على المشكلات التي تواجهها، مثل مدى خطأ صاحب العمل ومقدار المزايا التي يحق لك الحصول عليها.</p>
                      <div class="search">
                      <a href="{{route('users.lawyerWithSpecialization','محامي تعويض العمال')}}" ><i class="fas fa-search-location"></i>ابحث بالتخصص</a>
                      </div> 
                    </div>
                  </div>
                  <div class="two">
                    <div class="ex">
                      <h2>محامي التخطيط العقاري</h2>
                      <p>يتخصص محامي التخطيط العقاري في الوصايا والأوصياء، ويمكن أن يساعدك في إعداد إرادة لتمرير أصولك. من بين الخدمات القانونية الأخرى للتخطيط العقاري، يمكن أن يساعدك هذا النوع من المحاماة على إنشاء صندوق ائتمان يساعد في تلبية احتياجات أطفالك المالية.</p>
                      <div class="search">
                      <a href="{{route('users.lawyerWithSpecialization','محامي التخطيط العمراني')}}" ><i class="fas fa-search-location"></i>ابحث بالتخصص</a>
                      </div> 
                    </div>
                  </div>
              </div>    
          </div>
          <div class="content spcial">
 
            <div class="inf">
                <div class="one">
                  <div class="ex">
                    <h2>محامي المؤسسة</h2>
                    <p>إذا كنت تمتلك شركة، فستجد نفسك على الأرجح تتشاور مع محامي الشركة في العديد من المناسبات المختلفة. سيتمكن محامي الشركات من مساعدتك في القضايا المتعلقة بتكوين مؤسستك، وقضايا الشركات العامة وقضايا امتثال الشركات.</p>
                    <div class="search">
                    <a href="{{route('users.lawyerWithSpecialization','محامي المؤسسة')}}" ><i class="fas fa-search-location"></i>ابحث بالتخصص</a>
                    </div> 
                  </div>
                </div>
                <div class="two" style="display: inline-table; opacity:0">
         
                
                  </div>
                </div>
            </div>    
        </div>

            </div>
        </div>
        <!--end spcialzition-->
        <!--start footer-->
          @include('front.includes.footer')
          <!--end footer-->
          <!-- JavaScript Bundle with Popper -->
          <script src="{{asset('assets/javascript/jquery.min.js')}}"></script>
          <script src="{{asset('assets/javascript/bootstrap.bundle.min.js')}}"></script>
          <script src="{{asset('assets/lawyerDashboard/js/jquery.nicescroll.min.js')}}"></script>
          <script src="{{asset('assets/javascript/js.js')}}"></script>
          <script>
        
              $(".scroll").niceScroll({
              cursorcolor:"#ddd",
              cursorwidth:"8px"
              });
        </script>
      </body>
  </html>