<?php include"include/header.php"?>
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
                                            <h5>Fourty60 - Sliders</h5>
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
                                                            <div class="card-block" data-toggle="modal"
                                                                data-target="#addslider">
                                                                <i class="ti-plus"></i><span> Add Slider</span>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                                <?php
                                    $i=0;
                                    $q1 = mysqli_query($con,"SELECT * from zs_sliders_name");
                                    while($r1 = mysqli_fetch_assoc($q1))
                                    {  $i++;
                                    ?>
                                                <div class="col-md-3 ">
                                                    <div class="card "><a href="project.php?id=<?php echo $r1['id']?>">
                                                            <img class="card-img" style="height: 150px;"
                                                                src="../img/slider.jpg" alt="Card image">
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
                <form class="form-horizontal" method="POST">
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Client</label>
                        <div class="col-sm-9">
                            <select name="cuid" class="form-control form-control-round">
                                <option value="">--Select--</option>
                                <?php
                                $category_list_array = array();
                                   $selectpck = "SELECT * FROM `user` where access=0 and staff=0 ";
                                   $sql = mysqli_query($con, $selectpck);
                                        while ($row = mysqli_fetch_array($sql)) {
                                            $category_list_array[] = $row['buid'];
                                            $selected = (isset($data['buid']) && $row['buid'] == $data['buid'])?'selected':'';
                                            ?>
                                <option value="<?php echo $row['buid']; ?>" <?=$selected; ?>>
                                    <?php echo $row['domain']; ?></option>>
                                <?php }?>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i>
                    Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php 
if(isset($_POST['add'])){
        $name=$_POST["name"];
        $cuid=$_POST["cuid"];
        if($con->query("insert into zs_sliders_name(`name`,`cuid`)values('".$name."','".$cuid."')")){
        echo '<script>alert("Sliders Added Successful!");document.location="sliders.php"</script>';
        } else {
            echo '<script>alert("Slider Not Inserted");document.location="sliders.php"</script>';
        }
}
?>
<?php include"include/footer.php";?>