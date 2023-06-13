<?php   
$msg="";
if(isset($_POST["submit"]))
{
    $tid=$_POST["t1"];
    $tdate=$_POST["t2"];
    $dname=$_POST["t3"];
    $daddr=$_POST["t4"];
    $dcode=$_POST["t5"];
    $name=$_POST["t6"];
    $addr=$_POST["t7"];  
    $pc=$_POST["t8"]; 
    $category=$_POST["t9"];
    $doct=$_POST["t10"];
    $docno=$_POST["t11"];
    $docdat=$_POST["t12"];
    $oc=$_POST["t13"];
$db=mysql_connect("localhost","root","");
mysql_select_db("agency",$db);
mysql_query("insert into transfer values('$tid','$tdate','$dname','$daddr','$dcode','$name','$addr','$pc','$category','$doct','$docno','$docdat','$oc')",$db);
mysql_close();
}
$c=0;
$db=mysql_connect("localhost","root","");
mysql_select_db("agency",$db);
$result=mysql_query("select count(T_id) from transfer",$db);
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
      <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Operator_Transfer Detail</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>            
    <html>
    <body>
        <form method="post" action="Operator_Transfer.php"><br><br>
        <table width="170%"  style="font-size:18px;color:black;font-family:Times New Roman">                     
            <tr>
                <td>Transfer Id</td>
                <td><input type="text" name="t1" value="<?php echo $c;?>"></td>
            </tr>
            <tr>
                <td>Transfer Date</td>
                <td><input type="text" name="t2"></td> 
             </tr>
            <tr>
                <td>Transfer Code</td>
                <td><input type="text" name="t3"></td>    
            </tr>
            <tr>
                 <td><h4>Distributor</h4></td>
            </tr>
              <tr>
                <td>Name</td>
                <td><input type="text" name="t4"></td> 
              </tr>
            <tr>
                 <td>Address</td>
                <td><input type="text" name="t5"></td> 
             </tr>
            <tr>
               <td>Code</td>
                <td><input type="text" name="t6"></td>
            </tr>
            <tr>
                 <td><h4>Customer</h4></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="t7"></td>                          
                <td>Address</td>
                <td><input type="text" name="t8"></td>   
            </tr>
            <tr>
                <td>Pincode</td>
                <td><input type="text" name="t9"></td>                          
                <td>Category</td>
                <td><input type="text" name="t10"></td>   
            </tr>
            <tr>
                <td><h4>Previous Document</h4></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><input type="text" name="t11"></td>                          
                <td>Number</td>
                <td><input type="text" name="t12"></td>   
           </tr>
            <tr>
                <td>Date</td>
                <td><input type="text" name="t13"></td>                          
                <td>Oil Company</td>
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



     