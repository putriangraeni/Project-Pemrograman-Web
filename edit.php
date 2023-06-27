<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>

    <!-- CSS Boostrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Link java script  -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</head>
<body>
    <?php
    session_start();
    include('dbconfig.Php');
    ?>

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
            </div>

            <div class="card-body">
                <?php
                $connection = mysqli_connect("localhost", "root", "", "tugasbesar");
                if (isset($_POST['data_edit'])) {
                    $id = $_POST['edit_id'];

                    $query = "SELECT * FROM user WHERE id='$id'";
                    $query_run = mysqli_query($connection, $query);

                    foreach ($query_run as $row) {
                        ?>
                    <form action="code.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="edited_id" value="<?php echo $row['id'] ?>">
                        <div class="form-group">
                            <label>Opinions</label>
                            <input type="text" name="opinions" value="<?php echo $row['opinions'] ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Date Publish</label>
                            <input type="text" name="dated" value="<?php echo $row['dated'] ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Update Image</label>
                            <input type="file" name="image" value="<?php echo $row['image'] ?>" class="form-control">
                        </div>

                        <div class="modal-footer">
                            <a href="opinion.php"><button type="button" class="btn btn-secondary">Close</button></a>
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </div>


                    </form>
                    <?php
                    }

                }
            
                    ?>
                
            </div>
        </div>
    </div>
</body>
</html>