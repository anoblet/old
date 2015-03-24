<?PHP

	Class Applications
	{
		Protected $Application;
		
		Function __Construct($Applications)
		{
			If(Is_String($Applications))
			{
				$Applications = Array($Applications);
			}
			ForEach($Applications as $Application)
			{

			}
			

			Return;
		}
		Public Function Load($Application)
		{
			$this->Data = $Application;
		}
	}

?>
