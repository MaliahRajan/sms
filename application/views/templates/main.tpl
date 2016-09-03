   <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">{$app_title}</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li onclick="xajax_logout()"><a><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        {foreach from=$menu key=mainMenuKey item=mainMenuItem}
                            {if $mainMenuItem.subMenu == N}
                                <li onclick="{$mainMenuItem.xajax_script}">
                                    <a href="#"><i class="{$mainMenuItem.menu_icon}"></i> {$mainMenuItem.menu_name}</a>
                                </li>
                            {else}
                                <li>
                                     <a href="#"><i class="{$mainMenuItem.menu_icon}"></i> {$mainMenuItem.menu_name} <span class="fa arrow"></span></a>
                                    {foreach from=$menu[$mainMenuKey]['subMenu'] key=subMenuKey item=subMenuItem}
                                       <ul class="nav nav-second-level">
                                            <li onclick="{$subMenuItem.xajax_script}">
                                                <a href="#"><i class="{$subMenuItem.sub_menu_icon}"></i> {$subMenuItem.sub_menu_name} </a>
                                            </li>
                                       </ul>
                                    {/foreach}
                                </li>
                            {/if}
                         {/foreach}
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
<!--              <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-dismissable alert-info">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                        Welcome to the Student Management System..!!  All in one tool to manage and track student profile.
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Welcome {$loginName}</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<!--In future include the notificatin here-->
              <div id="xajaxContent">  
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-home"></i> Home</h3>
                    </div>
                    <div class="panel-body">
                                     <header id="myCarousel" class="carousel slide">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>

                                        <!-- Wrapper for Slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <!-- Set the first background image using inline CSS below. -->
                                                <div class="fill" style="background-image:url('images/banner-aboutus.jpg');"></div>
                                            </div>
                                            <div class="item">
                                                <!-- Set the second background image using inline CSS below. -->
                                                <div class="fill" style="background-image:url('images/banner-aboutus.jpg');"></div>
                                           </div>
                                            <div class="item">
                                                <!-- Set the third background image using inline CSS below. -->
                                                <div class="fill" style="background-image:url('images/banner-aboutus.jpg');"></div>
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="icon-prev"></span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="icon-next"></span>
                                        </a>
                                    </header>
                          </div>

                     </div>

     
        </div>
        <div id="xajaxSubContent">
                                
        </div>
        <div id="xajaxSubContentCopy">
                                
        </div>

    </div>
        <!-- /#page-wrapper -->
</div>