<?php
/**
 * Object represents table 'coordinator'
 *
     * @author: http://phpdao.com
     * @date: 2015-10-10 17:21	 
 */
class Coordinator{
	private $coordinatorId;
	private $coordinatorName;
	private $coordinatorState;
	private $bossBossId;

	public function getCoordinatorId() {
		return $this->coordinatorId;
	}

	public function setCoordinatorId($coordinatorId) {
		$this->coordinatorId = $coordinatorId;
	}

	public function getCoordinatorName() {
		return $this->coordinatorName;
	}

	public function setCoordinatorName($coordinatorName) {
		$this->coordinatorName = $coordinatorName;
	}

	public function getCoordinatorState() {
		return $this->coordinatorState;
	}

	public function setCoordinatorState($coordinatorState) {
		$this->coordinatorState = $coordinatorState;
	}

	public function getBossBossId() {
		return $this->bossBossId;
	}

	public function setBossBossId($bossBossId) {
		$this->bossBossId = $bossBossId;
	}

}
?>