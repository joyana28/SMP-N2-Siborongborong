<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Navbar Dropdown</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: white;
      padding: 10px 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .container {
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 50px;
    }

    .menu {
      flex: 1;
      margin-left: 20px;
    }

    .menu ul {
      list-style: none;
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .menu ul li,
    .menu ul .dropdown {
      position: relative;
    }

    .menu ul li a,
    .menu ul button.btn {
      text-decoration: none;
      padding: 8px 12px;
      border: none;
      background: none;
      cursor: pointer;
      font-size: 16px;
      color: #000;
      font-weight: bold;
    }

    .menu ul button.btn:hover,
    .menu ul li a:hover {
      border-bottom: 2px solid orange;
    }

    .submenu {
      display: none;
      position: absolute;
      top: 35px;
      left: 0;
      background-color: white;
      border: 1px solid #ccc;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      z-index: 1000;
    }

    .submenu button {
      display: block;
      width: 100%;
      padding: 8px 12px;
      border: none;
      background: none;
      text-align: left;
      cursor: pointer;
    }

    .submenu button:hover {
      background-color: #f2f2f2;
    }

    .dropdown:hover .submenu {
      display: block;
    }
  </style>
</head>
<body>

<nav class="navbar">
  <div class="container">
    <div class="logo">
      <img src="images/logo.png" alt="Company Logo">
    </div>
    <div class="menu">
      <ul>
        <li><a href="#" class="active">Home</a></li>

        <!-- Dropdown About -->
        <li class="dropdown">
          <button class="btn">About</button>
          <div class="submenu">
            <button onclick="alert('Fasilitas')">Fasilitas</button>
            <button onclick="alert('Ekstrakurikuler')">Ekstrakurikuler</button>
          </div>
        </li>

        <!-- Dropdown Prestasi -->
        <li class="dropdown">
          <button class="btn">Prestasi</button>
          <div class="submenu">
            <button onclick="alert('Akademik')">Akademik</button>
            <button onclick="alert('Non Akademik')">Non Akademik</button>
          </div>
        </li>

        <li><a href="#">Kepala Sekolah</a></li>
        <li><a href="#">Guru</a></li>
        <li><a href="#">Siswa</a></li>
        <li><a href="#">Profil Alumni</a></li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>
