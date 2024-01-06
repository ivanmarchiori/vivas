<?php
if (isset(auth()->user()->lang)) {
    $lang = auth()->user()->lang;
} else {
    $lang = 'br';
}
include resource_path("lang/{$lang}.php");
?>
<?php
include resource_path('views/layouts/head-main.blade.php');
?>

<head>
    <title><?php echo $language['Login']; ?> | {{ $language['NomeEmpresa'] }} - {{ $language['Slogan'] }}</title>
    <?php include resource_path('views/layouts/head.blade.php'); ?>
    <?php include resource_path('views/layouts/head-style.blade.php'); ?>
</head>

<body data-layout="vertical" data-topbar="dark">
    @yield('conteudo')
</body>
<?php include resource_path('views/layouts/vendor-scripts.blade.php'); ?>
</body>

</html>
