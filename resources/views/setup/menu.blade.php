<div class="card card-h-100 d-none d-sm-block">
    <div class="card-body">
        <a href="/setup" class="btn btn-<?php if ($canal == 'setup') {
            echo 'success disabled';
        } else {
            echo 'primary';
        } ?> w-100 mb-1" id="btn-new-event"><?php echo $language['SetupCompany']; ?></a>
        <a href="/setup/tags" class="btn btn-<?php if ($canal == 'tags') {
            echo 'success disabled';
        } else {
            echo 'primary';
        } ?>  w-100 mb-1" id="btn-new-event"><?php echo $language['SetupTags']; ?></a>
        <a href="/setup/param" class="btn btn-<?php if ($canal == 'param') {
            echo 'success disabled';
        } else {
            echo 'primary';
        } ?>  w-100 mb-1" id="btn-new-event"><?php echo $language['SetupParam']; ?></a>
        <a href="/setup/products" class="btn btn-<?php if ($canal == 'products') {
            echo 'success disabled';
        } else {
            echo 'primary';
        } ?>  w-100 mb-1"
            id="btn-new-event"><?php echo $language['SetupProducts']; ?></a>
        <a href="/setup/reasons" class="btn btn-<?php if ($canal == 'reasons') {
            echo 'success disabled';
        } else {
            echo 'primary';
        } ?>  w-100 mb-1"
            id="btn-new-event"><?php echo $language['SetupReasons']; ?></a>
        <a href="/setup/emails" class="btn btn-<?php if ($canal == 'emails') {
            echo 'success disabled';
        } else {
            echo 'primary';
        } ?>  w-100 mb-1"
            id="btn-new-event"><?php echo $language['SetupEmails']; ?></a>
        <a href="/setup/goals" class="btn btn-<?php if ($canal == 'goals') {
            echo 'success disabled';
        } else {
            echo 'primary';
        } ?>  w-100 mb-1"
            id="btn-new-event"><?php echo $language['SetupGoals']; ?></a>
        <a href="/setup/users" class="btn btn-<?php if ($canal == 'users') {
            echo 'success disabled';
        } else {
            echo 'primary';
        } ?> w-100 mb-1"><?php echo $language['SetupUsers']; ?></a>
    </div>
</div>
