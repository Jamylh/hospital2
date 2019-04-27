<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ar-sa" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  CSS -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">   
     <link rel="stylesheet" href="style1.css" >
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>مستشفى الملك سعود للأمراض الصدرية</title>
</head>
<link rel="icon" href="last3.png">
  <body>
      <div style="text-align: center;" style="
      margin-top: 20px;
      font-size: 24px;"><p id="date"></p></div>

      <script>
          var d = new Date();
          document.getElementById("date").innerHTML = d.toUTCString();
          </script>
      
      <div id="allcontainer">

        <!-- start container (langu,btn) -->
            <div class="container" style="margin-top: 20px;">
                    <div class="row">
                            <div class="col">
                                    <form class="form-inline " >
                                            <button class="btn my-2 my-sm-0" type="submit"> <a href="#" ><i class="fas fa-search"></i></a></button>
                                             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                           </form>     
                      </div>

                            <div class="col col-lg-2">
            <div id="google_translate_element"></div>
 
 <script type="text/javascript">
 function googleTranslateElementInit() {
   new google.translate.TranslateElement({pageLanguage: 'ar'}, 'google_translate_element');
 }
 </script>
 
 <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 
                            </div>
                          </div>
                </div> 
                <!-- end container (langu,btn) -->

                <!-- start logo -->
                <div id="logo" style="margin-top:0.5em;" >
                    <div class="col-lg-12">
                        <img src="../images/header-bg1.jpeg" alt="King saud hospital"  width="100%" height="200">
                    </div>
                    <div class="col-lg-4">
                    <img src="https://upload.wikimedia.org/wikipedia/ar/f/f5/Saudi_Vision_2030_logo.svg" alt="King saud hospital"  width="1100" height="100"
                    style="margin-top:-40px;margin-bottom: 2em;">
                  </div>
                </div>

                <!-- start navbar -->
                
                    <nav id="nav">
 
                           <?php include('navbar.php')?>
                    </nav>
                <!-- end navbar -->

                <div id="video">
                <center>
                        <video width="1169" controls autoplay muted id="videoId">
                            <source src="mov_bbb.mp4" type="video/mp4">
                            
                            Your browser does not support the video tag.
                                 </video>
                              <script>   function toggleMute() {
          
            var video=document.getElementById("videoId");
          
            if(video.muted){
              video.muted = false;
            } else {
              debugger;
              video.muted = true;
              video.play()
            }
          
          }
          
          </script>
          
                             </center></div>
                             <!-- end div video -->

                             <!-- strat content-grids -->
                             <div class="content-grids">
                                          <div class="row">
                                                <div class="col-sm"> 
                                                     <article><i class="fas fa-tasks fa-3x"></i></i>
                                                    <h6 class="heading font-x1">الإدارة</h6>
                                                    <p class="btmspace-30"> لوحة تحكم الاداره</p>
                                                    <footer><div class="button"><span><a href="../admin">اضغط هنا</a></span></div></footer>
                                                  </article></div>
                                                <div class="col-sm"> 
                                                    <article><i class="fas fa-user-nurse fa-3x"></i>
                                                    <h6 class="heading font-x1">الأطباء</h6>
                                                    <p class="btmspace-30">لوحة تحكم الاطباء</p>
                                                    <footer> <div class="button"><span><a href="../doctor/">اضغط هنا</a></span></div></footer>
                                                  </article></div>
                                                <div class="col-sm"> 
                                                    <article><i class="fas fa-heartbeat fa-3x"></i></i>
                                                    <h6 class="heading font-x1">اللياقة</h6>
                                                    <p class="btmspace-30">التسجيل وحجز الموعد</p>
                                                    <footer>  <div class="button"><span><a href="user-login.php">اضغط هنا</a></span></div></footer>
                                                  </article></div>
                                              </div>
                             </div>
                             <!-- end content-grids -->

                             <!-- strat ad -->

                             <div class="section">
                                <article>
                                      <div class="row">
                                              <div class="col">
                                                      <div class="line"></div>
                                                      <div class="line2"></div>
                                              </div>
                                              <div class="col">
                                                  <h2>البوابة الاعلامية</h2>
                                              </div>

                                              <div class="col">
                                                      <div class="line2"></div>
                                                      <div class="line"></div>
                                              </div>
                                            </div>
                                            <div class="ad">
                                                <marquee  behavior="scroll" direction="up" scrollamount="3" >
                                                  <a href="#"><h1>• ان هذا الموقع مجرد محتوى تجريبي لتوضيح جودة العمل . </h1></a><br>
                                                  <a href="#"><h1><p>• ادارة تجربة المريض تعقد المجلس الاستشاري الدوري للمرضى وذويهم بحضور " د.يحي القاضي" ومساعدة "أ.أديبة النشمي" و " د.خالد الشاعر" المدير الطبي ومدير ادارة تجربة المريض "أ.حمود الحيص" ورؤساء الاقسام المعنية لمناقشة عددمن الملاحظات والاقتراحات .</p></h1></a><br>
                                                  <a href="#"><h1>• مستشفى الملك سعود للامراض الصدرية</h1></a><br>
                                                  
                                                  </marquee>
                                            </div>
                             
                                </article>
                            </div>

                             
                                  <!-- end ad -->

                                  <!-- about us -->

                                  <div class="section" style="border-bottom: 5px solid #C3B9A8; margin-bottom: 90px;">
                                      <article>
                                            <div class="row">
                                                    <div class="col">
                                                            <div class="line2"></div>
                                                            <div class="line"></div>
                                                    </div>
                                                    <div class="col">
                                                            <h2> نبذة عن المستشفى</h2>
                                                    </div>

                                                    <div class="col">
                                                            <div class="line"></div>
                                                            <div class="line2"></div>
                                                    </div>
                                                  </div>
                                                  <div class="pragr">
                                                      <p>يقدم مستشفى الملك سعود للأمراض الصدرية خدماته الطبية لأكثر من خمسة عقود, قدم خلالها خدمات الرعاية الصحية العلاجية والوقائية لملايين المرضى من سكان منطقة الرياض والمناطق الأخرى.
                                          
                                                            يعد المستشفى من أوائل المستشفيات المتخصصة والرائدة في علاج الأمراض الصدرية والدرن.
                                                         
                                                            ليس في المملكة فحسب بل في منطقة الخليج العربي والشرق الأوسط حيث تأسس بموجب اتفاق بين منظمة الصحة العالمية و وزارة الصحة في عام 1962م
                                                     
                                                            وبدأ تشغيله عام 1963م وكانت النواة الأولى بمركز لمكافحة الدرن في حي عتيقة بسعة 50 سريرا وفي عام 1405هـ انتقل المستشفى إلى مبنى جديد في حي السلمانية سعة 120 سريرا وأطلق عليه في ذلك الوقت "مستشفى صحاري"  
                                                     
                                                            وأضيف إلى مهامه فحص العمالة الوافدة وبعدها بثلاث سنوات تم استحداث قسم للأمراض الصدرية "غير الدرنية" وأفتتح قسم للعناية المركزة ووحدة التنظير للشعب الهوائية.
                                                     
                                                            وأخيرا انتقل إلى موقعه الحالي شرق العاصمة الرياض. والذي بدأ تشغيله عام 1424هـ بسعة تصل إلى 200 سريرا وباسم مستشفى الملك سعود للأمراض الصدرية ومازال يقدم خدماته حتى الاّن.
                                                                      </p>
                                                  </div>
                                   
                                      </article>
                                  </div>

                                </div>


      </div>  
    <!-- end allcontainer -->
          					<div class="copyright" style="text-align: center; ">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> خلود علي العنزي</span>. <span>جميع الحقوق محفوظة</span>
					</div>
    

    <div class="footer">

                 <div class="wrap">
            <img src="../footer2.png"  alt="King saud hospital"  width="1700" height="180">
             
                <div class="clear"> </div>
            </div>
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>