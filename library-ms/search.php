<?php include('layouts/header.php'); ?>
<?php 
require_once ($_SERVER['DOCUMENT_ROOT'].'/library-ms/admin/classes/book.class.php');
$bookOBJ = new Book();
$books = $bookOBJ->getBooks($_GET['q']);
 ?>
<div class="main-banner">
    <h1 class="pt-5 pb-5 text-center bg-secondary text-white bg-secondary.bg-gradient">
        Home Page
    </h1>
</div>
<div class="container">
    <div class="row">
       <div class="col-md-12 mt-5 mb-3 ">
        <h2 class>
            Searched Records For: <?= $_GET['q'] ?>
        </h2>
    </div>
    <?php foreach ($books as $key => $value) { ?>
    <div class="col-md-3 mb-4 col-xs-12 col-sm-6">
       <div class="card">
           <img src="<?= $value['image']; ?>" alt="The Beholder" class="card-img-top">
           <div class="card-body">
               <h4 class="card-title">The Beholder</h4>
               <p></p>
               <p class="card-text"><strong>Price: </strong> $998</p>
               <p class="btn-holder"><a href="view-details.php" class="btn btn-outline-danger">View Details</a> </p>
           </div>
       </div>
   </div>
<?php  } ?>
</div>
</div>
<?php include('layouts/footer.php'); ?>