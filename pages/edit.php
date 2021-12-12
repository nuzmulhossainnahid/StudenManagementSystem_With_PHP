<?php include 'includes/header.php'; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Registration Form Update</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-success"><?php echo isset($message) ? $message: '';?></h4>
                            <form action="action.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $studentInfo['id']?>"/>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text"  value="<?php echo $studentInfo['name']?>"  name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email"  value="<?php echo $studentInfo['email']?>"  name="email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number"  value="<?php echo $studentInfo['mobile']?>" name="mobile" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <img src="<?php echo $studentInfo['image']?>" width="200" height="200" alt="">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="updateBtn" class="btn btn-outline-danger btn-block" value="Update Student"/>
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