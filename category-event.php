<?php include('partials-front/menu.php');?>
<?php
    //check title pass
    if(isset($_GET['category_title']))
    {
      //catecory title is set
      $category_title = $_GET['category_title'];
      //get category title based on category id
      $query = "select Id from category where Title='$category_title' ";
      //executation
      $result = mysqli_query($con,$query);
      //value from database
      $row=mysqli_fetch_assoc($result);
      //get title
      $category_id = $row['Id'];
    }
    else
    {
      //redirect to home page
      header("location:index.php");
    }
?>

    <!--search section starts here -->
    <section class="search text-center">
        <div class="container">

         <h2>Services on <a href="#" class="text-color">"<?php echo $category_title;?>"</a></h2> 

        </div>
    </section>
    <!--search section ends here -->

    <!--events section starts here -->
    <section class="events">
        <div class="container">
            <h2 class="text-center">Events And Services</h2>

            <?php
            $query2= "select * from event where Category_Title='$category_title' order by Title asc";

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
                   <div class="event-desc">
                      <h4><?php echo $event_title;?></h4>
                      <p class="price">Tk.<?php echo $price;?></p>
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