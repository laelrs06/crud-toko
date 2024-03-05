<!DOCTYPE html>
<html lang="en">
<head>
  <title>TOKO BUNDA</title>
  <link rel="stylesheet" href="../toko_bunda/css/style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="image/logo (5).png" alt="">
          <center>
          <h1>toko bunda</h1>
        </center>
        </div>
        <ul>
          <li><a href="#">
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          <li><a href="produk/produk.php">
            <i class="fas fa-shopping-cart"></i>
            <span class="nav-item">Produk</span>
          </a>
          </li>
          <li>
            <a href="kontak/kontak.php">
            <i class="fas fa-address-book"></i>
            <span class="nav-item">Kontak</span>
          </a>
          </li>
          <!-- Add "Karyawan" section with its logo -->
          <li><a href="karyawan/karyawan.php">
            <i class="fas fa-users"></i>
            <span class="nav-item">Karyawan</span>
          </a>
          </li>
          <li><a href="../toko_bunda/logout/logout.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>

    <section class="main">
      <div class="main-top">
        <p>welcome to toko bunda!</p>
      </div>
      <div class="main-body">
        <center>
        <h1>TOKO BUNDA</h1>
      </center>

        <!-- Update "Profil Toko" section -->
        <div class="job_card">
          <div class="job_details">
            <div class="img">
              <i class="fas fa-store"></i>
            </div>
            <div class="text">
              <h2>Profil Toko</h2>
              <span>Informasi tentang Toko Bunda dan Produk yang dijual Toko Bunda.</span>
            </div>
          </div>
        </div>

        <!-- Update "Jenis Produk" section -->
        <div class="job_card">
          <div class="job_details">
            <div class="img">
              <i class="fas fa-shopping-bag"></i> <!-- Updated Icon for "Jenis Produk" -->
            </div>
            <div class="text">
              <h2>Jenis Produk</h2> <!-- Updated Title -->
              <span>Daftar jenis produk yang dijual oleh Toko Bunda.</span> <!-- Updated Description -->
            </div>
          </div>
        </div>

        <!-- Add more sections or content as needed -->

      </div>
    </section>
  </div>
</body>
</html>
