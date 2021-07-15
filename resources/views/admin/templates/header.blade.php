<header class="main-header"> 
    <a href="<?= url('/admin/dashboard') ?>" class="logo">
        <img src="<?= url('img/white-logo.png'); ?>" style="height: 35px;">  
    </a>  
    <nav class="navbar navbar-static-top">    
        <div class="navbar-custom-menu">     
            <ul class="nav navbar-nav">   
                <li class="user user-menu">  
                    <a href="<?= url('/dashboard'); ?>" class=""> 
                        <span class="hidden-xs">Switch Account To Marketer</span>  
                    </a>
                </li> 
                <li class="dropdown user user-menu">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                        <span class="hidden-xs">Admin</span>  
                    </a>               
                    <ul class="dropdown-menu">   
                        <li class="user-footer">  
                            <div class="pull-left">    
                                <a href="{{ url('/admin/users/change_password')}}" class="btn btn-default btn-flat btn-sm">Change Password</a>  
                            </div>   
                            <div class="pull-right">    
                                <a href="{{ url('/admin/users/logout')}}" class="btn btn-default btn-flat btn-sm">Sign out</a>  
                            </div>     
                        </li>     
                    </ul>      
                </li> 
            </ul>   
        </div>  
    </nav>
</header>