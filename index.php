<?php
declare(strict_types=1); // php7 Muss die erste Anweisung in einer Datei sein
function formAutoLoader($class) {
    require_once('Form/'.$class.'.class.php');
}
spl_autoload_register('formAutoLoader');

require_once 'inc/contact-form-config.inc.php';
?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Php Form Klasse</title>
    <link rel="stylesheet" href="css/pure-min.css">
    <link rel="stylesheet" href="css/layout.css">
</head>
<body>
    <div class="wrapper">
        <header class="main-header">
            <h1>Formularrendering über Form Klasse</h1>
        </header>
        <main>
        
    <?php
        $form = new Form($formConf);
        // echo $form->getField('nachname')->render();
        
        echo $form->render();
    ?>
        </main>
    </div>
</body>
</html>
