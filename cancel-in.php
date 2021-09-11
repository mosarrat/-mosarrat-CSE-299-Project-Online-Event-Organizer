<?php 
    
    require_once("admin/connection.php");
    if(isset($_POST['copy']))
    {
        //get details
        //customar details
        $c_name=$_POST['full-name'];
        $c_contact=$_POST['contact'];
        $c_email=$_POST['email'];
        $c_address=$_POST['address'];
        $event_title = $_POST['stitle'];
        $price = $_POST['price'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $pre = $_POST['preference'];
        $appoint_dat=$_POST['a-date'];//appoinment made time
       // $status="Appoint";// Appoint, Working, Done, Cancelled
        
        $query = " insert into cancel (customer_name,customer_contact,customer_email,customer_address,event,price,date,time,preference,appointment_made)
                values('$c_name','$c_contact','$c_email','$c_address','$event_title','$price','$date','$time','$pre','$appoint_dat')";
       
        //execution query
        $result = mysqli_query($con,$query);
        
        if($result)
            {
                header("location:message.php");
            }
            else
            {
                echo '  Please Check Your Data ';
            }

    }
    
?>