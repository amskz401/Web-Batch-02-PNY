<!-- 
	Types of Style:
		1. Inline Style ==> high priority
		2. Internal Style ==> 2nd high priority
		3. External Style ==> 3rd high priority
	-->


	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- external style -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<title></title>
		<!-- internal style -->
		<style type="text/css">
			/*p.para {
				font-size: 15px;
				color: green !important;
				font-weight: 800;
				background-color: gray;
			}
			#para-id {
				font-size: 20px;
				color: aqua !important;
				font-weight: 900;
				text-decoration: underline;
			}

			p#new-para-id{
				color: green;
			}
			p.new-para {
				color: blue;
			}
			p.new-para {
				color: aqua;
			}
		*/
			p{
				color: tomato;
			}
		</style>
	</head>
	<body>
		<!-- static -->
		<!-- inline style -->
		<header style="font-size: 20px;color: #66a0eb;">
			this is my header
		</header>

		<!-- dynamic part -->
		<div class="container">
			<p class="para" id="para-id" style="font-size: 12px;
			color: red;
			font-weight: 600;">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation <span style="font-size: 20px;color: blue;background-color: green;">ullamco laboris</span> nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>

		<p class="nursery-product">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation <b>ullamco laboris</b> nisi ut aliquip ex ea commodo
			consequat. Duis aute <u>irure dolor in</u> reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>

	<p class="new-para" id="new-para-id">
		<span class="first_letter">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>


	<!-- static -->
	<footer></footer>

</body>
</html>