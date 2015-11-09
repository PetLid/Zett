<?php
/**
 * This is a Zett pagecontroller.
 *
 */
// Include the essential config-file which also creates the $zett variable with its defaults.
include(__DIR__.'/config.php');


// Define what to include to make the plugin to work
$zett['stylesheets'][]        = 'css/slideshow.css';
$zett['javascript_include'][] = 'js/slideshow.js';


// Do it and store it all in variables in the Zett container.
$zett['title'] = "Slideshow för att testa JavaScript i Zett";

$zett['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/space/" data-images='["earth-space.jpg", "sky-night-space-galaxy.jpg"]'>
<img src='img/space/sky-night-space-galaxy.jpg' width='700px' height='361px' alt='Image gallery'/>
</div>

<h1>En slideshow med JavaScript</h1>
<p>Detta är en exempelsida som visar hur Zett fungerar tillsammans med JavaScript.</p>
EOD;


// Finally, leave it all to the rendering phase of Zett.
include(ZETT_THEME_PATH);
