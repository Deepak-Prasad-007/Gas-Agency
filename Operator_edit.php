<?php
    $s1="";
    $s2="";
    $s3="";
    $s4="";
    $s5="";
    $s6="";
    $s7="";
    $s8="";
    $s9="";
    $s10="";
    $s11="";
    $s12="";     
if(isset($_GET["id"]))
{
     $LoginId=$_GET["id"];        
     $db=mysql_connect("localhost","root","");
     mysql_select_db("agency",$db);
     $result=mysql_query("Select * from operator where LoginId='$LoginId'",$db);
     while($row= mysql_fetch_array($result))
     {
        $s1=$row[0];
        $s2=$row[1];
        $s3=$row[2];
        $s4=$row[3];
        $s5=$row[4];
        $s6=$row[5];
        $s7=$row[6];
        $s8=$row[7];
        $s9=$row[8];
        $s10=$row[9];   
        $s11=$row[10];
        $s12=$row[11];
    }mysql_close();
}
    if($_POST["submit"])
    {
      $login=$_POST["t1"];
      $pwd=$_POST["t2"];
      $o_name=$_POST["t3"];
      $p_no=$_POST["t4"];
      $email=$_POST["t5"];
      $Gen=$_POST["t6"];
      $p_code=$_POST["t7"];  
      $addr=$_POST["t8"]; 
      $dob=$_POST["t9"];
      $doj=$_POST["t10"];
      $tim=$_POST["t11"];
      $sal=$_POST["t1"];   
    $db=mysql_connect("localhost","root","");
    mysql_select_db("agency",$db);
    mysql_query("update operator set Password='$pwd',Operator Name='$o_name',Phone No.='$p_no',E-mail='$email',Gender='$Gen',Pincode='$p_code',Address='$addr',DOB='$dob',DOJ='$doj',Timing='$tim',Salary='$sal' where LoginId='$id'",$db);
    mysql_close();
    $msg="<span style='color:green'>* Profile Updated Successfully.....</span>";
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
          <h2>Operator_Profile Edit</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>           
            <html>
    <body>
        <form method="post" action="Operator_edit.php"><br><br>
            <table width="150%"  style="font-size:18px;color:black;font-family:Times New Roman">   
            <tr>
                <td>Login ID</td>
                <td><input type="text" name="t1" value="<?php echo $s1;?>"></td>                            
                <td>Password</td>
                <td><input type="text" name="t2" value="<?php echo $s2;?>"></td>                            
             </tr>
              <tr>
                <td>Operator Name</td>
                <td><input type="text" name="t3" value="<?php echo $s3;?>"></td>                            
                <td>Phone No.</td>
                <td><input type="text" name="t4" value="<?php echo $s4;?>"></td>                            
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text"  name="t5" value="<?php echo $s5;?>"></td>   
                 <td>Gender</td>
                 <td><select name="t6" value="<?php echo $s6;?>">
                    <option>select<option>
                    <option>Male<option>
                    <option>Female<option>    
                    </select></td>                
            </tr>
            <tr>
                <td>Pincode</td>
                <td><input type="text" name="t7" value="<?php echo $s7;?>"></td>                            
                <td>Address</td>
                <td><input type="text" name="t8" value="<?php echo $s8;?>"></td>                            
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="text" name="t9" value="<?php echo $s9;?>"></td>                
                <td>DOJ</td>
                <td><input type="text" name="t10" value="<?php echo $s10;?>"></td>                            
            </tr>
            <tr>
                <td>Timing</td>
                <td><input type="text" name="t11" value="<?php echo $s11;?>"></td>                 
                <td>Salary</td>
                <td><input type="text" name="t12" value="<?php echo $s12;?>"></td>                            
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Edit"></td>                
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


        
 