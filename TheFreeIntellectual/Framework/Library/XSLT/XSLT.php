<?PHP

/**

 * Copyright Andy Noblet 2010

 */

Namespace SYSTEM\Library

{

	Class XSLT Extends \SYSTEM\Library

	{

		Public Function Construct()

		{



		}

		Public Function Parse($XML,$XSL)
		{

			// File Name Parser
			$XMLDoc =   New \DOMDocument();

			$XMLDoc->loadXML($XML);

			$XSLDoc =   New \DOMDocument();

			$XSLDoc->Load($XSL);

			$XSLT   =   New \XSLTProcessor;

			$XSLT->importStylesheet($XSLDoc);

			$Document   =   $XSLT->transformToXml($XMLDoc);

			Return $Document;

		}

		Public Function Parse_Relative($XML,$XSL)

		{



		}

	}

}

?>