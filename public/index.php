<?php
require_once "../vendor/autoload.php";

$developer = new \App\Developer("Bega",22,[6,12,12,8]);
$designer = new \App\Designer("Julia",22,[6,12,12,8]);

$workers = [$designer,$developer];

/*foreach ($workers as $worker){
    $worker->work();
}
*/

//var_dump((string)$developer);

//$developer = null;
//$developer->asdhasd();
//\App\Developer::asdasdasd();
//$developer->asdadasd;
//$developer->asdasd = 'qwdsada';

//var_dump(isset($developer->aksldjlajsd));
//unset($developer->aksldjlajsd);
/*$str = serialize($developer);
var_dump($str);*/


