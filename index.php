<!DOCTYPE html>
<html>
<head>
  <title>Halaman Utama</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-image: url('background.jpg');
      background-size: cover;
      background-position: center;
      font-family: 'Segoe UI';
    }

    .container {
      background-color: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      padding: 25px 50px;
      border-radius: 15px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      margin-top: 100px; 
    }

    .btn {
      background-color: #87CEFA; 
      border: none;
      color: #ffffff;
      padding: 12px 24px;
      margin: 0 12px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s;
    }

    .btn:hover {
      background-color: #00BFFF; 
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <div class="container">
    <a href="hasil.php"><button class="btn">Lihat Hasil</button></a>
    <a href="setting.php"><button class="btn">Lihat Setting</button></a>
  </div>

</body>
</html>
