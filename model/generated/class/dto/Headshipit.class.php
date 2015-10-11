<?php
/**
 * Object represents table 'headshipit'
 *
     * @author: http://phpdao.com
     * @date: 2015-10-10 17:21	 
 */
class Headshipit{
	private $headshipITId;
	private $headshipITName;
	private $headshipITState;
	private $managementITManagementITId;

	public function getHeadshipITId() {
		return $this->headshipITId;
	}

	public function setHeadshipITId($headshipITId) {
		$this->headshipITId = $headshipITId;
	}

	public function getHeadshipITName() {
		return $this->headshipITName;
	}

	public function setHeadshipITName($headshipITName) {
		$this->headshipITName = $headshipITName;
	}

	public function getHeadshipITState() {
		return $this->headshipITState;
	}

	public function setHeadshipITState($headshipITState) {
		$this->headshipITState = $headshipITState;
	}

	public function getManagementITManagementITId() {
		return $this->managementITManagementITId;
	}

	public function setManagementITManagementITId($managementITManagementITId) {
		$this->managementITManagementITId = $managementITManagementITId;
	}

}
?>