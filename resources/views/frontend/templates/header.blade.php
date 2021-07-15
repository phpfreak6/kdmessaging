<?php

use Illuminate\Support\Facades\DB;
?>

<header class="main-header">
    <a href="<?= url('/dashboard') ?>" class="logo">
        <img src="<?= url('img/white-logo.png'); ?>" style="height: 35px;">
    </a>
    <nav class="navbar navbar-static-top">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <?php
                if (Auth::user()->admin == 1) {
                    $adminBrandsList = DB::table('brands')->select('*')->get();
                    ?>
                    <li class="user user-menu">
                        <form method="post" action="<?= url('/users/changeBrand'); ?>">
                            <?= csrf_field(); ?>
                            <select name="brand_id" onchange="this.form.submit()" style="margin-top:10px;" class="form-control input-sm">
                                <?php foreach ($adminBrandsList as $bran) { ?>
                                    <option value="<?= $bran->id ?>" <?= Auth::user()->brand_id == $bran->id ? 'selected' : '' ?>><?= $bran->brand_name ?></option>
                                <?php } ?>
                            </select>
                        </form>
                    </li>
                    <li class="user user-menu">  
                        <a href="<?= url('/admin/dashboard'); ?>" class=""> 
                            <span class="hidden-xs">Switch Account To Admin</span>  
                        </a>
                    </li> 
                <?php } ?>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs"><?= Auth::user()->first_name . ' ' . Auth::user()->last_name; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ url('/change_password')}}" class="btn btn-default btn-flat btn-sm">Change Password</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('/logout')}}" class="btn btn-default btn-flat btn-sm">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>