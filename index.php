<?php require "views/components/navbar.php"; ?>
<?php ob_start(); ?>



<?php $out1 = ob_get_contents(); ?>
<?php ob_end_clean(); ?>
<?php require "views/components/layout.php"; ?>