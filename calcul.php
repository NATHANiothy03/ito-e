<?php
$nombre1=rand(1,10);
$nombre2=rand(1,10);
 $operations = ['+','-','*','/'];
    $operations=
    $operations[array_rand($operations)];
                $operation=0;
                $resultat="";
    switch ($operations)
       {
            case '+': $resultat= $nombre1+ $nombre2; break;
            case '-': $resultat= $nombre1- $nombre2;break;
            case '*': $resultat= $nombre1 * $nombre2;break;
            case '/': $resultat= $nombre1 / $nombre2;break;
       }    
     $message="";
        if(isset($_POST['reponse'])) 
        {
            $user= $_POST['reponse'];
            $correct= $_POST['resultat'];

         if ($user== $correct)  
         {
            $message="<p style= 'color: green;'>Win </p>";
         }
         else 
         {
         $message="<p style='color:red;'>Fail</p>";

         }

        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <br>
    <form method="POST">
        <p> <?php echo "$nombre1 $operations $nombre2= ?"; ?></p>
    ELA b:<input type="number"name="reponse" required>
     <input type="hidden" name="resultat" value="<?php echo $resultat; ?>">
     <button type="submit" class="btn btn-danger" >NEXT</button>
    </form>
     <?php echo $message; ?>
</body>
</html>