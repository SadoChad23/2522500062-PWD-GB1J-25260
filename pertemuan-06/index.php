<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Web Wildan</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">&#9776;</button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <?php echo " Tes php "; ?>
        </section>
        <section id="about">
            <?php
            $Nim = '2522500062';
            $Nama = 'Muhammad Wildan';
            $Tempatlahir = 'Pangkalpinang';
            $Tanggallahir = '23 April 2007';
            $Hoby = 'Workout';
            $Pasangan = 'Bujangan.';
            $Pekerjaan = 'Mencari Usaha';
            $Namaibu = 'Megawati';
            $Namaayah = 'Hadi Sudarmawan';
            $Namaadek = 'Muhammad Raifan dan Muhammad Raihan';
            $Namaabang = 'Fitgathan'
            ?>
            <h2>Tentang kami</h2>
            <p><strong>Nim              :</strong> <?php echo $Nim; ?></p>
            <p><strong>Nama             :</strong> <?php echo $Nama; ?></p>
            <p><strong>Tempat Lahir     :</strong> <?php echo $Tempatlahir; ?></p>
            <p><strong>Tanggal Lahir    :</strong> <?php echo $Tanggallahir; ?></p>
            <p><strong>Hoby             :</strong> <?php echo $Hoby; ?></p>
            <p><strong>Pasangan         :</strong> <?php echo $Pasangan; ?></p>
            <p><strong>Pekerjaan        :</strong> <?php echo $Pekerjaan; ?></p>
            <p><strong>Nama Ayah        :</strong> <?php echo $Namaayah; ?></p>
            <P><strong>Nama Ibu         :</strong> <?php echo $Namaibu; ?></P>
            <P><strong>Nama Abang       :</strong> <?php echo $Namaabang; ?></P>
            <p><strong>Nama Adik        :</strong> <?php echo $Namaadek; ?></p>
            <p>&#128525; &#128512;</p>
        </section>
        <section id="contact">
            <h2>kontak kami</h2>
           <form action="">

            <label for="txtNama"><span>Nama:</span>
            <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan Nama" required autocomplete="name"></label>

            <label for="txtEmail"><span>Email:</span>
           <input type="text" id="txtEmail" name="txtEmail" placeholder="Masukkan Email" required autocomplete="email"></label>

          <label for="txtPesan"><span>Pesan:</span>
           <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis Pesan Anda..." required></textarea></label>
           <small id="charCount">0/200 karakter</small>
           <button type="submit">Kirim</button>
           <button type="reset">Batal</button>
        </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Muhamad wildan [2522500062]</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
