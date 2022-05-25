<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuestas</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<!--Header section star-->
<header>
        <a href="#" class="logo">HOLA</a>
            <ul>
                <li>
                    <a href="Index.html">Inicio</a>
                </li>
                <li>
                    <a>Computo</a>
                    <ul>
                        <li><a href="Arte.html">Arte</a></li>

                        <li><a href="Encuesta.html">Encuesta</a></li>

                        <li><a href="Servicios.html">Servicios</a></li>
                    </ul>
                </li>
                <li>
                    <a>Temas</a>
                    <ul>
                        <li><a href="Traductor.html">Traductor</a></li>
                        
                        <li><a href="Google.html">Google</a></li></li>
                    </ul>
                </li>
            </ul>
    </header>
<!--Header section end-->

<!--Home section star-->
<section class="home2" id="home">

    <div class="content">
        <h4>Respuestas</h4>
        <div class="card">
        Pregunta 1 <?php echo  $_POST['pregunta1'];?><br>
        Pregunta 2 <?php echo  $_POST['pregunta2'];?><br>
        Pregunta 3 <?php echo  $_POST['pregunta3'];?><br>
        Pregunta 4 <?php echo  $_POST['pregunta4'];?><br>
        Pregunta 5 <?php echo  $_POST['pregunta5'];?><br>
        Pregunta 6 <?php echo  $_POST['pregunta6'];?><br>
        Pregunta 7 <?php echo  $_POST['pregunta7'];?><br>
        Pregunta 1 <?php echo  $_POST['pregunta8'];?><br>
        </div>
    </div>
</section>

<!--Home section end-->

</body>
</html>

