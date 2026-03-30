<?php
$pseudo=["Roddy","Nathan","Mitia"];
$mdp=["mdp123","mdp234","mdp345"];
if(isset ($_POST["nom"]) && isset ($_POST["mot"]))
    {
        for($i=0;$i<3;$i++)
            {
                if($pseudo[$i]==$_POST["nom"])
                    {
                        $reponse="";
                        if($_POST["mot"]==$mdp[$i])
                            {
                                $reponse="correct";
                                header("Location:suite.php");
                            }
                        else
                            {
                                $reponse="Diso rty ah!";
                            }
                            break;
                    }    
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
     <!-- As a heading -->
<div class="fixed-top">      
    <nav class="navbar bg-danger">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">
                <h1>NDAO ILALAO</h1>
            </span>
        </div>
    </nav>
</div>  
<br>
<br>
<br>
<br>
    <form method="POST">
        pseudo:<input type="text"name="nom">
        mdp:<input type="text"name="mot">
        <button type="submit" class="btn btn-danger" >Envoyer</button>
    </form>
    <p class="text-danger"><?php echo $reponse ?></p>
</body>
</html>