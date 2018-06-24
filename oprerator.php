<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--penjumahan-->
    <?php
        // $ang1=12;
        // $ang2=5+1;
        //
        // $ang3=$ang1%$ang2;
        // echo $ang3;
        // echo "<br>";
        // $ang4=$ang3+3;
        // echo $ang4;
     ?>

    <!-- increment -->
    <?php
      // $a=10;
      // $b=$a++;
      // $b=$a;
      //
      // echo $b;
      // echo "<br>";
      // echo $a;
     ?>
    <?php
      // $angka=10;
      // $angka2="10";
      //
      // //var_dump($angka==$angka2);
      // // if ($angka==$angka2) {
      // //   echo "sama";
      // // }
      // // else {
      // //   echo "tidak sama";
      // // }
    ?>

    <?php
        $userAdmin ="angga12";
        $passwordAdmin="12a";

        $userForm ="ang1a12";
        $passwordForm="11a";

        if ($userAdmin==$userForm&&$passwordAdmin==$passwordForm) {
          echo "Berhasil login";
        }
        else {
          if ($userAdmin!=$userForm&&$passwordAdmin==$passwordForm) {
            echo "User salah";
          }
          elseif ($userAdmin==$userForm&&$passwordAdmin!=$passwordForm) {
            echo "Pasword salah";
          }
          else {
            echo "Akses ditolak";
          }
        }
     ?>

    <!-- opreator string -->
    <?php
      echo "<br>";
      $string1="Halo nama saya";
      $string2="angga";
      $string3=$string1.$string2;

      echo $string3;
     ?>
  </body>
</html>
