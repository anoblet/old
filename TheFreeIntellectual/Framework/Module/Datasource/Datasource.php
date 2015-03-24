<?PHP
Namespace SYSTEM\Module
{
	Class Datasource Extends \SYSTEM\Module
	{
		Public $Adapter;
		
		Protected $Class = __CLASS__;

		Protected $Model = "Model\Datasource";
		
		 Protected Function __Construct($Datasource)
		 {
		 	Return parent::__Construct();
		 }
		
		 Public Function Generate($Datasource)
		 {
		 	$Model = Datasource::Model($Datasource);
		 }

		Public Function Set_Configuration($Configuration)
		{
			$this->Configuration    =   $Configuration;
			Return $this;
		}
		Public Function Set_Datasource_Configuration($Object)
		{
			$this->Datasource_Configuration =   $Object;
			Return  $this;
		}
		Public Function Set_Operation($Operation)
		{
			$this->Operation    =   $Operation;
			Return $this;
		}
		// Deprecated for adapter discernment
		Public Function Generate_Connection($Configuration)
		{
			If(IsSet($Configuration))
			{
				If(Is_Object($Configuration))
				{
					
				}
			}
			If(!IsSet($this->Configuration)) Throw New \Exception("No Configuration Set.");
                // Convert XML to PHP Object
                $Datasource =   \SYSTEM\Library\XML::Convert_to_Object($this->Configuration);
                                       
                // Discern which adapter to use
                Switch($Datasource->Type)
                {
                    Case 'Database':
                    {
                    $Database   =   $Datasource->Database;
                        Switch($Datasource->Database->Type)
                        {
                            Case "MySQL":
                            {
                            $MySQL  =   $Database->MySQL;
                            $this->Adapter =   Datasource\Database\MySQL::API()->Generate_Connection($MySQL);;
                            }
                        } 
                    }
                }
                Return $this->Adapter;   
            }
            Public Function Generate_Query()
            {
                Return $this;
            }
            Public Function Create($Datasource,$Parameters,$Data)
            {
                Switch($Datasource->Type)
                {       
                    Case "MySQL":
                    {          
                        If($Data   =   \SYSTEM\Library\DataSource\Database\MySQL\__Interface::Create($Datasource,$Parameters,$Data))
                        {   
                        $Result =   $Data;
                        };
                    }
                }
                Return $Result;
            }
            Public Function Retrieve($Parameters,$Datasource)
            {          
                Switch($Datasource->Type)
                {      
                    Case "MySQL":
                    { 
                    $Connection =   $this->Datasource->Generate_Connection($Datasource);
                        If($Data   =   $this->Datasource->Retrieve($Parameters,$Connection))
                        {
                        $Result =   $Data;
                        };
                    }
                }
                Return $Result;
            }
            Public Function Abstraction_Layer($Input_Object,$Map)
            {
                /* For($I=0;$I<Count($Map);$I++)
                {} */

                    ForEach($Map as $Key => $Value)
                    {        
                    $Object->$Key = \SYSTEM\Library\XML\__API::Retrieve_Element_Value_XPath($Input_Object, $Value);
                    }       
                    
                              
                Return $Object;
            }
        }
    }
?>