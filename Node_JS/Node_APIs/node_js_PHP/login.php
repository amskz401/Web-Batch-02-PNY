<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
	<header class="p-3 text-bg-dark">
		<div class="container">
			<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
				<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
					<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
				</a>

				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
					<li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
					<li><a href="#" class="nav-link px-2 text-white">Features</a></li>
					<li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
					<li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
					<li><a href="#" class="nav-link px-2 text-white">About</a></li>
				</ul>

				<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
					<input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
				</form>

				<div class="text-end">
					<button type="button" class="btn btn-outline-light me-2">Login</button>
					<button type="button" class="btn btn-warning">Sign-up</button>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="border-bottom mt-5 mb-5">Users List</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="tbody">
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {

			// $.ajax({
			// 	url: 'http://localhost:4000/api/register',
			// 	type: 'POST',
			// 	data: {
			// 		name: "fromPHP",
			// 		email: "from@php.com",
			// 		password: "password"
			// 	},
			// })
			// .done(function(res) {
			// 	console.log(res);
			// })
			// .fail(function() {
			// 	console.log("error");
			// })
			// .always(function() {
			// 	console.log("complete");
			// });

			// $.ajax({
			// 	url: 'http://localhost:4000/api/login',
			// 	type: 'POST',
			// 	data: {
			// 		email: "from@phklkp.com",
			// 		password: "password"
			// 	},
			// })
			// .done(function(res) {
			// 	console.log(res);
			// })
			// .fail(function() {
			// 	console.log("error");
			// })
			// .always(function() {
			// 	console.log("complete");
			// });

			$.ajax({
				url: 'http://localhost:4000/api/',
				headers: {"Authorization": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE3MTAxNTc4MTMsImRhdGEiOnsiaWQiOjEsIm5hbWUiOiJmYXJoYW4iLCJlbWFpbCI6ImZAbS5jb20iLCJwYXNzd29yZCI6ImZAbS5jb20iLCJkYXRlX2NyZWF0ZWQiOiIyMDI0LTAzLTExVDA5OjQ4OjQyLjAwMFoifSwiaWF0IjoxNzEwMTU0MjEzfQ.0yyqN-LiTsC7pf2cAFBvH12347oCJr1VsxH4BRylITU"},
				type: 'GET',
			})
			.done(function(data) {
				console.log(data);
				let html = ``;
				data.forEach( user => {
					html += `<tr>
							<th>${user.id}</th>
							<td>${user.name}</td>
							<td>${user.email}</td>
							<td>
								<a href="" onclick="edit(${user.id})" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
								<a href="" onclick="deleteu(${user.id})" class="btn btn-danger"><i class="bi bi-trash"></i></a>
							</td>
						</tr>`;
				} );
				$("#tbody").html(html);
			});
			

		});	

		function edit(id) {
			alert(id);
		
		}
		function deleteu(id) {
			alert(id);
		}
	</script>
</body>
</html>