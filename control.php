<?php
class dht22{
 public $link='';
 function __construct($mq_135, $mq_09, $mq_07){
  $this->connect();
  $this->storeInDB($mq_135, $mq_09, $mq_07);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'embeded') or die('Cannot select the DB');
 }
 
 function storeInDB($mq_135, $mq_09, $mq_07){
  $query = "insert into udaras set mq_135='".$mq_135."', mq_09='".$mq_09."', mq_07='".$mq_07."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
  if($result === TRUE){echo "Data Tersimpan";}else{echo "Gagal Menyimpan data";}
 }
 
}
if($_GET['sensorco'] != '' and  $_GET['sensorgas'] != '' and  $_GET['gas'] != ''){
 $dht22=new dht22($_GET['sensorco'],$_GET['sensorgas'],$_GET['gas']);
}

?>