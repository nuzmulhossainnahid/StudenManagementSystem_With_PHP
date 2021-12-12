<?php include 'includes/header.php'; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>All Student Info Goes Here</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-success"><?php echo isset($message) ? $message: ''; ?></h4>

                            <?php if(isset($_SESSION['message'])) { ?>
                            <h4 class="text-center text-success">
                                <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
                            </h4>
                            <?php } ?>

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($students as $student) { ?>
                                    <tr>
                                        <td><?php echo $student['name']?></td>
                                        <td><?php echo $student['email']?></td>
                                        <td><?php echo $student['mobile']?></td>
                                        <td>
                                            <img src="<?php echo $student['image']?>" alt="" height="50" width="90"/>
                                        </td>
                                        <td>
                                            <a href="action.php?edit=<?php echo $student['id'] ?>" class="btn btn-outline-info">Edit</a>
                                            <a href="action.php?delete=<?php echo $student['id']?>" onclick="return confirm('Are you sure to delete this');" class="btn btn-outline-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php' ;?>