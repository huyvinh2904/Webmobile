<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
<<<<<<< HEAD
        <a class="navbar-brand" href="index.html">Web-Mobie</a>
=======
        <a class="navbar-brand" href="#">Admin</a>
>>>>>>> 0d099cfaa6088f430e30775c8318d0382a6bcbb6
    </div>
    <!-- /.navbar-header -->
    <!-- admin/user/sua/{{Auth::user()->id}} -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
<<<<<<< HEAD
            @if(Auth::User())
                <li><a href="#"><i class="fa fa-user fa-fw"></i> {{Auth::User()->name}}</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
                @endif
=======
                 @if(Auth::check())
                        <li><i class="fa fa-user fa-fw"></i> {{Auth::user()->name}}
                        </li>
                        <li><a href=""><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                        @endif
>>>>>>> 0d099cfaa6088f430e30775c8318d0382a6bcbb6
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    @include('admin.layout.menu')

</nav>