<?php

$nama = "Linda";
/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";

$no = 7;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}

$data = array('Honda', 'Suzuka', 'Naruta', 'Ayla', 'Vespa');

foreach($data as $value){
    echo $value."<br>";
}

echo $data[2];
*/

//percabangan

/*
if ($nama == "Ainur") {
    echo $nama." anaknya Pak Rahmat";
} else if ($nama == "Linda") {
    echo $nama." anaknya Pak Bidin";
} else {
    echo $nama." anaknya siapa ya?";
}
*/

/*
switch($nama) {
    case "Ainur";
        $pesan = $nama." adalah orang Jawa asli";
    break;
    case "Linda";
        $pesan = $nama." adalah orang Jawa campur Ambon";
    break;
    default;
        $pesan = $nama." darimana asalnya?";
}

echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ainur belajar php</title>
</head>
<body>
    <h3>Coba kalian ketik nama dan ketik jumlah pengulangan yang diinginkan</h3>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama temanmu</label>
        <input type="text" name="nama"><br>
        <br><label>Jumlah pengulangan</label>
        <input type="text" name="no"><br>
        <br><input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if(!empty($_POST['submit'])) {
            switch($_POST['nama']) {
                case "ainur":
                    $pesan = $_POST['nama']." anaknya Pak Rahmat";
                break;
                case "linda":
                    $pesan = $_POST['nama']." anaknya Pak Bidin";
                break;
                case "ani":
                    $pesan = $_POST['nama']." anaknya Bu Budiman";
                break;
                default:
                    $pesan = $_POST['nama']." anaknya siapa ya? Ada yang tau?";
                }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

            }
            
            else {
                echo "Kamu belum input nama dan jumlah yaa, ayok diisi";
            }
    ?>
    
</body>
</html>