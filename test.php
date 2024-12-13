<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Add:</h1>
  <form action="database.php" method="POST">
    <label for="">Name:
    <input type="text" name='name'> <br>
    </label>
    <label for="">Place:
    <input type="text" name='place'> <br>
    </label>
    <label for="">Age:
    <input type="text" name='age'> <br>
    </label>
    <input type="submit" value='Send' name='btn'>
  </form>
</body>
</html>


<?php 

  $servername='localhost';
  $user='root';
  $password='01032004';
  $database='practice';

$conn= new mysqli($servername,$user,$password,$database);

if($conn->connect_error){
  echo "Database connnection failed";
} 

  // $str=$conn->prepare("SELECT name,place,age FROM practice")
  // $str->bind_param('ssi',)
  // $str->execute();

   $str="SELECT id,name , place , age FROM info";
   $op = $conn->query($str);

   if($op->num_rows > 0){

    echo 
    "<table border='1'>
    <tr>
    <th>Id:</th>
    <th>Name:</th> 
    <th>Place:</th> 
    <th>Age:</th> 
   
    </tr>";

    while($result = $op->fetch_assoc()){
        echo   "<tr>
          <td>".$result['id']."</td>
          <td>".$result['name']."</td>
          <td>".$result['place']."</td>
          <td>".$result['age']."</td>
          <td>
          <form action='' method='POST' >
          <input type='hidden' name='id' value='".$result['id']."'>
          <input type='submit' value='Update' name='update'> 
          </form>
          </tr>";
    }
  echo  "</table>";
  }  else {
    echo "Cannot fetch the data form database";
  }  


  ?>
