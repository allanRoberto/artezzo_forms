<?php 
/*
Plugin Name: Artezzo Forms
Plugin URI: http://artezzo.com.br
Description: Plugin para administração dos formulários.
Version: 1.0
Author: Allan Roberto
Author URI: http://artezzo.com.br
*/

/* definição das constantes do sistema */
define('PASTA_FORM_PLUGIN', WP_PLUGIN_URL.'/artezzo-forms/');

include_once('functions/artezzo-forms-functions.php');

/* chamada da função de inicialização do plugin */
add_action('init', array('artezzo_forms_functions', 'init'));

 ?>