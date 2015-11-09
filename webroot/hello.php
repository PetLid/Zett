<?php
/**
 * This is a Zett pagecontroller.
 *
 */
// Include the essential config-file which also creates the $zett variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the Zett container.
$zett['title'] = "Hello World";

$zett['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Zett ser ut och fungerar.</p>
EOD;


// Finally, leave it all to the rendering phase of Zett.
include(ZETT_THEME_PATH);
