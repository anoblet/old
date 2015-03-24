<?PHP
Namespace SYSTEM\Module
{
	Class Navigation Extends \SYSTEM\Module
	{
		Public Function Redirect($Destination_URL,$Delay)
		{
			$HTML = "<meta http-equiv='refresh'' content={$Delay};url='{$Destination_URL}'>";

			Return $HTML;
		}
	}
}
?>