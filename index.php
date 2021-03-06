<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap 3, from LayoutIt!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
		<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
		<!--script src="js/less-1.3.3.min.js"></script-->
		<!--append ‘#!watch’ to the browser URL, then refresh the page. -->

		<!--link href="css/bootstrap.min.css" rel="stylesheet"-->
		<!--link href="css/style.css" rel="stylesheet"-->
		<link href="css/resume.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="img/favicon.png">

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<!--script type="text/javascript" src="js/stellar.js-master/jquery.stellar.js"></script-->

		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|PT+Sans+Caption' rel='stylesheet' type='text/css'>
		<script>
			$(document).ready(function() {
				$('.expand').on('click', function() {
					var iframe = document.getElementById('wrapper');
					var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
					$stage3 = $('#stage3', innerDoc);
					var clicks = $('#wrapper').data('clicks');
					    $('#wrapper').animate({width: '100%'}, {
					    	complete: function() {
					    		
					    		//$('html,body', innerDoc).animate({scrollTop: $stage3.offset().top});
					    	}
					    });
					$('.squeeze', innerDoc).text('Click and try!');    
					$('#wrapper').data("clicks", !clicks);
					console.log(clicks);
					return false;
				});
				
			});
		</script>
	</head>

	<body style="overflow: hidden; background-color: #000;">
<iframe data-clicks="false" id="wrapper" src="index-if.html" style="position: relative; z-index: 2; width: 100%; height: 100%; border: 0; margin: 0 auto; display:block;"></iframe>
		
<a href="#" class="expand" style="position: fixed; top:0; width: 100%; height: 100%; z-index: 1; background-color: #000" title="Expand back"></a>
	</body>
</html>
