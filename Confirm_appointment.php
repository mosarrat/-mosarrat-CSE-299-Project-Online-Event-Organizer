<?php 
    
    require_once("admin/connection.php");
    if(isset($_POST['submit']))
    {
        //get details
        $event_title = $_POST['stitle'];
        $price = $_POST['price'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        //customar details
        $c_name=$_POST['full-name'];
        $c_contact=$_POST['contact'];
        $c_email=$_POST['email'];
        $c_address=$_POST['address'];
        $pre = $_POST['preference'];
        $appoint_dat=date("y-m-d h:i:sa");//appoinment made time
        $status="Appoint";// Appoint, Working, Done, Cancelled
        
        $query = " insert into appointment (event,price,date,time,customer_name,customer_contact,customer_email,customer_address,preference,appointment_made,status)
                values('$event_title','$price','$date','$time','$c_name','$c_contact','$c_email','$c_address','$pre','$appoint_dat','$status')";
       
        //execution query
        $result = mysqli_query($con,$query);
        
        if($result)
            {
                header("location:confirm.php");
            }
            else
            {
                echo '  Please Check Your Data ';
            }

    }
    
?>