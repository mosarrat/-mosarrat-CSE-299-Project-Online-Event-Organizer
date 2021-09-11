<?php include('partials/menu.php');?>

<!--Main Contain section starts-->

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
  <div class= "main-contain w-100">
     
        <div class ="wrapper">
           <h3>All Reviews <img src="https://img.icons8.com/ios-glyphs/30/fa314a/popular-topic.png"/></h3>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                <?php 

                 require_once("connection.php");
                 $query = " select * from reviews";
                 $result = mysqli_query($con,$query);
                 $sn = 1;
                 if(mysqli_num_rows($result)> 0)
                 {

                 ?>
                    <table class="table table-bordered">
                    <thead>
                        <tr class="bg-danger">
                            <th scope="col">ID</th>                       
                            <th scope="col">Customer Name</th>
                            <th scope="col">Customer Email</th>
                            <th scope="col">Review</th>
                            <th scope="col">Permission</th>
                            <th scope="col" class="text-center py-3"> Action</th>
                        </tr>
                        </thead>

                        <?php 
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    $ID = $row['Id'];                                    
                                    $customer_name = $row['Full_Name'];
                                    $customer_contact= $row['Email'];
                                    $rev = $row['review'];
                                    $active = $row['Active'];              
 
                        ?>
                                <tr>
                                    <td><?php echo $sn++?></td>
                                    <td><?php echo $customer_name?></td>
                                    <td><?php echo $customer_contact?></td>
                                    <td><?php echo $rev ?></td>
                                    <td><?php echo $active?></td>
                                    <td class="text-center"> 
                                    <a href="review-edit.php?GetID=<?php echo $ID ?>" class="btn btn-success ">Permission</a>
                                   
                                    </td>
                                </tr>        
                        <?php 
                            }  
                        ?>                                                                    
                    </table>
                    <?php 
                            }  
                        ?> 
                </div>
            </div>
        </div>
    
</div>

</body>
</html>
       <!--Main Contain section ends-->
       
<?php include('partials/footer.php');?>