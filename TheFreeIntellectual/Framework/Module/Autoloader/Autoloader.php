<?php

	Namespace Framework\Module
	{
		Require_Once 'Zend/Loader/Autoloader.php';
		
		Class Autoloader Extends \Zend_Loader_Autoloader
		{
			Public Function Initialize()
			{
				$Autoloader = New self;
				$Autoloader::getInstance();
				Return $Autoloader;
			}
		}
	}