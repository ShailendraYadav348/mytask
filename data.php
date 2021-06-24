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
    	if(strlen($mobile)===10 && is_numeric($mobile))
    	{
      	$flag=0;
      	$select_query="select Mobile from user";
      	$result=$conn->query($select_query);
      	while ($row = mysqli_fetch_assoc($result)) 
      	{
      		if($row['Mobile']!=$mobile)
      		{
      			$flag=1;
      		}
      		else
      		{
      			$flag=0;
      			break;
      		}
      	}
      	if($flag==1)
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
	    else
	    {
	    	echo "
	        	<script>

	        	alert('mobile number already registered');
	         	window.location.href='index.php';
	        	</script>
	        	";
	    }
		
		
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
