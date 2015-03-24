<?php
Namespace SYSTEM\Module\Form\Models
{
	Class Form Extends \SYSTEM\Module\Form
	{
		Public $ID;
		Public $Attributes  =   Array
		(
                                        'ID'        =>  NULL,
                                        'Action'    =>  NULL,
                                        'Method'    =>  "POST"
                                        );
                                        Public $Elements;

                                        // Setters
                                        Public Function Format_Fields()
                                        {
                                        	Return $this;
                                        }
	}
}
?>
