<?php
 session_start();
    $id=$_SESSION["uid"];
    $C_No=$_SESSION["C_No"];
    $msg="";
    if($_POST["submit"])
    {
        $C_No=$_POST["t1"];
        $pno=$_POST["t4"];
        $sw=$_POST["t5"];       
        $db=mysql_connect("localhost","root","");
        mysql_select_db("agency",$db);        
        mysql_query("update connection set P_No='$pno',S_W='$sw' where C_No='$C_No'",$db);
        mysql_close();
        $msg="<span style='color:green'>Record Inserted Successfully...</span>";
    }          
        $P_No="";
        $S_W="";
        $C_no=$_SESSION["uid"];    
        $db=mysql_connect("localhost","root","");
        mysql_select_db("agency",$db);    
        $result=mysql_query("Select P_No,S_W from connection where C_No='$C_no'",$db);
        while($row= mysql_fetch_array($result))
        {            
            $P_No=$row[0];
            $S_W=$row[1];           
        }
        mysql_close();         
        $C_no=$_SESSION["uid"];
        $C_name="";
        $C_type="";       
        $db=mysql_connect("localhost","root","");
        mysql_select_db("agency",$db);        
        $result=mysql_query("Select C_no,C_name,C_type from request where C_no='$C_no'",$db);
        while($row= mysql_fetch_array($result))
        {            
            $C_no=$row[0];
            $C_name=$row[1];
            $C_type=$row[2];            
        }
        mysql_close();                
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
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Consumer profile</h2>         
          <div class="clr"></div>
          <div class="img"></div>
          <div class="post_content">
            <p>           
            <html>
            <body>
            <form method="post" action="Consumer_Profile.php"><br><br>
              <table width="170%" style="font-size:18px;color:black;font-family:Times New Roman">                   
            <tr>
                <td>Consumer No</td>
                <td><input type="text" value="<?php echo $C_no;?>" name="t1"></td> 
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" value="<?php echo $C_name;?>" name="t2"></td>                            
            </tr>
            <tr>
                <td>Connection Type</td>
                <td><input type="text" value="<?php echo $C_type;?>" name="t3"></td>     
            </tr>
            <tr>
                <td>Phone No.</td>
                <td><input type="text" value="<?php echo $P_No;?>"  name="t4"></td>                                                          
            </tr>
            <tr>
                <td>Father Name</td>
                <td><input type="text" value="<?php echo $S_W;?>"  name="t5"></td>      
            </tr>
            <tr>
                <td><input type="Submit" name="submit" value="Edit"></td> 
                <td><a href="Consumer_change_pwd.php">Change Password</a></td>
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

