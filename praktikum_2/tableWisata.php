<?php
function curl ($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}

// alamat localhost untuk dile getWisata.php, ambil hasil export JSON
$send = curl("http://localhost/json/getWisata.php");

// mengubah json menjadi array
$data = json_decode($send, TRUE);

?>
<table border="1" cellpadding="8" cellspacing="0">
  <thead>
    <tr>
      <th>Kota</th>
      <th>Landmark</th>
      <th>Tarif</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row): ?>
      <tr>
        <td><?= $row['kota']; ?></td>
        <td><?= $row['landmark']; ?></td>
        <td><?= $row['tarif']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
