<?php
    $s1="";
    $s2="";
    $s3="";
    $s4="";
    $s5="";
    $s6="";
    $s7="";
    $s8="";
    
    if($_POST["submit"])
    {
      $D_Id=$_POST["t1"];
      $D_date=$_POST["t2"];
      $SVR=$_POST["t3"];
      $C_No=$_POST["t4"];
      $C_name=$_POST["t5"];
      $add=$_POST["t6"];
      $P_no=$_POST["t7"];  
      $reason=$_POST["t8"];    
    $db=mysql_connect("localhost","root","");
    mysql_select_db("agency",$db);
    
    mysql_query("update disconnect set D_name='$D_date',SVR='$SVR',C_No='$C_No',C_name='$C_name',address='$add',P_no='$P_no',reason='$reason' where D_Id=$D_Id",$db);
    echo mysql_error();
    mysql_close();
    $msg="<span style='color:green'>* Profile Updated Successfully.....</span>";
    }  
    
if(isset($_GET["D_Id"]))
{
     $D_Id=$_GET["D_Id"];        
     $db=mysql_connect("localhost","root","");
     mysql_select_db("agency",$db);
     $result=mysql_query("Select * from disconnect where D_Id='$D_Id'",$db);
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
    }mysql_close();
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
          <h2>Disconnection Edit</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>           
            <html>
    <body>
        <form method="post" action="Disconnect_edit.php"><br><br>
            <table width="170%" style="font-size:18px;color:black;font-family:Times New Roman">   
 >
            <tr>
                <td>Disconnect ID</td>
                <td><input type="text" name="t1" value="<?php echo $s1;?>" readonly></td>                            
                <td>Disconnect Date</td>
                <td><input type="text" name="t2" value="<?php echo $s2;?>"></td>                            
             </tr>
              <tr>
                <td>SVR No</td>
                <td><input type="text" name="t3" value="<?php echo $s3;?>"></td>                            
                <td>Consumer No.</td>
                <td><input type="text" name="t4" value="<?php echo $s4;?>"></td>                            
            </tr>
            <tr>
                <td>Consumer Name</td>
                <td><input type="text"  name="t5" value="<?php echo $s5;?>"></td>   
                 <td>Address</td>
                 <td><input type="text"  name="t6" value="<?php echo $s6;?>"></td>   
            </tr>
            <tr>
                <td>Phone No</td>
                <td><input type="text" name="t7" value="<?php echo $s7;?>"></td>                            
                <td>Reason</td>
                <td><input type="text" name="t8" value="<?php echo $s8;?>"></td>                            
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
<div>
</body>
</html>


        
 