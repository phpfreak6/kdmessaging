<aside class="main-sidebar">   
    <section class="sidebar">     
        <ul class="sidebar-menu" data-widget="tree"> 
            <li class="{{Request::segment(2) == 'dashboard'? 'active' : ''}}">   
                <a href="{{url('admin/dashboard')}}">   
                    <i class="fa fa-tachometer"></i> <span>Dashboard</span>  
                </a>   
            </li>     
            <li class="{{Request::segment(2) == 'users'? 'active' : ''}}">   
                <a href="{{url('admin/users/index')}}">    
                    <i class="fa fa-users"></i> <span>Manage Users</span>     
                </a>       
            </li>    
            <li class="{{Request::segment(2) == 'brands'? 'active' : ''}}">  
                <a href="{{url('admin/brands/index')}}">  
                    <i class="fa fa-bolt"></i> <span>Manage Brands</span>  
                </a>    
            </li>
            <li class="{{Request::segment(2) == 'cron-requests'? 'active' : ''}}">  
                <a href="{{url('admin/cron-requests/index')}}">  
                    <i class="fa fa-paper-plane"></i> <span>Manage Cron Requests</span>  
                </a>    
            </li>
            <li class="{{Request::segment(2) == 'settings'? 'active' : ''}}">      
                <a href="{{url('admin/settings/index')}}">     
                    <i class="fa fa-gears"></i> <span>Configure Settings</span>     
                </a>      
            </li>    
            <li class="{{Request::segment(2) == 'important-instructions'? 'active' : ''}}">   
                <a href="{{url('admin/important-instructions')}}">       
                    <i class="fa fa-wrench"></i> <span>Important Instructions</span>   
                </a>       
            </li>     
        </ul>   
    </section>
</aside>