<?php
require 'confing.php';
if(isset($_POST["action"])){
              if ($_POST["action"] == "insert"){
                            insert();

              }

}

else if($_POST["action"]== "edit"){
              edit();
              
}

else (){
              dalete();
}

function insert(){
              global$conn;
              $name = $_POST["name"];
              $email = $_POST["email"];
              $gender = $_POST["gender"];

              $query = "Insert into users values('','$name','$email','$gender')";
              mysqli_query($conn, $query);
              echo "inserted successfully";
}

function edit(){
              global$scnn;

              $id = $_POST["id"];
              $name = $_POST["name"];
              $email = $_POST["email"];
              $gender = $_POST["gender"];
              $query = "UPDATE users SET name = '$name', email ='$email',gender='gender'where id = $id ";
              mysqli_query($conn, $query);
              echo "update successfully";

}

function dalete(){
              global $conn;
              $id = $_POST["aktion"];
              $query = "DALETE FROM users WHERE id = $id";
              mysqli_query($conn,$query);
              echo "daleted Successfully";
}


?> 