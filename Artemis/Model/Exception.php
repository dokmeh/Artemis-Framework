<?php
class Artemis_Model_Exception extends Artemis_Exception
{
	function __construct($m)
	{
		$message = "<hr>";
		$message .="Artemis Model Exeption <pre>  $m </pre> "; 
		$message .= "<hr>";
		parent::__construct($message);
	}
}