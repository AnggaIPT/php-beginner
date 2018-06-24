<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <?php
        // $siswa = ['supar','pepeng','adi','angga'];
        // for ($i=0; $i <=3 ; $i++) {
        //   echo $siswa[$i]."</br>";
        // }
        // echo "<br>";
        // echo $siswa[0];
        // echo "<br>";
     ?>
    <?php
        // $siswa = ['supar','pepeng','adi','angga'];
        //
        // echo $siswa[2];
        // echo "<br>";
        // echo "Dia sedang berlari dengan $siswa[3]";
     ?>
    <?php
        $koordinat=array
        (
          array(8,2),
          array(1,3),
          array(4,1)
        );
        //echo $koordinat[0][0];
        for ($i=0; $i<3; $i++) {
          for ($j=0; $j<2; $j++) {
              echo $koordinat[$i][$j];
          }
          echo "<br>";
        }
     ?>
    <?php
      $macam2 = array(121,"jojo",44.23,"Belajar Php");
      //menambah elemen
      $macam2[4]= "Duniailkom";
      $macam2[5]= 212;
      $macam2[6]=3.14;

      //mengubah
      $macam2[1]= "kk";
      $macam2[]="sql ceria";
      $macam2[99]=100;
      $macam2[7]="ad";
      $macam2[]=122;
      echo "<pre>";//untuk menampilkan kebawah
      print_r($macam2);
      echo "</pre>";
     ?>
    <?php
        // $macam3 = array(
        //   'nama'=>"angga",
        //   'alamat'=>"Panjer",
        //   "umur"=>20,
        //   'telp'=>"085338614415"
        // );
        //
        // echo "<pre>";
        // print_r($macam3);
        // echo "</pre>";
        //
        // echo "$macam3[nama]";
        // echo "<br>";
        // echo "No telepon = $macam3[telp]";
     ?>
     <?php
         // $macam3 = array(
         //   "angga",
         //   "Panjer",
         //   20,
         //   "085338614415"
         // );
         //
         // echo "<pre>";
         // print_r($macam3);
         // echo "</pre>";
      ?>
  </body>
</html>
