<?php
$text_align = $_COOKIE['text_align'] ?? '';
$font_family = $_COOKIE['font_family'] ?? '';
$color = $_COOKIE['color'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("text_align", $_POST["text_align"], time() + (86400 * 30), "/");
    setcookie("font_family", $_POST["font_family"], time() + (86400 * 30), "/");
    setcookie("color", $_POST["color"], time() + (86400 * 30), "/");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Halaman Setting</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background-image: url('background.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI';
    }

    .container {
      background-color: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      padding: 25px 50px;
      border-radius: 15px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      width: 300px;
    }

    h3 {
      margin-top: 0;
      font-weight: normal;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-top: 20px;
    }

    .form-row {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .form-row label {
      width: 120px;
      font-weight: normal;
    }

    .form-row select,
    .form-row input[type="color"] {
      flex: 1;
      padding: 6px;
      font-size: 14px;
      border-radius: 5px;
      border: 1px solid #aaa;
      max-width: 180px;
    }

    .form-row select option[disabled] {
      display: none;
    }

    input[type="submit"] {
      align-self: flex-start;
      padding: 12px 24px;
      font-size: 16px;
      background-color: #87CEFA;
      color: #fff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    input[type="submit"]:hover {
      background-color: #00BFFF;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="container">
    <h3>Halaman Setting</h3>
    <form method="post">
      <div class="form-row">
        <label for="text_align">Text-align:</label>
        <select name="text_align" id="text_align" required>
          <option value="" disabled selected hidden>-- Pilih Text Align --</option>
          <option value="left" <?= $text_align == 'left' ? 'selected' : '' ?>>Left</option>
          <option value="right" <?= $text_align == 'right' ? 'selected' : '' ?>>Right</option>
          <option value="center" <?= $text_align == 'center' ? 'selected' : '' ?>>Center</option>
          <option value="justify" <?= $text_align == 'justify' ? 'selected' : '' ?>>Justify</option>
        </select>
      </div>

      <div class="form-row">
        <label for="font_family">Font-family:</label>
        <select name="font_family" id="font_family" required>
          <option value="" disabled selected hidden>-- Pilih Font Family --</option>
          <option value="Arial" <?= $font_family == 'Arial' ? 'selected' : '' ?>>Arial</option>
          <option value="Tahoma" <?= $font_family == 'Tahoma' ? 'selected' : '' ?>>Tahoma</option>
          <option value="Calibri" <?= $font_family == 'Calibri' ? 'selected' : '' ?>>Calibri</option>
        </select>
      </div>

      <div class="form-row">
        <label for="color">Color:</label>
        <input type="color" name="color" id="color" value="<?= htmlspecialchars($color) ?>">
      </div>

      <input type="submit" value="Simpan">
    </form>
  </div>
</body>
</html>
