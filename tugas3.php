<?php

    $Databarang = [
        [ 'barang' => 'Telor' , 'berat' => 7, 'stock' => 300 ],
        [ 'barang' => 'Beras' , 'berat' => 15 , 'stock' => 0 ],
        [ 'barang' => 'Minyak Goreng' , 'berat' => 4 , 'stock' => 10 ],
        [ 'barang' => 'Garam' , 'berat'=> 2 , 'stock' => 25 ],
        [ 'barang' => 'Shampoo' , 'berat' => 1 , 'stock' => 0 ],
        [ 'barang' => 'Roti' , 'berat'=> 0.5 , 'stock' => 15 ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 3</title>
</head>
<body>

    <body style = "background-color:#1A1A1D;">

<table>
  <caption>Tabel Konversi Berat Pak Joy</caption>

  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Berat (kg)</th>
      <th scope="col">Berat (gram)</th>
      <th scope="col">Berat (mg)</th>
      <th scope="col">Stock</th>
    </tr>
  </thead>

  <tbody>
    <?php 

      $color;
      $aLength = count($Databarang);

      foreach($Databarang as $nomor => $data){ ?>

        <?php if($data['stock'] == 0){
          $color = "style = 'background-color : red; color : white'";
          }else {$color = "style = 'background-color : rgb(233, 233, 233);'";}        
        ?>
        

        <tr>
          <td scope = "row" data-label="Nomor"> <?php echo $nomor + 1 ?> </td>
          <td data-label="Nama Barang"> <?php echo $data['barang'] ?> </td>
          <td data-label="Berat (kg)"> <?php echo $data['berat'] ?> </td>
          <td data-label="Berat (gram)"> <?php echo $data['berat'] * 1000 ?> </td>
          <td data-label="Berat (mg)"> <?php echo $data['berat'] * 1000000 ?> </td>
          <td data-label="Stock" <?= $color?>> <?php if($data['stock'] == 0){
            echo "kosong";
            } else {echo $data['stock'];} ?> </td>
        </tr>

      <?php }

    ?>
  </tbody>
</table>

  <h5 style = "color : rgb(233, 233, 233)">Nabil Karren Y <br> 105219056 <br> </h5> 

</body>
</html>