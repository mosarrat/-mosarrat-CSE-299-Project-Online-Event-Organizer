<?php include('partials-front/menu.php');?>

    <!-------Testimonials------>
    <section id = "testimonials" >
        <h2 class="text-center">Reviews </h2>
        <div class ="wrapper">
          <a href="add-review.php"class="btn2 btn-primary">Add Review</a>
        </div>
        <br>
        <?php
            $query2= " select * from reviews where Active='Yes' ";

            $result2 = mysqli_query($con,$query2);

            $rows2 = mysqli_num_rows($result2);
            if($rows2>0)
            {
             while($row = mysqli_fetch_assoc($result2))
             {
              $ID = $row['Id'];
              $customer_name = $row['Full_Name'];
              $customer_contact= $row['Email'];
              $rev = $row['review'];
             ?>
            <!--BOX-1---->
            <div class="testimonial-box">
                <!----top---->
                <div class="box-top">
                        <!--name and username---->
                        <div class = "name-user">
                            <strong><?php echo $customer_name ;?></strong>
                            <br>
                            <span><?php echo $customer_contact ;?></span>
                        </div>
                        <br>
                         <!-----comments------------->
                         <div class = "client-comment">
                            <p><?php echo $rev ;?></p>
                         </div>
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
        </section>
    
<?php include('partials-front/footer.php');?>