<?php
session_start();
require('connection.php');
$sid = session_id();
$edit_info = $_POST["edit_info"];
$id = $_SESSION['user']['id'];
$edit_name = $_GET['edit_name'];
if (isset($_GET['edit_name'])) {
    if ($_GET['edit_name'] == "email" && $edit_info != "") {
        $sql = "UPDATE users SET email = '$edit_info' WHERE id = '$id'";
        $_SESSION['user']['email'] = $edit_info;
    } else if ($_GET['edit_name'] == "fullname" && $edit_info != "") {
        $sql = "UPDATE users SET fullname = '$edit_info' WHERE id = '$id'";
        $_SESSION['user']['fullname'] = $edit_info;
    } else if ($_GET['edit_name'] == "username" && $edit_info != "") {
        $sql = "UPDATE users SET username = '$edit_info' WHERE id = '$id'";
        $_SESSION['user']['username'] = $edit_info;
    } else if ($_GET['edit_name'] == "phone_number" && $edit_info != "") {
        $sql = "UPDATE users SET phone_number = '$edit_info' WHERE id = '$id'";
        $_SESSION['user']['phone_number'] = $edit_info;
    }
}

$result = mysqli_query($connection, $sql);

if (isset($_POST['edit_submit'])) {
    if ($result) {
        header('Location: profile.php');
    }
}

if(isset($_POST['go_back'])) {
    header('Location: profile.php');
}
?>

<style>
    .edit-submit {
        width: 200px;
    }
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/822363b83c.js" crossorigin="anonymous"></script>
<h1>Edit your profile</h1>
<form action="" method="POST" class="edit_form">
    <div class="input-group mb-3">
        <?php
        if ($_GET['edit_name'] == "email") {
        ?>
            <input type="email" name="edit_info" class="form-control" placeholder="<?= $_GET['edit_name'] ?>" aria-label="<?= $_GET['edit_name'] ?>" aria-describedby="basic-addon1">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="submit" name="edit_submit">Edit <i class="fa fa-check" aria-hidden="true"></i>
                </button>
            </div>
        <?php
        } else if ($_GET['edit_name'] == "password") {
        ?>
            <input type="password" name="edit_info" class="form-control" placeholder="<?= $_GET['edit_name'] ?>" aria-label="<?= $_GET['edit_name'] ?>" aria-describedby="basic-addon1">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit" name="edit_submit">Edit <i class="fa fa-check" aria-hidden="true"></i>
                </button>
            </div>
        <?php
        } else {
        ?>
            <input type="text" name="edit_info" class="form-control" placeholder="<?= $_GET['edit_name'] ?>" aria-label="<?= $_GET['edit_name'] ?>" aria-describedby="basic-addon1">
            <div class="input-group-append">
                <button class="btn btn-success edit-submit" type="submit" name="edit_submit">Edit <i class="fa fa-check" aria-hidden="true"></i>
                </button>
            </div>
        <?php
        }

        ?>
    </div>
    <button class="btn btn-outline-secondary" name="go_back">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        Go back</button>
</form>