<?php
 //Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
 $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style media="screen">
     .green {
       background-color: green;
     }
     .grey{
       background-color: grey;
     }
   </style>
   <title>Document</title>
 </head>
 <body>
   <div class="green">
     <?php
     $pms= $db['pm'];
      for ($i=0; $i < count($pms) ; $i++) {
        echo $pms[$i]['name']. ' - ' .$pms[$i]['lastname'];
      }
      ?>
   </div>
   <div class="grey">
     <?php
     $teachers= $db['teachers'];
      for ($i=0; $i < count($teachers) ; $i++) {
        echo $teachers[$i]['name']. ' - ' .$teachers[$i]['lastname'];
      }
      ?>
   </div>
 </body>
 </html>
