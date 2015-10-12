<?php
/**
 * Object represents table 'changemanager'
 *
     * @author: http://phpdao.com
     * @date: 2015-10-12 17:51	 
 */
class Changemanager{
	private $idchangeManager;
	private $changeManagerName;
	private $changeManagerEmail;
	private $changeManagerPassword;
	private $changeManagerState;

	public function getIdchangeManager() {
		return $this->idchangeManager;
	}

	public function setIdchangeManager($idchangeManager) {
		$this->idchangeManager = $idchangeManager;
	}

	public function getChangeManagerName() {
		return $this->changeManagerName;
	}

	public function setChangeManagerName($changeManagerName) {
		$this->changeManagerName = $changeManagerName;
	}

	public function getChangeManagerEmail() {
		return $this->changeManagerEmail;
	}

	public function setChangeManagerEmail($changeManagerEmail) {
		$this->changeManagerEmail = $changeManagerEmail;
	}

	public function getChangeManagerPassword() {
		return $this->changeManagerPassword;
	}

	public function setChangeManagerPassword($changeManagerPassword) {
		$this->changeManagerPassword = $changeManagerPassword;
	}

	public function getChangeManagerState() {
		return $this->changeManagerState;
	}

	public function setChangeManagerState($changeManagerState) {
		$this->changeManagerState = $changeManagerState;
	}

}
?>