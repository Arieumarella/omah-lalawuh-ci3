<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
    </style>

    <title>Omah Lelawuh PDF</title>
  </head>
  <body>
    <img src="assets/upload/toko/3.png" style="position: absolute; width: 140px; height: auto;">
  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          OMAH LELAWUH
          <br>YOGYAKARTA INDONESIA
        </span>
      </td>
    </tr>
  </table>
   <hr class="line-title"> 
    <div class="container">
 
<br>


     <table class="table table-borderless">
      <tbody>
        <tr>
          <th scope="row" align="left">Kode Transaksi</th>
          <td></td>
          <td>: <?php echo $konfirmasi->kode_transaksi ?></td>
        </tr>
         <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row" align="left">No Rekening</th>
          <td></td>
          <td>:  <?php echo $data_toko->rekening ?></td>
        </tr>
         <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
         <tr>
          <th scope="row" align="left">Batas tgl Pembayaran</th>
          <td></td>
          <td>: <?php echo $konfirmasi->tanggal_batas_bayar ?></td>
        </tr>
         <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row" align="left">Yang Harus Dibayar</th>
          <td></td>
          <td>: Rp. <?php echo number_format( $konfirmasi->total_bayar, 0,',','.') ?></td>
        </tr>
        <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
         <tr>
          <th scope="row" align="left">Konfirmasi Pembayaran</th>
          <td></td>
          <td>: WA-<?php echo $data_toko->no_wa;  ?></td>
        </tr>
         <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th ></th>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>

    <br>
    <p class="mb-0"><b>Silahkan Konfirmasi Pembayaran Berupa Bukti Pembayaran Pada Nomer WA Yang Sudah Tertera.!</b>Jika ada yang belum jelas atau ada yang ditanyakan silahkan hubungi admin melalui nomer WA yang sudah tertera.</p>
      <br>
  </div>    
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>