<?php $link =$_SERVER['HTTP_HOST'];
    $domain = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `user` WHERE `domain` = '$link'"));
    ?>
<footer id="footer">
<div class="copyright-content">
<div class="container">
<div class="copyright-text text-center">© 2021 <?php echo $domain['domain']; ?>. All Rights Reserved.</div>
</div>
</div>
</footer>
</body>
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
</html>