<?php include"header.php"?>
<section id="page-title" data-bg-parallax="images/parallax/5.jpg">
<div class="container">
<div class="page-title">
<h1>Contact Us</h1>
</div>
<div class="breadcrumb">
<ul>
<li><a href="index.php">Home</a> </li>
<li class="active"><a href="#">Contact Us</a> </li>
</ul>
</div>
</div>
</section>


<section>
<div class="container">
<div class="row">
<div class="col-lg-6">
<h3 class="text-uppercase">Get In Touch</h3>
<div class="m-t-30">
<form class="widget-contact-form" novalidate action="https://inspirothemes.com/polo/include/contact-form.php" role="form" method="post">
<div class="row">
<div class="form-group col-md-6">
<label for="name">Name</label>
<input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Enter your Name">
</div>
<div class="form-group col-md-6">
<label for="email">Email</label>
<input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Enter your Email">
</div>
</div>
<div class="row">
<div class="form-group col-md-12">
<label for="subject">Your Subject</label>
<input type="text" name="widget-contact-form-subject" required class="form-control required" placeholder="Subject...">
</div>
</div>
<div class="form-group">
<label for="message">Message</label>
<textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
</div>

<button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
</form>
</div>
</div>
<?php
$q1 = mysqli_query($con,"SELECT * from web_form where buid='$cid'"); 
$r1= mysqli_fetch_assoc($q1);
?>
<div class="col-lg-6">
<h3 class="text-uppercase">Address & Map</h3>
<div class="row">
<div class="col-lg-6">
 <address>
<strong><?php echo $r1['ad_name'];?></strong><br><?php echo $r1['ad_plot'];?>
<?php echo $r1['ad_street'];?>,<?php echo $r1['ad_area'];?><br><?php echo $r1['ad_city'];?>&nbsp;<?php echo $r1['ad_pincode'];?><br><?php echo $r1['ad_state'];?><br>
<abbr title="Phone">Phone: <?php echo $r1['contact'];?>
</address>
</div>
</div><!--LOCATION $r1['map'] se hi print kara raha honn...-->
    <?php echo $r1['map']; ?>
    <!--<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $yourAddress; ?>&output=embed"></iframe>
<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3778.791068232592!2d73.67132321420716!3d18.718169867987907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b1c107fd0569%3A0xf947aad94edd04a4!2sHappy%20Home%20Health%20Care%20Center!5e0!3m2!1sen!2sin!4v1625289781790!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
</div>
</div>
</div>
</section> 

<?php include"footer.php"?>