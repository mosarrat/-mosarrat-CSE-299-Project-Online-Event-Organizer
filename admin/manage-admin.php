<?php include('partials/menu.php');?>

<!--Main Contain section starts-->
<?php 

require_once("connection.php");
$query = " select * from admin ";
$result = mysqli_query($con,$query);
$sn=1;
?>

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
  <div class= "main-contain">
     <div class="container">
        <div class ="wrapper">
           <h3>Manage Admin <img src="https://img.icons8.com/ios/50/fa314a/leadership.png"/></h3>
           <br>
           <a href="add_admin.php" class="btn btn-primary">Add Admin</a>
        </div>
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered ">
                        <tr class="bg-warning">
                            <td>S.no. </td>
                            <td> Full Name </td>
                            <td> User Name </td>
                            <td> Email</td>
                            <td> Image</td>
                            <td class="text-center py-3"> Action </td>
                        </tr>

                        <?php 
                                
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $ID = $row['Id'];
                                    $FullName = $row['Full_Name'];
                                    $UserName = $row['User_Name'];
                                    $Email = $row['Email'];
                                    $Password = $row['Password'];
                                    $image_name = $row['Image_Name'];
                        ?>
                                <tr>
                                    <td><?php echo $sn++ ?></td>
                                    <td><?php echo $FullName ?></td>
                                    <td><?php echo $UserName ?></td>
                                    <td><?php echo $Email ?></td>
                                    <td><?php echo '<img src ="../images/profile/'.$row['Image_Name'].'" width="100px;" height="60px;" alt="Image">'?></td>
                                    <td class="text-center">
                                    <a href="change-password.php?GetID=<?php echo $ID ?>" class="btn btn-info">Password</a>
                                    <a href="admin-edit.php?GetID=<?php echo $ID ?>" class="btn btn-success ">Edit</a>
                                    <a href="admin-delete.php?Del=<?php echo $ID ?>" class="btn btn-danger ">Delete</a>
                                </td>
                                </tr>        
                        <?php 
                                }  
                        ?>                                                                    
                               

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php include('partials/footer.php');?>
</html>
       <!--Main Contain section ends-->

  
