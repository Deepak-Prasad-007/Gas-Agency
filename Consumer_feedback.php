<?php   
$msg="";
if($_POST["submit"])
{
    $fno=$_POST["t1"];
    $dat=$_POST["t2"];
    $cno=$_POST["t3"];
    $name=$_POST["t4"];
    $pno=$_POST["t5"];
    $email=$_POST["t6"];
    $msg=$_POST["t7"];    
$db=mysql_connect("localhost","root","");
mysql_select_db("agency",$db);
mysql_query("insert into feedback values('$fno','$dat','$cno','$name','$pno','$email','$msg')",$db);
mysql_close();
echo "record insert successfully";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-aller-700.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
 <div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="searchform">        
      </div>
      <div class="logo">
        <h1><img src="images/logo1.jpg" width="120px"><a href="index.html"><span> Gas Agency Management System</span><small></small></a></h1>      
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
         <li class="active"><a href="login.php"><span>Home Page</span></a></li>
          <li><a href="Consumer_Request.php"><span>Booking</span></a></li>
          <li><a href="Consumer_History.php"><span>History</span></a></li>
          <li><a href="Consumer_Profile.php"><span>profile</span></a></li>
          <li><a href="Logout.php"><span>Logout</span></a></li>
           </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div> 
        </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Consumer_feedback Detail</h2>         
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>
    <html>
    <body>
        <form method="post" action="Consumer_feedback.php"><br><br>
        <table width="170%" style="font-size:18px;color:black;font-family:Times New Roman">               
     <tr>    
        <td>Feedback No.</td>
        <td><input type="text" name="t1"></td>
        <td>Date</td>
        <td><input type="text" name="t2"></td>
     </tr>
    <tr>
        <td>Consumer No.</td>
        <td><input type="text" name="t3"></td>
        <td>Name</td>
        <td><input type="text" name="t4"></td>
    </tr>
    <tr>
        <td>Phone No.</td>
        <td><input type="text" name="t5"></td><br>
        <td>Email</td>
        <td><input type="text" name="t6"></td><br>
    </tr>
    <tr>
       <td>Message</td>
        <td><textarea name"t7t" rows="3"></textarea></td>
        </tr>
        <tr>
        <td></td>
            <td><input type="submit" name="submit" value="submit"></td>                
            </tr>
        </table> 
    </body>
        </html>            
        </p>            
            <p class="spec"></p>
          </div>
          <div class="clr"></div>
        </div>
      </div>
      <div class="sidebar">
      <div class="gadget">               
        </div>       
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">    
  </div> 
</div>
<div></div>  
</body>
</html>

