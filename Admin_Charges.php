<?php   
$msg="";
if($_POST["submit"])
{
    $con=$_POST["t1"];
    $DA=$_POST["t2"];
    $CC=$_POST["t3"];
    $RC=$_POST["t4"];
    $db=mysql_connect("localhost","root","");
mysql_select_db("agency",$db);
mysql_query("insert into charges values('$con','$DA','$CC','$RC')",$db);
mysql_close();
$msg="record insert successfully";
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
        <h1><img src="images/logo1.jpg" width="120px"><a href="index.html"><span> Gas Agency Management System</span><small></small></a></h1>   </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
         <li class="active"><a href="login.php"><span>Home Page</span></a></li>
          <li><a href="Admin_Report.php"><span>Report</span></a></li>
          <li><a href="Admin_Other.php"><span>Other</span></a></li>
          <li><a href="Contact_us.php"><span>Contact Us</span></a></li>
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
          <h2>Admin_Charges Detail</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>           
            <html>
    <body>
            <form method="post" action="Admin_Charges.php"><br><br>
            <table width="170%" style="font-size:18px;color:black;font-family:Times New Roman">                
            <tr>
                <td>Connection</td>
                <td><input type="text" name="t1"></td> 
            </tr>
            <tr>
                <td>Deposite Amount</td>
                <td><input type="text" name="t2"></td>                            
             </tr>
            <tr>
                <td>Cylinder Charge</td>
                <td><input type="text" name="t3"></td> 
            </tr>
            <tr>
                <td>Regulator Charge</td>
                <td><input type="text" name="t4"></td>                            
            </tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>                
            </tr>
            </table>              
            <?php echo $msg;?>
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


      