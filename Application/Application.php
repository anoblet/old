<?php

	Class Application Extends SYSTEM\Module\Application
	{
		Protected Static $SYSTEM;
		Function __Construct($Application)
		{
			If(IsSet($Application));
			Else
			{
				$Application = $this;
			}
			Static::Initialize($Application);
		}
		Public Function Initialize($Application)
		{
			$Configuration = \SYSTEM\Module\Configuration::Load_Configuration($Application::Configuration);
		}
		Static Function Generate_Static()
		{
			
		}
		Function Generate()
		{
			Return New self;
		}

	}

?>
