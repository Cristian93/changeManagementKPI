<?php
/**
 * Object represents table 'alteration'
 *
     * @author: http://phpdao.com
     * @date: 2015-10-10 17:21	 
 */
class Alteration{
	private $changeIdSM;
	private $changeType;
	private $shortDescription;
	private $impact;
	private $affectation;
	private $scheduledStart;
	private $rollbackStart;
	private $rollbackEnd;
	private $scheduledEnd;
	private $stateExecution;
	private $stateChange;
	private $directionITDirectionITId;
	private $managementITManagementITId;
	private $headshipITHeadshipITId;
	private $bossBossId;
	private $coordinatorCoordinatorId;
	private $applicationOrInfrastructureApplicationOrInfrastructureId;
	private $changeManegerIdchangeManeger;

	public function getChangeIdSM() {
		return $this->changeIdSM;
	}

	public function setChangeIdSM($changeIdSM) {
		$this->changeIdSM = $changeIdSM;
	}

	public function getChangeType() {
		return $this->changeType;
	}

	public function setChangeType($changeType) {
		$this->changeType = $changeType;
	}

	public function getShortDescription() {
		return $this->shortDescription;
	}

	public function setShortDescription($shortDescription) {
		$this->shortDescription = $shortDescription;
	}

	public function getImpact() {
		return $this->impact;
	}

	public function setImpact($impact) {
		$this->impact = $impact;
	}

	public function getAffectation() {
		return $this->affectation;
	}

	public function setAffectation($affectation) {
		$this->affectation = $affectation;
	}

	public function getScheduledStart() {
		return $this->scheduledStart;
	}

	public function setScheduledStart($scheduledStart) {
		$this->scheduledStart = $scheduledStart;
	}

	public function getRollbackStart() {
		return $this->rollbackStart;
	}

	public function setRollbackStart($rollbackStart) {
		$this->rollbackStart = $rollbackStart;
	}

	public function getRollbackEnd() {
		return $this->rollbackEnd;
	}

	public function setRollbackEnd($rollbackEnd) {
		$this->rollbackEnd = $rollbackEnd;
	}

	public function getScheduledEnd() {
		return $this->scheduledEnd;
	}

	public function setScheduledEnd($scheduledEnd) {
		$this->scheduledEnd = $scheduledEnd;
	}

	public function getStateExecution() {
		return $this->stateExecution;
	}

	public function setStateExecution($stateExecution) {
		$this->stateExecution = $stateExecution;
	}

	public function getStateChange() {
		return $this->stateChange;
	}

	public function setStateChange($stateChange) {
		$this->stateChange = $stateChange;
	}

	public function getDirectionITDirectionITId() {
		return $this->directionITDirectionITId;
	}

	public function setDirectionITDirectionITId($directionITDirectionITId) {
		$this->directionITDirectionITId = $directionITDirectionITId;
	}

	public function getManagementITManagementITId() {
		return $this->managementITManagementITId;
	}

	public function setManagementITManagementITId($managementITManagementITId) {
		$this->managementITManagementITId = $managementITManagementITId;
	}

	public function getHeadshipITHeadshipITId() {
		return $this->headshipITHeadshipITId;
	}

	public function setHeadshipITHeadshipITId($headshipITHeadshipITId) {
		$this->headshipITHeadshipITId = $headshipITHeadshipITId;
	}

	public function getBossBossId() {
		return $this->bossBossId;
	}

	public function setBossBossId($bossBossId) {
		$this->bossBossId = $bossBossId;
	}

	public function getCoordinatorCoordinatorId() {
		return $this->coordinatorCoordinatorId;
	}

	public function setCoordinatorCoordinatorId($coordinatorCoordinatorId) {
		$this->coordinatorCoordinatorId = $coordinatorCoordinatorId;
	}

	public function getApplicationOrInfrastructureApplicationOrInfrastructureId() {
		return $this->applicationOrInfrastructureApplicationOrInfrastructureId;
	}

	public function setApplicationOrInfrastructureApplicationOrInfrastructureId($applicationOrInfrastructureApplicationOrInfrastructureId) {
		$this->applicationOrInfrastructureApplicationOrInfrastructureId = $applicationOrInfrastructureApplicationOrInfrastructureId;
	}

	public function getChangeManegerIdchangeManeger() {
		return $this->changeManegerIdchangeManeger;
	}

	public function setChangeManegerIdchangeManeger($changeManegerIdchangeManeger) {
		$this->changeManegerIdchangeManeger = $changeManegerIdchangeManeger;
	}

}
?>