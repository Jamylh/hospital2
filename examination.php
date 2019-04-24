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
    <title>عــن الـمـسـتـشـفـى</title>
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
                                    <form class="form-inline">
                                            <button class="btn my-2 my-sm-0" type="submit"> <a href="#" >English</a></button>
                                    </form>
 
                            </div>
                          </div>
                </div> 
                <!-- end container (langu,btn) -->

                <!-- start logo -->
                <div id="logo" style="margin-top:0.5em;" >
                    <div class="col-lg-12">
                        <img src="images/header-bg1.jpeg" alt="King saud hospital"  width="100%" height="200">
                    </div>
                    <div class="col-lg-4">
                    <img src="https://upload.wikimedia.org/wikipedia/ar/f/f5/Saudi_Vision_2030_logo.svg" alt="King saud hospital"  width="1100" height="100"
                    style="margin-top:-40px;margin-bottom: 2em;">
                  </div>
                </div>

                <!-- start navbar -->
                                <nav id="nav">
                    <nav id="nav">
 
                           <?php include('navbar.php')?>
                    </nav>
                                </nav>
                                
                            <!-- end navbar -->


                                  <!-- about us -->

                                  <div class="section" style="border-bottom: 5px solid #273A27; margin-bottom: 90px;">
                                    <article>
                                          <div class="row">
                                                  <div class="col">
                                                          <div class="line2"></div>
                                                          <div class="line"></div>
                                                  </div>
                                                  <div class="col">
                                                          <h2>الاستعلام عن نتيجة الفحص</h2>
                                                  </div>

                                                  <div class="col">
                                                          <div class="line"></div>
                                                          <div class="line2"></div>
                                                  </div>
                                                </div>
                                                <div class="pragr">
                                                    <form action="examination.php" method="post">
  <table>
    <tr>
      <td>
        الاستعلام عن نتيجة الفحص عن طريق الرقم الطبي:
      </td>
      <td>
        <input type="search" name="sid" size="40" width="60" height="30">
        <input type="submit" name="sBtn" value="بحث">     
      </td>
    </tr>
  </table>
</form>
<br>
<?php
$connection = new PDO("mysql:host=localhost; dbname=hms", "root", "");

if (isset($_POST["sid"]))
{
$sid=$_POST["sid"];
// execute SQL SELECT query
$sql = $connection->query("SELECT * FROM users where id = '$sid'");
$no=$sql->rowCount();   // number of rows affected by the last SQL statement  
if ($no == 0)
 {
 	echo "<h2> نتيجة الفحص غير جاهزة بعد </h2>";
 	}
else
	// number of returned columns
	 // $cols = $sql->columnCount();  // returns number of column in the result set
	// echo 'Number of returned columns: ' . $cols. '<br>';
	// Parse the result set & extract specific fields
	?> 
<table border="1" style="width:80%" align="center" cellpadding="5">

<?php

 
	foreach($sql as $row)
	{
	   $id = $row['id'];
	   $fullName= $row['fullName'];
	   $result = $row['result'];
	    
	  
	    echo
 "<tr>
    <th>الرقم الطبي</th>
    <th>الاسم</th>
    <th>نتيجة الفحص</th>
    
 
    

</tr>\n";

	   echo 
	"<tr>
	<td>$id</td>
    <td>$fullName</td>
    <td>$result</td>
    ";
   
	
    echo "</tr>\n";
	}
	}
	echo '</table>';

?>
                                                </div>
                                 
                                    </article>
                                </div>
                                <!-- end about -->


      


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
            <img src="footer2.png"  alt="King saud hospital"  width="1700" height="180">
             
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