<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>login page</title>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
body,td,th {
	font-size: 18px;
	color: #FFFFFF;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-weight: bold;
}
a:link {
	text-decoration: none;
	color: #FFFFFF;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: underline;
	color: #3300FF;
}
a:active {
	text-decoration: none;
	color: #FF0000;
}
.example button{width:50px;
				height:35px;
				float:right;}
.example input{width:200px;
				height:30px;
				float:right;}
#un li
.style1 {color: #000000}
.style1 {color: #000000}
.fo{margin-top:15px;}
-->
</style></head>

<body>
<table bgcolor="#ffffff"  border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>

		
		<table width="1002" height="141" cellpadding="0" cellspacing="0" title="edryty">
  			
			<tr>
    
	<td width="998" height="139">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="20%"><img src="../images/img5.png" width="121" height="80" alt="getPAPER" /></td>
		<td width="60%"><center><img src="../images/img4.png" width="300px" height="120px" alt="getPAPER" /></center></td>
        
			<td width="20%"><center><a href="logout.php"><input name="logout" type="submit" value="LOGOUT" /></a>	</center></td>		
      </tr>
    </table>
      <table width="100%" height="63" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td width="20%" align="center" bgcolor="#009900" class="example"><a href="paper.html">HOME</a></td>
          <td width="20%" align="center" bgcolor="#009900"> <a href="icon.html">SYLLABUS</a> </td>
		  <td width="20%" align="center" bgcolor="#009900"> <a href="icon.html">DOWNLOAD</a> </td>
          <td width="20%" align="center" bgcolor="#009900" class="example"><a href="icon.html">UPLOAD</a></td>
          <td width="20%" align="center" bgcolor="#009900"><a href="registration.php">REGISTRATION</a></td>
        </tr>
      </table>
	  
 <table width="1063" border="0" cellspacing="0" cellpadding="0">
           <tr >
		   <td height="32"><td width="999px" height="451"><form class="example" >
		     
		     <button type="submit" ><i class="fa fa-search"></i></button>
					<input type="text" placeholder="Search.." name="search2" /></form>



  <h1>
    <center>
    <font color="#FF0000" face="Geneva, Arial, Helvetica, sans-serif" size="200px" style="background-color:#999999">LOGIN_FORM</font></center>

  </h1><?php 
  			if(isset($_SESSION["user"]))
				echo "<script> You are alredy login..</script>";
				else
				{
  		?>
  <form method="post" action="dblogin.php">
  			<table width="90%" border="0" cellpadding="3" cellspacing="10" bgcolor="#CCCCCC">
  <tr>
    <td><span class="style1">user_id</span></td>
    <td>:</td>
    <td><input name="user" type="text" /></td>
  </tr>
  
  <tr>
    <td><span class="style1">password</span></td>
    <td>:</td>
    <td><input name="pwd" type="text" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input  type="submit" name="sub" value="submit" /></td>
    <td><input name="reset" type="reset" class="style1" value="reset" /></td>
  </tr>
</table></form>
<?php } ?>

		<hr />
		<table width="1000" border="0" cellspacing="0" cellpadding="0">
        <tr>
<td width="746"><p ><font color="#000000">Write Your Comment.....</font></p><br>
              <textarea name="comment" cols="70" rows="7" wrap="virtual"></textarea>
			  <input type="submit" name="sub" value="post" /> 
<tr >
            <td class="fo" bgcolor="#333333" width="1000px"><div>
			 <div>
                <ul style="float:left; list-style-type:none;">
                  <li><strong><font face="snap ITC" size="100px">getPAPER</font></strong></li>
             </ul>
              </div>
              <div>
                <ul style="float:left;  list-style-type:none;">
                  <li><strong>COMPANY</strong></li>
                  <li><a href="https://www.geeksforgeeks.org/about/">About Us</a></li>
                  <li><a href="https://www.geeksforgeeks.org/careers/">Careers</a></li>
                  <li><a href="https://www.geeksforgeeks.org/privacy-policy/">Privacy Policy</a></li>
                  <li><a href="https://www.geeksforgeeks.org/about/contact-us/">Contact Us</a></li>
                </ul>
              </div>
              
              <div>
                <ul style="float:left;  list-style-type:none;">
                  <li><strong>PRACTICE</strong></li>
                  <li><a href="https://practice.geeksforgeeks.org/courses/">Courses</a></li>
                  <li><a href="https://practice.geeksforgeeks.org/company-tags/">Company-wise</a></li>
                  <li><a href="https://practice.geeksforgeeks.org/topic-tags/">Topic-wise</a></li>
                  <li><a href="https://practice.geeksforgeeks.org/faq.php">How to begin?</a></li>
                </ul>
              </div>
              <div>
                <ul style="float:left;  list-style-type:none;">
                  <li><strong>CONTRIBUTE</strong></li>
                  <li><a href="https://www.geeksforgeeks.org/contribute/">Write an Article</a></li>
                  <li><a href="https://www.geeksforgeeks.org/write-interview-experience/">Write Interview Experience</a></li>
                  <li><a href="https://www.geeksforgeeks.org/internship/">Internships</a></li>
                  <li><a href="https://www.geeksforgeeks.org/how-to-contribute-videos-to-geeksforgeeks/">Videos</a></li>
                </ul>
              </div>
            </div></td>
          </tr>
        </table>
		</td>
  </tr>
  </table>
  
  
 </td>
 </tr></table> 
</body>
</html>



</body>
</html>

