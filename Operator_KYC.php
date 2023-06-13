<?php   
$msg="";
if($_POST["submit"])
{
    $Mr=$_POST["t1"];
    $FN=$_POST["t2"];
    $MN=$_POST["t3"];
    $LN=$_POST["t4"];
    $CR=$_POST["t5"];
    $flat=$_POST["t6"];  
    $floor=$_POST["t7"]; 
    $house=$_POST["t8"];
    $land=$_POST["t9"];
    $str=$_POST["t10"];
    $city=$_POST["t11"];
    $dis=$_POST["t12"];
    $state=$_POST["t13"];
    $PC=$_POST["t14"];
    $mob=$_POST["t15"];
    $EM=$_POST["t16"];
$db=mysql_connect("localhost","root","");
mysql_select_db("agency",$db);
mysql_query("insert into kyc values('$Mr','$FN','$MN','$LN','$CR','$flat','$floor','$house','$land','$str','$city','$dis','$state','$PC','$mob','$EM')",$db);
mysql_close();
$msg="record insert successfully";
}
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
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
       <li class="active"><a href="login.php"><span>Home Page</span></a></li>
          <li><a href="Operator_New_Connection.php"><span>New Connection</span></a></li>
          <li><a href="Operator_Disconnect.php"><span>Disconnect</span></a></li>
          <li><a href="Operator_Profile.php"><span>Profile</span></a></li>
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
          <h2>Operator_KYC Detail</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>            
           <html>
    <body>
        <form method="post" action="Operator-KYC.php">          
        <table width="170%"  style="font-size:18px;color:black;font-family:Times New Roman">            
        <td><h3>Personal Details</h3></td>
        <tr>    
            <td>Mr/Mrs/Ms</td>
            <td><input type="text" name="t1"></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="t2"></td>
        </tr>
        <tr>
            <td>Middle Name</td>
            <td><input type="text" name="t3"></td><br>
        </tr>
        <tr>
             <td> Last Name</td>
             <td><input type="text" name="t4"></td>
        <tr>
            <td>Close Relative</td>
            <td><select name="t5">
                    <option>Mother</option>
                    <option>Father</option>
                    <option>Son</option>
                    <option>Daughter</option>
                </select></td>
        </tr>
        <tr>
            <td><h3>Contact Information</h3></td>
         </tr>
         <tr>    
            <td>House/Flat No.</td>
            <td><input type="text" name="t6"></td>
            <td>Floor No.</td>
            <td><input type="text" name="t7"></td>
        </tr>
        <tr>
            <td>Housing</td>
            <td><input type="text" name="t8"></td>
            <td>Land Mark</td>
            <td><input type="text" name="t9"></td>
        </tr>
        <tr>
            <td>Street</td>
            <td><input type="text" name="t10"></td><br>
            <td>City/Town</td>
            <td><input type="text" name="t11"></td><br>
        </tr>
        <tr>
            <td> District</td>
            <td><input type="text" name="t12"></td>
            <td> State</td>
            <td><input type="text" name="t13"></td>
        <tr>
            <td> Pincode</td>
            <td><input type="text" name="t14"></td>
            <td> Mob No.</td>
            <td><input type="text" name="t15"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="t16"></td>
         </tr>
         <tr>
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

        
