<?php
//Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un nuovo paragrafo.
$text='Nel grande vivaio del paese c’era un gran fermento, poiché stava per arrivare il famoso giudice Rubell, conosciuto da tutti per la sua severità nei giudizi, ed avrebbe scelto gli alberi che a suo avviso potevano prendere parte alla gara annuale per le piante più belle.

“Di sicuro sceglierà me” si pavoneggiava in tutto il suo splendore un magnifico albero di mimosa, i cui fiori gialli scintillavano come piccole stelle in una notte senza nuvole.'
$pragraph= explode('.', $text);

var_dump($pragraph);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div >
    <?php
      for ($i=0; $i < count($paragraph); $i++) {
        echo "<p>$paragraph[$i]</p>";
      }
     ?>
  </div>
</body>
</html>
