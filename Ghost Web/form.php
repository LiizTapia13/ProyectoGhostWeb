<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felicidades</title>
</head>
<body>
    <?php 
        $nombre=$_POST["name"];
        $correo=$_POST["email"];
        $phone=$_POST["phone"];
        $contenido=$_POST["message"];
        $para="liiztapia13@gmail.com";
        $asunto="Mensaje Nuevo";

        $mensaje="Nombre del remitente:".$nombre."E-mail:".$correo."Mensaje:".$contenido."";

        mail($para,$asunto,utf8_decode($mensaje));

        echo "<p><h2>Hemos recibido tu mensaje, pronto nos pondremos en contacto, gracias. </h2></p>"
        echo "<p><center><h2>Atte. Ghost Web</h2><center></p>"
        
        
    ?>
</body>
</html>