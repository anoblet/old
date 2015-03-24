<?PHP
/**
 * Copyright Andy Noblet 2010
 **/
?>
<?PHP
Namespace SYSTEM\Library
{
	Class Filesystem Extends \SYSTEM\Library
	{
		Function Retrieve_Class_Directory($Class)
		{
			Return "/" . Str_Replace("\\","/",$Class) . "/";
		}
	}
}
?>