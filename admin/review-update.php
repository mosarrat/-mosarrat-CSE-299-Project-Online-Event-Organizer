<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $ID = $_GET['ID'];

        $active = $_POST['active'];


        $query = "UPDATE reviews SET Active ='".$active."' WHERE id='".$ID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:manage-review.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:manage-review.php");
    }


?>