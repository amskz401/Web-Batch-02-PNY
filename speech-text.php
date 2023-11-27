<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script type="text/javascript">
		function speechOne(){
		    let obj = new SpeechSynthesisUtterance();
		    obj.text = mytext.value;
		    let myselect = document.getElementById("select");
		   
		    obj.voice = window.speechSynthesis.getVoices()[parseInt(myselect.value)];
		    window.speechSynthesis.speak(obj);
		}
	</script>
</head>
<body>
	<div class="container">
		<div class="row" id="my_records">
			<div class="col-md-4">
				<textarea id="mytext">
					
				</textarea>
				<select id="select" name="voices">
					<option value="0">Microsoft David - English (United States)</option>
					<option value="1">Microsoft Mark - English (United States)</option>
					<option value="2">Microsoft Zira - English (United States)</option>
					<option value="20">Google 粤語（香港）</option>
				</select>
				<button onclick="speechOne()">Click To Speak</button>
			</div>
		</div>
	</div>
</body>
</html>