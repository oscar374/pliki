<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $path = '\\\\10.40.50.2\\pliki'; 
        $output = shell_exec("net use Z $path 2>&1");

        echo nl2br($output);

    
    ?>
</body>
</html>