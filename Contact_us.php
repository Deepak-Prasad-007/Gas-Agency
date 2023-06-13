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
        <h1><img src="images/logo1.jpg" width="120px"><a href="index.html"><span> Gas Agency Management System</span><small></small></a></h1>   </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
           <li class="active"><a href="login.php"><span>Home Page</span></a></li>
          <li><a href="Admin_Report.php"><span>Report</span></a></li>
          <li><a href="About_us.php"><span>About Us</span></a></li>
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
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Contact Us</h2>         
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>            
           <form method="post" id="myform" action="Contact_Us.php">
        <table width="170%" style="font-size:15px;color:black;font-family:Times New Roman">            
         <tr> 
             <td style="font-size:20px;color:brown">
                    RituRaj Gas Agency<br>
                    Akash Ganga,Supela<br>
                    987654321
             </td>
             <td>
            <table border="0">                         
                    <tr>
                     <td>User Name</td>
                     <td><input type="text" name="t1"></td>   
                   </tr>
                   <tr>
                       <td>Email ID</td>
                       <td><input type="text" name="t2"></td>
                   </tr>
                   <tr>
                     <td>Message</td>
                     <td><textarea rows="2" name="t3"></textarea></td>
                   </tr>
                <tr>
                   <td><input type="submit" name="submit" value="SUBMIT"</td> 
                </tr>
            </table>
                 </td>
                 </tr>
                 </table>
          </center>
        </form>	
          <?php echo $msg; ?>          
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
