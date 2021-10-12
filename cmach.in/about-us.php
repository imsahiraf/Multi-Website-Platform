<?php include"header.php"?>
<?php 
$sql =mysqli_query($con, "SELECT * from web_form where buid='$cid'");
$d=mysqli_fetch_assoc($sql);
?>
<section id="page-title" data-bg-parallax="images/parallax/14.jpg">
<div class="bg-overlay"></div>
<div class="container">
<div class="page-title">
<h1 class="text-uppercase text-medium">ABOUT US</h1>
<span>Work is easy when you have all tools around you!</span>
</div>
</div>
</section>

<section class="p-b-10">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="heading-text heading-section">
<h2><?php echo $d['a_heading'];?></h2>
<span class="lead"><?php echo $d['a_desc'];?></span>
</div>
</div>
    </div>
    </div>
</section>


<?php include"footer.php"; ?>