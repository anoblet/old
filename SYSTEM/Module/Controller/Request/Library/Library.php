<?
Namespace SYSTEM\Module\Controller\Request
{
	Class Library Extends \SYSTEM\Module\Controller\Request
	{
		Public Function Retrieve_Request()
		{
			Return $_REQUEST;
		}
		Protected Function Clean_Data($Data)
		{
			$Data  =   htmlspecialchars($Data);
			$Data  =   mysql_escape_string($Data);
			Return $Data;
		}
	}
}
?>