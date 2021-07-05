<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style inputs with type="text", select elements and textareas */
        input[type=text],
        select,
        .textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
        }

        /* Style the button button with a specific background color etc */
        .input[type=button] {
          display: block;
          text-decoration: none;
          padding: 10px;
          width: 120px;
          color: white;
          border-radius: 5px;
          text-align: center;
        }

        /* When moving the mouse over the button button, add a darker green color */
        .input[type=button]:hover {
            background-color: #45a049;
        }

        /* Add a background color and some padding around the form */
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: rgb(0, 0, 0);
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        .search {
            padding: 8px 15px;
            background: rgba(50, 50, 50, 0.2);
            border: 0px solid #dbdbdb;
        }

        .button {
            position: relative;
            padding: 6px 15px;
            left: -8px;
            border: 2px solid #53bd84;
            background-color: #53bd84;
            color: #fafafa;
        }

        .button:hover {
            background-color: #fafafa;
            color: #207cca;
        }
    </style>
</head>

<body style="background-image: url(https://1920x1080hdwallpapers.com/image/201602/abstract/4754/line-shine-background-yellow-blue.jpg);">
    <div class="topnav">
        <a href="<?=base_url("home")?>">Home</a>

    </div>
    <form action="" method="GET">
        <td><label for="nama lengkap" style="color: white;">Nama Lengkap<br><input type="text" name="nama" id="nama" placeholder="Maukan Nama " style="width: 200px;"></td><br>
        <td><label for="email" style="color: white;">Email<br></label><input type="text" name="email" id="email" placeholder="Masukan Email" style="width: 200px;"></td><br>
        <dt><label for="no" style="color: white;">Nomor HP<br></label><input type="text" name="no_hp" id="no" placeholder="Masukan Nomor Hp" style="width: 200px;">
        <dt><label for="komentar" style="color: white;">Komentar<br></label><input type="text" name="komentar" id="komentar" placeholder="Masukan Komentar" style="width: 200px;">
        </dt>
        <p>Pilih Jenis Kelamin</p>
            <select name="Jeniskelamin" id="jeniskelamin" style="width: 200px;">
                <option value="Pilih">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>

            </select>
         </br>
        <td><input type="button" value="Kirim"></td>

    </form>

    <div style="background-color: orang; width: 200px;"   >
        <?php
        if ($_GET) {
            echo 'Masukan Nama : ' . $_GET['nama'];
            echo '<br>';
            echo 'Masukan Email : ' . $_GET['email'];
            echo '<br>';
            echo 'Masukan Nomor Hp : ' . $_GET['no_hp'];
            echo '<br>';
            echo 'jeniskelamin : ' . $_GET['jeniskelamin'];
            echo '<br>';
            echo 'Masukan Komentar : ' . $_GET['komentar'];
        }
        ?>
    </div>
</body>

</html>