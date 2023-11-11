<?php
    include 'Partial/_dbconnect.php';

if(isset($_POST['upload']))
{
    $maxsize = 5242880; //5MB
    if(isset($_FILES['file']['titlevideo']) && $_FILES['file']['titlevideo'] != '')
    {
        $name = $_FILES['file']['titlevideo'];
        $titleDir = "Video/";
        $titlefile = $titleDir.$_FILES['file']['titlevideo'];

        //select file type
        $extension = strtolower(pathinfo($titlefile,PATHINFO_EXTENSION));

        //valid file extensions
        $extension_arr = array("mp4", "avi", "3gp", "mov", "mpeg");

        //check extension
        if(in_array($extension, $extension_arr))
        {
            //check file size
            if(($_FILES['file']['size']>=$maxsize) || ($_FILES["file"]["size"] == 0))
            {
                $_SESSION['message'] = "File to large. file must be less tha 5MB.";
            } 
            else
            {
                //upload
                if(move_uploaded_file($_FILES['file']['tmp_name'],$titlefile))
                {
                    //insert record
                    $query = "INSERT into Video (name,location) VALUES ('.$name','.$titlefile')";

                    mysqli_query($con,$query);
                    $_SESSION['message'] = "Invalid file extension.";
                }
            }
        }
        else
            {
                $_SESSION['message'] = "Please select a file.";   
            }
    }
    header('location: Add ServiceTitle.php');
    exit;
}

?>

<!doctype html>
<html>
    <head>
        <title>Videos</title>
</head>
<body>
    <div>

    <?php
    $fetchVideo = mysqli_query($con, "SELECT * FROM Video OREDR BY id DESC");
    while($row = mysqli_fetch_assoc($fetchVideo))
    {
        $location = $row['location'];
        $name = $row['name'];

        echo "<div style='float: left; margin-right:5px;'>
            <video src=".$location." controls width='320px' height='320px'></video>
            <br>
            <span>".$name."</span>
            </div>";
    }
    ?>
    </div>
</body>
</html>