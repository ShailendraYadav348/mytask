<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <h1>Contact Book</h1>
  <form action="data.php" method="post" name="form1">
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
