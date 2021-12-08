<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{Request::segment(1) == 'dashboard'? 'active' : ''}}">
                <a href="{{url('/dashboard')}}">
                    <i class="fa fa-tachometer"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{Request::segment(1) == 'lists'? 'active' : ''}}">
                <a href="{{url('/lists/index')}}">
                    <i class="fa fa-list"></i> <span>Manage Lists</span>
                </a>
            </li>
            <li class="{{Request::segment(1) == 'campaigns'? 'active' : ''}}">
                <a href="{{url('/campaigns/index')}}">
                    <i class="fa fa-bullhorn"></i> <span>Manage Campaigns</span>
                </a>
            </li>
            <li class="{{Request::segment(1) == 'deliveries'? 'active' : ''}}">
                <a href="{{url('/deliveries/index')}}">
                    <i class="fa fa-bicycle"></i> <span>Deliveries</span>
                </a>
            </li>
            <li class="{{Request::segment(1) == 'delivery_clicks'? 'active' : ''}}">
                <a href="{{url('/delivery_clicks/index')}}">
                    <i class="fa fa-hand-pointer-o"></i> <span>Delivery Clicks</span>
                </a>
            </li>
            <li class="{{Request::segment(1) == 'incoming-messages'? 'active' : ''}}">
                <a href="{{url('incoming-messages/index')}}">
                    <i class="fa fa-envelope"></i> <span>Incoming Messages</span>
                </a>
            </li>
        </ul>
    </section>
</aside>