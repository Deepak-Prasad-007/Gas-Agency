<?php
session_start();
?>
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
        <h1><a href="index.html">Gas<span> Agency Management System</span> <small></small></a></h1>     
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="login.php"><span>Home Page</span></a></li>
          <li><a href="Consumer_Request.php"><span>Booking</span></a></li>
          <li><a href="Consumer_History.php"><span>History</span></a></li>
          <li><a href="Consumer_Profile.php"><span>profile</span></a></li>
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
   <div style="background-color:white">
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Consumer_History Detail</span></h2>        
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>            
                <table border="1" width="150%">
                <tr style='background-color:blue;color:white'>
                    <td>Booking No</td>
                    <td>Date</td>
                </tr>
                <?php
                 $cno=$_SESSION["uid"];
                 $s1="";
                    $db=mysql_connect("localhost","root","");
                    mysql_select_db("agency",$db);     
                    $result=mysql_query("select Booking_No,dat from request where C_no='$cno'",$db);
                    while($row=mysql_fetch_array($result))
                        {                        
                        echo "<tr style='background-color:#ccfcc'>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "</tr>";
                    }
                    mysql_close();
                ?>
            </table>          
        </div>
    </section>
  </div>
</div>
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

