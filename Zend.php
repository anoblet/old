<?php Require_Once("SYSTEM/Library/Zend/Dojo.php"); ?>
<?php Require_Once("SYSTEM/Library/Zend/Dojo/View/Helper/Dojo.php"); ?>
<?php Require_Once("SYSTEM/Library/Zend/View.php"); ?>
<?php
	Class Dojo
	{
		public $view;
		Function __Construct()
		{	     
			Zend_Dojo::enableView($this->view);
      		$this->view->addHelperPath('Zend/Dojo/View/Helper/', 'Zend_Dojo_View_Helper');
		}
		Function Bootstrap()
		{
			 
			$this->view->addHelperPath('Zend/Dojo/View/Helper/', 'Zend_Dojo_View_Helper');
		}
		Function User_Interface()
		{
			$User_Interface	=	$this->view;
			Return $User_Interface;	
		}
	}	
?>
<?php

	$Dojo	=	New Dojo();
	echo $Dojo->User_Interface();
?>