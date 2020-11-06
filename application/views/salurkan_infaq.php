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
          <th>Nama Muzaki</th>
          <th>Jumlah Infaq</th>
          <th>Lembaga</th>
          <th>BANK SYARIAH</th>

        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach($hardi as $b){
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?PHP echo $b->nama; ?></td>
            <td><?php echo $b->stasiun_akhir ?></td>
            <td><?php echo $b->jam ?></td>
            <td><?php echo $b->stasiun_awal ?></td>

          </tr>
        <?php } ?>
      </tbody>
    </table>
</body>
</html>
