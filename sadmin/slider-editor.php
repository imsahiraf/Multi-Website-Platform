<?php include"include/header.php";
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `zs_sliders_img` WHERE `id` = '$id'"));    
    }
?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <?php include"include/sidebar.php"?>
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Sliders</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Sliders</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-body start -->
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Animation card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Image Slider</h5>
                                            <?php  ?>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                    <li><i class="fa fa-trash close-card"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block ">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="text-center animation-image">
                                                        <img src="../img/slider/<?php echo $data['image'];?>" style="width:600px;height:300px;">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <form class="animation-type" method="POST">
                                                        <div class="card-block" style="white-space: nowrap;">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Title</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control form-control-round" name="title" placeholder="Enter Title Name" value="<?php echo $data['title'];?>">
                                                                </div>
                                                                <div class="col-sm-5" style="margin: -7px;">
                                                                    <select class="form-control form-control-round" name="t_animation" value="<?php echo $data['t_animation'];?>">
                                                                        <optgroup label="Attention Seekers">
                                                                            <option value="bounce">bounce
                                                                            </option>
                                                                            <option value="flash">flash</option>
                                                                            <option value="pulse">pulse</option>
                                                                            <option value="rubberBand">
                                                                                rubberBand</option>
                                                                            <option value="shake">shake</option>
                                                                            <option value="swing">swing</option>
                                                                            <option value="tada">tada</option>
                                                                            <option value="wobble">wobble
                                                                            </option>
                                                                            <option value="jello">jello</option>
                                                                        </optgroup>
                                                                        <optgroup label="Bouncing Entrances">
                                                                            <option value="bounceIn">bounceIn
                                                                            </option>
                                                                            <option value="bounceInDown">
                                                                                bounceInDown</option>
                                                                            <option value="bounceInLeft">
                                                                                bounceInLeft</option>
                                                                            <option value="bounceInRight">
                                                                                bounceInRight</option>
                                                                            <option value="bounceInUp">
                                                                                bounceInUp</option>
                                                                        </optgroup>
                                                                        <optgroup label="Bouncing Exits">
                                                                            <option value="bounceOut">bounceOut
                                                                            </option>
                                                                            <option value="bounceOutDown">
                                                                                bounceOutDown</option>
                                                                            <option value="bounceOutLeft">
                                                                                bounceOutLeft</option>
                                                                            <option value="bounceOutRight">
                                                                                bounceOutRight</option>
                                                                            <option value="bounceOutUp">
                                                                                bounceOutUp</option>
                                                                        </optgroup>
                                                                        <optgroup label="Fading Entrances">
                                                                            <option value="fadeIn">fadeIn
                                                                            </option>
                                                                            <option value="fadeInDown">
                                                                                fadeInDown</option>
                                                                            <option value="fadeInDownBig">
                                                                                fadeInDownBig</option>
                                                                            <option value="fadeInLeft">
                                                                                fadeInLeft</option>
                                                                            <option value="fadeInLeftBig">
                                                                                fadeInLeftBig</option>
                                                                            <option value="fadeInRight">
                                                                                fadeInRight</option>
                                                                            <option value="fadeInRightBig">
                                                                                fadeInRightBig</option>
                                                                            <option value="fadeInUp">fadeInUp
                                                                            </option>
                                                                            <option value="fadeInUpBig">
                                                                                fadeInUpBig</option>
                                                                        </optgroup>
                                                                        <optgroup label="Fading Exits">
                                                                            <option value="fadeOut">fadeOut
                                                                            </option>
                                                                            <option value="fadeOutDown">
                                                                                fadeOutDown</option>
                                                                            <option value="fadeOutDownBig">
                                                                                fadeOutDownBig</option>
                                                                            <option value="fadeOutLeft">
                                                                                fadeOutLeft</option>
                                                                            <option value="fadeOutLeftBig">
                                                                                fadeOutLeftBig</option>
                                                                            <option value="fadeOutRight">
                                                                                fadeOutRight</option>
                                                                            <option value="fadeOutRightBig">
                                                                                fadeOutRightBig</option>
                                                                            <option value="fadeOutUp">fadeOutUp
                                                                            </option>
                                                                            <option value="fadeOutUpBig">
                                                                                fadeOutUpBig</option>
                                                                        </optgroup>
                                                                        <optgroup label="Flippers">
                                                                            <option value="flip">flip</option>
                                                                            <option value="flipInX">flipInX
                                                                            </option>
                                                                            <option value="flipInY">flipInY
                                                                            </option>
                                                                            <option value="flipOutX">flipOutX
                                                                            </option>
                                                                            <option value="flipOutY">flipOutY
                                                                            </option>
                                                                        </optgroup>
                                                                        <optgroup label="Lightspeed">
                                                                            <option value="lightSpeedIn">
                                                                                lightSpeedIn</option>
                                                                            <option value="lightSpeedOut">
                                                                                lightSpeedOut</option>
                                                                        </optgroup>
                                                                        <optgroup label="Rotating Entrances">
                                                                            <option value="rotateIn">rotateIn
                                                                            </option>
                                                                            <option value="rotateInDownLeft">
                                                                                rotateInDownLeft</option>
                                                                            <option value="rotateInDownRight">
                                                                                rotateInDownRight</option>
                                                                            <option value="rotateInUpLeft">
                                                                                rotateInUpLeft</option>
                                                                            <option value="rotateInUpRight">
                                                                                rotateInUpRight</option>
                                                                        </optgroup>
                                                                        <optgroup label="Rotating Exits">
                                                                            <option value="rotateOut">rotateOut
                                                                            </option>
                                                                            <option value="rotateOutDownLeft">
                                                                                rotateOutDownLeft</option>
                                                                            <option value="rotateOutDownRight">
                                                                                rotateOutDownRight</option>
                                                                            <option value="rotateOutUpLeft">
                                                                                rotateOutUpLeft</option>
                                                                            <option value="rotateOutUpRight">
                                                                                rotateOutUpRight</option>
                                                                        </optgroup>
                                                                        <optgroup label="Sliding Entrances">
                                                                            <option value="slideInUp">slideInUp
                                                                            </option>
                                                                            <option value="slideInDown">
                                                                                slideInDown</option>
                                                                            <option value="slideInLeft">
                                                                                slideInLeft</option>
                                                                            <option value="slideInRight">
                                                                                slideInRight</option>
                                                                        </optgroup>
                                                                        <optgroup label="Sliding Exits">
                                                                            <option value="slideOutUp">
                                                                                slideOutUp</option>
                                                                            <option value="slideOutDown">
                                                                                slideOutDown</option>
                                                                            <option value="slideOutLeft">
                                                                                slideOutLeft</option>
                                                                            <option value="slideOutRight">
                                                                                slideOutRight</option>
                                                                        </optgroup>
                                                                        <optgroup label="Zoom Entrances">
                                                                            <option value="zoomIn">zoomIn
                                                                            </option>
                                                                            <option value="zoomInDown">
                                                                                zoomInDown</option>
                                                                            <option value="zoomInLeft">
                                                                                zoomInLeft</option>
                                                                            <option value="zoomInRight">
                                                                                zoomInRight</option>
                                                                            <option value="zoomInUp">zoomInUp
                                                                            </option>
                                                                        </optgroup>
                                                                        <optgroup label="Zoom Exits">
                                                                            <option value="zoomOut">zoomOut
                                                                            </option>
                                                                            <option value="zoomOutDown">
                                                                                zoomOutDown</option>
                                                                            <option value="zoomOutLeft">
                                                                                zoomOutLeft</option>
                                                                            <option value="zoomOutRight">
                                                                                zoomOutRight</option>
                                                                            <option value="zoomOutUp">zoomOutUp
                                                                            </option>
                                                                        </optgroup>
                                                                        <optgroup label="Specials">
                                                                            <option value="hinge">hinge</option>
                                                                            <option value="rollIn">rollIn
                                                                            </option>
                                                                            <option value="rollOut">rollOut
                                                                            </option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Content</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control form-control-round" name="content" placeholder="Enter Content Here" value="<?php echo $data['content'];?>">
                                                                </div>
                                                                <div class="col-sm-5" style="margin: -7px;">
                                                                    <select class="form-control form-control-round" name="c_animation" value="<?php echo $data['c_animation'];?>">
                                                                        <optgroup label="Attention Seekers">
                                                                            <option value="bounce">bounce
                                                                            </option>
                                                                            <option value="flash">flash</option>
                                                                            <option value="pulse">pulse</option>
                                                                            <option value="rubberBand">
                                                                                rubberBand</option>
                                                                            <option value="shake">shake</option>
                                                                            <option value="swing">swing</option>
                                                                            <option value="tada">tada</option>
                                                                            <option value="wobble">wobble
                                                                            </option>
                                                                            <option value="jello">jello</option>
                                                                        </optgroup>
                                                                        <optgroup label="Bouncing Entrances">
                                                                            <option value="bounceIn">bounceIn
                                                                            </option>
                                                                            <option value="bounceInDown">
                                                                                bounceInDown</option>
                                                                            <option value="bounceInLeft">
                                                                                bounceInLeft</option>
                                                                            <option value="bounceInRight">
                                                                                bounceInRight</option>
                                                                            <option value="bounceInUp">
                                                                                bounceInUp</option>
                                                                        </optgroup>
                                                                        <optgroup label="Bouncing Exits">
                                                                            <option value="bounceOut">bounceOut
                                                                            </option>
                                                                            <option value="bounceOutDown">
                                                                                bounceOutDown</option>
                                                                            <option value="bounceOutLeft">
                                                                                bounceOutLeft</option>
                                                                            <option value="bounceOutRight">
                                                                                bounceOutRight</option>
                                                                            <option value="bounceOutUp">
                                                                                bounceOutUp</option>
                                                                        </optgroup>
                                                                        <optgroup label="Fading Entrances">
                                                                            <option value="fadeIn">fadeIn
                                                                            </option>
                                                                            <option value="fadeInDown">
                                                                                fadeInDown</option>
                                                                            <option value="fadeInDownBig">
                                                                                fadeInDownBig</option>
                                                                            <option value="fadeInLeft">
                                                                                fadeInLeft</option>
                                                                            <option value="fadeInLeftBig">
                                                                                fadeInLeftBig</option>
                                                                            <option value="fadeInRight">
                                                                                fadeInRight</option>
                                                                            <option value="fadeInRightBig">
                                                                                fadeInRightBig</option>
                                                                            <option value="fadeInUp">fadeInUp
                                                                            </option>
                                                                            <option value="fadeInUpBig">
                                                                                fadeInUpBig</option>
                                                                        </optgroup>
                                                                        <optgroup label="Fading Exits">
                                                                            <option value="fadeOut">fadeOut
                                                                            </option>
                                                                            <option value="fadeOutDown">
                                                                                fadeOutDown</option>
                                                                            <option value="fadeOutDownBig">
                                                                                fadeOutDownBig</option>
                                                                            <option value="fadeOutLeft">
                                                                                fadeOutLeft</option>
                                                                            <option value="fadeOutLeftBig">
                                                                                fadeOutLeftBig</option>
                                                                            <option value="fadeOutRight">
                                                                                fadeOutRight</option>
                                                                            <option value="fadeOutRightBig">
                                                                                fadeOutRightBig</option>
                                                                            <option value="fadeOutUp">fadeOutUp
                                                                            </option>
                                                                            <option value="fadeOutUpBig">
                                                                                fadeOutUpBig</option>
                                                                        </optgroup>
                                                                        <optgroup label="Flippers">
                                                                            <option value="flip">flip</option>
                                                                            <option value="flipInX">flipInX
                                                                            </option>
                                                                            <option value="flipInY">flipInY
                                                                            </option>
                                                                            <option value="flipOutX">flipOutX
                                                                            </option>
                                                                            <option value="flipOutY">flipOutY
                                                                            </option>
                                                                        </optgroup>
                                                                        <optgroup label="Lightspeed">
                                                                            <option value="lightSpeedIn">
                                                                                lightSpeedIn</option>
                                                                            <option value="lightSpeedOut">
                                                                                lightSpeedOut</option>
                                                                        </optgroup>
                                                                        <optgroup label="Rotating Entrances">
                                                                            <option value="rotateIn">rotateIn
                                                                            </option>
                                                                            <option value="rotateInDownLeft">
                                                                                rotateInDownLeft</option>
                                                                            <option value="rotateInDownRight">
                                                                                rotateInDownRight</option>
                                                                            <option value="rotateInUpLeft">
                                                                                rotateInUpLeft</option>
                                                                            <option value="rotateInUpRight">
                                                                                rotateInUpRight</option>
                                                                        </optgroup>
                                                                        <optgroup label="Rotating Exits">
                                                                            <option value="rotateOut">rotateOut
                                                                            </option>
                                                                            <option value="rotateOutDownLeft">
                                                                                rotateOutDownLeft</option>
                                                                            <option value="rotateOutDownRight">
                                                                                rotateOutDownRight</option>
                                                                            <option value="rotateOutUpLeft">
                                                                                rotateOutUpLeft</option>
                                                                            <option value="rotateOutUpRight">
                                                                                rotateOutUpRight</option>
                                                                        </optgroup>
                                                                        <optgroup label="Sliding Entrances">
                                                                            <option value="slideInUp">slideInUp
                                                                            </option>
                                                                            <option value="slideInDown">
                                                                                slideInDown</option>
                                                                            <option value="slideInLeft">
                                                                                slideInLeft</option>
                                                                            <option value="slideInRight">
                                                                                slideInRight</option>
                                                                        </optgroup>
                                                                        <optgroup label="Sliding Exits">
                                                                            <option value="slideOutUp">
                                                                                slideOutUp</option>
                                                                            <option value="slideOutDown">
                                                                                slideOutDown</option>
                                                                            <option value="slideOutLeft">
                                                                                slideOutLeft</option>
                                                                            <option value="slideOutRight">
                                                                                slideOutRight</option>
                                                                        </optgroup>
                                                                        <optgroup label="Zoom Entrances">
                                                                            <option value="zoomIn">zoomIn
                                                                            </option>
                                                                            <option value="zoomInDown">
                                                                                zoomInDown</option>
                                                                            <option value="zoomInLeft">
                                                                                zoomInLeft</option>
                                                                            <option value="zoomInRight">
                                                                                zoomInRight</option>
                                                                            <option value="zoomInUp">zoomInUp
                                                                            </option>
                                                                        </optgroup>
                                                                        <optgroup label="Zoom Exits">
                                                                            <option value="zoomOut">zoomOut
                                                                            </option>
                                                                            <option value="zoomOutDown">
                                                                                zoomOutDown</option>
                                                                            <option value="zoomOutLeft">
                                                                                zoomOutLeft</option>
                                                                            <option value="zoomOutRight">
                                                                                zoomOutRight</option>
                                                                            <option value="zoomOutUp">zoomOutUp
                                                                            </option>
                                                                        </optgroup>
                                                                        <optgroup label="Specials">
                                                                            <option value="hinge">hinge</option>
                                                                            <option value="rollIn">rollIn
                                                                            </option>
                                                                            <option value="rollOut">rollOut
                                                                            </option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Button Name</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control form-control-round" name="button" placeholder="Enter Button Name" value="<?php echo $data['button'];?>">
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control form-control-round" name="href" placeholder="Enter Link Here" value="<?php echo $data['href'];?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Client</label>
                                                                <div class="col-sm-10">
                                                                    <select name="cuid" class="form-control form-control-round" value="<?php echo $data['cuid'];?>">
                                                                        <option value="">--Select--</option>
                                                                        <?php
                                                                        $category_list_array = array();
                                                                           $selectpck = "SELECT * FROM `user` where access=0 and staff=0 ";
                                                                           $sql = mysqli_query($con, $selectpck);
                                                                                while ($row = mysqli_fetch_array($sql)) {
                                                                                    $category_list_array[] = $row['buid'];
                                                                                    $selected = (isset($data['buid']) && $row['buid'] == $data['buid'])?'selected':'';
                                                                                    ?>
                                                                            <option value="<?php echo $row['buid']; ?>" <?=$selected; ?>><?php echo $row['domain']; ?></option>>
                                                                                <?php }?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary btn-round waves-effect waves-light" name="add">Add </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php 
if(isset($_POST['add'])){
        $title=$_POST["title"];
        $t_animation=$_POST["t_animation"];
        $content=$_POST["content"];
        $c_animation=$_POST["c_animation"];
        $button=$_POST["button"];
        $href=$_POST["href"];
        $cuid=$_POST["cuid"];
        if($con->query("update zs_sliders_img set `title`='$title',`t_animation`='$t_animation',`content`='$content',`c_animation`='$c_animation',`button`='$button',`href`='$href',`cuid`='$cuid' where id=$id")){
        echo '<script>alert("Slider Added Successful!");document.location="sliders.php"</script>';
        } else {
            echo '<script>alert("Data Not Inserted");document.location="slider-editor.php"</script>';
        }
}
?>
<?php include"include/footer.php"; ?>
