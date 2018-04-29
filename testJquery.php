<?php
//Function



// if($_SERVER['REQUEST_METHOD'] === 'POST'){
	
	if(isset($_POST['submit'])){

		function processInput($argg){
	if($argg === "aboutbot"){
		echo json_encode([
			'chat' => $argg,
			'reply' => "TechWizard v-1.0"
		]);
		return;
	} else {
		echo json_encode([
			'chat' => $argg,
			'reply' => "Wrong!!!!!!!!!!!!!!!!!!!!!!!!"
		]);
		return;
	}
}

		$input = $_POST['chat'];
		$output = processInput($input);
		echo $output;
		return;
	}
// }
//else {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax Tutorial</title>
</head>
<body>
	<div>
		<form id="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="text" id="chat" name="chat" required>
			<input type="submit" name="submit" value="Save">
    	</form>
	</div>
<script src="jquery/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('form').on('submit', function(e){
			e.preventDefault();
			$.ajax({
				type: 'post',
				dataType: 'json',
				data: $('form').serialize(),
				cache: false,
				success: function (response) {
					$('form').append(response)
				},
				error: function(xhr, errorType, erroThrown){
                      alert("An error Occured: " + xhr.status + " " + xhr.statusText + '. erro type ' + errorType + ' error thrown: ' + erroThrown);
                    }
			})
		})
	})
</script>
</body>
</html>
<?php //} ?>