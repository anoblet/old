<?PHP
	Require_Once("Framework.php");
	
	Class TheFreeIntellectual Extends \Framework\Application
	{
		Const Directory = __DIR__;
		Const Configuration = "Configuration.xml";
		
		/* Private */
		/*
		Function Bootstrapper()
		{
			parent::Bootstrapper();
			$Application = Application::Generate();
			SYSTEM::Diagnostics()->Log_Append("Initializing the SYSTEM");
			Var_Dump(SYSTEM::Diagnostics()->Retrieve_Log());
			$SYSTEM = \SYSTEM\Module\Configuration::Load(Static::Configuration);
			Module::Configuration()->Load(Static::Configuration);
			$Application = Application::Load();
			Module::Configuration()->Load(Static::Configuration);
			$SYSTEM = SYSTEM::Initialize();
			SYSTEM::Module("Configuration")->Load_XML(Static::Configuration);
			SYSTEM::Module("Bootstrapper");
			$Diagnostics = SYSTEM::Module("Diagnostics")->Retrieve_Log();
			SYSTEM::Initialize();
			SYSTEM::Module()->Diagnostics();
		}*/
	}

?>
