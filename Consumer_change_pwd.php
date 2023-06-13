<?php
session_start();
$uid=$_SESSION["uid"];
    $msg="";           
    if($_POST["submit"])
    {        
        $old_pwd_db="";
        $db=mysql_connect("localhost","root","");
        mysql_select_db("agency",$db);
        $result=mysql_query("Select Password from login where Loginid='$uid'",$db);
        while($row= mysql_fetch_array($result))
        {   
            $old_pwd_db=$row[0];
        }
        mysql_close();        
        $old_pwd=$_POST["t1"];
        $new_pwd=$_POST["t2"];
        $retype=$_POST["t3"];        
        if($old_pwd==$old_pwd_db)
        {
            if($new_pwd==$retype)
            {
                $db=mysql_connect("localhost","root","");
                mysql_select_db("agency",$db);
                mysql_query("update login set Password='$new_pwd' where Loginid='$uid'",$db);
                mysql_close();
                $msg="<span style='color:green'>* Password Updated Successfully.....</span>";
            }
            else
            {
                $msg="<span style='color:red'>* Retype Password not Match.....</span>";
            }                  
        }
        else
        {
            $msg="<span style='color:red'>* Old Password not Match.....</span>"; 
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
          <h2>Consumer_Change Password</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>           
    <html>
    <body>
        <br>                       
        <form method="post" action="Consumer_change_pwd.php">
            <table width="170%" style="font-size:18px;color:black;font-family:Times New Roman">                >
                <tr>
                    <td>Old Password</td>
                    <td><input type="text" name="t1" ></td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td><input type="text" name="t2"></td>
                </tr>
                <tr>
                    <td>Retype Password</td>
                    <td><input type="text" name="t3"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Change Password"></td>
                </tr>
            </table>
        </form>
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

