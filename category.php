<?php include('partials-front/menu.php');?>

    <!--category section starts here -->
    <section class="category">
        <div class="container">
            <h2 class="text-center">Categories</h2>

            <?php 

              $query = " select * from category ";
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

<?php include('partials-front/footer.php');?>