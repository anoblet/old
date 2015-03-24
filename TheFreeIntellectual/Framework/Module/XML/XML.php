<?php

	NameSpace SYSTEM\Module
	{

		Class XML Extends \SYSTEM\Module/* TODO \Data\Format*/
		{
			Public $Model	=	"Models\XML";
			Protected $Models = Array
			(
				"Document" => "Models\Document",
				"Element" => "Models\Element"
			);
			Public $Data;
			Public Function Generate_XML(/* XML\Models\XML */ $Parameters /* Object Array String */)
			{
				// @TODO 
				$Model = XML::API()->Model($Parameters);
				$XML	=	New \SimpleXMLElement("<{$Model->Retrieve_Property("Element")}></{$Model->Retrieve_Property("Element")}>");
				$XML = self::Iterate($XML,$Model->Retrieve_Property("Data"));
				Return $XML;
			}
			Public Function Generate_Document($Document)
			{
				$Model = Static::Model("Models/Document",$Document);
			}
			Public Function Iterate($XML,$Data)
			{
				
				
				// Data
				If(Is_String($Data))
				{
					Static::$Diagnostics->Log_Append("It's a simple string.");
					$XML[0] = $Data;
				}
				Else
				{
					// XMLElement
					If(Is_Object($Data))
					{
						If(Get_Class($Data) == "SimpleXMLElement")
						{
							$XML->addChild($Data->getName(),$Data);
						}
					}
					ForEach($Data as $Key => $Value)
					{
						Switch($Value)
						{
							Default: 
							{
								Throw New \Exception("Invalid Data.");		
							}
							Case Is_Object($Value):
							{
								$XML->addChild($Key,XML::Iterate($XML,$Value));
								Break;
							}
							Case Is_Array($Value):
							{
								$XML->addChild($Key,XML::Iterate($XML,$Value));
								Break;
							}
							Case Is_String($Value):
							{
								$XML->addChild($Key,$Value);
								Break;		
							}
						}
					}
				}
				Return $XML;
			}
			Public Function Generate_Element($Element)
			{
				Return New \SimpleXMLElement("<{$Element->Retrieve_Property("Element")}></{$Element->Retrieve_Property("Element")}>");
			}
			Public Function Load_XML($XML)
			{
				Return \SYSTEM\Library\XML::Convert_to_Object($XML);
			}
		}
	}