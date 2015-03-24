<?php

	Namespace Framework
	{
		Class Application Extends \Framework\Model
		{
			Protected $_Element = "Application";
			Public $Datasource;
			Public $Configuration;
		    /* TODO Public $Diagnostics; */
			
			Protected Function __Construct()
			{			
				// $Bootstrapper = Module\Bootstrapper::Initialize();\
				// $Configuration = $this->Load_Configuration();
				$this->Bootstrap();
									$this
					->Load_Configuration();
				$this::$Diagnostics->Log_Append("Application initializing.");

					//Var_Dump(Static::$Diagnostics->Retrieve_Log());
				$this::$Diagnostics->Log_Append("Application sucessfully initialized.");
			}
			Protected Function Load_Configuration($Configuration = NULL)
			{
				If(IsSet($Configuration));
				ElseIf($Configuration = $this::Configuration)
				{
				
				}
				Else
				{
					$this::$Diagnostics->Log_Append("No configuration defined.");
				}
				$this->Configuration = \Framework\Module\Configuration::Load_Configuration($this::Configuration);
				Return $this;
			}
			Protected Function Load_Datasource($Datasource = NULL)
			{
				$this->Datasource = \Framework\Module\Datasource::API()
					->Set_Configuration($this->Configuration->Datasource)
					->Load();				
			}
			Protected Function Bootstrap()
			{
				$Bootstrapper = \Framework\Module\Bootstrapper::Bootstrap();
				$this
					->Load_Configuration()
					->Load_Datasource($this->Configuration->Datasource);
				Return $this;
			}
		
		}
	}