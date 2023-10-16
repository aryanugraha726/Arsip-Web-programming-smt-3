<html>
    <head>
        <title>Latihan 3</title>
    </head>
    <body>
        <?php
            $_Panjang = 10; $_Lebar = 5;
            $_Tinggi = 7; $_Alas = 10;
            $_Diameter = 8; $_R = $_Diameter/=2; 
            $_Pythagoras = sqrt((($_Alas/2)*($_Alas/2))+($_Tinggi*$_Tinggi));
            $Ksegitiga = ($_Alas + $_Pythagoras + $_Pythagoras); $Lsegitiga = 0.5*$_Alas*$_Tinggi;
            $Klingkaran = 2*3.14*$_R; $Llingkaran = 3.14*$_R*$_R;
            $Kpersegipanjang = $_Panjang*2 + $_Lebar*2; $Lpersegipanjang = $_Panjang*$_Lebar;
            echo"<h1>Menghitung Luas dan Keliling dari 3 bangun datar</h1>";
            echo"Ukuran dari masing masing bentuk bangun datar<br>";
            echo"Segitiga : <br>Alas = $_Alas cm<br>Tinggi = $_Tinggi cm<br>";
            echo"<br>Lingkaran : <br>Jari-Jari = $_R cm<br>";
            echo"<br>Persegi Panjang : <br>Panjang = $_Panjang cm<br>Lebar = $_Lebar cm<br>";
            
            echo"<h2>Penghitungan luas dan keliling</h2>";
            echo"Segitiga";
            echo str_repeat("&nbsp;", 13);
            echo" : Luas = $Lsegitiga cm^2<br>";
            echo str_repeat("&nbsp;", 28);
            echo" Keliling = $$Ksegitiga cm<br>";
            echo"Lingkaran";
            echo str_repeat("&nbsp;", 9);
            echo" : Luas = $Llingkaran cm^2<br>";
            echo str_repeat("&nbsp;", 28);
            echo" Keliling = $Klingkaran cm<br>";
            echo"Persegi panjang";
            echo" : Luas = $Lpersegipanjang cm^2<br>";
            echo str_repeat("&nbsp;", 28);
            echo" Keliling = $Kpersegipanjang cm<br>";
        ?>
    </body>
</html>