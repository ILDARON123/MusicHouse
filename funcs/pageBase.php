<?php require "user.php"; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../fonts/fonts.css">
  <link rel="stylesheet" href="../often.css">
  <link rel="stylesheet" href="../style.css">
  <title>MusicHouse</title>
</head>

<body>
  <div id="alertPlace"></div>
  <header class="flex jc-sb white-text">
    <div class="logo-png">
      <img src="img/musichouse.png" alt="MusicHouse">
    </div>
    <nav class="flex g10">
      <a href="/">О нас</a>
      <a href="/catalogue.php">Каталог</a>
      <a href="/where.php">Где нас найти?</a>
      <?php 
      if (isset($user) && $user['role'] = 1) {
      ?>
        <a href="/admin.php">Админ-панель</a>
      <?php
      } ?>
    </nav>
    <nav class="flex g10">
      <?php if (!isset($user)) : ?>
        <a href="../ajax-sources/signInForm.html" class="ajax">Вход</a>
        <a href="../ajax-sources/signUpForm.html" class="ajax">Регистрация</a>
      <?php else : ?>
        <a href="../account/logOut.php">Выйти</a>
      <?php endif; ?>
    </nav>
  </header>
  <script src="../js/ajax.js"></script>