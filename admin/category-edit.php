<?php include('partials/menu.php');?>

<?php 

    require_once("connection.php");
    $ID = $_GET['GetID'];
    $query = " select * from category where Id='".$ID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $ID = $row['Id'];
        $title = $row['Title'];
        $current_image = $row['Image_Name'];
        $active = $row['Active'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/admin-new.css">

</head>
<body>

        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card bg-light mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Edit Category</h3>
                        </div>
                        <div class="card-body">

                            <form action="category-update.php?ID=<?php echo $ID?>" method="post" enctype="multipart/form-data">
                            
                                <input type="text" class="form-control mb-2" placeholder=" Category Title" name="title" value="<?php echo $title?>">
                                <div class="form-control mb-2 p-2">
                                    <label for="exampleInputImage">Current Image:</label>
                                    <?php
                                       if($current_image != "")
                                       {
                                           ?>
                                           <img src ="../images/category/<?php echo $current_image;?>" width="100">
                                           <?php
                                       }
                                    ?>
                                </div>
                                <div class="form-control mb-2 p-2">
                                    <label for="exampleInputImage">Select Image:</label>
                                    <input type="file" name="image">
                                </div>
                               
                                <div class="form-group p-3">
                                      <label for="exampleInputActive">Active:</label>
                                      <input type="radio" name="active" value="Yes" 
                                      <?php
                                          if($active =="Yes")
                                          {
                                              echo "checked";
                                          }
                                      ?>>Yes 

                                      <input type="radio" name="active" value="No" 
                                      <?php
                                          if($active =="No")
                                          {
                                              echo "checked";
                                          }
                                      ?>>No
                                </div>
                                <input type="hidden" name="current_image" value="<?php echo $current_image;?>">
                                <a href ="manage-category.php" class="btn btn-danger">cancel</a>
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
<?php include('partials/footer.php');?>