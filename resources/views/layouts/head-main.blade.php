<?php
$lang = "br";
if (isset($_GET['lang'])) {
   $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
}
if( isset( $_SESSION['lang'] ) ) {
    $lang = $_SESSION['lang'];
}else {
    $lang = "br";
}
include resource_path('lang/'. $lang .'.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
