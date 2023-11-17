<html>
    
    <?php
    include_once "init.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM mahasiswa WHERE id='$id'";
    $result = mysqli_query($koneksi_ke_db, $query);
    $getbyid = mysqli_fetch_assoc($result);
    
    if(isset($_POST['simpan'])){
        // var_dump($_POST);die;
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $alamat = $_POST['alamat'];
        
        $query_insert = "INSERT INTO mahasiswa (nama, nim, alamat) VALUES ('$nama', '$nim', '$alamat')";
        mysqli_query($koneksi_ke_db, $query_insert);
        header("location: index.php");
    }
    ?>

    <style>
        *{
        font-family: 'Quicksand', sans-serif;
        }
        .container{
            display: flex;
            justify-content: center;
            padding-top: 15px;
        }
        .container .hero{
            display: block;
            max-width: 72vw;
            margin-top: 10vh;
            margin-bottom: 30px;
            background: rgba(0, 0, 0, 0.50);
            padding: 50px;
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(11.6px);
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

        table{
            width: 600px;
        }

        @media (max-width: 700px){
            table{
                width: 90%;
            }
        }

        table td{
            padding: 5px;

        }

        td.label{
            width: 40%;
        }

        .input{
            border: 1px solid #cccccc;
            background-color: #dfdfdf;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }

        input.tbl-biru {
            border: none;
            background-color: #3338;
            border-radius: 20px;
            margin-top: 20px;
            padding: 15px 20px 15px 20px;
            color: #ffffff;
            cursor: pointer;
            font-weight: bold;
        }
        input.tbl-biru:hover {
            background-color: #999;
            text-decoration: none;

        }

        h1.page-name{
            display: flex;
            justify-content: center;
            color: #333;
            padding-top: 30px; 
        }

        button.data{
            border: none;
            background-color: #3339;
            border-radius: 20px;
            margin-top: 20px;
            padding: 10px 20px 10px 20px;
            color: #ffffff;
            cursor: pointer;
            font-weight: bold;
        }
        button.data:hover{
            background-color: #999;
            text-decoration: none;
        }

    </style>
    <button class="data"><a href="http://localhost/pertemuan/index.php" style="color:ffffff">Lihat Data</a></button>
    <h1 class="page-name">Ubah Data</h1>
    <form action="" method="post">
        <div class="container">
            <div class="hero">
        <table>
            <tr>
                <td class="label">Nama Lengkap</td>
                <td>
                    <input type="text" name="nama" class="input" value=" <?=$getbyid ['nama']?>"><br>
                </td>
            </tr>
            <tr>
                <td class="label">Nim</td>
                <td>
                <input type="text" name="nim" class="input" value=" <?=$getbyid ['nim']?>"><br>
                </td>
            </tr>
            <tr>
                <td class="label">Alamat</td>
                <td>
                <input type="text" name="alamat" class="input" value="<?=$getbyid ['alamat']?>"><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit" name="simpan" value="Simpan" class="tbl-biru" />
                </td>
            </tr>
            
        </table>
        </div>
        </div>
    </form>
</html>