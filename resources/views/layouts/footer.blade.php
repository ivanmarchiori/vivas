<?php
include(resource_path("lang/{$lang}.php"));
?>
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> &copy; <?=$language['NomeEmpresa']?>.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Criado pelo time <?=$language['NomeEmpresa']?> - Todos os direitos reservados
                </div>
            </div>
        </div>
    </div>
</footer>
