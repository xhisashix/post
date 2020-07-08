<?php
include "InputCheck.php";
$input = [
    'name' => filter_input(INPUT_POST, 'name'),
    'mail' => filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL),
    'password' => filter_input(INPUT_POST, 'password'),
    'address' => filter_input(INPUT_POST, 'address'),
    'job' => filter_input(INPUT_POST, 'job'),
    '$gender' => filter_input(INPUT_POST, 'gender'),
];

$check = new InputCheck;
$check->check($input['name']);
var_dump($check->check($input['name']));
$check->length($input['name']);
var_dump($check->length($input['name']));

$check->errorMessage($input['name']);
var_dump($check->errorMessage($input['name']));
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/conf.css">
  <title>確認画面</title>
</head>
<body>
  <p><?=$input['name'];?></p>
  <p><?=$input['mail']?></p>
  <p><?=$input['pass']?></p>
  <p><?=$input['address']?></p>
  <p><?=$input['job']?></p>
  <p><?=$input['gender']?></p>
</body>
</html>
