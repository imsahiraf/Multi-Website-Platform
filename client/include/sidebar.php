<nav class="pcoded-navbar">
   <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
   <div class="pcoded-inner-navbar main-menu">
      <div class="main-menu-header">
         <div class="user-details">
            <span id="more-details"><?php echo $uname;?><i class="fa fa-caret-down"></i></span>
         </div>
      </div>
      <div class="main-menu-content">
         <ul>
            <li class="more-details">
               <a href="include/logout.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
            </li>
         </ul>
      </div>
      <?php if(isset($_SESSION['userloggedin'])){
      echo '<div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Dashboard</div>
      <ul class="pcoded-item pcoded-left-item">
         <li class="active">
            <a href="index.php" class="waves-effect waves-dark">
               <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
               <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
               <span class="pcoded-mcaret"></span>
            </a>
         </li>
      </ul>
      <div class="pcoded-navigation-label" data-i18n="nav.category.forms">My Website</div>
      <ul class="pcoded-item pcoded-left-item">
         
        <li>
            <a href="products.php" class="waves-effect waves-dark">
               <span class="pcoded-micon"><i class="ti-agenda"></i><b>M</b></span>
               <span class="pcoded-mtext" data-i18n="nav.form-components.main">My Pages</span>
               <span class="pcoded-mcaret"></span>
            </a>
         </li>
           <li>
            <a href="blog.php" class="waves-effect waves-dark">
               <span class="pcoded-micon"><i class="ti-agenda"></i><b>M</b></span>
               <span class="pcoded-mtext" data-i18n="nav.form-components.main">My Blogs</span>
               <span class="pcoded-mcaret"></span>
            </a>
         </li>
          <li>
            <a href="sliders.php" class="waves-effect waves-dark">
               <span class="pcoded-micon"><i class="ti-layout-slider-alt"></i><b>M</b></span>
               <span class="pcoded-mtext" data-i18n="nav.form-components.main">My slider</span>
               <span class="pcoded-mcaret"></span>
            </a>
         </li>
      </ul>

      <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Website Builder</div>
      <ul class="pcoded-item pcoded-left-item">
         <li>
            <a href="websitebuilder.php" class="waves-effect waves-dark">
               <span class="pcoded-micon"><i class="ti-user"></i><b>M</b></span>
               <span class="pcoded-mtext" data-i18n="nav.form-components.main">My Website Builder</span>
               <span class="pcoded-mcaret"></span>
            </a>
         </li>
      </ul>

      <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Staffs</div>
      <ul class="pcoded-item pcoded-left-item">
         <li>
            <a href="staff.php" class="waves-effect waves-dark">
               <span class="pcoded-micon"><i class="ti-user"></i><b>M</b></span>
               <span class="pcoded-mtext" data-i18n="nav.form-components.main">My Staffs</span>
               <span class="pcoded-mcaret"></span>
            </a>
         </li>
      </ul>
      <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Contact Details</div>
      <ul class="pcoded-item pcoded-left-item">
         <li><a href="client-contact.php" class="waves-effect waves-dark"><span class="pcoded-micon"><i class="ti-mobile"></i><b>F</b></span><span class="pcoded-mtext" data-i18n="nav.dash.main">Contact</span><span class="pcoded-mcaret"></span></a></li>
      </ul>
      <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Custom</div>
        <ul class="pcoded-item pcoded-left-item">
            <li><a href="custom-css.php" class="waves-effect waves-dark"><span class="pcoded-micon"><i class="ti-css3"></i><b>CSS</b></span><span class="pcoded-mtext" data-i18n="nav.dash.main">CSS</span><span class="pcoded-mcaret"></span></a></li>
            <li><a href="custom-js.php" class="waves-effect waves-dark"><span class="pcoded-micon"><i class="ti-jsfiddle"></i><b>JS</b></span><span class="pcoded-mtext" data-i18n="nav.dash.main">JS</span><span class="pcoded-mcaret"></span></a></li>
            <li><a href="custom-header.php" class="waves-effect waves-dark"><span class="pcoded-micon"><i class="ti-angle-up"></i><b>H</b></span><span class="pcoded-mtext" data-i18n="nav.dash.main">Header</span><span class="pcoded-mcaret"></span></a></li>
            <li><a href="custom-footer.php" class="waves-effect waves-dark"><span class="pcoded-micon"><i class="ti-angle-down"></i><b>F</b></span><span class="pcoded-mtext" data-i18n="nav.dash.main">Footer</span><span class="pcoded-mcaret"></span></a></li>
        </ul>
        <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Theme Editor</div>
        <ul class="pcoded-item pcoded-left-item">
            <li><a href="../'.$domain.'/csseditor" target="_blank" class="waves-effect waves-dark"><span class="pcoded-micon"><i class="ti-css3"></i><b>C</b></span><span class="pcoded-mtext" data-i18n="nav.dash.main">CSS</span><span class="pcoded-mcaret"></span></a></li>
            <li><a href="../'.$domain.'/jseditor" target="_blank" class="waves-effect waves-dark"><span class="pcoded-micon"><i class="ti-jsfiddle"></i><b>J</b></span><span class="pcoded-mtext" data-i18n="nav.dash.main">JS</span><span class="pcoded-mcaret"></span></a></li>
        </ul>'; } 
         elseif(isset($_SESSION['staffloggedin'])){
            echo '<div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Dashboard</div>
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
            <a href="myblog.php" class="waves-effect waves-dark">
               <span class="pcoded-micon"><i class="ti-agenda"></i><b>M</b></span>
               <span class="pcoded-mtext" data-i18n="nav.form-components.main">MyBlog</span>
               <span class="pcoded-mcaret"></span>
            </a>
         </li></ul>
         ';
         }
     ?>
   </div>

   </div>
</nav>
