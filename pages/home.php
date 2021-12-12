<?php include 'includes/header.php'; ?>
<?php
if(!isset($_SESSION['id']))
{
    header('Location: login.php');


}else if($_SESSION['user_type'] == 0)
{

        header('Location: dashboard.php');

}


?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Registration Form</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success"><?php echo isset($message) ? $message: '';?></h4>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" required name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" required name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" required name="password" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" required name="mobile" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" required name="image" class="form-control-file"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-outline-danger btn-block" value="Register"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php' ;?>