<?php include('layouts/header.php'); session_start(); ?>
<div class="container">
    <div class="row">
        <h1 class="text-center mt-5 pt-5">Register</h1>

        <div class="col-md-4 mx-auto">
            <form action="process/users.php" method="post" id="loginForm">
                
                <?php if(isset($_SESSION['success'])) {
                    echo '<div class="alert alert-success"><b>'.$_SESSION['success'].'</b></div>';
                    unset($_SESSION['success']);
                } ?>
                <div class="form-group">
                    <label for="username">First Name</label>
                    <input type="text" class="form-control" required name="first_name">
                    <?php if(isset($_SESSION['error']['first_name'])) {
                        echo '<small class="error">'.$_SESSION['error']['first_name'].'</small>';
                        unset($_SESSION['error']['first_name']);
                    } ?>
                </div>
                <div class="form-group">
                    <label for="username">Last Name</label>
                    <input type="text" class="form-control" required name="last_name">
                </div>
                <!-- <div class="form-gruop">
                    <label for="">Profile Image</label>
                    <input type="file" name="profile" class="form-control" required>
                </div> -->
                <div class="form-group">
                    <label for="username">Phone</label>
                    <input type="text" class="form-control" required name="phone">
                </div>
                <div class="form-group">
                    <label for="username">Gender</label>
                    <select name="gender" class="form-control">
                        <option>-- Select --</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="email" class="form-control" required name="email">
                </div>

                <div class="form-group mt-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" required name="password">
                </div>
                
               
                <input type="submit" class="btn btn-primary mt-4">

            </form>
        </div>
    </div>
</div>
<?php include('layouts/footer.php'); ?>
<script>
    $(document).ready(function() {
		// validate the comment form when it is submitted
		$("#loginForm").validate();
    });
</script>