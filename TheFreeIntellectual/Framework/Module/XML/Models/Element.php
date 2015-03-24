<?PHP
	NameSpace SYSTEM\Module\XML\Models
	{
		Class Element Extends \SYSTEM\Core\Model/* TODO \Data\Format*/
		{
			Protected $Element	=	"XML";
			Protected $Attributes;
			Protected $Data;
			
			Public Function __Construct($Element)
			{
				If(IsSet($Element->Retrieve_Property("Element")))
				{
					
				}
				Return parent::__Construct();
			}
		}
	}
?>