<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>

<body>
   <?php

   $pagina = isset($_GET['p'])? strtolower($_GET['p']):'main';


    
    require_once '../partials/sidebar.php';

    ?>
    <section class="home-section">
        <div class="text">Dashboard</div>
        <?php
             require_once './'. $pagina. '.php';
        ?>
    </section>

   

   ?>
  
</body>

</html>