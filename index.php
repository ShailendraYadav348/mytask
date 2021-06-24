<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script>
function validateform()
{  
var mobile=document.form1.mobile.value;  
if (mobile.length==10 && !isNaN(mobile))
{  
  if(mobile.startsWith("9")||mobile.startsWith("8")||mobile.startsWith("7"))
  {
    return true; 
  }
  else
  {
    alert("Mobile number is not valid");
    return false;
  }
  
  }
  else
  {
    alert("Must be atleast 10 digit or Numeric");
    return false;
  }
}  
</script>
  <h1>Contact Book</h1>
  <form action="data.php" method="post" name="form1" onsubmit="return validateform()">
  	Name:<input type="text" name="name"><br>
  	Mobile:<input type="text" name="mobile" id="mobile"><br>
  	Email:<input type="text" name="email"><br>
  	Address:<input type="text" name="address"><br>
  	<input type="submit" name="add" value="Add">
    <input type="submit" name="delete" value="Delete">
    <input type="submit" name="modify" value="Update">
  </form>

</body>
</html>
