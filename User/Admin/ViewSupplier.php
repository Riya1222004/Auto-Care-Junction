
<?php   
    
        include 'Partial/_dbconnect.php'; 
		$id=$_POST['id'];
		$que="DELETE FROM `supplier` WHERE S_Id=$id";
		$result=mysqli_query($con,$que);
        header('_supplierdetails.php');
    
?>