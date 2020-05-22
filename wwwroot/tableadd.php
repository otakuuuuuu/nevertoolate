<?php

$DB_HOST='eatinghabit.mysql.database.azure.com' ;
$DB_USER ='skyleos@eatinghabit';
$DB_PASSWORD='Qin19520';
$DB_NAME='food';

$conn=mysqli_init();

 mysqli_real_connect($conn, "eatinghabit.mysql.database.azure.com", "skyleos@eatinghabit", "Qin19520", "food", 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$keywords=$_POST['keywords'];
 $ins="select * from nutrition where Descrip = '$keywords'"; 
 $resu=mysqli_query($conn,$ins);
   if($resu)

  {
   $temp=array();
    while($row=mysqli_fetch_assoc($resu))

    {
//Descrip
      $temp[]=$row;

    }

    echo(json_encode($temp));

  }
  mysqli_close($conn); 

?>