<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <style type="text/css">
    .table-data{
        width: 100%;
        border-collapse: collapse;
    }

    .table-data tr th,
    .table-data tr td{
        border: 1px solid black;
        font-size: 10pt;
    }
    </style>
    <h3>Laporan Data yang disalurkan</h3>
    <br>
    <table class="table-data">
      <thead>
        <tr>
          <th>Nomor</th>
          <th>Nama Muzaki</th>
          <th>Penghasilan</th>
          <th>Dikeluarkan</th>
          <th>Lembaga</th>
          <th>BANK</th>
          <th>Bukti TF</th>

        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach($zakat_mal as $b){
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?PHP echo $b->nama_muzaki ?></td>
            <td><?php echo $b->penghasilan ?></td>
            <td><?php echo $b->dikeluarkan ?></td>
            <td><?php echo $b->lembaga ?></td>
            <td><?php echo $b->bank ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
</body>
</html>
