<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<?= stylesheet_link_tag() ?>
    	<?= javascript_include_tag() ?>
    	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
    	{{ HTML::style('css/main.css')}}
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<title>Ocorrencias</title>
	</head>
	<body>

		<div>
			@yield('content')
		</div>	

	</body>	
</html>