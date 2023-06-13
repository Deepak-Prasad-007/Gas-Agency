<?php   
$msg="";
if($_POST["submit"])
{
    $SN=$_POST["t1"];
    $Dt=$_POST["t2"];
    $FC=$_POST["t3"];
    $Dam=$_POST["t4"];
    $EC=$_POST["t5"];
$db=mysql_connect("localhost","root","");
mysql_select_db("agency",$db);
mysql_query("insert into stock values('$SN','$Dt','$FC','$Dam','$EC')",$db);
mysql_close();
echo "record inserted successfully";
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
            <h2>Operator_Stock Detail</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>           
            <html>
    <body>    
             <form method="post" action="Operator_Incoming.php">
            <table width="180%" style="font-size:18px;color:black;font-family:Times New Roman">   
            <tr>
                <td>S.No.</td>
                <td><input type="text" name="t1"></td>
             </tr>
             <tr>   
                <td>Date</td>
                <td><input type="text" name="t2"></td>                            
             </tr>
              <tr>
                <td>Filled Cylinder</td>
                <td><input type="text" name="t3"></td>
             </tr>
             <tr>
                <td>Damage Cylinder</td>
                <td><input type="text" name="t4"></td>                                            
            </tr>
            <tr>
                <td>Empty Cylinder</td>
                <td><input type="text" name="t5"></td>                                          
            </tr
             <tr>
                 <td></td>
                <td><input type="Submit" name="submit" value="Submit"></td>                
            </tr>
            </table>       
        <?php echo "$msg";?>                                          
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

        