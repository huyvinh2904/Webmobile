<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Item<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">List Item</a>
                    </li>
                    <li>
                        <a href="#">Add Item</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">List Category</a>
                    </li>
                    <li>
                        <a href="#">Add Category</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">List Product</a>
                    </li>
                    <li>
                        <a href="#">Add Product</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Order<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/order/list">List Order</a>
                    </li>
                
                </ul>
                <!-- /.nav-second-level -->
            </li>
    
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Comment<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/comment/list">List Commnet</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @if(Auth::User()->level==1)
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/client/list">List Client</a>
                    </li>
                    <li>
                        <a href="admin/user/add">Add new User</a>
                    </li>
                     <li>
                        <a href="admin/user/list">List User</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endif
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->