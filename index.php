<?php
    include_once("lib/plsql.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLSQL Test</title>
</head>
<body>
    <?php
        $plsql = new PLSQL();
        $database = $plsql->createDatabase('plsql-test');
        $sheme = array(
            "id" => "int",
            "name" => "text"
        );
        $table = $database->createTable('users', $sheme);
        $database = $plsql->insert('table', $object);
        //$database = new Database("plsql-test");
        // $result = $database->sendQuery("CREATE DATABASE `users`");
    ?>
</body>
</html>
