<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Nombre de la página web -->
    <title>DPW - Actividad Suplementaria</title>

    <!-- Logo en la barra de título -->
    <link rel="icon" href="../img/logo2.png" type="image/x-icon">

    <!-- Importación de los estilos CSS externos y librerías externas-->
    <link rel="stylesheet" href="../internas/styles.css" media="screen" />
</head>

<body>
    <!-- Cabezera -->
    <header>
        <!-- Logo con gradiente y menor tamaño -->
        <img class="logo" src=../img/logo.png alt="logo TW">

        <!-- Título del sitio web-->
        <h1>ACDB2: Actividad Suplementaria: PHP</h1>

        <!-- Menú horizontal -->
        <nav>
            <div id="menubar">
                <ul id="menuUl">
                    <li class="menuLi"><a href="../index.php">Inicio<span></span></a></li>
                    <li class="menuLi"><a href="nueva_empresa.php">Ingresar nueva empresa<span></span></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Sección del contenido de la página actual -->


    <section>
        <!-- Título de la página actual -->
        <h2>Ingresar datos de la nueva empresa automotriz</h2>

        <!-- Artículo principal -->
        <article>
            <?php
                if(isset($_GET['Error'])){
                echo "<h5>". $_GET['Error'] ."</h5>";
                }
            ?>
            <div class="formulario">
            <form action="insertar_empresa.php" method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required />
                <br />
                <br />
                <label for="siglas">Siglas:</label>
                <input type="text" name="siglas" id="siglas" required />
                <br />
                <br />
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" required />
                <br />
                <br />
                <label for="nombre_gerente">Nombre del gerente:</label>
                <input type="text" name="nombre_gerente" id="nombre_gerente" required />
                <br />
                <br />
                <label for="num_sucursales">Número de sucursales:</label>
                <input type="number" name="num_sucursales" id="num_sucursales" required />
                <br />
                <br />
                <label for="num_empleados">Número de empleados:</label>
                <input type="number" name="num_empleados" id="num_empleados" required />
                <br />
                <br />
                <label for="ventas_mensuales">Valor de ventas mensuales:</label>
                <input type="number" name="ventas_mensuales" id="ventas_mensuales" required />
                <br />
                <br />
                <input type="submit" class="button" name="enviar" id="enviar" value="Enviar" />
            </form>
	    </div>
        </article>
    </section>
    

    <!-- Pie de página -->
    <footer class="footer">
        <p>
            Federico Huerta. Desarrollo en plataformas web 100-RED UTPL. Abril 2023 - Agosto 2023.
        </p>
    </footer>
</body>
</html>