<!DOCTYPE html>
<html lang="en">
<head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>index</title>
</head>
<body>
              <h2>index</h2>
              < border= 1>
                            <tr>
                                          <td>#</td>
                                          <td>Name</td>
                                          <td>Email</td>
                                          <td>Gender</td>
                                          <td>Akction</td>
                                          </tr>
                            <?php

                            require 'confing.php';
                            $rows = mysqli_query($conn, "select * from users");
                            Si = 1;
                            ?>

                            <?php foreach (rows as $row) ; ?>
                            <tr id = <?php echo $row ["id"]; ?>>
                            

                            <td> <?php echo $i++; ?></td>
                            <td> <?php echo $row ["name"]; ?></td>
                            <td> <?php echo $row ["email"]; ?></td>
                            <td> <?php echo $row ["gender"]; ?></td>

                            <td>

                            <a href="adituser.php?id=<?php echo $row ['id']; ?>">edit</a>
                            <button type=" button" onclick="submitData"(<?php echo $row ['id']; ?>;)>Dalete</button>
                            </td>
                            </tr>
                            
                            <?php endforeach;?>
              </table>
              <br>
              <a href="addusers.php">add users</a>
              <?php require 'script.php';?>
              
</body>
</html>