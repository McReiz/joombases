<?php defined( '_JEXEC' ) or die;

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$config = JFactory::getConfig();
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// template js
$doc->addScript($tpath.'/scripts/logic.js');

// template css
//$doc->addStyleSheet($tpath.'/css/template.css.php');
 $dir_templ = $this->baseurl ."/templates/". $this->template;