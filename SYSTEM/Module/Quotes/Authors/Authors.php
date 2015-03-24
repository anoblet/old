<?PHP
Namespace SYSTEM\Module\Quotes
{
	Class Authors Extends \SYSTEM\/* @TODO Entities*/Module\People // \SYSTEM\Entities
	{
		Const Datasource    =   Datasource_XML_Data;

		Public Function Generate()
		{
			Return "Test";
		}
		Public Function Generate_HTML()
		{
			Return $this->Data;
		}
	}
}
?>
