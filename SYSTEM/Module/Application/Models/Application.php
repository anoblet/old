<?
	Namespace SYSTEM\Module\Application\Models
	{
		Class Application Extends \SYSTEM\Core\Data
		{
			Const Element = "Application";
			Protected $Element = "Application";
			Const Configuration = FALSE;
			
			Public $Configuration;
			
			Function __Construct()
			{
				Static::Load_Configuration();
			}
			Function Load_Configuration()
			{
				$this->Configuration = \SYSTEM\Module\Configuration::Load_Configuration($this::Configuration);
				Return;
			}
		}
	}
?>