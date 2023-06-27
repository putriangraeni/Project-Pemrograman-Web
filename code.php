<?php
session_start();
include('dbconfig.Php');

$connection = mysqli_connect("localhost", "root", "", "tugasbesar");

if (isset($_POST['save'])) {
    $opinions = $_POST['opinions'];
    $dated = $_POST['dated'];
    $image = $_FILES['image']['name'];

    if(file_exists("upload/" . $_FILES["image"]["name"])) {
        $store = $_FILES["image"]["name"];
        $_SESSION['status'] = "image already exists. '.$store.'";
        header('Location: opinion.php');
    } else {
        $query = "INSERT INTO user (opinions,dated,image) VALUES ('$opinions','$dated','$image')";

        $query_run = mysqli_query($connection,$query);
         
        if ($query_run) {
            move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);

            $_SESSION['success'] = "Data published successfully";
            header("Location: opinion.php");
        } else {
            $_SESSION['success'] = "Data not Inserted";
            header("Location: opinion.php");
        }
    }
}

// UPDATE
if (isset($_POST['update'])) {
    $id = $_POST ['edited_id'];
    $opinions = $_POST ['opinions'];
    $dated = $_POST ['dated'];
    $image = $_FILES['image']['name'];

    $data_query = "SELECT * FROM user WHERE id=$id";
    $data_query_run = mysqli_query($connection, $data_query);

    foreach($data_query_run as $fa_row) {
        if ($image == NULL){
            $image_data = $fa_row['image'];
        } else {
            if ($img_path = "upload/".$fa_row['image']) {
                unlink($img_path);
                $image_data = $image;
            }
        }
    }

    $query = "UPDATE user SET opinions='$opinions', dated='$dated', image='$image' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    
    
    if($query_run) {
        if ($image == NULL) {
        $_SESSION['success'] = "UPDATED WITH Existing Image";
        header('Location: opinion.php');
    } else {
        move_uploaded_file(["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
        $_SESSION['success'] = "DATA UPDATED"; 
        header('Location: opinion.php');

    }

} else {
    $_SESSION['success'] = "Data not updated";
    header('Location: opinion.php');
    }
}

//DELETE
if (isset($_POST['data_delete'])) {
    $id = $_POST['delete_id'];
    $query = "DELETE FROM user WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run) {
        $_SESSION['success'] = "Data Deleted";
        header("Location: opinion.php");
    } else {
        $_SESSION['success'] = "Data Not Deleted";
        header('Location: opinion.php');
    }
}

?>

<script>
    var hapus = alert("Data not updated");

</script>
