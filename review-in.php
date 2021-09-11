<?php 
    
    require_once("admin/connection.php");
    if(isset($_POST['submit']))
    {
        //get details
        //customar details
        $c_name=$_POST['full-name'];
        $c_email=$_POST['email'];
        $rev = $_POST['review'];
        $active = "No";

        
        $query = " insert into reviews (Full_Name,Email,review,Active)
                values('$c_name','$c_email','$rev','$active')";
       
        //execution query
        $result = mysqli_query($con,$query);
        
        if($result)
            {
                header("location:review.php");
            }
            else
            {
                echo '  Please Check Your Data ';
            }

    }
    
?>