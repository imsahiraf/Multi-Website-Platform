<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <div class="user-details">
                    <span id="more-details"><?php echo $_SESSION['susername']; ?><i class="fa fa-caret-down"></i></span>
                </div>
            </div>

            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="include/logout.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Dashboard</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="index.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Blogs</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="blog.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-agenda"></i><b>M</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">MyBlog</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="blogt.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-agenda"></i><b>TB</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Team Blog</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="blogc.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-agenda"></i><b>CB</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Client Blog</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
