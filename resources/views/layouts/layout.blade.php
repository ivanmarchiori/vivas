<?php
include resource_path('views/layouts/head-main.blade.php');
?>
<head>
    <title><?php echo $language["Login"]; ?> | e-VIVAS - Aproximando e Projetando Sonhos</title>
    <?php include resource_path('views/layouts/head.blade.php'); ?>
    <?php include resource_path('views/layouts/head-style.blade.php'); ?>
</head>
<body data-layout="vertical" data-topbar="dark">
    @yield('conteudo')
</body>
 <?php include resource_path('views/layouts/vendor-scripts.blade.php'); ?>
</body>
</html>
