<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<script>
function validate_email(field,alerttxt)
{
with (field)
  {
  apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  if (apos<1||dotpos-apos<2)
    {alert(alerttxt);return false;}
  else {return true;}
  }
}

function validate_form(thisform)
{
var x = document.forms["myform"]["username"].value;
if (x == null || x == "") {
alert("Name must be filled out");
return false;
}
var y = document.forms["myform"]["email"].value;
if (y == null || y == "") {
alert("email must be filled out");
return false;
}
with (thisform)
  {
  if (validate_email(email,"Not a valid e-mail address!")==false)
    {email.focus();return false;}
  }
}
function check_v_pass(field, output) {
	    pass_buf_value = document.getElementById(field).value;
	    pass_level = 0;
	    if (pass_buf_value.match(/[a-z]/g)) {
	        pass_level++;
	    }
	    if (pass_buf_value.match(/[A-Z]/g)) {
	        pass_level++;
	    }
    if (pass_buf_value.match(/[0-9]/g)) {
	        pass_level++;
	    }
	    if (pass_buf_value.length < 5) {
	        if(pass_level >= 1) pass_level--;
	    } else if (pass_buf_value.length >= 20) {
	        pass_level++;
	    }
	    output_val = '';
	    switch (pass_level) {
	        case 1: output_val='Weak'; break;
	        case 2: output_val='Normal'; break;
        case 3: output_val='Strong'; break;
	        case 4: output_val='Very strong'; break;
	        default: output_val='Very weak'; break;
	    }
	    if (document.getElementById(output).value != pass_level) {
	        document.getElementById(output).value = pass_level;
	        document.getElementById(output).innerHTML = output_val;
	    }
	    return 1;	}
- See more at: http://www.script-tutorials.com/form-validation-with-javascript-and-php/#sthash.sLYZugwO.dpuf
</script>
<title>Tutorial Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style3.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]><style type="text/css">div { behavior: url(iepngfix.htc); }</style><![endif]-->
</head>

<body>
<!-- <img src="images/login.gif" style="position:absolute;top:380px;left:506px">-->
<div id="container_wrapper1">
  <div id="container_wrapper2">
    <div id="container">
	  <!--Header-->
      <div id="header">
        <div id="logo">
          <div id="site_slogan"> </div>
		  
        </div>
      </div>
	  <!--End of Header-->
      <div id="menu">
<ul>
          <li><a href="home.php" target="_blank" class="current">Home</a></li>
          <li><a href="blog.php"  target="_blank">Blog</a></li>
		  <li><a href="archive.php" target="_blank">Archive</a></li>
          <li><a href="noticeboard.php" target="_blank">Notice Board</a></li>
		   <li><a href="#" target="_blank">About</a></li>
		  <li><a href="search.php" target="_blank">Search</a></li>
          <li><a  href="log_in_page.php" target="_blank">Log in</a></li>
		  
        </ul>
      </div>
	   <!--End of Menu-->
      <div id="content">
        <div id="left_column">
          <div class="postbody">
            
          </div>
<!--End of shadmans blog-->

        
          <div class="postbody">
		
		<!--<form action="register_process.php" method="post" style="position:absolute;top:300px;left:430px">
					<fieldset style="width:50%;margin:100px auto;"><legend style="color:blue;font-family:Arial;font-weight:bold"><I>Registration Form</I></legend>
						<table border="0">
							<tr>

								<tr><td style="color:blue;font-family:Arial;font-weight:bold"><I>Username</I>:</td><td><input type="text"  name="username" style="padding:10px 45px" required /></td></tr>

								<tr><td style="color:blue;font-family:Arial;font-weight:bold"><I>Email</I>:</td>	<td><input type="text"  name="email" style="padding:10px 45px"required/></td></tr>

								<tr><td style="color:blue;font-family:Arial;font-weight:bold"><I>password</I>:</td><td><input type="password"  name="password" style="padding:10px 45px" required /></td></tr>

								<tr><td style="color:blue;font-family:Arial;font-weight:bold"><I>contact Number</I>:</td><td><input type="text"  name="contact" style="padding:10px 45px" required /></td></tr>

								
								

								<tr>
									<td><input id="button" type="submit" name="submit" value="Submit" style="color: #000000;
	
	                    font-weight: bold;padding:2px"/></td>
									
								</tr>
							</tr>
		

						</table>
					</fieldset>
				</form>	-->
       
        </div>
		  
		  <!--End of Why Progamming-->  
          <div class="postbody">
           
            <div class="publish_info"></div>
           
           
          </div>
        </div>
		
		 <!--End of Story of succes-->
        <div id="right_column">
          <div class="section">

          </div>
          <div class="section">
            
            
          </div>
          <div class="section">
               
          </div>
          <div class="section">

          </div>
        </div>
      </div>
      <div id="bottom"></div>
      <div id="footer"> 
        Copyright © sakib </div>
    </div>
  </div>
</div>
  <div id="log_in_frame">
          
		  </div>
		  
		    <div class="log_in_form"    style="position:absolute;top:350px;left:450px ;width:400px; height:400px">
		     
			
			
			 <h5>Registration Form</h5>
 
    <form name="myform" action="process/register_process.php" method="post" onsubmit="return validate_form(this);">
 
        <input type="text" name="username" placeholder="Username" required>
 </br>
        <input type="text"  name="email" placeholder="Email" required/>
 </br>
        
         <input type="password"  name="password" placeholder="Password"  required/>
 </br>
        <input type="text"  name="contact" placeholder="Contact Number" required />
  </br>
   </br>
        <input name="submit" type="submit" value="Submit" style="background-color:#a5cd4e">
		
 
    </form>
            </div>
		  
		  
		      
</body>
</html>
