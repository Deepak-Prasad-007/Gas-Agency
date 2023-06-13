<?php   
$msg="";
if($_POST["submit"])
{
    $code=$_POST["t1"];
    $name=$_POST["t2"];
    $pno=$_POST["t3"];
    $email=$_POST["t4"];
    $pc=$_POST["t5"];
    $addr=$_POST["t6"];  
    $dob=$_POST["t7"]; 
    $doj=$_POST["t8"];
    $sal=$_POST["t9"];
    $wa=$_POST["t10"]; 
$db=mysql_connect("localhost","root","");
mysql_select_db("agency",$db);
mysql_query("insert into delivery values('$code','$name','$pno','$email','$pc','$addr','$dob','$doj','$sal','$wa')",$db);
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
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.19.custom.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>
<script type="text/javascript">
$(function() {
$("#t7").datepicker();
$("#t8").datepicker();
});
</script>
<style type="text/css">
.ui-datepicker { font-size:8pt !important}
</style>
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
          <h2>Admin_Delivery boy Detail</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>            
             <html>
            <body>
            <form method="post" action="Admin_delivery_boy.php"><br><br>
            <table width="150%"  style="font-size:18px;color:black;font-family:Times New Roman">           
            <tr>
                <td>Code</td>
                <td><input type="text" name="t1"></td>                            
                <td>Name</td>
                <td><input type="text" name="t2"></td>                            
            </tr>
            <tr>
                <td>Phone No.</td>
                <td><input type="text" name="t3"></td>                            
                <td>Email</td>
                <td><input type="text" name="t4"></td>                            
            </tr>
            <tr>
                <td>Pincode</td>
                <td><input type="text"  name="t5"></td>   
                <td>Address</td>
                 <td><input type="text"  name="t6"></td> 
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="text" name="t7" id="t7"></td>                            
                <td>DOJ</td>
                <td><input type="text" name="t8" id="t8"></td>                            
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="t9"></td>                
                <td>Work Area</td>
                <td><select name="t10">
                    <option>select</option>
                    <option>sec-10</option>
                    <option>sec-6</option> 
                    <option>sec-8</option>
                    </select></td>       
            </tr>                
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>                
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

    