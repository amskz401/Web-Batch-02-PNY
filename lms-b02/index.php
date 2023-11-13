<?php include("layouts/header.php"); ?>
	<div class="header-bottom bg-secondary bg-gradient text-center text-white text-justify-content" style="height: 150px;">
		<h1>Library Management System</h1>
		<p>Home Page</p>
	</div>
	<div class="container">
		<h2 class="pt-4 pb-4">All Books</h2>
		<div class="row">
			<div class="col-md-3 mb-3">
				<a href="book-details.php">
				<img src="assets/images/books/book-design.jpg" width="100%"></a>
			</div>
			<div class="col-md-3 mb-3">
				<img src="assets/images/books/book-design.jpg" width="100%">
			</div>
			<div class="col-md-3 mb-3">
				<img src="assets/images/books/book-design.jpg" width="100%">
			</div>
			<div class="col-md-3 mb-3">
				<img src="assets/images/books/book-design.jpg" width="100%">
			</div>
			<div class="col-md-3 mb-3">
				<img src="assets/images/books/book-design.jpg" width="100%">
			</div>
			
		</div>
		<!-- <div class="row">
			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Load more....</button>
			</div>
		</div> -->
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

	</div>
	
<?php include ("layouts/footer.php"); ?>