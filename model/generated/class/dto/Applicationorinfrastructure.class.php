<?php
/**
 * Object represents table 'applicationorinfrastructure'
 *
     * @author: http://phpdao.com
     * @date: 2015-10-10 17:21	 
 */
class Applicationorinfrastructure{
	private $applicationOrInfrastructureId;
	private $applicationOrInfrastructureName;
	private $applicationOrInfrastructureState;

	public function getApplicationOrInfrastructureId() {
		return $this->applicationOrInfrastructureId;
	}

	public function setApplicationOrInfrastructureId($applicationOrInfrastructureId) {
		$this->applicationOrInfrastructureId = $applicationOrInfrastructureId;
	}

	public function getApplicationOrInfrastructureName() {
		return $this->applicationOrInfrastructureName;
	}

	public function setApplicationOrInfrastructureName($applicationOrInfrastructureName) {
		$this->applicationOrInfrastructureName = $applicationOrInfrastructureName;
	}

	public function getApplicationOrInfrastructureState() {
		return $this->applicationOrInfrastructureState;
	}

	public function setApplicationOrInfrastructureState($applicationOrInfrastructureState) {
		$this->applicationOrInfrastructureState = $applicationOrInfrastructureState;
	}

}
?>