<?php require_once("layouts/header.php") ?>
<?php require_once ("../classes/users.class.php"); ?>
<?php $userOBJ = new User(); ?>
<div class="container-fluid">
    <div class="row">
        <?php include('layouts/left-menu.php'); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2 class="pt-5 pb-5">Users List</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($userOBJ->getUsers() as $key => $value) { ?>
                                <tr>
                                    <th scope="row"><?= $value['id']; ?></th>
                                    <td><?= $value['first_name'].' '.$value['last_name'] ?></td>
                                    <td><?= $value['email'] ?></td>
                                    <td><?= $value['phone'] ?></td>
                                    <td><?= $value['gender'] ?></td>
                                    <td>
                                        <a href="edit-user.php?user_id=<?= $value['id']; ?>" class="btn btn-primary"> <i class="fa fa-pencil"></i></a>
                                        <a href="process/users.php?delete_id=<?= $value['id']; ?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">2</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include("layouts/footer.php"); ?>