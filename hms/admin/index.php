<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($connection,"SELECT * FROM admin WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";//
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid username or password";
$extra="index.php";
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
     <link rel="stylesheet" href="assets/css/style1.css" >
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>  تـسـجـيـل دخــول الادارة</title>
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
                                    <form class="form-inline ">
                                            <button class="btn my-2 my-sm-0" type="submit"> <a href="#" >English</a></button>
                                    </form>
 
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



                                  <!-- liyeqh -->

                                  <div class="section" style="border-bottom: 5px solid #C3B9A8; margin-bottom: 90px;">
                                    <article>
                                            <div class="row">
                                                    <div class="col">
                                                            <div class="line"></div>
                                                            <div class="line2"></div>
                                                    </div>
                                                    <div class="col">
                                                            <h2>تسجيل دخول الادارة</h2>
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
								فضلا ادخل اسم المستخدم وكلمة المرور<br />
								<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1" style="padding:10px;">ادخـل اســم الـمـسـتـخـدم</label>
                                                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                                                    </div>
                                                                    <div class="form-group form-actions">
                                                                            <label for="exampleInputEmail1"  style="padding:10px;">ادخـل كـلـمـة الـمـرور</label>
    
                                                                            <input  type="password" class="form-control password" name="password" placeholder="Password">
                                                                    </div>
                                                                    <div class="form-actions">
								<button type="submit" class="btn button pull-right" name="submit">
									تسجيل دخول <i class="fa fa-arrow-circle-right"></i>
								</button>
                                                                    </div>
                                                                    <div class="new-account">
                                                                        ليس لديك حساب بعد؟
                                                                        <a href="registration.php">
                                                                            إنشاء حساب
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
            <div id="google_translate_element"></div>
 
 <script type="text/javascript">
 function googleTranslateElementInit() {
   new google.translate.TranslateElement({pageLanguage: 'ar'}, 'google_translate_element');
 }
 </script>
 
 <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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