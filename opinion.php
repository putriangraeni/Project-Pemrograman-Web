<!DOCTYPE html>
<html lang="en">
<head>

    <title>CRUD Operation in PHP</title>
    
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
include('dbconfig.php');
?>


<!-- Modal -->
<div class="modal fade" id="demo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Your Opinions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      
        <div class="form-group">
          <label>Opinions</label>
          <input type="text" name="opinions" class="form-control" placeholder="Apa yang Sedang Anda Pikirkan?" required>
        </div>
        
        <div class="form-group">
          <label>Date Publish</label>
          <input type="text" name="dated" class="form-control" placeholder="Date Publish" required>
        </div>

        <div class="form-group">
          <label>Image</label>
          <input type="file" name="image" id="images" class="form-control" required>
        </div>

      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-info">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid">
  <?php
  if(isset($_SESSION['success'])&& $_SESSION['success'] !=''){
    echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].'</h2>';
    unset($_SESSION['succeess']);   
  }
  if(isset($_SESSION['status']) && $_SESSION['status'] !='') {
    echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']); 
  }
  ?>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#demo">Add Opini</button>
</div>

<div class="table-responsive">
  <?php
  $connection = mysqli_connect("localhost", "root", "", "tugasbesar");
  $query = "SELECT * FROM user";
  $query_run = mysqli_query($connection, $query);
  ?>

  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Opinions</th>
        <th>Date Publish</th>
        <th>Photo</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>

    <tbody>
      <?php
      if(mysqli_num_rows($query_run) > 0) {
        while($row = mysqli_fetch_assoc($query_run)){
        
      ?>
      <tr>
        <td> <?php echo $row['id'] ?> </td>
        <td> <?php echo $row['opinions'] ?> </td>
        <td> <?php echo $row['dated'] ?> </td>
        <td> <?php echo '<img src="upload   /'.$row['image'].'" width="100px"; height="100px"; alt=".pdf file">' ?> </td>

        <td>
          <form action="edit.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
            <button type="submit" name="data_edit" class="btn btn-info">Edit</button>
          </form>
        </td>

        <!-- FORM DELETE -->
        <td>
          <form action="code.php" method="POST">
            <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
            <button type="submit" name="data_delete" class="btn btn-warning">Delete</button>
          </form>
        </td>
      </tr>

      <?php
        }
      } else {
        echo "No Record Found";
      }
      ?>

    <!-- KEMBALI KEBERANDA -->
    <a href="index.php" class ="hero-btn">Beranda</a>
  

    </tbody>
  </table>
</div>
</body>
</html>