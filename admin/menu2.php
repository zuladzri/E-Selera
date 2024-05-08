<?php
session_start();
require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadual Makan</title>
    <?php require 'inc/link.php'; ?>
</head>

<body>
    <?php require 'inc/navbar.php'; ?> <br>
    <br>
    <br>
    <br>
    <br>
    <h1 class="container text-center rounded-pill">-JADUAL MAKAN-</h1> <br>
    <br>
    <br>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Makanan</title>
    <style>
      th {
            text-transform: lowercase;
        }
    </style>
</head>
<body>

<h1 class= "container text-center rounded-pill">-MINGGU 1-</h1>
<div class="container d-flex justify-content-center">
    <table class="table table-bordered border-secondary text-center">
        
        <tr class="table-dark">
            <th>Waktu</th>
            <th>Isnin</th>
            <th>Selesa</th>
            <th>Rabu</th>
            <th>Khamis</th>
            <th>Jumaat</th>
            <th>Sabtu</th>
            <th>Ahad</th>
        </tr> 
        <tr>
            <td>Pagi (6:00 A.M - 7:30 A.M)</td>
            <td>
                <div style="text-align: center;">
                    <p>1) Roti Canai + Kuah Dalca/Kacang Panjang + Ubi Kentang + Lobak Merah + Kacang Dal</p>
                    <p>2) Horlick Susu</p>
                </div>
            </td>
            <td>
                <p>1) Nasi Goreng Cina + Lobak + Kobis + Kacang Panjang</p>
                <p>2) Telur Scramble</p>
                <p>3) Teh O</p>
            </td>
            <td>
                <p>1) Kuehteow Goreng + Tauhu + Taugeh + Kucai + Udang</p>
                <p>2) 1 Biji Telur Mata</p>
                <p>3) Milo Susu</p>
            </td>
            <td>
                <p>1) Nasi Lemak, Sambal Ikan Bilis, Kacang Tanah Goreng, Timun</p>
                <p>2) 1 Biji Telur Mata</p>
                <p>3) Kopi O</p>
            </td>
            <td>
                <p>1) Nasi Goreng Kampung, Ikan Bilis, Sawi</p>
                <p>2) 1 Biji Telur Mata</p>
                <p>3) Teh O</p>
            </td>
            <td>
                <p>1) 2 Keping Roti, Mentega Dan Kaya</p>
                <p>2) 1 Biji Telur Separuh Masak</p>
                <p>3) Nescafe Susu</p>
            </td>
            <td>
                <p>1) Bihun Goreng</p>
                <p>2) Telur Goreng</p>
                <p>3) Kopi O</p>
            </td>
        </tr>
        <tr>
            <td>Tengahari (12:30 P.M - 1:30 P.M)</td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Goreng</p>
                <p>3) Dalca Sayuran + Terung + Lobak Merah + Kentang + Kacang Panjang</p>
                <p>4) Sepotong Betik</p>
                <p>5) Air Laici Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Daging Masak Kicap</p>
                <p>3) Kucai+Taugeh+Udang Tumis Goreng</p>
                <p>4) Sepotong Tembikai Susu</p>
                <p>5) Air Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Rendang</p>
                <p>3) Petola Masak Lemak+Soo Hun+Tauhu</p>
                <p>4) Buah Epal</p>
                <p>5) Air Tembikai Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Lemak Cili Api</p>
                <p>3) Kacang Buncis Goreng+Telur</p>
                <p>4) Buah Betik</p>
                <p>5) Air Jagung Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Tomato</p>
                <p>2) Ayam Masak Merah</p>
                <p>3) Acar Timun,Pajeri Nenas(Bombay)</p>
                <p>4) Dalca Sayuran</p>
                <p>4) Sepotong Tembikai Susu</p>
                <p>5) Air Laici Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Kari+Tomato+Kentang</p>
                <p>3) Sawi Kerinting Goreng+Bebola Ikan+Sos Tiram</p>
                <p>4) Dalca Sayuran</p>
                <p>4) Sepotong Tembikai Susu</p>
                <p>5) Air Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ikan Kembong Goreng</p>
                <p>3) Kacang Panajng+Suhun+Masak Lemak</p>
                <p>4) Sepotong Betik</p>
                <p>5) Air Barli Ais</p>
                <p>6) Air Masak</p>
            </td>
            <!-- Tambahkan baris untuk makan tengahari pada hari Selasa, Rabu, Kamis, Jumat, Sabtu, dan Ahad -->
        </tr>
        <tr>
            <td>Petang (4:30 P.M - 5:30 P.M)</td>
            <td>
                <p>1) Karipap</p>
                <p>2) Teh O</p>
            </td>
            <td>
                <p>1) Donut</p>
                <p>2) Kopi Susu</p>
            </td>
            <td>
                <p>1) Seri Ayu</p>
                <p>2) Milo O</p>
            </td>
            <td>
                <p>1) Apam Beras</p>
                <p>2) Teh Susu</p>
            </td>
            <td>
                <p>1) Kuih Seri Muka</p>
                <p>2) Nescafe O</p>
            </td>
            <td>
                <p>1) Pau</p>
                <p>2) Teh O</p>
            </td>
            <td>
                <p>1) Popia Goreng</p>
                <p>2) Horlick Susu</p>
            </td>
            <!-- Tambahkan baris untuk makan petang pada hari Selasa, Rabu, Kamis, Jumat, Sabtu, dan Ahad -->
        </tr>
        <tr>
            <td>Malam (6:30 P.M - 8:00 P.M)</td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Asam Pedas</p>
                <p>3) Kacang Panjang Tumis</p>
                <p>4) Buah Lai</p>
                <p>5) Ais Sirap</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Merah</p>
                <p>3) Sawi Kerinting Goreng+Bebola Ikan+Sos Tiram</p>
                <p>4) Buah Epal</p>
                <p>5) Ais Anggur Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Kurma</p>
                <p>3) Kangkung Goreng Belacan</p>
                <p>4) Sepotong Betik</p>
                <p>5) Ais Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ikan Kembong Goreng</p>
                <p>3) Petola+Suhun+Tauhu Masak Lemak</p>
                <p>4) Sepotong Limau</p>
                <p>5) Ais Barli Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Goreng Rempah</p>
                <p>3) Sup Sayuran+Udang+Bebola Ikan</p>
                <p>4) Sepotong Limau</p>
                <p>5) Ais Jagung Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Kicap</p>
                <p>3) Sayur Goreng Campur+Bebola Ikan+Sos Tiram</p>
                <p>4) Sepotong Limau</p>
                <p>5) Ais Laici Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Daging Goreng Kurma</p>
                <p>3) Sayur Goreng Campur+Lobak Merah</p>
                <p>4) Sepotong Tembikai</p>
                <p>5) Ais Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <!-- Tambahkan baris untuk makan malam pada hari Selasa, Rabu, Kamis, Jumat, Sabtu, dan Ahad -->
        </tr>
    </table>
