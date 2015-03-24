<?PHP
NameSpace SYSTEM\Module
{
	Class Diagnostics Extends \SYSTEM\Module
	{
		Public $Type;
		Public $Status;
		Public Static $Log  =   Array();
		Public Function __Construct()
		{

		}
		Public Function Initialize()
		{
			Static::$Diagnostics->Log_Append("Diagnostics Sub-System Initializing.");
			Static::$Diagnostics->Log_Append("Diagnostics Sub-System Initialized Successfully");
			Return $this;
		}
		Public Function Configure_XDebug()
		{
			/*
			 ini_set('xdebug.collect_vars', 'on');
			 ini_set('xdebug.collect_params', '4');
			 ini_set('xdebug.dump_globals', 'on');
			 ini_set('xdebug.dump.SERVER', 'REQUEST_URI');
			 ini_set('xdebug.show_local_vars', 'on');
			 ini_set('xdebug.var_display_max_depth','100');
			 */
		}
		Public Function Is_Diagnostics_User()
		{
			$Result =   TRUE;
			Return $Result;
		}
		Public Function Diagnostics_Output_Enabled()
		{
			Return TRUE;
		}
		/**
		 * Takes $this->Message
		 */
		Public Function Generate_Error()
		{
			// Generate an Exception
			$Exception  =   \SYSTEM\Module\Exception::API()
			->Set_Child($this)
			->Generate_Exception();
			Return $Exception;
		}
		Public Function Log_Append($Entry)
		{
			self::$Log[]    =   $Entry;
			Return $this;
		}
		// Non chainable method
		Public Function Retrieve_Log()
		{
			Return static::$Log;
		}
	}
}
?>