<?php require_once("config.php");

$conexion = ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estiloslogin.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <form >
            <h2>Login</h2>
            <div class="group"> 
                <label>Usuario

                </label>
                <input type="text">
            </div>
            <div class="group">
                <label >Contraseña</label>
                <input type="password" id="pass">
                <i class="fa-solid fa-eye"></i>
            </div>
            <button>INICIAR SECION</button>
    </section>
    <script src="js/codigo.js"></script>
</body>
</html>
 