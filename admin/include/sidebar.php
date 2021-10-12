<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <div class="user-details">
                    <span id="more-details"><?php echo $_SESSION['ausername']; ?><i class="fa fa-caret-down"></i></span>
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
        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Works</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="materials.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>M</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Materials</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="products.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Products</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="grades.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>G</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Grades</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="contact.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>G</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Contact Inquiry</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
