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
    $s13="";
    $s14=""; 
if(isset($_GET["T_id"]))
{
    $T_id=$_GET["T_id"];       
    $db=mysql_connect("localhost","root","");
    mysql_select_db("agency",$db);
    $result=mysql_query("Select * from transfer where T_id='$T_id'",$db);
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
        $s13=$row[12];  
        $s14=$row[13];  
       }
    mysql_close();
}
  if($_POST["submit"])
    {
        $T_id=$_POST["t1"];
        $T_date=$_POST["t2"];
        $T_code=$_POST["t3"];
        $D_name=$_POST["t4"];
        $D_address=$_POST["t5"];
        $D_code=$_POST["t6"];  
        $Cus_name=$_POST["t7"]; 
        $Cus_address=$_POST["t8"];
        $pincode=$_POST["t9"];
        $category=$_POST["t10"];
        $doc_type=$_POST["t11"];
        $doc_number=$_POST["t12"];
        $doc_date=$_POST["t13"];
        $company=$_POST["t14"];
    $db=mysql_connect("localhost","root","");
    mysql_select_db("agency",$db);
    mysql_query("update transfer set T_date='$T_date',T_code='$T_code',D_name='$D_name',D_address='$D_address',D_code='$D_code',Cus_name='$Cus_name',Cus_address='$Cus_address',pincode='$pincode',category='$category',doc_type='$doc_type',doc_number='$doc_number',doc_date='$doc_date',company='$coompany' where T_id='$T_id'",$db);
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
          <h2>Transfer_Edit</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>           
<html>
    <body>
        <form method="post" action="transfer_edit.php"><br><br>
            <table width="170%" style="font-size:18px;color:black;font-family:Times New Roman">    
            <tr>
                <td>Transfer Id</td>
                <td><input type="text" name="t1" value="<?php echo $s1;?>"</td> 
            </tr>
               <tr>
                <td>Transfer Date</td>
                <td><input type="text" name="t2" value="<?php echo $s2;?>"</td> 
             </tr>
            <tr>
                <td>Transfer Code</td>
                <td><input type="text" name="t3" value="<?php echo $s3;?>"</td>    
            </tr>
            <tr>
                 <td><h4>Distributor</h4></td>
            </tr>
              <tr>
                <td>Name</td>
                <td><input type="text" name="t4" value="<?php echo $s4;?>"</td> 
              </tr>
            <tr>
                 <td>Address</td>
                <td><input type="text" name="t5" value="<?php echo $s5;?>"</td> 
             </tr>
            <tr>
               <td>Code</td>
                <td><input type="text" name="t6" value="<?php echo $s6;?>"</td>
            </tr>
            <tr>
                 <td><h4>Customer</h4></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="t7" value="<?php echo $s7;?>"</td>                          
                <td>Address</td>
                <td><input type="text" name="t8" value="<?php echo $s8;?>"</td>   
            </tr>
            <tr>
                <td>Pincode</td>
                <td><input type="text" name="t9" value="<?php echo $s9;?>"</td>                          
                <td>Category</td>
                <td><input type="text" name="t10" value="<?php echo $s10;?>"</td>   
            </tr>
            <tr>
                <td><h4>Previous Document</h4></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><input type="text" name="t11" value="<?php echo $s11;?>"</td>                          
                <td>Number</td>
                <td><input type="text" name="t12" value="<?php echo $s12;?>"</td>   
           </tr>
            <tr>
                <td>Date</td>
                <td><input type="text" name="t13" value="<?php echo $s13;?>"</td>                          
                <td>Oil Company</td>
                <td><input type="text" name="t14" value="<?php echo $s14;?>"</td>   
            </tr>           
             <tr>
                    <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Edit"></td>                
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
