<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risva's Patisserie</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <!-- HEADER: judul tetap di bagian atas -->
    <header class="header">

    <div class="brand">
                <img src="img/logo usaha.jpeg" alt="Logo Risva's Patisserie">
                <div class="header-text">
        <h1>Risva's Patisserie</h1>
        <p>"Bake Happiness in Every Bite"</p>
</div>
    </header>

    <!-- NAVIGASI kiri dan KONTEN kanan -->
    <div class="layout">

        <nav class="navigasi">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="registrasi.php">Registrasi</a></li>
            </ul>
        </nav>

       <main class="konten">
    <h2>Welcome to Risva's Patisserie</h2>

    <p>
        Risva's Patisserie offers a delightful selection of cakes and pastries, freshly made to bring sweetness to every special moment.
    </p>

    <img src="img/pastry.jpeg"
         alt="Pilihan pastry Risva's Patisserie"
         class="gambar-home">

    <section class="menu-favorit">
    <h2>Favorit Menu</h2>

    <div class="daftar-produk">

        <div class="produk-card">
            <img src="img/croissant.jpg" alt="Butter Croissant">
            <h3>Butter Croissant</h3>
            <p>Pastry renyah dengan aroma butter yang harum</p>
            <p class="harga">Rp18.000</p>
        </div>

        <div class="produk-card">
            <img src="img/chocolate.jpg" alt="Chocolate Eclair">
            <h3>Chocolate Eclair</h3>
            <p>Pastry lembut dengan lapisan krim cokelat</p>
            <p class="harga">Rp20.000</p>
        </div>

        <div class="produk-card">
            <img src="img/strawberry.jpg" alt="Strawberry Tart">
            <h3>Strawberry Tart</h3>
            <p>Tart renyah dengan topping strawberry segar</p>
            <p class="harga">Rp22.000</p>
        </div>

        <div class="produk-card">
            <img src="img/cinnamon.jpg" alt="Cinnamon Roll">
            <h3>Cinnamon Roll</h3>
            <p>Roti gulung lembut dengan aroma kayu manis dan lapisan gula manis</p>
            <p class="harga">Rp17.000</p>
        </div>

    </div>
</section>

<section class="daftar-menu">
    <h2>Pastries & Price List</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Price</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Butter Croissant</td>
            <td>Rp18.000</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Chocolate Eclair</td>
            <td>Rp20.000</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Strawberry Tart</td>
            <td>Rp22.000</td>
        </tr>

        <tr>
            <td>4</td>
            <td>Cinnamon Roll</td>
            <td>Rp17.000</td>
        </tr>

        <tr>
            <td>5</td>
            <td>Red Velvet Cake</td>
            <td>Rp25.000</td>
        </tr>

        <tr>
            <td>6</td>
            <td>Blueberry Cheesecake</td>
            <td>Rp28.000</td>
        </tr>

        <tr>
            <td>7</td>
            <td>Tiramisu</td>
            <td>Rp24.000</td>
        </tr>

        <tr>
            <td>8</td>
            <td>Chocolate Brownies</td>
            <td>Rp18.000</td>
        </tr>
    </table>
</section>

<!-- VIDEO BAKERY -->
<section class="video-home">
    <h2>Our Bakery Moments</h2>
    <p class="video-caption">
        A little sweetness, freshly made with love.
    </p>

    <video controls>
        <source src="img/video-toko.mp4" type="video/mp4">
        Browser Anda tidak mendukung pemutar video.
    <source src="img/video-toko.mp4" type="video/mp4">
    Browser Anda tidak mendukung pemutar video.
</video>
</section>

<section class="info-toko">
    <h2>Visit Our Bakery</h2>
    <p>"Freshly baked, made with love"</p>

    <div class="detail-toko">
        <i class="fa-regular fa-clock ikon-toko"></i>
        <div>
            <h3>Jam Operasional</h3>
            <p>Selasa - Minggu</p>
            <p>07.00 - 21.00 WIB</p>
        </div>
    </div>

    <div class="detail-toko">
        <i class="fa-solid fa-location-dot ikon-toko"></i>
        <div>
            <h3>Alamat</h3>
            <p>Jalan Merdeka No.90</p>
        </div>
    </div>

    <div class="detail-toko">
        <i class="fa-solid fa-phone ikon-toko"></i>
        <div>
            <h3>Contact</h3>
            <p>0812-3456-7890</p>
        </div>
    </div>

    <div class="detail-toko">
        <i class="fa-brands fa-instagram ikon-toko"></i>
        <div>
            <h3>Instagram</h3>
            <p>@risvaspatisserie</p>
        </div>
    </div>

</section>

<footer class="footer">
    <p>©2622500048_Risva Auvira_SI1A_ UTS Pemrograman Web Dasar.</p>
</footer>

</body>
</html>