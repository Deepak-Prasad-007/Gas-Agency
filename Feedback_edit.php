<?php
 $s1="";
    $s2="";
    $s3="";
    $s4="";
    $s5="";
    $s6="";  
if(isset($_GET["fno"]))
{
    $F_no=$_GET["fno"];        
    $db=mysql_connect("localhost","root","");
     mysql_select_db("agency",$db);
     echo "Select * from feedback where F_no='$F_no'";
    $result=mysql_query("Select * from feedback where F_no='$F_no'",$db);
    while($row= mysql_fetch_array($result))
    {
        $s1=$row[0];
        $s2=$row[1];
        $s3=$row[2];
        $s4=$row[3];
        $s5=$row[4];
        $s6=$row[5]; 
        $s7=$row[6];
    }mysql_close();
}
  if($_POST["submit"])
    {
    $F_no=$_POST["t1"];
    $dat=$_POST["t2"];
    $C_No=$_POST["t3"];
    $C_name=$_POST["t4"];
    $P_no=$_POST["t5"];
    $email=$_POST["t6"];  
    $msg=$_POST["t7"];      
    $db=mysql_connect("localhost","root","");
    mysql_select_db("agency",$db);
    mysql_query("update feedback set dat='$dat',C_No='$C_No',C_name='$C_name',P_no='$P_no',email='$email',msg='$msg' where F_no='$F_no'",$db);
    mysql_close();
    $msg="<span style='color:green'>*Updated Successfully.....</span>";
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
      <h1><a href="index.html">Gas<span> Agency Management System</span><small></small></a></h1>     
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
        <div id="coin-slider"> 
        <a href="#"><img src="images/slide1.jpg" width="960" height="360" alt="" /></a> 
        <a href="#"><img src="images/slide2.jpg" width="960" height="360" alt="" /></a> 
        <a href="#"><img src="images/slide3.jpg" width="960" height="360" alt="" /></a>
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
          <h2>Feedback Detail</h2>      
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>            
<html>
    <body>
        <form method="post" action="Feedback_edit.php"><br><br>
            <table width="180%" style="font-size:18px;color:black;font-family:Times New Roman">       
            <tr>
                <td>Feedback No.</td>
                <td><input type="text" value="<?php echo $s1;?>" name="t1"></td>                            
                <td>Date</td>
                <td><input type="text" name="t2" value="<?php echo $s2;?>"></td>                            
            </tr>
            <tr>
                <td>Consumer No.</td>
                <td><input type="text" name="t3" value="<?php echo $s3;?>"></td> 
                <td>Name</td>
                <td><input type="text" name="t4" value="<?php echo $s4;?>"></td>     
                                       
            </tr>
            <tr>
                <td>Phone No.</td>
                <td><input type="text" name="t5" value="<?php echo $s5;?>"></td> 
                <td>Email</td>
                <td><input type="text" name="t6" value="<?php echo $s6;?>"></td> 
             <tr>
                <td>Message</td>
                <td><textarea name"t7t" rows="3"></textarea></td> 
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>                
            </tr>
            </table>
            </form>
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

     