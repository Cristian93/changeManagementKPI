<?php
/**
 * Object represents table 'directionit'
 *
     * @author: http://phpdao.com
     * @date: 2015-10-10 17:21	 
 */
class Directionit{
	private $directionITId;
	private $directionITName;
	private $directionITState;

	public function getDirectionITId() {
		return $this->directionITId;
	}

	public function setDirectionITId($directionITId) {
		$this->directionITId = $directionITId;
	}

	public function getDirectionITName() {
		return $this->directionITName;
	}

	public function setDirectionITName($directionITName) {
		$this->directionITName = $directionITName;
	}

	public function getDirectionITState() {
		return $this->directionITState;
	}

	public function setDirectionITState($directionITState) {
		$this->directionITState = $directionITState;
	}

}
?>