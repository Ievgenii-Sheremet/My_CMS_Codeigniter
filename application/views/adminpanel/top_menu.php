<div class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('/adminpanel');?>">Control panel</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> Option <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url($user_edit_link);?>"><i class="fa fa-user"></i> Edit User</a></li>
                        <li><a href="<?php echo site_url('/adminpanel/auth');?>"><i class="fa fa-users"></i> All Users</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('/adminpanel/logout');?>"><i class="fa fa-sign-out"></i> Exit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>