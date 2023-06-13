<?php
    session_start();
    $msg="";
    if($_POST["submit"])
    {
        $id=$_POST["t1"];
        $pwd=$_POST["t2"];
        
        $flag=false;
        $role="";
        $con=mysql_connect("localhost","root","");       
        mysql_select_db("agency",$con);
        
        $result=mysql_query("Select Role from login where Loginid='$id' and Password='$pwd'",$con);
        while($row= mysql_fetch_array($result))
        {
            $flag=true;
            $role=$row[0];
        }
        mysql_close();       
        if($flag==true)
        {     
            $_SESSION["uid"]=$id;
            if($role=='admin')
            {
            header("location: Admin_Report.php");
            }
            elseif($role=='operator')
            {
             header("location:Operator_Booking_Table.php");
            }
            else
            {
                header("location:Consumer_Request.php");
            }
        }
        else
        {
            $msg="<span style='color:red'>* Invalid Login Id or Password...</span>";
        }
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
    
        <img src="images/images 8.jpg" width="960 px" height="360 px">
       

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
            <h2><span>Login Form</span> </h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>           
          <form method="post" id="myform" action="login.php">
            <table  width="170%"  style="font-size:18px;color:black;font-family:Times New Roman">     
                <tr>
                    <td>Login ID</td>
                    <td><input type="text" id="t1" name="t1"</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" id="t2" name="t2"</td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Login"></td>                   
                </tr>
            </table>
        </form>
        <?php echo $msg;?>     
  <script>
   var validator=new Validator("myform");
   validator.addValidation("t1","req","Please Enter Loginid");
   </script>
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
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div> 
</body>
</html>

