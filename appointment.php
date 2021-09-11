<?php include('partials-front/menu.php');?>
<?php
    //check id
    if(isset($_GET['service_id']))
    {
        //get id
        $service_id = $_GET['service_id'];
        //get category title based on category id
        $query = "select * from event where Id='$service_id'";
        //executation
        $result = mysqli_query($con,$query);
        //count row
        $rows = mysqli_num_rows($result);
        if($rows==1)
        {            
            //get data from database
            $row = mysqli_fetch_assoc($result);
            $event_title = $row['Title'];
            $price = $row['Price'];
            $discription = $row['Description'];
            $image_name = $row['Image_Name'];
        
        }
        else
        {
            //go to homepage
            header("location:index.php");
        }

    }
    else
    {
        //go to homepage
        header("location:index.php");
    }
?>

      <!--sercice-search section starts here-->
      <section class="service-search">
        <div class="container">
            <h2 class="text-center text-color">Fill this form to confirm your Appoinment.</h2>
            <form action="Confirm_appointment.php" method="POST" class="order">
                
                     <div class="package-details float-container">
                     <?php
                         
                         if($image_name==" ")
                         {
                          echo "<div class='error'>Image unavailable</div>";
                         }
                         else
                         {
                           ?>
                              <img src="images/service/<?php echo $image_name?>"  alt="birthday" class="img-responsive img-curve">
                           
                           <?php
                         }
                      ?>
                     </div>
                     <div class="package-desc">
                       <div class="event-menu-desc">
                           <h4><?php echo $event_title;?></h4>
                           <input type="hidden" name="stitle" value="<?php echo $event_title; ?>">
                           <p class="price">Tk.<?php echo $price;?></p>
                           <input type="hidden" name="price" value="<?php echo $price;?>">
                           <p class="details">
                              <?php echo $discription;?>
                           </p><br>
                           <div class="order-lebel"><b>Date</b></div>
                           <input type="date" name="date"class="input-responsive" required>
                           <div class="order-label">Time of Event:</div>
                           <div class="input-responsiv" required>
                             <select name="time">
                                <option value="Prefard Time"></option>
                                <option value="Afternoon">Afternoon</option>
                                <option value="Afternoon">Evening</option>
                             </select>
                           </div>
                       </div>
                    </div>
                
                
               
               <div class="c-details">
               <h3 class="text-center"><b>Appointment Details</b></h3>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. MS Kabir" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 018xxxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. vi@mskabir.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="4" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>
                     
                    <div class="order-label">Preferences</div>
                    <textarea name="preference" rows="6" placeholder="If Nothing Then Please write 'None'" class="input-responsive"></textarea>

                    <input type="submit" name="submit" value="Confirm Appointment" class="btn1 btn-primary">
                </div>    
                
            </form>
            
        </div>
    </section>
    <!--sercice-search section starts here-->

<?php include('partials-front/footer.php');?>