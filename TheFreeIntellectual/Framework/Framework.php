<?php

	Class Framework
	{
		Static $Framework;
		Static $Instance;
		
		Protected Function __Construct()
		{
			Require_Once "Module" . DIRECTORY_SEPARATOR . "Autoloader/Autoloader.php";
			$Autoloader = Framework\Module\Autoloader::Initialize();
			$Autoloader->registerNamespace('Framework');
			Framework\Module\Bootstrapper::Initialize();
			Var_Dump(Zend_Controller_Request_Http);
		}			
		Protected Function __Call($Function,$Parameters)
		{
			Try
			{
				$Class = Get_Called_Class() . "\\{$Function}";
				If(Class_Exists($Class))
				{
					$Data = $Class::API();
				}
				Else
				{
					Throw New \Exception("Function / Class does not exist: {$Class}");
				}
			}
			Catch(\Exception $Exception)
			{
				Throw $Exception;
			}
				
			Return $Data;
		}
		Protected Function __CallStatic($Class,$Parameters)
		{
			Try
			{
				$Function = $Parameters[0];
				$Class = "\\" . Get_Called_Class() . "\\{$Class}\\{$Function}";
				If(Class_Exists($Class))
				{
					
					$Data = $Class::API();
				}		
			}
			Catch(\Exception $Exception)
			{
				Throw $Exception;
			}
			Return $Data;
		}
		Function Initialize()
		{
			$Class = Get_Called_Class();
			If(IsSet(Static::$Instance));
			Else
			{
				Static::$Instance = New $Class;
			}
			Return Static::$Instance;
		}
		Protected Function __Destruct()
		{
			Print $this;
		}
	}
?>