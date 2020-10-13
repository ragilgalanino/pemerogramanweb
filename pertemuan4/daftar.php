<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Anggota</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>Mata Kuliah</h2>
    <form method="post" action="konfirm_mk.php">
        <div class="form-group">
        <label>Kode Mata Kuliah</label>
        <input class="form-control" type="text" name="kode"><br>
        </div>

        <div class="form-group">
        <label>Nama Mata Kuliah</label>
        <input class="form-control" type="text" name="nama"><br>
        </div>
        <label>Kategori MK</label>
        <div class="form-group">
        <select name="kategori">
            <option value="1">MKMA</option>
            <option value="2">MKMI</option>
            <option value="3">MKPIL</option>
            <br><br>
        </div>
        <form method="post" action="konfirm_mk.php">
        <div class="form-group">
        <label>SKS</label>
        <input class="form-control" type="text" name="sks"><br>
        </div>
        <input type="submit" name="daftar">
        
    </form>
    </div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>