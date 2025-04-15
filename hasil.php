<?php 
$text_align = $_COOKIE['text_align'] ?? 'left';
$font_family = $_COOKIE['font_family'] ?? 'inherit';
$color = $_COOKIE['color'] ?? '#000000';

$css = "
  text-align: $text_align;
  font-family: $font_family;
  color: $color;
";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Halaman Hasil</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background-image: url('background.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI';
    }

    .container {
      background-color: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      padding: 25px 50px;
      border-radius: 15px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      width: 500px;
    }

    textarea {
      width: 100%;
      height: 100px;
      resize: none;
      margin-top: 10px;
    }

    a {
      margin-top: 10px;
      color: blue;
      text-decoration: underline;
    }

    .paragraph {
      <?= $css ?>
      margin-top: 20px;
    }

    h4, label {
      font-weight: normal;
    }
  </style>
</head>
<body>
  <div class="container">
    <h4>Halaman Hasil</h4>

    <div style="margin-top: 20px;">
      <label>Setting yang tersedia:</label><br>
      <textarea readonly><?= isset($_COOKIE['text_align']) || isset($_COOKIE['font_family']) || isset($_COOKIE['color']) ? htmlspecialchars($css) : '' ?></textarea>
    </div>

    <a href="setting.php">Ganti Setting</a>

    <p class="paragraph">
      Contoh paragraf:<br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo velit ut gravida consectetur. Praesent sagittis scelerisque tempus. Aenean posuere luctus lectus, non luctus libero laoreet et. Suspendisse nec ligula eu orci accumsan ultrices ut et mi. Aliquam tincidunt vulputate tempor. Vestibulum nec consectetur enim. Suspendisse at.
    </p>
  </div>
</body>
</html>
