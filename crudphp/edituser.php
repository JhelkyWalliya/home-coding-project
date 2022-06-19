<!DOCTYPE html>
<html lang="en">

<head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>edit  user</title>
</head>

<body>
              <h2>edit user</h2> 
              <form autocomplete="off" action="" method="post">

                            <?php
                            require 'cinfig.php';
                            $id = $_GET["id"];
                            $rows = mysqli_fetch_assoc(mysqli_query($conn, "select * from user where id"));
                            ?>
                            <input type="hidden" id="id" value="<?php echo $rows ['id'];?>">
                            <label for="name">Name</label>
                            <input type="text" id="name" value="<?php echo $rows['name'];?>"><br>
                            <label for="email">Email</label>
                            <input type="text" id="email" value="<?php echo $rows['Email'];?>">
                            <label for="">Gender</label>

                            <select class="" id="Gender">
                            <option value="male"<?php if($rows ["gender"]== "male") echo "selected;"?>>male</option>
                            <option value="femela" <?php if($rows["gender"]== "famela") echo "selected;"?>>femela</option>
                            </select> <br>
                            <button type="button" onclick="submitdata('edit');">edit</button>
              </form>
              <br>
              <a href="index.php">go to index</a>
              <?php require 'script.php'; ?>
</body>

</html>