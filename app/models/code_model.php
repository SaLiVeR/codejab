<?php
class Code_model extends Codejab_Model {
	function Code_model() {
		$this->dbTable = CODE_DBTABLE;
		
		parent::Codejab_Model();
	}
}
?>
