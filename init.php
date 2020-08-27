<?php
  
// constantes com as credenciais de acesso ao banco MySQL
define('CELKE_DB_HOST', 'mysql.6tres.tech');
define('CELKE_DB_USER', '6tres30');
define('CELKE_DB_PASS', 'acesso098321');
define('CELKE_DB_NAME', '6tres30');


// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
 
date_default_timezone_set('America/Sao_Paulo');

// inclui o arquivo de funçõees
require_once 'functions.php';