<?php

	Class Article Extends Zend_Db_Table_Abstract
	{
		Protected $_Name=’Articles’;
	
	public function view()
	{Print "3";
		$select = $this->_db->select()
		
		->from($this->_name);
		
		$results = $this->getAdapter()->fetchAll($select);
		
		return $results;
	}
}