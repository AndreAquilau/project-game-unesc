<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{BASE_CSS_BOOTSTRAP}}">
    <link rel="stylesheet" href="{{BASE_CSS}}">

    {% block head %} {% endblock %}
</head>

<body>
    <header class="max-width">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand logo" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse showdisplay" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL_BASE}}/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL_BASE}}/">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL_BASE}}/register">Registrar-se</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL_BASE}}/">About</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            </div>
    </header>
    {% block body %} 
    
    {% endblock %}
    <script src="{{BASE_JAVASCRIPT}}"></script>
</body>

</html>