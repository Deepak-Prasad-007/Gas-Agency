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
if(isset($_GET["cno"]))
{
    $C_No=$_GET["cno"];       
    $db=mysql_connect("localhost","root","");
    mysql_select_db("agency",$db);
    echo "Select * from connection where C_No='$C_No'";
    $result=mysql_query("Select * from connection where C_No='$C_No'",$db);
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
       }
    mysql_close();
}
  if($_POST["submit"])
    {
        $C_No=$_POST["t1"];
        $c_date=$_POST["t2"];
        $c_type=$_POST["t3"];
        $svr=$_POST["t4"];
        $name=$_POST["t5"];
        $s_w=$_POST["t6"];  
        $dob=$_POST["t7"]; 
        $p_no=$_POST["t8"];
        $add=$_POST["t9"];
        $pc=$_POST["t10"];    
    $db=mysql_connect("localhost","root","");
    mysql_select_db("agency",$db);
    mysql_query("update connection set C_date='$c_date',C_type='$c_type',SVR='$svr',Name='$name',S_W='$s_w',DOB='$dob',P_No='$p_no',Add1='$add',Pincode='$pc' where C_No='$C_No'",$db);
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
          <li class="active"><a href="index.html"><span>Home Page</span></a></li>
          <li><a href="support.html"><span>Support</span></a></li>
          <li><a href="about.html"><span>About Us</span></a></li>
          <li><a href="blog.html"><span>Blog</span></a></li>
          <li><a href="contact.html"><span>Contact Us</span></a></li>
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
          <h2>Connection_Edit Detail</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>           
<html>
    <body>
        <form method="post" action="connection_edit.php"><br><br>
            <table width="170%"  style="font-size:18px;color:black;font-family:Times New Roman">    
            <tr>
                <td>Consumer No.</td>
                <td><input type="text" value="<?php echo $s1;?>" name="t1"></td>                            
                <td>Connection Date</td>
                <td><input type="text" name="t2" value="<?php echo $s2;?>"></td>                            
             </tr>
              <tr>
                <td>Cylinder type</td>
                <td><input type="text" name="t3" value="<?php echo $s3;?>"></td> 
                <td>SVR No</td>
                <td><input type="text" name="t4" value="<?php echo $s4;?>"></td>     
                                       
            </tr>
            <tr>
            <td><h3>Consumer-Detail</h3></td>
            <tr>
                <td>Applicant Name</td>
                <td><input type="text" name="t5" value="<?php echo $s5;?>"></td>    
                <td>S/o W/o</td>
                <td><input type="text" name="t6" value="<?php echo $s6;?>"></td> 
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="text" name="t7" value="<?php echo $s7;?>"></td>                            
                <td>Phone No.</td>
                <td><input type="text" name="t8" value="<?php echo $s8;?>"></td>                            
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="t9" value="<?php echo $s9;?>"></td>                
                <td>Pincode</td>
                <td><input type="text" name="t10" value="<?php echo $s10;?>"></td>                            
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
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>  
</body>
</html>
