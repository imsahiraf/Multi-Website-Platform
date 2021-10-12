<?php include"include/header.php"?>
<?php
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `zs_sliders_name` WHERE `id` = '$id'"));
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
                                <h5 class="m-b-10"><?php echo isset($data['name'])?$data['name']:''?></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.php"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"><?php echo isset($data['name'])?$data['name']:''?></a>
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
                                            <h5><?php echo isset($data['name'])?$data['name']:''?></h5>
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
                                                <div class="col-md-2">
                                                    <div class="card">
                                                        <button class="btn-success">
                                                            <div class="card-block" data-toggle="modal" data-target="#addslider">
                                                                <i class="ti-plus"></i><span> Add Image</span>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                                <?php
                                                $i=0;
                                                $zid = $_GET['id'];
                                                $q1 = mysqli_query($con,"SELECT * from zs_sliders_img where zid= $zid and cuid=$uid");
                                                while($r1 = mysqli_fetch_assoc($q1))
                                                {  $i++;
                                                ?>
                                                <div class="col-md-3 ">
                                                    <div class="card "><a href="slider-editor.php?id=<?php echo $r1['id'];?>">
                                                            <img class="card-img" style="height: 150px;" src="../<?php echo $domain?>/img/sliders/<?php echo $r1['image'];?>" alt="Card image">
                                                            <div class="slider-txt">
                                                                <strong>
                                                                    <h3><?php echo $r1['name'];?></h3>
                                                                </strong>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Animation card end -->
            </div>
        </div>
    </div>
    <!-- Page-body start -->
</div>
</div>
<!-- Main-body start -->
<div class="modal fade" id="addslider">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add New Slider</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-sm-3 control-label">Image</label>

                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="image" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php 
if(isset($_POST['add'])){
        $name=$_POST["name"];
        if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
        $target_dir = "../$domain/img/sliders/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($_FILES["image"]["size"] > 18000000) {
            $msg=  "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        $extallowed = array("jpg","jpeg","png");
        if (!in_array(strtolower($imageFileType),$extallowed)){
            echo '<script>alert("Sorry,For jpg & png extension files are allowed");document.location="project.php?id='.$zid.'"</script>';
            $status = false;
            $uploadOk = 0;
        }
        $filename=$_FILES['image']['name'];
        $filepath=$target_dir.$filename;
        if ($uploadOk != 0) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $filepath)) {
                $update_str="image='$filename'";
            } else {
                $uploadOk = 0;
                $msg = "Sorry, your file was not uploaded.";
            }
        }
    }
        if($con->query("insert into zs_sliders_img(`name`,`image`,`zid`,`cuid`)values('".$name."','".$filename."','".$zid."','".$uid."')")){
        echo '<script>alert("Sliders Added Successful!");document.location="project.php?id='.$zid.'"</script>';
        } else {
            echo '<script>alert("Slider Not Inserted");document.location="project.php?id='.$zid.'"</script>';
        }
}
?>
<?php include"include/footer.php";?>
