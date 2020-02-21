<?php
//Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.
$password= $_GET['password'];
if ($password == 'Boolean') {
  $class= 'red';
  $message= 'Hai indovinato';
} else {
  $class= 'green';
  $message= 'Riprova';
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">
   <style media="screen">
     .green {
       color: green;
     };
     .red {
       color: red;
     }
   </style>
   <title>Document</title>
 </head>
 <body>
   <h1 class=" <?php $class ?>"> <?php echo $message ?></h1>
 </body>
 </html>
