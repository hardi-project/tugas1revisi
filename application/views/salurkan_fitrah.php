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
          <th>No</th>
          <th>Nama Mustahik</th>
          <th>Nilai Zakat</th>
          <th>Jumlah</th>
          <th>Lembaga</th>
          <th>BANK</th>
          </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach($zakat_fitrah as $b){
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?PHP echo $b->nama_muzaki ?></td>
            <td><?php echo $b->nilai_zakat ?></td>
            <td><?php echo $b->jumlah ?></td>
            <td><?php echo $b->lembaga ?></td>
            <td><?php echo $b->bank ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
</body>
</html>
