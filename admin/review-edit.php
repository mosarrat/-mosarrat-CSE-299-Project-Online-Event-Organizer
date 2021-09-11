<?php include('partials/menu.php');?>
<?php 

    require_once("connection.php");
    $ID = $_GET['GetID'];
    $query = " select * from reviews where id= '$ID'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $ID = $row['Id'];                                    
        $customer_name = $row['Full_Name'];
        $customer_contact= $row['Email'];
        $rev = $row['review']; 
        $active = $row['Active'];     
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/admin-new.css">

</head>
<body>

        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card bg-light mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Permission To Show</h3>
                        </div>
                        <div class="card-body">

                            <form action="review-update.php?ID=<?php echo $ID?>" method="post">
                                <tr><b>Status:</b></tr><br>
                                <tr>
                                <select name = "active">
                                <option <?php if($active=="No"){echo "selected";}?> value="No">No</option>
                                <option <?php if($active=="Yes"){echo "selected";}?> value="Yes">Yes</option>
                                </select>
                                </tr><br><br>
                                <a href ="manage-review.php" class="btn btn-danger">cancel</a>
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