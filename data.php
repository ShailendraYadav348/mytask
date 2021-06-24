<?php  
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$address=$_POST["address"];

$servername="localhost";
       $username="root";
       $password="";
       $dbname="mydb";
       

    $conn = new mysqli($servername,$username,$password,$dbname);
 
    if($conn->connect_error)
    {
        die("connection failed:".$conn->connect_error);
    }
    
    if(isset($_POST['add']))
    {
    	$insert_query="insert into user(Name,Mobile,Email,Address) values('$name','$mobile','$email','$address')";
    	if($conn->query($insert_query))
   		{
	        echo "
	        <script>

	        alert('New record inserted successfully');
	         window.location.href='index.php';
	        </script>
	        ";
	       
	    }
	    else
	    {
	    	echo "
	        <script>

	        alert('can not insert');
	         window.location.href='index.php';
	        </script>
	        ";
	    }
    }
   
    if(isset($_POST['delete']))
    {
    	$query="delete from user where Mobile=$mobile";
    	if($conn->query($query))
   		{
	        echo "
	        <script>

	        alert('record deleted successfully');
	        window.location.href='index.php';
	        </script>
	        ";
	       
	    }
	    else
	    {
	    	echo "
	        <script>

	        alert('Can not delete');
	        window.location.href='index.php';
	        </script>
	        ";
	    }
    }
   
   if(isset($_POST['modify']))
    {
    	$query1 = "UPDATE user SET Name = '$name' WHERE Mobile =     $mobile";
    	if($conn->query($query1))
   		{
	        echo "
	        <script>

	        alert('record updated successfully');
	        window.location.href='index.php';
	        </script>
	        ";
	    }
	    else
	    {
	    	echo "
	        <script>

	        alert('Can not update');
	        window.location.href='index.php';
	        </script>
	        ";
	    }
    }
    

 
?>
