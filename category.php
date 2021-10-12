<?php include"header.php";?>
<?php
    if(isset($_GET['materialname']) && !empty($_GET['materialname'])){
        $id = $_GET['materialname'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `category` WHERE `name` = '$id'"));

    }
?>
<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="breadcrumb-wrap text-center">
                    <div class="breadcrumb-title mb-30">
                        <h2><?php echo $name;?></h2>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo isset($data['name'])?$data['name']:''?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->
<!-- team-area-->
<section id="team" class="pt-100 pb-40">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="section-title text-center pl-40 pr-40 mb-80">
                    <h2><?php echo isset($data['name']) ? ($data['name']):''?></h2>
                    <img src="img/bg/t-c-line.png">
                </div>
            </div>
        </div>
        <div class="row team-active">
            <div class="col-xl-4">
                <div class="single-team text-center mb-30 ">
                    <div class="team-thumb">
                        <div class="brd">
                            <img src="img/team/team_img01.jpg" alt="img">
                        </div>
                    </div>
                    <div class="team-info">
                        <h4><a href="stainless-steel-pipes.php">Stainless Steel Pipes</a></h4>
                        <!--                            <span>DIRECTOR</span>-->

                        <div class="team-social mt-15">
                            <p>Nullam rutrum vel massa vitae luctus ullam lacinia diam in velit ullamcorper.</p>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-team text-center mb-30 ">
                    <div class="team-thumb">
                        <div class="brd">
                            <img src="img/team/team_img02.jpg" alt="img">
                        </div>
                    </div>
                    <div class="team-info">
                        <h4><a href="alloy-steel-pipes.php">Alloy Steel Pipes</a></h4>
                        <!--                            <span>MARKETING</span>-->
                        <div class="team-social mt-15">
                            <p>Nullam rutrum vel massa vitae luctus ullam lacinia diam in velit ullamcorper.</p>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-team text-center mb-30 ">
                    <div class="team-thumb">
                        <div class="brd">
                            <img src="img/team/team_img03.jpg" alt="img">
                        </div>
                    </div>
                    <div class="team-info">
                        <h4><a href="carbon-steel-pipes.php">Carbon Steel Pipes</a></h4>
                        <!--                            <span>SALES MANAGER</span>-->
                        <div class="team-social mt-15">
                            <p>Nullam rutrum vel massa vitae luctus ullam lacinia diam in velit ullamcorper.</p>

                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-team text-center mb-30 ">
                    <div class="team-thumb">
                        <div class="brd">
                            <img src="img/team/team_img03.jpg" alt="img">
                        </div>
                    </div>
                    <div class="team-info">
                        <h4><a href="high-nickle-pipes.php">High Nickle Pipes</a></h4>
                        <!--                            <span>SALES MANAGER</span>-->
                        <div class="team-social mt-15">
                            <p>Nullam rutrum vel massa vitae luctus ullam lacinia diam in velit ullamcorper.</p>

                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- team-area-end -->
<?php include"footer.php"?>
