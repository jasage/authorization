<?php
function loadPage($smarty,$controller,$action='index',$template='login'){
	include_once PathPrefix.$controller.PathPostfix;
	$function = $action.'Action';
	$function($smarty,$template);
}
function loadTemplate($smarty,$template){
	$smarty->display($template.TemplatePostfix);
}
?>