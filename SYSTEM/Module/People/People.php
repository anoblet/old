<?PHP
Namespace SYSTEM\Module
{

	Class People Extends \SYSTEM\Entities
	{
		Protected Static $Datasource_XML = Datasource_XML_Data;
		Protected $Entity	=	"People";
		Protected $XSL  =   "Template/Person.xsl";
	}
}
?>