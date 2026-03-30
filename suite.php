<?php
$s=$_POST["game"]??null;
$en=rand(1,3);
$Reponse="";
    if($en==1 && $s==1)
    {
        $reponse="Egality";
    }
    if($en==2 && $s==2)
    {
        $reponse="Egality";
    }
    if($en==3 && $s==3)
    {
        $reponse="Egality";
    }
    if($en==1 && $s==2)
    {
        $reponse="Win";
    }
    if($en==1 && $s==3)
    {
        $reponse="Fail";
    }
    if($en==2 && $s==1)
    {
        $reponse="Fail";
    }
    if($en==2 && $s==3)
    {
       $reponse="Win";
    }
    if($en==3 && $s==1)
    {
       $reponse="Win";
    }
    if($en==3 && $s==2)
    {
        $reponse="Fail";
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
    <h1 class="text-primary"><?php echo $reponse."!" ?></h1>   
    <form method="POST">
        <div class="card" style="width: 18rem;">
            <img src="https://tse3.mm.bing.net/th/id/OIP.sVtk7kJlElyD_ZdDdU8zgAHaE8?pid=Api&P=0&h=220" class="card-img-top" alt="...">
            <div class="card-body">
                <button type="submit" class="btn btn-outline-danger" name="game" value=1>cisceau</a>
            </div>
        </div> 
        <div class="card" style="width: 18rem;">
            <img src="https://tse4.mm.bing.net/th/id/OIP.6-GSLvE4lMb8WnE-OfC3QgHaE8?pid=Api&P=0&h=220" class="card-img-top" alt="...">
            <div class="card-body">
                <button type="submit" class="btn btn-outline-danger" name="game" value=2>Pierre</a>
            </div>
        </div> 
        <div class="card" style="width: 18rem;">
            <img src="https://tse4.mm.bing.net/th/id/OIP.c5OgvaoJjD9Jhs1vmczIzAHaHa?pid=Api&P=0&h=220" class="card-img-top" alt="...">
            <div class="card-body">
                <button type="submit" class="btn btn-outline-danger" name="game" value=3>feuille</a>
            </div>
        </div> 
    </form>
    <a href="http://localhost/fb.php">
     <button type="btn" class="btn btn-outline-danger" value=3>Exit</button>  
     </a>  
</body>
</html>