</div>

</body>
</html>
    </table>
<h1 class= "container text-center rounded-pill">-MINGGU 2-</h1>
<div class="container d-flex justify-content-center">
    <table class="table table-bordered border-secondary text-center">
        
        <tr class="table-dark">
            <th>Waktu</th>
            <th>Isnin</th>
            <th>Selesa</th>
            <th>Rabu</th>
            <th>Khamis</th>
            <th>Jumaat</th>
            <th>Sabtu</th>
            <th>Ahad</th>
        </tr> 
        <tr>
            <td>Pagi (6:00 A.M - 7:30 A.M)</td>
            <td>
                <div style="text-align: center;">
                    <p>1) Nasi Goreng Cina + Lobak + Kobis + Kacang Panjang</p>
                    <p>2) Horlick Susu</p>
                </div>
            </td>
            <td>
                <p>1) Mee Goreng Mamak</p>
                <p>2) Telur Scramble</p>
                <p>3) Teh O</p>
            </td>
            <td>
                <p>1) Roti Canai+Kuah Dalca+Kacang Panjang+Kentang</p>
                <p>2) 1 Biji Telur Mata</p>
                <p>3) Horlick Susu</p>
            </td>
            <td>
                <p>1) Bihun Goreng</p>
                <p>2) 1 Biji Telur Mata</p>
                <p>3) Kopi O</p>
            </td>
            <td>
                <p>1) 2 Keping Roti,Mentega Dan Jem</p>
                <p>2) 1 Biji Telur Mata Separuh Masak</p>
                <p>3) Milo Susu</p>
            </td>
            <td>
                <p>1) Kuehteow Goreng+Tauhu+Taugeh+Kucai+Udang</p>
                <p>2) Telur Scramble</p>
                <p>3) Kopi O</p>
            </td>
            <td>
                <p>1) Mee Goreng+Sawi+Udang</p>
                <p>2) Biji Telur Mata</p>
                <p>3) Teh O</p>
            </td>
        </tr>
        <tr>
            <td>Tengahari (12:30 P.M - 1:30 P.M)</td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Kurma</p>
                <p>3) Sayur Goreng Campur</p>
                <p>4) Sepotong Tembikai</p>
                <p>5) Air Jagung Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Goreng Rempah</p>
                <p>4) Tomyam Sayuran</p>
                <p>4) Ais Krim</p>
                <p>5) Air Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ikan Kembong Goreng Berlada</p>
                <p>3) Sup Sayur Campuran+Berbola Ikan</p>
                <p>4) Sepotong Tembikai</p>
                <p>5) Air Sirap Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Rendang</p>
                <p>3) Masak Lemak Sayur</p>
                <p>4) Buah Epal</p>
                <p>5) Air Laici Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Arab</p>
                <p>2) Daging Masak Hitam</p>
                <p>3) Dalca Sayuran</p>
                <p>4) Dalca Sayuran</p>
                <p>4) Acar Timun</p>
                <p>5) Sepotong Tembikai</p>
                <p>6) Air Sirap Ais</p>
                <p>7) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Kari</p>
                <p>3) Sawi Kerinting Goreng+Bebola Ikan+Sos Tiram</p>
                <p>4) Kobis Cina</p>
                <p>4) Sepotong Betik</p>
                <p>5) Air Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Lemak</p>
                <p>3) Tauhu Goreng</p>
                <p>4) Sepotong Tembikai Susu</p>
                <p>5) Air Barli Ais</p>
                <p>6) Air Masak</p>
            </td>
            <!-- Tambahkan baris untuk makan tengahari pada hari Selasa, Rabu, Kamis, Jumat, Sabtu, dan Ahad -->
        </tr>
        <tr>
            <td>Petang (4:30 P.M - 5:30 P.M)</td>
            <td>
                <p>1) Ketayap</p>
                <p>2) Teh O</p>
            </td>
            <td>
                <p>1) Nona Manis</p>
                <p>2) Milo Susu</p>
            </td>
            <td>
                <p>1) Apam Beras</p>
                <p>2) Nescafe O</p>
            </td>
            <td>
                <p>1) Donat</p>
                <p>2) Teh Susu</p>
            </td>
            <td>
                <p>1) Lepat Pisang</p>
                <p>2) Nescafe O</p>
            </td>
            <td>
                <p>1) Koci</p>
                <p>2) Horlick Susu</p>
            </td>
            <td>
                <p>1) Seri Muka</p>
                <p>2) Milo O</p>
            </td>
            <!-- Tambahkan baris untuk makan petang pada hari Selasa, Rabu, Kamis, Jumat, Sabtu, dan Ahad -->
        </tr>
        <tr>
            <td>Malam (6:30 P.M - 8:00 P.M)</td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Rendang</p>
                <p>3) Sayur Campur</p>
                <p>4) Sepotong Tembikai</p>
                <p>5) Ais Jagung Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Daging Masak Merah</p>
                <p>3) Kacang Goreng</p>
                <p>4) Buah Epal</p>
                <p>5) Ais Barli Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Goreng Rempah</p>
                <p>3) Taugeh</p>
                <p>4) Sepotong Limau</p>
                <p>5) Ais Sirap Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ikan Selar</p>
                <p>3) Sawi Goreng</p>
                <p>4) Sepotong Betik</p>
                <p>5) Ais Anggur Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Asam Pedas</p>
                <p>3) Sayur Campur Goreng</p>
                <p>4) Sepotong Tembikai</p>
                <p>5) Ais Laici Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Sup Ayam</p>
                <p>3) Ikan Goreng Masin</p>
                <p>4) Buah Epal</p>
                <p>5) Ais Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Kari</p>
                <p>3) Kangkung Goreng</p>
                <p>4) Sepotong Tembikai</p>
                <p>5) Ais Sirap Ais</p>
                <p>6) Air Masak</p>
            </td>
            <!-- Tambahkan baris untuk makan malam pada hari Selasa, Rabu, Kamis, Jumat, Sabtu, dan Ahad -->
        </tr>
    </table>
