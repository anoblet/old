<?PHP

	Namespace Application
	{

		Class TheFreeIntellectual Extends \SYSTEM\Module\Application\Models\Application
		{
			Const Directory = __DIR__;
			Protected Static $Instance;
			Const Configuration = "Configuration.xml";
			
			/* Private */
			
			Protected Function Bootstrapper()
			{
				$Application = Application::Generate();
				SYSTEM::Diagnostics()->Log_Append("Initializing the SYSTEM");
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
			}
		}
	}

?>
