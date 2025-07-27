<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $data["name"] ?> | Portfolio</title>
  <link rel="stylesheet" href="assets/CSS/portStyle.css">
</head>
<body>
  <header>
    <h1><?= $data["name"] ?></h1>
    <p>📞 <?= implode(" | ", $data["phone"]) ?></p>
    <p>📧 <a href="mailto:<?= $data["email"] ?>"><?= $data["email"] ?></a></p>
    <p>📍 <?= $data["address"] ?></p>
  </header>




 