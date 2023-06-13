<?php
    session_start();
    $id=$_SESSION["uid"];   
    $msg="";
    if($_POST["submit"])
    { 
        $oname=$_POST["t3"];
        $pno=$_POST["t4"];
        $email=$_POST["t5"];
        $pincode=$_POST["t7"];
        $addr=$_POST["t8"];
        $dob=$_POST["t9"];
        $doj=$_POST["t10"];        
        $db=mysql_connect("localhost","root","");
        mysql_select_db("agency",$db);        
        mysql_query("update operator set OperatorName='$oname',Phoneno='$pno',Email='$email',Pincode='$pincode',Address='$addr',DOB='$dob',DOJ='$doj' where Loginid='$id'",$db);
        mysql_close();
        $msg="<span style='color:green'>Record Inserted Successfully...</span>";
    }     
        $oname="";
        $pno="";
        $email="";
        $pincode="";
        $addr="";
        $dob="";
        $doj="";        
        $db=mysql_connect("localhost","root","");
        mysql_select_db("agency",$db);
        $result=mysql_query("Select OperatorName,Phoneno,Email,Pincode,Address,DOB,DOJ from operator where Loginid='$id'",$db);
        while($row= mysql_fetch_array($result))
        {            
            $oname=$row[0];
            $pno=$row[1];
            $email=$row[2];
            $pincode=$row[3];
            $addr=$row[4];
            $dob=$row[5];
            $doj=$row[6];          
        }
        mysql_close();                
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
          <h2>Operator_Profile</h2>         
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>
                   <html>
    <body>
        <form method="post" action="Operator_Profile.php"><br><br>
            <table width="150%" style="font-size:18px;color:black;font-family:Times New Roman">             
            <tr>
                <td>Operator Name</td>
                <td><input type="text" name="t3" value="<?php echo $oname;?>"></td>                            
                <td>Phone No.</td>
                <td><input type="text" name="t4" value="<?php echo $pno;?>"></td>                            
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text"  name="t5" value="<?php echo $email;?>"></td> 
                <td>Gender</td>
                 <td><select name="t6">
                    <option>Male<option>
                    <option>Female<option>    
                    </select></td>       
            </tr>
            <tr>
                <td>Pincode</td>
                <td><input type="text" name="t7" value="<?php echo $pincode;?>"></td>                            
                <td>Address</td>
                <td><input type="text"  name="t8"value="<?php echo $addr;?>"></td>                            
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="text" name="t9" value="<?php echo $dob;?>"></td>                
                <td>DOJ</td>
                <td><input type="text" name="t10" value="<?php echo $doj;?>"></td>                            
            </tr>
            <tr>
               <td><input type="Submit" name="submit" value="Edit"></td>
               <td><a href="Operator_change_pwd.php">Change Password</a></td> 
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




     