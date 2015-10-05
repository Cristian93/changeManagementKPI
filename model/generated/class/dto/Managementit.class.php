<?php
/**
 * Object represents table 'managementit'
 *
     * @author: http://phpdao.com
     * @date: 2015-10-05 03:55	 
 */
class Managementit{
	private $managementITId;
	private $managementITName;
	private $managementITState;
	private $directionITDirectionITId;

	public function getManagementITId() {
		return $this->managementITId;
	}

	public function setManagementITId($managementITId) {
		$this->managementITId = $managementITId;
	}

	public function getManagementITName() {
		return $this->managementITName;
	}

	public function setManagementITName($managementITName) {
		$this->managementITName = $managementITName;
	}

	public function getManagementITState() {
		return $this->managementITState;
	}

	public function setManagementITState($managementITState) {
		$this->managementITState = $managementITState;
	}

	public function getDirectionITDirectionITId() {
		return $this->directionITDirectionITId;
	}

	public function setDirectionITDirectionITId($directionITDirectionITId) {
		$this->directionITDirectionITId = $directionITDirectionITId;
	}

}
?>