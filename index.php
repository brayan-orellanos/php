<?php 
$today = date('d/m/Y');
$name = 'brayan';
$last_name = 'orellanos';
$url = 'http://www.no_existe.com/';
define('__COUNTRY', 'colombia') // esto es una constante

?>

<?php

function debug($value) {
    echo '<pre>';
        var_dump($value);
    echo '</pre>';
}

$user_date = [];
$user_date['name'] = 'brayan orellanos';
$user_date['age'] = 65;
$user_date['company'] = 'microsoft';

$famous_microsoft[] = [
    'name' => 'brayan',
    'adress' => 'bucaramanga',
    'avalability' => false
];


$famous_microsoft[] = [
    'name' => 'alexis',
    'adress' => 'giron',
    'avalability' => true
];

$famous_microsoft[] = [
    'name' => 'juan',
    'adress' => 'lebrija',
    'avalability' => true
];

$lenguajes = [];
$lenguajes[] = 'Español';
$lenguajes[] = 'Ingles';
$lenguajes[] = 'Frances';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php 
        echo "Hola mundo";
    ?>

    <h1><?php echo $name; ?> <?php echo $last_name; ?></h1>
    <a href="<?php echo $url; ?>" target="_blank" rel="noopener noreferrer">Enlace</a>
    </br>
    </br>
    <span>la fecha de hoy es: <?php echo $today; ?></span>
    <form action="formulario_lenguage.php" method="post">
        <div>
            <select class = "m-4" name = "lenguaje">
                <option>seleccione</option>
                <?php 
                    $count = 0;
                    while($count < count($lenguajes)) { 
                ?>
                <option value="<?php echo $count; ?>"><?php echo $lenguajes[$count]; ?></option>
                <?php 
                    $count++; 
                } ?>
            </select>

            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>

    <h2>Contenido del arreglo</h2>
    <div class="debug">
        <?php echo debug($user_date) ?>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Avalable</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($famous_microsoft as $person){ ?>
            <tr>
                <td><?php echo $person['name'] ?></td>
                <td><?php echo $person['adress'] ?></td>
                <td><?php echo $person['avalability'] ? 'si' : 'no' ?></td>
            </tr>
            <?php } ?>

        </tbody>
    </table>


    <form action="formulario_contacto.php" method="post">
        <div class="mb-3">
            <div class="large-2 columns">
                <label class="form-label">Nombre</label>
            </div>
            <div class="large-10 columns">
                <input type="text" name="name" id="name" placeholder="Nombre" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <div class="large-2 columns">
                <label class="form-label">Correo</label>
            </div>
            <div class="large-10 columns">
                <input type="email" name="email" id="email" placeholder="Correo" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <div>
                <label class="form-label">Opciones</label>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example" name="select">
                    <option selected>Open this select menu</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <div>
                <label class="form-label">Mensaje</label>
            </div>
            <div>
                <textarea name="message" rows="4" class="form-control" placeholder="mensaje"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
</body>

</html>