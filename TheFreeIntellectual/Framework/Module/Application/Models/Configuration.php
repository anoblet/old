<?
	Namespace SYSTEM\Module\Application\Models
	{
		Class Configuration Extends \SYSTEM\Core\Model
		{
			Protected $Events;
			Protected $Observers;

			Public Function __Construct($Configuration_File)
			{
				$Configuration	= \SYSTEM\Library\XML::Convert_to_Object($Configuration_File);
			}
		}
	}
?>