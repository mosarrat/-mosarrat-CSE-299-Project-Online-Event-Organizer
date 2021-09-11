<?php include('partials-front/menu.php');?>
<?php 

$query = " select * from appointment order by id desc limit 1";
$result = mysqli_query($con,$query);

?>
      <!--sercice-search section starts here-->
      <section class="service-search">
        <div class="container">
            <div class="order">
                <div class="c-details">
                <?php 
                               
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $id = $row['id'];
                        $event_title=$row['event'];
                        $date=$row['date'];
                        $time=$row['time'];
                        $customer_name = $row['customer_name'];
                        $customer_contact= $row['customer_contact'];
                        $customer_email = $row['customer_email'];
                        $customer_address= $row['customer_address'];
                        //$Password = $row['Password'];
                       ?>
                               
                                   <p>
                                   <div class="text-center"><img src="https://img.icons8.com/ios-filled/50/fa314a/reading-confirmation.png"/></div>   
                                   <br>
                                   <b>Event Title:</b> <?php echo $event_title ?><br><br>
                                   <b>Customer Datails</b><br>
                                   <b>Name:</b> <?php echo $customer_name ?><br>
                                   <b>Phone no:</b> <?php echo $customer_contact ?><br>
                                   <b>Email:</b> <?php echo $customer_email ?><br>
                                   <b>Address:</b> <?php echo $customer_address ?><br><br>
                                   <b class="text-center">We will be there on <?php echo $date ?> at <?php echo $time ?></b></p><br>
                                   <div class="text-center"> 
                                   <a href="index.php" class="btn1 btn-primary ">OK</a>
                                   </div>
                                  
                                
                       <?php 
                               }  
                               mysqli_free_result($result);
                               mysqli_close($con);
                       ?>  

                </div>        
            </div>
        </div>
    </section>
