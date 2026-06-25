<!--
    * configuração do Rector, ferramenta de refatoração automática de PHP.
  -->

<?php

use Rector\Config\RectorConfig;

//Pastas que vai verificar

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/bootstrap/app.php',
        __DIR__ . '/public',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        typeDeclarations: true,
        privatization: true,
        earlyReturn: true,
        strictBooleans: true
    )
    ->withPhpSets();
