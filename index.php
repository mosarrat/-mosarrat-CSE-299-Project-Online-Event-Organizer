<?php include('partials-front/menu.php');?> 

    <!--search section starts here -->
    <section class="search text-center">
        <div class="container">
           <form action="event-search.php" method="POST">
               <input type="search" name="search" placeholder="Search Your Event....">
               <button class="btn btn-primary" name="submit">Search</button>
           </form>
        </div>
    </section>
    <!--search section ends here -->

    <!--category section starts here -->
    <section class="category">
        <div class="container">
            <h2 class="text-center">Categories</h2>
            <?php 

               $query = " select * from category where Active='Yes' limit 3";
               $result = mysqli_query($con,$query);
               $rows = mysqli_num_rows($result);
               if($rows>0)
               {
                 while($row=mysqli_fetch_assoc($result))
                 {
                   $ID = $row['Id'];
                   $title = $row['Title'];
                   $image_name = $row['Image_Name'];
                   //$active = $row['Active'];

            ?>
        
            <a href="category-event.php?category_title=<?php echo $title; ?>">
            <div class="box-3 float-container">
            <?php
             //check image name
             if($image_name=="")
             {
               echo "<div class='error'>Image unavailable</div>";
             }
             else
             {
               ?>
               <img src="images/category/<?php echo $image_name?>" alt="Home" class="img-responsive img-curve">
               <?php
             }
            ?>

             <h3 class="float-text text-color"><?php echo $title;?></h3>
            </div>
            </a>

            <?php

                }
            }
            else
            {
              echo"<div class ='error'>Category is not Added</div>";
            }

            ?>
        <div class="clearfix"></div>
        </div>
    </section>
    <!--category section ends here -->
    
    <!--events section starts here -->
    <section class="events">
        <div class="container">
            <h2 class="text-center">Most Popular</h2>

            <?php
            $query2= " select * from event where Active='Yes' limit 6";

            $result2 = mysqli_query($con,$query2);

            $rows2 = mysqli_num_rows($result2);
            if($rows2>0)
            {
             while($row = mysqli_fetch_assoc($result2))
             {
              $ID = $row['Id'];
              $event_title = $row['Title'];
              $price = $row['Price'];
              //$price_des = $row['Price_des'];
              $discription = $row['Description'];
              $image_name = $row['Image_Name'];
              //$category_title = $row['Category_Title'];
             // $active = $row['Active'];
             ?>
                <!--1-->
                 <div class="events-menu">
                   <div class="event-menu-img">
                      <?php
                         
                         if($image_name==" ")
                         {
                          echo "<div class='error'>Image unavailable</div>";
                         }
                         else
                         {
                           ?>
                              <img src="images/service/<?php echo $image_name?>"  alt=" home clean and pest control" class="img-responsive img-curve">
                           
                           <?php
                         }
                      ?>
                     
                   </div>
                   <div class="event-menu-desc">
                      <h4><?php echo $event_title;?></h4>
                      <p class="price">TK.<?php echo $price;?></p>
                      <p class="details"><?php echo $discription;?></p>
                      <br>
                      <a href="appointment.php?service_id=<?php echo $ID;?>" class="btn1 btn-primary">Appoint Now</a>
                   </div>
                 </div>
               <?php
             }
            }
            else
            {
              echo"<div class ='error'>Service is not Added</div>";
            } 
            
       ?>
            
            
            <div class="clearfix"></div>
        </div>
    </section>
    <!--events section ends here -->

    <?php include('partials-front/footer.php');?>