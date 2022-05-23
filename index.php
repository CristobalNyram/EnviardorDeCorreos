<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con PHPmailer</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <center>
    <h1>
        Envia un correo electronico aquí
    </h1>
    </center>

    <form class="form-style-4" action="./server.php" method="post">

                <label for="field1">
                <span>Tu nombre</span><input type="text" name="name"  required="true" />
                </label>

                <label for="field2">
                <span>Correo electronico</span><input type="email" name="email" required="true" />
                </label>

                <label for="field3">
                <span>Tema de platica</span><input type="text" name="topic" required="true" />
                </label>

                <label for="field4">
                <span>Contenido del mensaje</span><textarea onkeyup="adjust_textarea(this)" name="content" required="true"></textarea>
                </label>

                <label>
                <span> </span><input type="submit" value="Enviar el correo" name="form_button" />
                </label>
    </form>
</body>
</html>