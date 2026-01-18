<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida con PHP</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            border-top: 5px solid #007bff;
        }
        h1 { color: #333; }
        .php-badge {
            background: #777bb4;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.8rem;
            display: inline-block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <span class="php-badge">Procesado con PHP</span>
        
        <?php
            // Definimos una variable
            $saludo = "¡Hola!";
            
            // Imprimimos el saludo en el HTML
            echo "<h1>" . $saludo . "</h1>";
        ?>
        
        <p>Bienvenido a mi página dinámica.</p>
        
        <p>Hoy es: <strong><?php echo date("d/m/Y"); ?></strong></p>
    </div>

</body>
</html>     border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #1a73e8;
            margin-bottom: 0.5rem;
        }
        p {
            color: #5f6368;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>¡Hola!</h1>
        <p>Bienvenido a mi sitio web.</p>
    </div>

</body>
</html>
