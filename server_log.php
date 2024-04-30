<?php
  include("connection.php");

  if(!empty($_POST)){
    $sensorco = $_POST["sensorco"];
    $sensorgas = $_POST["sensorgas"];
    $gas = $_POST["gas"];
        
    $query = "INSERT INTO udara (sensorco,sensorgas,gas)
            VALUES ('".$sensorco."','".$sensorgas."','".$gas."')";
    if ($conn->query($query) === TRUE) {
      echo "Berhasil menyimpan data ke database";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  
?>