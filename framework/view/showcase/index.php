<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php print $title; ?></title>
  <script defer src="recognition/face-api.min.js"></script>
  <script defer src="<?php  print site_url('showcase/script'); ?>"></script>
  <style>
    body {
    margin: 0;
    padding: 0;
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column
  }
  canvas {
      position: absolute;
      top: 0;
      left: 0;
    }
  </style>
</head>
<body>
    <h2>ระบบจดจำใบหน้า</h2>
    <input type="file" id="imageUpload">
    <div id="status">โปรดรอสักครู่</div>
</body>