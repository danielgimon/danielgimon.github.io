<html>
    <body>
    <?php

        // Variabel
        $nama = "Daniel";

            // Mencetak(menampilkan)
            echo "Hello everyone! Introduce myself, My name is ".$nama."... <br>";
            echo "<br>";
        // Type Data
            // integer
            $x = 10;
            $y = 5;
            $z = 20 + $x - $y;

            echo "Variabel x : {$x} <br>";
            echo "Variabel y : {$y} <br>";
            echo "Variabel z : {$z} <br>";
            echo "<br>";

            // float
            $Nilai = 80.5;

            echo "Nilai ujian Matematika Ari adalah : {$Nilai} <br>";
            echo "<br>";

            // boolean
            $SudahUjian = true;
            $AriLulus = false;

            var_dump($SudahUjian);
            echo "<br>";
            var_dump($AriLulus);

            echo "<br>";
            echo "<br>";

            // string
            $namaDepan = "Daniel";
            $namaBelakang = "Gimon";

            echo "Nama saya : {$namaDepan} {$namaBelakang} <br>";
            echo "<br>";
            // array
            $mahasiswa = ["Daniel", "Rio", "Farrel", "Khrisna", "Rey"];

            echo "Nama Mahasiswa LULUSAN S1 Informatika : $mahasiswa[0] <br>";
            echo "<br>";
        // Operators
            // Operator Aritmatika
            $m = 5;
            $n = 4;
                // Penambahan
                $l = $m + $n;
                echo "{$m} + {$n} = {$l} <br>";
                // Pengurangan
                $l = $m - $n;
                echo "{$m} - {$n} = {$l} <br>";
                // Perkalian
                $l = $m * $n;
                echo "{$m} * {$n} = {$l} <br>";
                // Pembagian
                $l = $m / $n;
                echo "{$m} / {$n} = {$l} <br>";
                // Sisa Bagi
                $l = $m % $n;
                echo "{$m} % {$n} = {$l} <br>";
                // Pangkat
                $l = $m ** $n;
                echo "{$m}^4 = {$l} <br>";
                echo "<br>";

            // Operator Penugasan (Assigment (+=, -=, *=, /=, **=, %=, .=)) digunakan untuk mengisi nilai dan juga menghitung operasi aritmatika
                // Operator += (Mengisi dan menambah)
                $nilai1 = 15;
                    // Ini Operator aritmatika
                    $nilai1 = $nilai1 + 10;
                    echo "15 + 10 = {$nilai1} <br>";
                    // Hasilnya adalah 25

                    // Ini Operator Assigment
                    // Sekarang variabel $nilai1 adalah 25
                    $nilai1 += 10;
                    echo "25 + 10 = {$nilai1} <br>";
                    // Hasilnya sekarang adalah 35
                    echo "<br>";

                // Operator -= (Mengisi dan mengurang)
                $nilai2 = 15;
                    // Ini Operator aritmatika
                    $nilai2 = $nilai2 - 5;
                    echo "15 - 5 = {$nilai2} <br>";
                    // Hasilnya adalah 10

                    // Ini Operator Assigment
                    // Sekarang variabel $nilai2 adalah 10
                    $nilai2 -= 5;
                    echo "10 - 5 = {$nilai2} <br>";
                    // Hasilnya sekarang adalah 5
                    echo "<br>";

                // Operator *= (Mengisi dan mengkali)
                $nilai3 = 15;
                    // Ini Operator aritmatika
                    $nilai3 = $nilai3 * 5;
                    echo "15 * 5 = {$nilai3} <br>";
                    // Hasilnya adalah 75

                    // Ini Operator Assigment 
                    // Sekarang variabel $nilai3 adalah 
                    $nilai3 *= 5;
                    echo "75 * 5 = {$nilai3} <br>";
                    // Hasilnya sekarang adalah 375
                    echo "<br>";

            // Operator Increment
            $hasil = 0;

            $hasil++;
            $hasil++;
            $hasil++;

            echo "Increment : {$hasil} <br>";

            // Operator Decrement
            $total = 4;

            $total--;
            $total--;
            $total--;

            echo "Decrement : {$total} <br>";
            echo "<br>";

            // Operator Relasi (Perbandingan)
            $bilangan1 = 5;
            $bilangan2 = 3;

                // Operator lebih besar
                $Hasil = $bilangan1 > $bilangan2;
                echo "$bilangan1 > $bilangan2: $Hasil";
                // Jika Benar Komputer akan menampilkan 1 sebagai true dan 0 (kosong) sebagai false
                echo "<br>";

                // Operator lebih kecil
                $Hasil = $bilangan1 < $bilangan2;
                echo "$bilangan1 < $bilangan2: $Hasil";
                // Jika Benar Komputer akan menampilkan 1 sebagai true dan 0 (kosong) sebagai false
                echo "<br>";

                // Operator lebih sama dengan
                $Hasil = $bilangan1 == $bilangan2;
                echo "$bilangan1 == $bilangan2: $Hasil";
                // Jika Benar Komputer akan menampilkan 1 sebagai true dan 0 (kosong) sebagai false
                echo "<br>";

                // Operator tidak sama dengan
                $Hasil = $bilangan1 != $bilangan2;
                echo "$bilangan1 != $bilangan2: $Hasil";
                // Jika Benar Komputer akan menampilkan 1 sebagai true dan 0 (kosong) sebagai false
                echo "<br>";

                // Operator lebih besar sama dengan
                $Hasil = $bilangan1 >= $bilangan2;
                echo "$bilangan1 >= $bilangan2: $Hasil";
                // Jika Benar Komputer akan menampilkan 1 sebagai true dan 0 (kosong) sebagai false
                echo "<br>";

                // Operator lebih kecil sama dengan
                $Hasil = $bilangan1 <= $bilangan2;
                echo "$bilangan1 <= $bilangan2: $Hasil <br>";
                // Jika Benar Komputer akan menampilkan 1 sebagai true dan 0 (kosong) sebagai false
                echo "<br>";

            // Operator Logika
            $a= true;
            $b= false;

                // Logika AND
                // variabel $c akan bernilai false
                $c = $a && $b;
                printf("%b && %b = %b <br>", $a,$b,$c);
                
                // Logika OR
                // variabel $c akan bernilai true
                $c = $a || $b;
                printf("%b || %b = %b <br>", $a,$b,$c);

                // Logika NOT
                // variabel $c akan bernilai false
                $c = !$a;
                printf("!%b = %b <br>", $a, $c);
                echo "<br>"; 

            // Operator Bitwise
            $d = 60;
            $e = 13;
                // bitwise AND
                $f = $d & $e;
                echo "$d & $e = $f";
                echo "<br>";

                // bitwise OR
                $f = $d | $e;
                echo "$d | $e = $f <br>";

                // bitwise XOR
                $f = $d ^ $e;
                echo "$d ^ $e = $f <br>";

                // Shift Left
                $f = $d << $e;
                echo "$d << $e = $f <br>";

                // Shift Right
                $f = $d >> $e;
                echo "$d >> $e = $f <br>";
                echo "<br>";   
                
            // Operator Ternary (?) "(kondisi benar) : (kondisi salah)"
            $suka = true;
                // menggunakan operator ternary
                echo "Kamu suka aku? ";
                $jawab = $suka ? "iya" : "tidak";

                // menampilkan jawaban
                echo $jawab;
                echo "<br>";
                echo "<br>";

        // Magic Constans
            // Konstanta __LINE__ (Menyatakan nomor baris)
            echo "Ini baris ke: ".__LINE__." <br>";
            echo "Ini baris ke: ".__LINE__." <br>";
            echo "ini baris ke: ".__LINE__." <br>";
            echo "<br>";

            // Konstanta  __FILE__ (Menyatakan letak file yang disimpan)
            echo "File ini berada di : " . __FILE__;
            echo "<br>";
            echo "<br>";

            // Konstanta  __DIR
            // (Hampir sama dengan __FILE__ yaitu menyatakan letak file yang disimpan namun perbedaannya __DIR__ tidak menampilkan nama file)
            echo "File ini berada di : " . __DIR__;
            echo "<br>";
            echo "<br>";       

            // Konstanta  __FUNCTION__ (Memanggil nama fungsi)
            function Dani() {
                echo "Call Me : " . __FUNCTION__;
            }        
                // Memanggil fungsi
                Dani();
                echo "<br>";
                echo "<br>";
                
            // Konstanta __CLASS__ (berisi nama kelas)
            class Pemweb_D {
                function printClassName(){
                    echo "Nama class ini adalah: ". __CLASS__;
                    }
                }         
                // membuat objek
                $cetak = new Pemweb_D();
                $cetak ->printClassName();
                echo "<br>";
                echo "<br>";

            // Konstanta __METHOD__ (Konstanta __METHOD__ sama seperti konstanta __FUNCTION__, akan berisi nama method dan class tempat digunakan)
            class Fruits {
                public function apple(){
                return __METHOD__;
                }
            }
            $ctk = new Fruits();
            echo $ctk->apple();
            // Baris baru
            echo "<br>";
            echo "<br>";

            // Konstanta __TRAIT__ (Jika digunakan dalam suatu __TRAIT__ nama __TRAIT__ tersebut dikembalikan)
            trait hallo {
                public function msg() {
                echo __TRAIT__; 
                }
            }
            
            class Welcome {
                use hallo;
            }
            
            $obj = new Welcome();
            $obj->msg();
            echo "<br>";
            echo "<br>";

        // If, Else, Elseif
        $t = date("H");
            // if
            if ($t < "20") {
                echo "Hello.. Good morning! <br>";
            }
            // if else
            if ($t < "20") {
            echo "Hello.. Good morning! <br>";
            } else {
            echo "Hello.. Good afternoon! <br>";
            }
            // elseif
            if ($t < "10") {
            echo "Have a good morning!";
            } elseif ($t < "20") {
            echo "Have a good afternoon!";
            } else {
            echo "Have a good night!";
            }
            echo "<br>";
            echo "<br>";

        // Switch   
        $favorite = "chicken";

            switch ($favorite) {
            case "chicken":
                echo "Your favorite color is red! <br>";
                break;
            case "meet balls":
                echo "Your favorite color is blue! <br>";
                break;
            case "spaghetti":
                echo "Your favorite color is green! <br>";
                break;
            default:
                echo "Your favorite food is neither chicken, meet balls, or spaghetti! <br>";
            }
            echo "<br>";
        
        // Loops
        $nilai = 1;
            // while
            while($nilai <= 5) {
            echo "The number is: $nilai <br>";
            $nilai++;
            }
            echo "<br>";
            
            // do while
            do {
                echo "The number is: $nilai <br>";
                $nilai++;
            }
            while ($nilai <= 5);
            echo "<br>";

            // for
            for ($x = 0; $x <= 10; $x+=2) {
                echo "The number is: $x <br>";
            }
            echo "<br>";

            // foreach
            $family = array("Me"=>"21", "Mom"=>"40", "My Grandmother"=>"75");

                foreach($family as $i => $age) {
                echo "$i = $age <br>";
                }
            echo "<br>";

            // break
            $obj = 0;

                while($obj < 10) {
                    if ($obj == 4) {
                        break;
                    }
                echo "The number is: $obj <br>";
                $obj++;
                }
            
            // continue
                while($obj < 10) {
                    if ($obj == 4) {
                    $obj++;
                    continue;
                    }
                    echo "The number is: $obj <br>";
                    $obj++;
                }
                echo "<br>";
        // function
        $mahasiswa = ["Daniel", "Rio", "Farrel", "Khrisna", "Rey"];

        function cetaknama ($nama){
            echo $nama. " Batman Group <br>";
        }
        for($a = 0; $a<count($mahasiswa); $a++){
            cetaknama($mahasiswa[$a]);
        }   
        echo "<br>";

        // Array
        $fruits = array("Apple", "Banana", "Orange");
        echo count($fruits);
        echo "<br>";
        // contoh lain
        echo $fruits[1];
        echo "<br>";
        echo "<br>";

        // Superglobals
            // GLOBALS
            $nil1 = 75;
            $nil2 = 25; 

            function addition() {
            $GLOBALS['jml'] = $GLOBALS['nil1'] + $GLOBALS['nil2'];
            }
            addition();
            echo $jml;
            echo "<br>";
            echo "<br>";

            // SERVER
                // Mengembalikan nama file dari skrip yang sedang dijalankan
                echo $_SERVER['PHP_SELF'];
                echo "<br>";
                // Mengembalikan nama server host
                echo $_SERVER['SERVER_NAME'];
                echo "<br>";
                // Mengembalikan header host dari permintaan saat ini
                echo $_SERVER['HTTP_HOST'];
                echo "<br>";
                // mengidentifikasi agen pengguna yang bertanggung jawab membuat permintaan HTTP tertentu
                echo $_SERVER['HTTP_USER_AGENT'];
                echo "<br>";
                // Mengembalikan jalur skrip saat ini
                echo $_SERVER['SCRIPT_NAME'];
                echo "<br>";
                echo "<br>";
    ?>
            INI SUPERGLOBALS REQUEST
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
            </form>
    <?php
            // REQUEST
            if ($_SERVER["REQUEST_METHOD"] == "POST") {   
            // Mendapatkan data dari field di atas
            $name = $_REQUEST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
            }
            echo "<br>";
            echo "<br>";
    ?>
    INI SUPERGLOBALS POST
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
    <input type="submit">
    </form>
    <?php
            // POST
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mendapat nilai inputan di atas
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
            }
            echo "<br>";
            echo "<br>";

            
    ?>      <!-- GET -->
            INI SUPERGLOBALS GET
            <form action="" method="GET">
                <label>Name</label>
                <input type="text" name="Name">
                <label>Email</label>
                <input type="text" name="Email">
                <button>Submit</button>

            </form>
</body>
</html>
