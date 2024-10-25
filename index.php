<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
    $path = '\\10.40.30.2\pliki'; 
    $output = shell_exec("net use W $path /user:uczen uczenpti 2>&1");

    $files = scandir('W:');


    
    ?>
</body>
</html>