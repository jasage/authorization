<?php

function indexAction($smarty,$site){
	if($site=='login'){
		loadTemplate($smarty,$site);
	}else{
		loadTemplate($smarty,'html_head');
		loadTemplate($smarty,'header');
		loadTemplate($smarty,'menu');
		loadTemplate($smarty,$site.'Content');
		loadTemplate($smarty,'footer');
		loadTemplate($smarty,'html_foot');
	}
}
?>