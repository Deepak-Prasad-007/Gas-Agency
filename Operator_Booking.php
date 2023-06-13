<?php
if(isset($_GET["bno"]))
{
 $bno=$_GET["bno"]; 
$s1="";
$s2="";
$s3="";
$s4="";
$s5="";
             $db=mysql_connect("localhost","root","");
             mysql_select_db("agency",$db);
             $result=mysql_query("select * from request where Booking_No=$bno",$db);
             while($row=mysql_fetch_array($result))
             {
                 $s1=$row[0];
                 $s2=$row[1];
                 $s3=$row[2];
                 $s4=$row[3];
                 $s5=$row[4];
             }
             mysql_close();
}            
    if($_POST["submit"])
    {
    $bno=$_POST["t1"];
    
    $db=mysql_connect("localhost","root","");
    mysql_select_db("agency",$db);
    mysql_query("update request set status='Issue' where Booking_No='$bno'",$db);
    mysql_query("update stock set Filled_Cylinder=Filled_Cylinder-1",$db);
    mysql_close();
    header("location: Operator_Booking_Table.php");
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
<script src="validator.js"></script>
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
          <li><a href="Operator_New_Connection.php"><span>New Connection</span></a></li>
          <li><a href="Operator_Booking.php"><span>Disconnect</span></a></li>
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
   <marquee>     
     <h2><span style="font-family:Times New Roman">Subsidy is 300/- Rs after booking subsidy will be refund in your account</span></h2>
    </marquee>   
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>
        <?php
            $db=mysql_connect("localhost","root","");
             mysql_select_db("agency",$db);
             $result=mysql_query("select Filled_Cylinder from stock",$db);
             while($row=mysql_fetch_array($result))
             {
                echo "Current Stock:".$row[0];
             }
             mysql_close();
        ?>
            <form method="post" id="myform" action="Operator_Booking.php"><br><br>
            <table width="150%" style="font-size:18px;color:black;font-family:Times New Roman">                 
            <tr>
                <td>Booking No</td>
                <td><input type="text" value="<?php echo $s1;?>" name="t1"></td> 
                <td>Consumer No.</td>
                <td><input type="text" value="<?php echo $s2;?>" name="t2"></td>      
            </tr>             
            <tr>
                <td>Date</td>
                <td><input type="text" value="<?php echo $s3;?>" name="t3"></td>                          
                <td>Consumer Name</td>
                <td><input type="text" value="<?php echo $s4;?>" name="t4"></td>                            
            </tr>
            <tr>
                <td>Connection type</td>
                <td><input type="text"  value="<?php echo $s5;?>" name="t5"></td>
                <td>Area</td>
                <td><select name="t6">
                     <option>select</option>
                     <?php
                       $db=mysql_connect("localhost","root","");
                       mysql_select_db("agency",$db);
                       $result=mysql_query("Select W_A from delivery",$db);
                       while($row= mysql_fetch_array($result))
                       {
                           echo "<option>$row[0]</option>";
                       }
                            mysql_close();
                     ?>                                      
            </tr>
             <tr>
                 <td></td>
                <td><input type="Submit" name="submit" value="Subbmit"></td>                
            </tr>
            </table>
           </form>
            <?php echo $msg;?>
            <script>
   var validator=new Validator("myform");
   validator.addValidation("t4","alpha","Please Enter only character");
   </script>     
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


