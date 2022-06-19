<!DOCTYPE html>
<html lang="en">

<head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>add user</title>
</head>

<body>
              <h2>add user</h2>
              <form autocomplete="off" action="" method="post">
                            <label for="name">Nama</label>
                            <input type="text" id="name" value=""><br>
                            <label for="email">Email</label>
                            <input type="text" id="email" value="">
                            <label for="">Gender</label>

                            <select class="" id="Gender">
                                          <option value="male">male</option>
                                          <option value="famela">famela</option>
                            </select> <br>
                            <button type="button" onclick="submitdata('insert');">insert</button>
              </form>
              <br>
              <a href="index.php">go to index</a>
              <?php require 'script.php'; ?>
</body>

</html>