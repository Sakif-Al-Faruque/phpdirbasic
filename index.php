<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <a href="">Home</a><br>
    <a href="index.php?page=about">About</a><br>
    <a href="index.php?page=contact">Contact</a><br>
    <a href="index.php?page=log">Log</a>
    <?php 
        if(!empty($_GET["page"])){
            $page = $_GET["page"];
            $pageFolder = "pages";
            $pageName = scandir($pageFolder, 0);
            unset($pageName[0], $pageName[1]);
            //print_r($pageName);
            if(in_array($page.".inc.php", $pageName)){
                include($pageFolder."/".$page.".inc.php");
            }
        }
        
        
    ?>
</body>
</html>