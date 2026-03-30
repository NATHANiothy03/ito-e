<?php
$bot1=rand(1,10);
$bot2=["+","-","*","/"];
$bot3=rand(1,10);
if(!isset($_POST["calcul"]))
    {
        $rand=array_rand($bot2);
        $realbot2=$bot2[$rand];
                $operation=0;
                $resultat="";
        if(isset($_POST["calcul"]))
        {  
            if($realbot2=="+")
                {
                    $operation=$bot1+$bot3;
                }
            if($realbot2=="-")
                {
                    $operation=$bot1-$bot3;
                }   
            if($realbot2=="*")
                {
                    $operation=$bot1*$bot3;
                } 
            if($realbot2=="/")
                {
                    $operation=$bot1/$bot3;
                }        
            if($_POST["calcul"]!=null)
            {  
                    if(isset($_POST["calcul"])==$operation)
                        {
                            $resultat="WIN";
                        }  
                    if(isset($_POST["calcul"])!=$operation)
                        {
                            $resultat="FAIL";
                        }
                echo $resultat; 
            } 
            echo ("<a href=#>suite</a>");
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
    <p>
        <?php echo $bot1." ".$realbot2." ".$bot3; ?>
    </p>
    <form method="POST">
    ELA b:<input type="number"name="calcul">
    <button type="submit" class="btn btn-danger" >Envoyer</button>
    <input type="hidden"name="a">
     <button type="submit" class="btn btn-danger" >NEXT</button>
    </form>
</body>
</html>