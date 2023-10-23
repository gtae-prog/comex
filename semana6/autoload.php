<?php  

spl_autoload_register(
    
    function ($classe) {

    $prefixo = "comex\semana6";
    
    $diretorio = __DIR__ . '/src/';
   
    if (strncmp($prefixo, $classe, strlen($prefixo)) !==0 )
    {
        return;
    }

    $arquivo = $diretorio;
    
    $namespace = substr($classe, strlen($prefixo));

    $namespaceArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);
    
    $arquivo = $diretorio . $namespaceArquivo . '.php'; 

    if (file_exists($arquivo)) {
        require $arquivo;
    }

});

