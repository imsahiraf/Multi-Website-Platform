<!-- leftside -->
<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar services-sidebar">

        <!-- Category Widget -->
        <div class="sidebar-widget categories">
            <div class="widget-content content-shodaw ">
                <!-- Services Category -->
                <ul class="services-categories">
                    <li><a href="product.php">All Products</a></li>
                     <?php 
                                $category = $con->query("select * from category");
                                while($row = $category->fetch_assoc()){
                                    
                                    $id = $row['cid'];
                                    $catname = $row['name'];
                          ?>
                         
                         
                        <div class="item">
                           <div class="sidebar-category-item">
                               <li><a href="category.php?materialname=<?php echo $catname; ?>"><?php echo $catname; ?></a></li>
                           </div>
                        </div>
                       
                       <?php } ?>
                    <li><a href="pipes.php">Pipes</a></li>
                    <li><a href="services-detail.html">Plates</a></li>
                    <li><a href="service-detail.html">Pipe Fittings</a></li>
                </ul>
            </div>
        </div>
        <div class="inner-column con-shadow">
            <h3>Project info</h3>
            <p>Pleasure and praising pain was born and I will give you a complete account of the systems and the actually teachings of the great explorer .</p>
            <ul class="project-info clearfix">
                <li>
                    <span class="icon fa fa-user"></span>
                    <strong>Client</strong>
                    <p>Indu Designers</p>
                </li>

                <li>
                    <span class="icon fa fa-folder"></span>
                    <strong>Category</strong>
                    <p>Industrial</p>
                </li>

                <li>
                    <span class="icon fa fa-calendar-alt"></span>
                    <strong>Start Date</strong>
                    <p>28th Dec 2019</p>
                </li>

                <li>
                    <span class="icon far fa-calendar-alt"></span>
                    <strong>End Date</strong>
                    <p>28st Feb 2020</p>
                </li>

                <li>
                    <span class="icon fa fa-dollar-sign"></span>
                    <strong>Project Value</strong>
                    <p>$1250.00</p>
                </li>

                <li>
                    <span class="icon fa fa-paper-plane"></span>
                    <strong>Location</strong>
                    <p>Newyork City, USA</p>
                </li>
            </ul>
        </div>
        <br><br><br>
        <div class="widget mb-40">
            <div class="widget-title text-center">
                <h4>Categories</h4>
            </div>
            <ul class="cat__list">
                <li><a href="#">Lifestyle <span>(05)</span></a></li>
                <li><a href="#">Travel <span>(34)</span></a></li>
                <li><a href="#">Fashion <span>(89)</span></a></li>
                <li><a href="#">Music <span>(92)</span></a></li>
                <li><a href="#">Branding <span>(56)</span></a></li>
            </ul>
        </div>
        <div class="widget mb-40">
            <div class="widget-title text-center">
                <h4>Tags</h4>
            </div>
            <div class="widget__tag">
                <ul>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Photo</a></li>
                    <li><a href="#">Adventures</a></li>
                    <li><a href="#">Musician</a></li>
                    <li><a href="#">08</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Photo</a></li>
                    <li><a href="#">Adventures</a></li>
                    <li><a href="#">Musician</a></li>
                    <li><a href="#">08</a></li>
                </ul>
            </div>
        </div>


    </aside>
</div>
<!-- /leftside -->
