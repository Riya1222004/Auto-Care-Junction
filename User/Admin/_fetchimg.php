<?php
    include 'Partial/_dbconnect.php';
    
    if(isset($_POST['Add']))
    {
        $filename = $_FILES["titleimg"]["name"];
        $tempname = $_FILES["titleimg"]["name"];
        $folder = "image/".$filename;

        $con = mysqli_connect("localhost", "root", "", "acj");
        
        $sql = "INSERT INTO titleimg (file_name) VALUES ('$filename')";

        //execute query
        mysqli_query($con, $sql);

        if(move_uploaded_file($tempname, $folder))
        {
            $msg = "Image uploaded successfully";
        }
        else
        {
            $msg = "Failed to upload image";
        }
    }
    $result = mysqli_query($con, "SELECT * FROM titleimg");
    while($data = mysqli_fetch_array($result))
    {
        ?>
        <img src="<?php echo $data['Filename']; ?> ">
<?php
    }
?>