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
          <h2>Operator_Booking Request Detail</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>            
        <html>
    <form method="post" action="Consumer_Request.php">
        <table width="150%"  style="font-size:17px;color:black;font-family:Times New Roman">                         
            <tr>               
                <td>Booking No</td>        
                <td>Consumer No.</td>                                   
                <td>Date</td>                  
                <td>Consumer Name</td>      
                <td>Connection type</td>
                <td>Action</td>
            </tr>
            <?php
             $db=mysql_connect("localhost","root","");
             mysql_select_db("agency",$db);
             $result=mysql_query("select * from request where status='Request'",$db);
             while($row=mysql_fetch_array($result))
             {
                    echo"<tr>";
                    echo"<td>";
                    echo"$row[0]";
                    echo"</td>"; 
                    echo"<td>";
                    echo"$row[1]";
                    echo"</td>"; 
                    echo"<td>";
                    echo"$row[2]";
                    echo"</td>"; 
                    echo"<td>";
                    echo"$row[3]";
                    echo"</td>"; 
                    echo"<td>";
                    echo"$row[4]";
                    echo"</td>"; 
                    echo"<td><a href='Operator_Booking.php?bno=$row[0]'>Get Detail</a></td>";
                    echo"</tr>";
              }
                 mysql_close();
                 ?>
    </table>
</form>
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







      