</div>

</body>
</html>
    </table>
<h1 class= "container text-center rounded-pill">-MINGGU 3-</h1>
<div class="container d-flex justify-content-center">
    <table class="table table-bordered border-secondary text-center">
        
        <tr class="table-dark">
            <th>Waktu</th>
            <th>Isnin</th>
            <th>Selesa</th>
            <th>Rabu</th>
            <th>Khamis</th>
            <th>Jumaat</th>
            <th>Sabtu</th>
            <th>Ahad</th>
        </tr> 
        <tr>
            <td>Pagi (6:00 A.M - 7:30 A.M)</td>
            <td>
                <div style="text-align: center;">
                    <p>1) Roti Canai + Kuah Dalca/Kacang Panjang + Ubi Kentang + Lobak Merah + Kacang Dal</p>
                    <p>2) Horlick Susu</p>
                </div>
            </td>
            <td>
                <p>1) Nasi Goreng Cina + Lobak + Kobis + Kacang Panjang</p>
                <p>2) Telur Scramble</p>
                <p>3) Teh O</p>
            </td>
            <td>
                <p>1) Kuehteow Goreng + Tauhu + Taugeh + Kucai + Udang</p>
                <p>2) 1 Biji Telur Mata</p>
                <p>3) Milo Susu</p>
            </td>
            <td>
                <p>1) Nasi Lemak, Sambal Ikan Bilis, Kacang Tanah Goreng, Timun</p>
                <p>2) 1 Biji Telur Mata</p>
                <p>3) Kopi O</p>
            </td>
            <td>
                <p>1) Nasi Goreng Kampung, Ikan Bilis, Sawi</p>
                <p>2) 1 Biji Telur Mata</p>
                <p>3) Teh O</p>
            </td>
            <td>
                <p>1) 2 Keping Roti, Mentega Dan Kaya</p>
                <p>2) 1 Biji Telur Separuh Masak</p>
                <p>3) Nescafe Susu</p>
            </td>
            <td>
                <p>1) Bihun Goreng</p>
                <p>2) Telur Goreng</p>
                <p>3) Kopi O</p>
            </td>
        </tr>
        <tr>
            <td>Tengahari (12:30 P.M - 1:30 P.M)</td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Goreng</p>
                <p>3) Dalca Sayuran + Terung + Lobak Merah + Kentang + Kacang Panjang</p>
                <p>4) Sepotong Betik</p>
                <p>5) Air Laici Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Daging Masak Kicap</p>
                <p>3) Kucai+Taugeh+Udang Tumis Goreng</p>
                <p>4) Sepotong Tembikai Susu</p>
                <p>5) Air Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Rendang</p>
                <p>3) Petola Masak Lemak+Soo Hun+Tauhu</p>
                <p>4) Buah Epal</p>
                <p>5) Air Tembikai Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Lemak Cili Api</p>
                <p>3) Kacang Buncis Goreng+Telur</p>
                <p>4) Buah Betik</p>
                <p>5) Air Jagung Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Tomato</p>
                <p>2) Ayam Masak Merah</p>
                <p>3) Acar Timun,Pajeri Nenas(Bombay)</p>
                <p>4) Dalca Sayuran</p>
                <p>4) Sepotong Tembikai Susu</p>
                <p>5) Air Laici Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Kari+Tomato+Kentang</p>
                <p>3) Sawi Kerinting Goreng+Bebola Ikan+Sos Tiram</p>
                <p>4) Dalca Sayuran</p>
                <p>4) Sepotong Tembikai Susu</p>
                <p>5) Air Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ikan Kembong Goreng</p>
                <p>3) Kacang Panajng+Suhun+Masak Lemak</p>
                <p>4) Sepotong Betik</p>
                <p>5) Air Barli Ais</p>
                <p>6) Air Masak</p>
            </td>
            <!-- Tambahkan baris untuk makan tengahari pada hari Selasa, Rabu, Kamis, Jumat, Sabtu, dan Ahad -->
        </tr>
        <tr>
            <td>Petang (4:30 P.M - 5:30 P.M)</td>
            <td>
                <p>1) Karipap</p>
                <p>2) Teh O</p>
            </td>
            <td>
                <p>1) Donut</p>
                <p>2) Kopi Susu</p>
            </td>
            <td>
                <p>1) Seri Ayu</p>
                <p>2) Milo O</p>
            </td>
            <td>
                <p>1) Apam Beras</p>
                <p>2) Teh Susu</p>
            </td>
            <td>
                <p>1) Kuih Seri Muka</p>
                <p>2) Nescafe O</p>
            </td>
            <td>
                <p>1) Pau</p>
                <p>2) Teh O</p>
            </td>
            <td>
                <p>1) Popia Goreng</p>
                <p>2) Horlick Susu</p>
            </td>
            <!-- Tambahkan baris untuk makan petang pada hari Selasa, Rabu, Kamis, Jumat, Sabtu, dan Ahad -->
        </tr>
        <tr>
            <td>Malam (6:30 P.M - 8:00 P.M)</td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Asam Pedas</p>
                <p>3) Kacang Panjang Tumis</p>
                <p>4) Buah Lai</p>
                <p>5) Ais Sirap</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Merah</p>
                <p>3) Sawi Kerinting Goreng+Bebola Ikan+Sos Tiram</p>
                <p>4) Buah Epal</p>
                <p>5) Ais Anggur Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Kurma</p>
                <p>3) Kangkung Goreng Belacan</p>
                <p>4) Sepotong Betik</p>
                <p>5) Ais Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ikan Kembong Goreng</p>
                <p>3) Petola+Suhun+Tauhu Masak Lemak</p>
                <p>4) Sepotong Limau</p>
                <p>5) Ais Barli Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Goreng Rempah</p>
                <p>3) Sup Sayuran+Udang+Bebola Ikan</p>
                <p>4) Sepotong Limau</p>
                <p>5) Ais Jagung Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Kicap</p>
                <p>3) Sayur Goreng Campur+Bebola Ikan+Sos Tiram</p>
                <p>4) Sepotong Limau</p>
                <p>5) Ais Laici Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Daging Goreng Kurma</p>
                <p>3) Sayur Goreng Campur+Lobak Merah</p>
                <p>4) Sepotong Tembikai</p>
                <p>5) Ais Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <!-- Tambahkan baris untuk makan malam pada hari Selasa, Rabu, Kamis, Jumat, Sabtu, dan Ahad -->
        </tr>
    </table>
