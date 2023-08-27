<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Nombre de la página web -->
    <title>DPW - Actividad Suplementaria</title>

    <!-- Logo en la barra de título -->
    <link rel="icon" href="img/logo2.png" type="image/x-icon">

    <!-- Importación de los estilos CSS externos y librerías externas-->
    <link rel="stylesheet" href="internas/styles.css" media="screen" />
</head>

<body>
    <!-- Cabecera -->
    <header>
        <!-- Logo con gradiente y menor tamaño -->
        <img class="logo" src=img/logo.png alt="logo TW">

        <!-- Título del sitio web-->
        <h1>ACDB2: Actividad Suplementaria: PHP</h1>

        <!-- Menú horizontal -->
        <nav>
            <div id="menubar">
                <ul id="menuUl">
                    <li class="menuLi"><a href="index.php">Inicio<span></span></a></li>
                    <li class="menuLi"><a href="internas/nueva_empresa.php">Ingresar nueva empresa<span></span></a></li>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Sección del contenido de la página actual -->
    <section>
        <!-- Título de la página actual -->
        <h2>Inicio</h2>

        <!-- Artículo principal -->
        <article>
            <h3>Listado de empresas automotrices</h3>
            <?php 
                //Archivos externos para la conexión y gestión de la BD
                include("internas/config.php");
                include("internas/class_mysqli.php");

                //Creación del objeto miconexion de clase class_mysqli
                $miconexion= new class_mysqli;

                //Llamada a la función conectar del objeto
                $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

                //Ejecuta una sentencia SQL a través de la función consulta, la cual utiliza msqli_query para dicho fin
                //En este caso, se ejecuta un select completo de la vista de libros de informática
                $miconexion->consulta('select * from empresa_automotriz');
                
                //Muestra los resultados de la consulta previa en una tabla
                $miconexion->verconsultaCrud();

                
                ?>
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