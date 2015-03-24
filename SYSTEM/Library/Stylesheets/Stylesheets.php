<?php
Namespace SYSTEM\Library\Stylesheets
{
	Class Stylesheets
	{
		Static Public Function Generate_Stylesheet($Stylesheet)
		{
			$Result =   "<Link Rel=\"stylesheet\" Type=\"text/css\" HREF=\"$Stylesheet\" />";
			Return $Result;
		}
	}
}
?>