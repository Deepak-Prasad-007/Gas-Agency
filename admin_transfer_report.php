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
        <h1><img src="images/logo1.jpg" width="120px"><a href="index.html"><span> Gas Agency Management System</span><small></small></a></h1>       </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
         <li class="active"><a href="login.php"><span>Home Page</span></a></li>
          <li><a href="Admin_Report.php"><span>Report</span></a></li>
          <li><a href="Admin_Other.php"><span>Other</span></a></li>
          <li><a href="Contact_us.php"><span>Contact Us</span></a></li>
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
     <div style="background-color:white;width:1380px">
  <div class="content">
    <div >
      <div >
        <div >
          <h2>Transfer_Report</h2>          
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>            
                <table border="1" width="100%">
                <tr style='background-color:blue;color:white'>
                    <td>Transfer Id</td>
                    <td>Transfer Date</td>
                    <td>Transfer Code</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Code</td>
                    <td>Applicant Name</td>
                    <td>Address</td>
                    <td>Pincode</td>
                    <td>Category</td>
                    <td>Document Type</td>
                    <td>Number</td>
                    <td>Date</td>
                    <td>Oil Company</td>
                </tr>
                <?php
                    $db=mysql_connect("localhost","root","");
                    mysql_select_db("agency",$db);     
                    $result=mysql_query("select * from transfer",$db);
                    while($row=mysql_fetch_array($result))
                    {                       
                        echo "<tr style='background-color:#ccfcc'>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "<td>$row[4]</td>";
                        echo "<td>$row[5]</td>";
                        echo "<td>$row[6]</td>";
                        echo "<td>$row[7]</td>";
                        echo "<td>$row[8]</td>";
                        echo "<td>$row[9]</td>";
                        echo "<td>$row[10]</td>";
                        echo "<td>$row[11]</td>";
                        echo "<td>$row[12]</td>";
                        echo "<td>$row[13]</td>";                        
                        echo "<td><a href='transfer_edit.php?T_id=$row[0]'>Edit</a></td>";
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



