<html>
    <h1>Data Mahasiswa</h1>
    <?php
    include_once "init.php";
    
    $query_select = "SELECT * FROM mahasiswa";
    $result = mysqli_query($koneksi_ke_db, $query_select);
    echo "<a href ='tamba.php' style='color: #010100;'>Tambah Data</a> <br><br>";
    
    while($mhs = mysqli_fetch_assoc($result)){
        echo "Nama : ".$mhs['nama']."<br>";
        echo "NIM : ".$mhs['nim']."<br>";
        echo "Alamat : ".$mhs['alamat']."<br>";
        echo "<a href='ubah.php?id=".$mhs['id']."' style='color: #010100;'>Edit</a> | ";
        echo "<a href='hapus.php?id=".$mhs['id']."' style='color: #010100;'>Hapus</a> <hr>";
    }
    ?>
    <style>    
        *{
        font-family: 'Quicksand', sans-serif;
        }

        body{
            color: #fff;
            background-color: purple;
            background-image: radial-gradient(at 9% 89%, hsla(215, 90%, 73%, 1) 0px, transparent 50%);
            background-image: radial-gradient(at 72% 6%, hsla(331, 74%, 63%, 1) 0px, transparent 50%);
            background-image: radial-gradient(at 24% 19%,hsla(14, 90%, 74%, 1) 0px, transparent 50%);
            background-image: radial-gradient(at 65% 6%, hsla(6, 79%, 76%, 1) 0px, transparent 50%);
            background-image: radial-gradient(at 20% 98%, hsla(316, 72%, 64%, 1) 0px, transparent 50%);
            background-image: radial-gradient(at 44% 9%, hsla(40, 96%, 77%, 1) 0px, transparent 50%);
            background-image: radial-gradient(at 10% 9%, hsla(7, 65%, 63%, 1) 0px, transparent 50%);
            min-height: 100vh;
        }
</style>
</html>