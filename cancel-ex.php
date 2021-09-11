<?php 
    
    include("admin/connection.php");

?>
 <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" a href="css/bootstrap.css"/>
    <!--search section starts here -->
    <section class="search">
        <div class="container">
        <form action="cancel-in.php" method="POST">
        <?php
            //get search key word
            $search=$_POST['search1'];
        ?>
          

        </div>
    
    <!--search section ends here -->
    <!--Presenting data starts-->
    <?php 

        $query = " select * from appointment where customer_contact LIKE '%$search%' or customer_email like '%$search%' and status='Appoint' limit 1";
        $result = mysqli_query($con,$query);

    ?>
      <!--sercice-search section starts here-->
        <div class="container">
            <div class="order">
                <div class="c-details">
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
                               
                               <h2 class= "text-center">"Please Confirm Your Details"</h2><br>
                               <p>
                                <b>Customer Datails:</b><br>
                                <b>Name:</b> <?php echo $customer_name ?><br>
                                <input type="hidden" name="full-name" value="<?php echo $customer_name; ?>">
                                <b>Phone no:</b> <?php echo $customer_contact ?><br>
                                <input type="hidden" name="contact" value="<?php echo $customer_contact; ?>">
                                <b>Email:</b> <?php echo $customer_email ?><br>
                                <input type="hidden" name="email" value="<?php echo $customer_email; ?>">
                                <b>Address:</b> <?php echo $customer_address ?><br><br>
                                <input type="hidden" name="address" value="<?php echo $customer_address; ?>">
                                <b>Appoint Details:</b><br>
                                <b>Event:</b><?php echo $event_title ?><br>
                                <input type="hidden" name="stitle" value="<?php echo $event_title; ?>">
                                <b>Price:</b>Tk.<?php echo $price ?><br>
                                <input type="hidden" name="price" value="<?php echo $price; ?>">                                 
                                <b>Date:</b><?php echo $date?><br>
                                <input type="hidden" name="date" value="<?php echo $date; ?>">
                                <b>Time:</b><?php echo $time?><br>
                                <input type="hidden" name="time" value="<?php echo $time; ?>">              
                                <b>Preference:</b><?php echo $pre ?><br>
                                <input type="hidden" name="preference" value="<?php echo $pre; ?>">
                                <b>Appoint Taken on:</b><?php echo $appoint_dat ?><br>
                                <input type="hidden" name="a-date" value="<?php echo $appoint_dat; ?>">
                               </p><br>
                               <div class="text-center"> 
                                   <input type="submit" name="copy" value="Cancel Appointment" class="btn btn-success">
                                   <a href="index.php" class="btn btn-info">Back to Home</a>
                                </div>
                                  
                                
                       <?php 
                               }  
                               mysqli_free_result($result);
                               mysqli_close($con);
                       ?>  

                </div>        
            </div>
        </form>
        </div>
    </section>
    
