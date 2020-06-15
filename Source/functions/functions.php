<?php

//Função responsavel por renderizar as views /Templates /$Dev. Andre 25-04-20/
function loadTemplate(string $view, $data = []){

    //View Engine -> Twig, path views ->  Source/App/Views.  /$Dev. Andre 25-04-20/
    // deixe o debug como false, por padrão ele vem true. /$Dev. Andre 25-04-20/

    $twig = new \Twig\Environment((new \Twig\Loader\FilesystemLoader('Source/App/Views/')),
     ['debug' => false]);

    //O método render ira rederizar o template. /$Dev. Andre 25-04-20/
    //Passe apenas o nome do template é o dados para o template. /$Dev. Andre 25-04-20/
    $twig->addGlobal('URL_BASE', URL_BASE);
    $twig->addGlobal('BASE_CSS', BASE_CSS);
    $twig->addGlobal('STYLES_CSS', STYLES_CSS);
    $twig->addGlobal('BASE_JAVASCRIPT', BASE_JAVASCRIPT);
    $twig->addGlobal('APP', APP_JAVASCRIPT);
    $twig->addGlobal('PLUGIN', PLUGIN_JAVASCRIPT);
    $twig->addGlobal('JQUERY', JQUERY_JAVASCRIPT);

    $twig->addGlobal('ASSETS', ASSETS);

    //exibe o template
    echo $twig->render($view.".twig.php", $data);
}