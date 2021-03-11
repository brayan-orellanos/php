<?php 

function debug($value) {
    echo '<pre>';
        var_dump($value);
    echo '</pre>';
}


debug($_POST);

$name = isset($_POST['name']) ? $_POST['name'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$select = isset($_POST['select']) ? $_POST['select'] : "";
$message = isset($_POST['message']) ? $_POST['message'] : "";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document2</title>
</head>
<body>
    <h2><?php echo $select; ?></h2>

    <div>
        <span>nombre: <?php echo $name; ?></span>
        <span>correo: <?php echo $email; ?></span>
        <span>mensaje: <?php echo $message; ?></span>
    </div>
</body>
</html>