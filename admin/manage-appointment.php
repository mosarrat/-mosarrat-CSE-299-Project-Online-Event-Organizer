<?php include('partials/menu.php');?>

<!--Main Contain section starts-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" a href="../css/bootstrap.css"/>
<link rel="stylesheet" href="../css/admin-new.css">
</head>
<body>
  <div class= "main-contain w-100">
     
        <div class ="wrapper">
           <h3>Manage Appointment <img src="https://img.icons8.com/material-rounded/24/fa314a/appointment-scheduling.png"/></h3>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                <?php 

                 require_once("connection.php");
                 $query = " select * from appointment order by date asc";
                 $result = mysqli_query($con,$query);
                 $sn = 1;
                 if(mysqli_num_rows($result)> 0)
                 {

                 ?>
                    <table class="table table-bordered">
                    <thead>
                        <tr class="bg-warning">
                            <th scope="col">ID</th>
                            <th scope="col">Event-Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Appointment On</th>                          
                            <th scope="col">Time</th>                       
                            <th scope="col">Customer Name</th>
                            <th scope="col"> Customer Contact</th>
                            <th scope="col"> Customer Email</th>
                            <th scope="col"> Customer Address</th>
                            <th scope="col"> Preferences</th>
                            <th scope="col"> Appointment Made</th>
                            <th scope="col"> Status</th>
                            <th scope="col" class="text-center py-3"> Action</th>

                        </tr>
                        </thead>

                        <?php 
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $ID = $row['id'];
                                    $event_title = $row['event'];
                                    $price = $row['price'];
                                    $date = $row['date'];
                                    $time = $row['time'];                                    
                                    $customer_name = $row['customer_name'];
                                    $customer_contact= $row['customer_contact'];
                                    $customer_email = $row['customer_email'];
                                    $customer_address= $row['customer_address'];
                                    $pre = $row['preference'];
                                    $appoint_dat = $row['appointment_made'];
                                    $status = $row['status'];
                                    
 
                        ?>
                                <tr>
                                    <td><?php echo $sn++?></td>
                                    <td><?php echo $event_title ?></td>
                                    <td>Tk.<?php echo $price ?></td>                                    
                                    <td><?php echo $date?></td>
                                    <td><?php echo $time?></td>
                                    <td><?php echo $customer_name?></td>
                                    <td><?php echo $customer_contact?></td>
                                    <td><?php echo $customer_email?></td>
                                    <td><?php echo $customer_address?></td>
                                    <td><?php echo $pre ?></td>
                                    <td><?php echo $appoint_dat ?></td>
                                    <td class ="table-info"><?php echo $status ?></td>

                                    <td class="text-center"> 
                                    <a href="appointment-edit.php?GetID=<?php echo $ID ?>" class="btn btn-success ">Edit</a>
                                   
                                    </td>

                                </tr>        
                        <?php 
                            }  
                        ?>                                                                    
                    </table>
                    <?php 
                            }  
                        ?> 
                </div>
            </div>
        </div>
    
</div>

</body>
</html>
       <!--Main Contain section ends-->
       
<?php include('partials/footer.php');?>