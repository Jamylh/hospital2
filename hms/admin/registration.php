<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($connection,"SELECT * FROM users WHERE email='".$_POST['username']."' and password='".md5($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";//
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($connection,"insert into userlog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')");
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['login']=$_POST['username'];	
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($connection,"insert into userlog(username,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$_SESSION['errmsg']="Invalid username or password";
$extra="user-login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>


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
     <link rel="stylesheet" href="../style1.css" >
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> تـسـجـيـل دخــول</title>
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
                                                       <div class="col-lg-12 text-center">
                                <ul class="text-conter">
                                        <li class="Dropdown"><a href="../ho/index.php"><i class="fa fa-home fa-2x "></i><Br/> الرئيسية </a></li>
                                        <li li class="Dropdown"><a href="#"><i class="fas fa-pills fa-1x"></i><Br/>الاقسام الطبيه</a>
                                             <ul class="part-Dropdown">
                                               <li class="li"><a href="#"><i class="fa fa-h-square  fa-1x"></i> العيادات </a>
                                                <ul class="part-Dropdown">
                                                    <li class="li"><a href="#"><i class="fa fa-h-square  fa-1x"></i> عيادات خارجية </a>
                                                            <ul class="part-Dropdown">
                                                            <li class="li"><a href="#"><i class="fa fa-h-square fa-1x"></i> صدرية رجال </a></li>
                                                            <li class="li"><a href="#"><i class="fa fa-h-square fa-1x"></i> صدرية نساء </a></li>
                                                            <li class="li"><a href="#"><i class="fa fa-h-square fa-1x"></i> أنف أذن حنجرة </a></li>
                                                            <li class="li"><a href="#"><i class="fa fa-h-square fa-1x"></i> جلدية </a></li>
                                                         </ul>
                                                    </li>
                                                   
                                                    <li class="li"><a href="#"><i class="fa fa-h-square  fa-1x"></i> عيادات الدرن </a>
                                                            <ul class="part-Dropdown">
                                                            <li class="li"><a href="#"><i class="fa fa-h-square fa-1x"></i> الاشتباه </a></li>
                                                            <li class="li"><a href="#"><i class="fa fa-h-square fa-1x"></i> متابعة مرضى الدرن </a></li>
                                                            <li class="li"><a href="#"><i class="fa fa-h-square fa-1x"></i> مخالطين مرضى الدرن وصرف العلاج الوقائي </a></li>
                                                            <li class="li"><a href="#"><i class="fa fa-h-square fa-1x"></i> غرفة التسجيل والتبيلغ </a></li>
                                                            <li class="li"><a href="#"><i class="fa fa-h-square fa-1x"></i> برنامج حصن </a></li>
                                                            <li class="li"><a href="#"><i class="fa fa-h-square fa-1x"></i> تجميع العينات </a></li>
                                                         </ul>
                                                    </li>
                                                 </ul>
                                               </li>
                                               <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>العناية المركزة</a></li>
                                               <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>الطوارئ</a></li>
                                               <li class="li"><a href="#"><i class="fa fa-h-square  fa-1x"></i> التنويم </a>
                                                <ul class="part-Dropdown">
                                                    <li class="li"><a href="sleep.php"><i class="fa fa-bed fa-1x"></i> تنويم صدرية </a></li>
                                                    <li class="li"><a href="sleep.php"><i class="fa fa-bed fa-1x"></i> تنويم درن </a></li>
                                                 </ul>
                                               </li>
                                              
    
                                            </ul>
                                        </li>
    
                                        <li li class="Dropdown"><a href="#"><i class="fas fa-procedures fa-1x"></i><Br/>خدمات المرضى</a>
                                          <ul class="part-Dropdown">
    
                                              <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>حجز/الغاء مواعيد</a></li>
                                              <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>الحصول على التقارير الطبية</a></li>
                                              <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>عرض نتائج الاشعة والمختبر</a></li>
                                              <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>طلب تكرار الادوية</a></li>
                                              <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>تحديث وفتح الملف الطبي</a></li>
                                              <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>خدمات اخرى</a></li>
    
                                         </ul>
                                     </li>
    
                                     <li li class="Dropdown"><a href="#"><i class="fa fa-hospital-o fa-2x"></i><Br/>الارشادات العامه</a>
                                      <ul class="part-Dropdown">
    
                                          <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>التسجيل والمواعيد</a></li>
                                          <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>اهلية العلاج</a></li>
                                          <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>حقوق المرضى</a></li>
                                          <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>مسؤوليات المرضى</a></li>
                                          <li class="li"><a href="#"><i class="fa fa-heartbeat fa-2x"></i>دليل خدمات المرضى</a></li>
    
                                     </ul>
                                 </li>
                                 <li class="Dropdown"><a href="liyaqh/liyaqh.php"><i class="fa fa-stethoscope fa-2x"></i><Br/>التثقيف الصحي</a></li>
    
                                        <li class="Dropdown"><a href="liyaqh/liyaqh.php"><i class="fa fa-stethoscope fa-2x"></i><Br/>اللياقة الطبية</a></li>
                                        <li class="Dropdown"><a href="#"><i class="fa fa-users fa-2x"></i><Br/>خدمات التوظيف</a>
                                            <ul class="part-Dropdown">
                                               <li class="li"><a href="#"><i class="fa fa-handshake-o fa-1x"></i> التوظيف </a></li>
                                               <li class="li"><a href="#"><i class="fa fa-address-card fa-1x"></i> تقديم السيرة الذاتية </a></li>
                                            </ul>
                                        </li>
                                         <li class="Dropdown"><a href="sleep.php"><i class="fa fa-user-o fa-2x"></i><Br/>الخدمات الالكترونية</a>
                                            <ul class="part-Dropdown">
                                               <li class="li"><a href="../ho/user-login.php"><i class="fa fa-calendar-check-o fa-1x"></i> حجز </a></li>
                                               <li class="li"><a href="../ho/examination.php"><i class="fa fa-search fa-1x"></i> استعلام </a></li>
                                            </ul>
                                        </li>
                                        <li class="Dropdown"><a href="../ho/about-us.php"><i class="fa fa-user-md fa-2x" ></i><Br/>عن المستشفى</a></li>
                                        <li class="Dropdown"><a href="../ho/contact.php"><i class="fa fa-user-md fa-2x" ></i><Br/>اتصل بنا</a></li>
    
                                 </ul></div>

                        </nav>
                    <!-- end navbar -->



                                  <!-- liyeqh -->

                                  <div class="section" style="border-bottom: 5px solid #C3B9A8; margin-bottom: 90px;">
                                    <article>
                                            <div class="row">
                                                    <div class="col">
                                                            <div class="line"></div>
                                                            <div class="line2"></div>
                                                    </div>
                                                    <div class="col">
                                                            <h2> انشاء حساب جديد </h2>
                                                    </div>
  
                                                    <div class="col">
                                                            <div class="line2"></div>
                                                            <div class="line"></div>
                                                    </div>
                                                  </div>

                                                  <div class="box-login">
                                            <div class="container">
                                                    <div class="row">
                                                      <div class="col-lg-8">
                                                        
                                                            <form class="form-login" method="post">
                                                                    							<p>
								فضلا ادخل معلوماتك الشخصية بالأسفل:<br />
								<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p>
         <div class="form-group">
								<input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="City" required>
							</div>
							<div class="form-group">
								<label class="block">
									الجنس
								</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender" value="female" >
									<label for="rg-female">
										أنثى
									</label>
									<input type="radio" id="rg-male" name="gender" value="male">
									<label for="rg-male">
										ذكر
									</label>
								</div>
							</div>
                                                                							<p>
								فضلا ادخل بيانات حسابك بالأسفل:
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
									</span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
									 </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" name="password_again" placeholder="Password Again" required>
									 </span>
							</div>
							<div class="form-group">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="agree" value="agree">
									<label for="agree">
										موافق
									</label>
								</div>
							</div>
                                                                    <div class="form-actions">
								<button type="submit" class="btn button pull-right" name="submit">
									انشاء حساب  <i class="fa fa-arrow-circle-right"></i>
								</button>
                                                                    </div>
                                                                    <div class="new-account">
                                                                        هل لديك حساب ؟
                                                                        <a href="user-login.php">
                                                                            تسجيل دحول
                                                                        </a>
                                                                    </div>
                                                            </form>
                                                        </div>
                                                      </div>

                                                    </div>
                                                  </div>
                                 
                                    </article>
                                </div>
                                <!-- end liyeqh -->


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