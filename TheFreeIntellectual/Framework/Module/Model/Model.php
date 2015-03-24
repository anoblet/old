<?PHP
Namespace SYSTEM\Module
{

	Class Model Extends \SYSTEM\Module
	{
		Protected Function Set_Parameter($Parameter,$Value)
		{
			$this->{$Parameter} = $Value;
			Return $this;
		}
		Protected Function Get_Parameter($Parameter)
		{
			Return $this->Parameter;
		}
	}
}
?>