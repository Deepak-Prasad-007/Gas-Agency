<?php   
$msg="";
if($_POST["submit"])
{
    $conno=$_POST["t1"];
    $condate=$_POST["t2"];
    $cyltype=$_POST["t3"];
    $svr=$_POST["t4"];
    $name=$_POST["t5"];
    $s=$_POST["t6"];  
    $dob=$_POST["t7"]; 
    $phone=$_POST["t8"];
    $pc=$_POST["t9"];
    $addr=$_POST["t10"];
    $adhar=$_POST["t11"];
    $bname=$_POST["t12"];
    $acc=$_POST["t13"];
    $bcode=$_POST["t14"];    
$db=mysql_connect("localhost","root","");
mysql_select_db("agency",$db);
$flag=false;
$result=mysql_query("select * from connection where p_no='$phone' and Name='$name' and s_w='$s' and aadhar='$adhar'",$db);
 while($row=mysql_fetch_array($result))
 {
    $flag=true;
 } 
    if( $flag==false)
    {
        mysql_query("insert into connection values('$conno','$condate','$cyltype','$svr','$name','$s','$dob','$phone','$pc','$addr','$adhar','$bname','$acc','$bcode','open')",$db);
        mysql_query("insert into login values('$conno','$conno','customer')",$db);
        mysql_close();
        $msg="record insert successfully";
    }
 else
 {
        $msg="Already inserted";
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
          <h2>New Connection_Detail </h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>
            <html>
    <body>
            <form method="post" action="Operator_New_Connection.php"><br><br>
            <table width="170%"  style="font-size:18px;color:black;font-family:Times New Roman">     
            <tr>
                <td>Consumer No.</td>
                <td><input type="text" name="t1"></td>                            
                <td>Connection Date</td>
                <td><input type="text" name="t2"></td>                            
            </tr>
            <tr>
                <td>SVR No</td>
                <td><input type="text" name="t3"></td> 
                <td>Cylinder type</td>
                <td><input type="text" name="t4"></td>                                            
            </tr>
            <tr>
            <td><h3>Consumer-Detail</h3></td>
            <tr>
                <td>Applicant Name</td>
                <td><input type="text" name="t5"></td>    
                <td>S/o W/o</td>
                <td><input type="text" name="t6"></td> 
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="text" name="t7"></td>                            
                <td>Phone No.</td>
                <td><input type="text" name="t8"></td>                            
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="t9"></td>                
                <td>Pincode</td>
                <td><input type="text" name="t10"></td>                            
            </tr>
            <tr>
                <td>Aadhar No.</td>
                <td><input type="text" name="t11"></td>                
                <td>Bank Name</td>
                <td><select name="t12">
                    <option>SBI</option>
                    <option>Dena</option>
                    <option>OBC</option>
                    <option>Syndicate</option>
                </select></td>
        </tr>
             </tr> 
             <tr>
                <td>Account No</td>
                <td><input type="text" name="t13"></td>                
                <td>Branch code</td>
                <td><input type="text" name="t14"></td>   
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