</div>

</body>
</html>
    </table>
<h1 class= "container text-center rounded-pill">-MINGGU 4-</h1>
<div class="container d-flex justify-content-center">
    <table class="table table-bordered border-secondary text-center">
        
        <tr class="table-dark">
            <th>Waktu</th>
            <th>Isnin</th>
            <th>Selesa</th>
            <th>Rabu</th>
            <th>Khamis</th>
            <th>Jumaat</th>
            <th>Sabtu</th>
            <th>Ahad</th>
        </tr> 
        <tr>
            <td>Pagi (6:00 A.M - 7:30 A.M)</td>
            <td>
                <div style="text-align: center;">
                    <p>1) Roti Canai + Kuah Dalca/Kacang Panjang + Ubi Kentang + Lobak Merah + Kacang Dal</p>
                    <p>2) Horlick Susu</p>
                </div>
            </td>
            <td>
                <p>1) Nasi Goreng Cina + Lobak + Kobis + Kacang Panjang</p>
                <p>2) Telur Scramble</p>
                <p>3) Teh O</p>
            </td>
            <td>
                <p>1) Kuehteow Goreng + Tauhu + Taugeh + Kucai + Udang</p>
                <p>2) 1 Biji Telur Mata</p>
                <p>3) Milo Susu</p>
            </td>
            <td>
                <p>1) Nasi Lemak, Sambal Ikan Bilis, Kacang Tanah Goreng, Timun</p>
                <p>2) 1 Biji Telur Mata</p>
                <p>3) Kopi O</p>
            </td>
            <td>
                <p>1) Nasi Goreng Kampung, Ikan Bilis, Sawi</p>
                <p>2) 1 Biji Telur Mata</p>
                <p>3) Teh O</p>
            </td>
            <td>
                <p>1) 2 Keping Roti, Mentega Dan Kaya</p>
                <p>2) 1 Biji Telur Separuh Masak</p>
                <p>3) Nescafe Susu</p>
            </td>
            <td>
                <p>1) Bihun Goreng</p>
                <p>2) Telur Goreng</p>
                <p>3) Kopi O</p>
            </td>
        </tr>
        <tr>
            <td>Tengahari (12:30 P.M - 1:30 P.M)</td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Goreng</p>
                <p>3) Dalca Sayuran + Terung + Lobak Merah + Kentang + Kacang Panjang</p>
                <p>4) Sepotong Betik</p>
                <p>5) Air Laici Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Daging Masak Kicap</p>
                <p>3) Kucai+Taugeh+Udang Tumis Goreng</p>
                <p>4) Sepotong Tembikai Susu</p>
                <p>5) Air Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Rendang</p>
                <p>3) Petola Masak Lemak+Soo Hun+Tauhu</p>
                <p>4) Buah Epal</p>
                <p>5) Air Tembikai Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Lemak Cili Api</p>
                <p>3) Kacang Buncis Goreng+Telur</p>
                <p>4) Buah Betik</p>
                <p>5) Air Jagung Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Tomato</p>
                <p>2) Ayam Masak Merah</p>
                <p>3) Acar Timun,Pajeri Nenas(Bombay)</p>
                <p>4) Dalca Sayuran</p>
                <p>4) Sepotong Tembikai Susu</p>
                <p>5) Air Laici Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Kari+Tomato+Kentang</p>
                <p>3) Sawi Kerinting Goreng+Bebola Ikan+Sos Tiram</p>
                <p>4) Dalca Sayuran</p>
                <p>4) Sepotong Tembikai Susu</p>
                <p>5) Air Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ikan Kembong Goreng</p>
                <p>3) Kacang Panajng+Suhun+Masak Lemak</p>
                <p>4) Sepotong Betik</p>
                <p>5) Air Barli Ais</p>
                <p>6) Air Masak</p>
            </td>
            <!-- Tambahkan baris untuk makan tengahari pada hari Selasa, Rabu, Kamis, Jumat, Sabtu, dan Ahad -->
        </tr>
        <tr>
            <td>Petang (4:30 P.M - 5:30 P.M)</td>
            <td>
                <p>1) Karipap</p>
                <p>2) Teh O</p>
            </td>
            <td>
                <p>1) Donut</p>
                <p>2) Kopi Susu</p>
            </td>
            <td>
                <p>1) Seri Ayu</p>
                <p>2) Milo O</p>
            </td>
            <td>
                <p>1) Apam Beras</p>
                <p>2) Teh Susu</p>
            </td>
            <td>
                <p>1) Kuih Seri Muka</p>
                <p>2) Nescafe O</p>
            </td>
            <td>
                <p>1) Pau</p>
                <p>2) Teh O</p>
            </td>
            <td>
                <p>1) Popia Goreng</p>
                <p>2) Horlick Susu</p>
            </td>
            <!-- Tambahkan baris untuk makan petang pada hari Selasa, Rabu, Kamis, Jumat, Sabtu, dan Ahad -->
        </tr>
        <tr>
            <td>Malam (6:30 P.M - 8:00 P.M)</td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Asam Pedas</p>
                <p>3) Kacang Panjang Tumis</p>
                <p>4) Buah Lai</p>
                <p>5) Ais Sirap</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Merah</p>
                <p>3) Sawi Kerinting Goreng+Bebola Ikan+Sos Tiram</p>
                <p>4) Buah Epal</p>
                <p>5) Ais Anggur Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Kurma</p>
                <p>3) Kangkung Goreng Belacan</p>
                <p>4) Sepotong Betik</p>
                <p>5) Ais Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ikan Kembong Goreng</p>
                <p>3) Petola+Suhun+Tauhu Masak Lemak</p>
                <p>4) Sepotong Limau</p>
                <p>5) Ais Barli Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Goreng Rempah</p>
                <p>3) Sup Sayuran+Udang+Bebola Ikan</p>
                <p>4) Sepotong Limau</p>
                <p>5) Ais Jagung Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Ayam Masak Kicap</p>
                <p>3) Sayur Goreng Campur+Bebola Ikan+Sos Tiram</p>
                <p>4) Sepotong Limau</p>
                <p>5) Ais Laici Ais</p>
                <p>6) Air Masak</p>
            </td>
            <td>
                <p>1) Nasi Putih</p>
                <p>2) Daging Goreng Kurma</p>
                <p>3) Sayur Goreng Campur+Lobak Merah</p>
                <p>4) Sepotong Tembikai</p>
                <p>5) Ais Oren Ais</p>
                <p>6) Air Masak</p>
            </td>
            <!-- Tambahkan baris untuk makan malam pada hari Selasa, Rabu, Kamis, Jumat, Sabtu, dan Ahad -->
        </tr>
    </table>
</div>

</body>
</html>
    </table>
        </div>
    <?php require 'inc/script.php'; ?>
</body>

</html>