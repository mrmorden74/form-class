<?php
declare(strict_types=1); // php7 Muss die erste Anweisung in einer Datei sein
require_once 'inc/contact-form-config.inc.php';
require_once 'Form/Form.class.php';
require_once 'Form/FormFields.class.php';
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
        //    var_dump($formConf["form"]);
 
        $form = new Form($formConf);
        // var_dump($form);
        $formTxt = $form->render();
        echo $formTxt;
        echo '<pre>';
        var_dump($formTxt);
        echo '</pre>';
    ?>
        </main>
    </div>
</body>
</html>
