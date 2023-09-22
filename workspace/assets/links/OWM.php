<?php
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;

// Must point to composer's autoload file.
require 'vendor/autoload.php';

// Language of data (try your own language here!):
$lang = 'en';

// Units (can be 'metric' or 'imperial' [default]):
$units = 'metric';

// Create OpenWeatherMap object. 
// Don't use caching (take a look into Examples/Cache.php to see how it works).
$owm = new OpenWeatherMap('eafec27a2b050447fb0f64fa0c34335a');

try {
    $weather = $owm->getWeather('USA', $units, $lang);
} catch(OWMException $e) {
    echo 'OpenWeatherMap exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
} catch(\Exception $e) {
    echo 'General exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
}

echo $weather->uvi
echo "-          Germany heeft het ID: ".$weather->city->id;