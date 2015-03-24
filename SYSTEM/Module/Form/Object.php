<?php
Namespace SYSTEM\Module\Form
{
	Class Object Extends \SYSTEM\Module\Model
	{
		Public $ID;
		Public $Action;
		Public $Method = "POST";

		Public Function __Construct()
		{
		}
		// Setters
		Public Function Format_Fields()
		{
			Return $this;
		}
	}
}
?>
