<?php
use Illuminate\Support\Facades\App;
$lang = App::make('lang');
$language = App::make('language');
?>
<?php
include resource_path('views/layouts/head-main.blade.php');
?>
<head>
    <title><?php echo $language["Login"]; ?> | {{$language['NomeEmpresa'] }} - Aproximando e Projetando Sonhos</title>
    <?php include resource_path('views/layouts/head.blade.php'); ?>
    <?php include resource_path('views/layouts/head-style.blade.php'); ?>
</head>
<body data-layout="vertical" data-topbar="dark">
    @yield('conteudo')
</body>
 <?php include resource_path('views/layouts/vendor-scripts.blade.php'); ?>
</body>
</html>
