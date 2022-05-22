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
    <div class="alert">
            <span>Error.</span>
    </div>

    <div class="exito">
            <span>Sin problemas.</span>
    </div>

    <form class="form-style-4" action="" method="post">

                <label for="field1">
                <span>Tu nombre</span><input type="text" name="field1" required="true" />
                </label>

                <label for="field2">
                <span>Correo electronico</span><input type="email" name="field2" required="true" />
                </label>

                <label for="field3">
                <span>Tema de platica</span><input type="text" name="field3" required="true" />
                </label>

                <label for="field4">
                <span>Contenido del mensaje</span><textarea name="field4" onkeyup="adjust_textarea(this)" required="true"></textarea>
                </label>

                <label>
                <span> </span><input type="submit" value="Enviar el correo" />
                </label>
    </form>
</body>
</html>