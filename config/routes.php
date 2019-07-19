<?php

use NoahBuscher\Macaw\Macaw;


Macaw::get('', 'HomeController@home');

// Macaw::get('/', function() {
//   echo "成功！";
// });
// Macaw::get('/a', function() {
//   echo "成功！";
// });

// Macaw::get('(:all)', function($fu) {
//   echo '未匹配到路由<br>'.$fu;
// });

// Macaw::error(function() {
//   echo '404 :: Not Found';
// });

Macaw::dispatch();