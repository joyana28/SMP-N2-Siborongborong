<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>404 - Halaman tidak ditemukan</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

    body {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
      background-color: #f9f9f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
      color: #555;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .image {
      width: 120px;
      margin-bottom: 24px;
    }

    h1 {
      font-size:95px;
      margin: 0;
      font-weight: bold;
      color: #333;
    }

    p {
      font-size: 24px;
      margin: 10px 0 30px;
      color: #777;
    }

    .btn {
      display: inline-block;
      padding: 8px 20px;
      font-size: 14px;
      color: #222;
      background: none;
      border: 2px solid #222;
      border-radius: 6px;
      text-decoration: none;
      transition: 0.3s ease;
    }

    .btn:hover {
      background-color: #000;
      color: white;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 48px;
      }

      .image {
        width: 90px;
      }

      .btn {
        font-size: 13px;
        padding: 6px 18px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="https://i.pinimg.com/736x/9d/9a/82/9d9a8284750f5e9e7276817e5172fb76.jpg" alt="404 Sad Face" class="image" />
    <h1>404</h1>
    <p>Halaman tidak ditemukan</p>
    <a href="/" class="btn">Kembali ke Beranda</a>
  </div>
</body>
</html>
