<?php 
session_start();
$msg="";
if($_POST["submit"])
{
    $_SESSION["C_no"]=$_POST["t2"];
    $_SESSION["C_name"]=$_POST["t4"];
    $_SESSION["C_type"]=$_POST["t5"];    
    $bno=$_POST["t1"];
    $cno=$_POST["t2"];
    $dat=$_POST["t3"];
    $cname=$_POST["t4"];
    $conn=$_POST["t5"];    
$db=mysql_connect("localhost","root","");
mysql_select_db("agency",$db);
mysql_query("insert into request values('$bno','$cno','$dat','$cname','$conn','Request')",$db);
mysql_close();
echo "record insert successfully";
}
$c=0;
$db=mysql_connect("localhost","root","");
mysql_select_db("agency",$db);
$result=mysql_query("select count(Booking_No) from request",$db);
while($row=mysql_fetch_array($result))
{
   $c=$row[0];
}
mysql_close();
$c=$c+101;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>iSolution</title>
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
          <h2>Consumer Booking Request</h2>  
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>            
           <html>
    <body>
        <form method="post" action="Consumer_Request.php"><br><br>
        <table width="170%" style="font-size:18px;color:black;font-family:Times New Roman">                
            <tr>
                <td>Booking No</td>
                <td><input type="text" name="t1" value="<?php echo $c;?>"></td>             
            </tr>             
            <tr>
                <td>Consumer No.</td>
                <td><input type="text" name="t2"></td>
             </tr>
            <tr>
                <td>Date</td>
                <td><input type="text" name="t3"></td>                            
            </tr>            
            <tr>
                <td>Consumer Name</td>
                <td><input type="text" name="t4"></td>
            </tr>
                <td>Connection type</td>
                <td><input type="text" name="t5"></td>      
            </tr>
            <tr>
                <td></td>
                <td><input type="Submit" name="submit" value="Submit"></td>                
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

