<?php   
$msg="";
if($_POST["submit"])
{
    $Did=$_POST["t1"];
    $Ddat=$_POST["t2"];
    $svr=$_POST["t3"];
    $cno=$_POST["t4"];
    $cname=$_POST["t5"];
    $addr=$_POST["t6"];  
    $phone=$_POST["t7"];
    $reason=$_POST["t8"];
$db=mysql_connect("localhost","root","");
mysql_select_db("agency",$db);
mysql_query("insert into disconnect values('$Did','$Ddat','$svr','$cno','$cname','$addr','$phone','$reason')",$db);
mysql_query("update connection set flag='close' where C_No='$cno'",$db);
mysql_close();
echo "record insert successfully";
}
$c=0;
$db=mysql_connect("localhost","root","");
mysql_select_db("agency",$db);
$result=mysql_query("select count(Booking_No) from request",$db);
while($row=mysql_fetch_array($result))
{
   $c=$row[0];
}
mysql_close();
$c=$c+101;
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
          <h2>Operator_Disconnection Detail</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>           
           <html>
    <body>
        <form method="post" action="Operator_Disconnect.php"><br><br>
        <table width="180%"  style="font-size:18px;color:black;font-family:Times New Roman">                            
            <tr>
                <td>Disconnect Id</td>
                <td><input type="text" name="t1" value="<?php echo $c;?>"></td>                          
                <td>Disconnect Date</td>
                <td><input type="text" name="t2" value="<?php echo date('m/d/y');?>"></td>                            
             </tr>
              <tr>
                <td>SVR No</td>
                <td><input type="text"name="t3" ></td>    
                 <td>Consumer No</td>
                <td><input type="text" name="t4"></td> 
             </tr>
            <tr>
                <td>Consumer Name</td>
                <td><input type="text"name="t5" ></td>    
                 <td>Address</td>
                <td><input type="text" name="t6"></td> 
             </tr>
            <tr>
                <td>phone no</td>
                <td><input type="text" name="t7"></td>                                                            
             </tr><br><br><br>
                         <tr>
                             <td><h4>Reason</h4></td>
                             <td><textarea name"t8t" rows="3"></textarea></td>
                         </tr>
             <tr>
                 <td></td>
                <td><input type="Submit" name="submit" value="Submit"></td>                
            </tr>
            </table>
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




     