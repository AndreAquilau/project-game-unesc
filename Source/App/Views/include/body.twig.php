<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{BASE_CSS}}">
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|" rel="stylesheet" type="text/css">
	<link href="{{ASSETS}}/fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="{{ASSETS}}/fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

    {% block head %} {% endblock %}
</head>

<body>
    {% block body %} 
    
    {% endblock %}
    <script src="{{JQUERY}}"></script>
	<script src="{{PLUGIN}}"></script>
	<script src="{{APP}}"></script>
    <script src="{{BASE_JAVASCRIPT}}"></script>
</body>

</html>