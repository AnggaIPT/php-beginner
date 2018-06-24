<?php
  $x = "17";
  echo password_hash($x, PASSWORD_BCRYPT, ['cost' => 12]);
?>
