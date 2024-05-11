<?php
require_once 'navbar.html';
require_once 'sidebar.html';
?>
<h1>Praktikum 2</h1>
<h3>Form Registrasi Pengguna</h3>
    <form action="submit_get.php" method="GET">
    <div>
        <label for="nama_lengkap">Nama lengkap</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" require>
    </div><br>
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" require>
    </div><br>
    <div>
        <label for="password"Password></label>
        <input type="password" name="password" id="password" require>
    </div><br>
    <div>
        <button type="submit">Register</button>
    </div>
</form>

<?php require_once 'footer.html'; ?>