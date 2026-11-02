<section class="registrasi">
    <h2>Registration Form</h2>
    <p>Silakan isi data diri Anda.</p>

      <!-- Hubungkan dengan file CSS -->
    <link rel="stylesheet" href="style.css">

    <form id="formRegistrasi" action="registrasi.php" method="POST">

    <label for="nama">Nama Lengkap</label>
    <input type="text"
           id="nama"
           name="nama"
           placeholder="Masukkan nama lengkap"
           required
           oninvalid="this.setCustomValidity('Nama Lengkap Wajib diisi')"
           oninput="this.setCustomValidity('')">

    <label for="email">Email</label>
    <input type="email"
           id="email"
           name="email"
           placeholder="nama@email.com"
           required
           oninvalid="this.setCustomValidity('Email Wajib diisi')"
           oninput="this.setCustomValidity('')">

    <label for="whatsapp">Nomor WhatsApp</label>
    <input type="tel"
           id="whatsapp"
           name="whatsapp"
           placeholder="Masukkan nomor WhatsApp"
           required
           oninvalid="this.setCustomValidity('Nomor WhatsApp Wajib diisi')"
           oninput="this.setCustomValidity('')">

    <label for="tgl_lahir">Tanggal Lahir</label>
    <input type="date"
           id="tgl_lahir"
           name="tgl_lahir"
           required
           oninvalid="this.setCustomValidity('Tanggal Lahir Wajib diisi')"
           oninput="this.setCustomValidity('')">

    <label for="password">Password</label>
    <input type="password"
           id="password"
           name="password"
           placeholder="Masukkan password"
           minlength="8"
           required
           oninvalid="this.setCustomValidity('Password Wajib diisi')"
           oninput="this.setCustomValidity('')">

    <button type="submit">Daftar</button>

</form>

</section>

<footer class="footer">
    <p>©2622500048_Risva Auvira_SI1A_ UTS Pemrograman Web Dasar.</p>
</footer>

<script>
document.getElementById("formRegistrasi").addEventListener("submit", function(event) {

    const nama = document.getElementById("nama").value.trim();
    const email = document.getElementById("email").value.trim();
    const whatsapp = document.getElementById("whatsapp").value.trim();
    const tanggal = document.getElementById("tgl_lahir").value;
    const password = document.getElementById("password").value;

    if (nama === "" || email === "" || whatsapp === "" ||
        tanggal === "" || password === "") {

        event.preventDefault();
        alert("Semua kolom wajib diisi!");
        return;
    }

    if (password.length < 8) {
        event.preventDefault();
        alert("Password harus minimal 8 karakter!");
        return;
    }

    alert("Data registrasi sedang dikirim!");

});
</script>

</body>
</html>