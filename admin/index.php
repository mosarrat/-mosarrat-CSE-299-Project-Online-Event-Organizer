
<?php include('partials/menu.php');?>
<?php 
    require_once("connection.php");
?>

       <!--Main Contain Starts Here-->
       <div class="main-contain">
           <div class="wrapper">
               <h1>Dashboard</h1>
                <br>
               <div class="col-4 text-center">
               <?php
                 $query = " select * from category";
                 $result = mysqli_query($con,$query);
                 $rows = mysqli_num_rows($result);
                 ?>
                 <h1><?php echo $rows;?></h1>
                   <br>
                   Categories 
                  <div class="text-right"><img src="https://img.icons8.com/material/24/fa314a/category.png"/></div>  
               </div>
               
               <div class="col-4 text-center">
               <?php
                 $query2 = " select * from event";
                 $result2 = mysqli_query($con,$query2);
                 $rows2 = mysqli_num_rows($result2);
                ?>
                   <h1><?php echo $rows2;?></h1>
                   <br>
                   Events
                   <div class="text-right"><img src="https://img.icons8.com/ios-glyphs/24/fa314a/circus-tent.png"/></div>
               </div>
               
               <div class="col-4 text-center">
               <?php
                 $query3 = " select * from appointment";
                 $result3 = mysqli_query($con,$query3);
                 $rows3 = mysqli_num_rows($result3);
                ?>
                   <h1><?php echo $rows3;?></h1>
                   <br>
                   Appointment
                   <div class="text-right"><img src="https://img.icons8.com/material-rounded/24/fa314a/appointment-scheduling.png"/></div>
               </div>
               
               <div class="col-4 text-center">
               <?php
                 $query4 = " SELECT SUM(price) AS Price FROM appointment WHERE status='Completed'";
                 $result4 = mysqli_query($con,$query4);
                 $rows4 = mysqli_fetch_assoc($result4);
                 $Total_revenue = $rows4['Price'];
                ?>

                   <h1><?php echo $Total_revenue; ?></h1>
                   <br>
                   Revenue Generated
                   <div class="text-right"><img src="https://img.icons8.com/material-sharp/24/fa314a/us-dollar--v2.png"/></div>
            </div>  
            <div class="clearfix"></div>
           </div>
       </div>
       <!--Main Contain Starts Here-->

    <?php include('partials/footer.php');?>