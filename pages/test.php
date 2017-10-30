<!DOCTYPE html>
<html>
<head>
	<title>Freewall</title>
	<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="../js/freewall.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

	<style type="text/css">
		#container{
			width: 80%;
			margin: auto;
		}
		.item{
			background: rgb(135, 199, 135);
			width: 250px;
			height: 250px;
		}
		.add-more{
			margin: 15px;

		}
	</style>
</head>
<body>
	<div id="container">
		<div class="item"></div>
		<div class="item"></div>
		<div class="item"></div>
		<div class="item"></div>
		<div class="item"></div>
	</div>

	<!-- <div class="free-wall" id="freewallAppend">
		<div class="brick size11 add-more">
			<div class="cover">
				<h2>Clique para add! ++</h2>
			</div>
		</div>
	</div> -->

</body>
	
	<script type="text/javascript">
		$(function(){
			var wall = new Freewall("#container");
			wall.fitWidth();
		});

		// $(function(){
		// 	var colour = [
		// 		"rgb(142, 68, 173)",
		// 		"rgb(243, 156, 18)",
		// 		"rgb(211, 84, 0)",
		// 		"rgb(0, 106, 63)",
		// 		"rgb(41, 128, 185)",
		// 		"rgb(192, 57, 43)",
		// 		"rgb(135, 0, 0)",
		// 		"rgb(39, 174, 96)"
		// 	];

		// 	$("brick").each(function(){
		// 		this.style.backgroundColor = colour[colour.lenght * math.random() << 0];
		// 	});

		// 	$(function(){
		// 		var wallAppend = new Freewall("#freewallAppend");
		// 		wallAppend.reset({
		// 			selector: '.brick',
		// 			animated: true,
		// 			cellW: 160,
		// 			cellH: 160,
		// 			delay:50,
		// 			onResize: function(){
		// 				wall.fitWidth();
		// 			}
		// 		});

		// 		wallAppend.fitWidth();

		// 		var temp = '<div class = "brick {size}" style = "background-color: {color}"><div class="cover"></div></div> ';
		// 		var size = "size33 size32 size31 size23 size22 size21 size13 size12 size11".split(" ");
		// 		$('.add-more').click(function(){
		// 			var html = "";
		// 			for( var i = 0; i < 1; i++){
		// 				html += temp.replace('{size}', size[size.lenght * Math.random() << 0])
		// 							.replace('{color}', colour[colour.length * Math.random() << 0]);
		// 			}
		// 		});
				

		// 	});
		// });
	</script>
</html>