{"filter":false,"title":"web.php","tooltip":"/app/routes/web.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":24,"column":3},"action":"insert","lines":["<?php","","/*","|--------------------------------------------------------------------------","| Application Routes","|--------------------------------------------------------------------------","|","| Here is where you can register all of the routes for an application.","| It is a breeze. Simply tell Lumen the URIs it should respond to","| and give it the Closure to call when that URI is requested.","|","*/","","$app->get('/', function () use ($app) {","    return $app->version();","});","","","","//to random key","$router->get('/key', function () {","   ","    var_dump(\"hello key handlle\"); exit();","    return str_random(32);","});"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":24,"column":3},"end":{"row":24,"column":3},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1522138134781,"hash":"15bcb84e295387da8bccb37d67f4ab25e4dfda54"}