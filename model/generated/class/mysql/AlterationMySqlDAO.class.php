<?php
/**
 * Class that operate on table 'alteration'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-05 03:55
 */
class AlterationMySqlDAO implements AlterationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Alteration 
	 */
	public function load($id){
		$sql = 'SELECT * FROM alteration WHERE changeId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM alteration';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM alteration ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param alteration primary key
 	 */
	public function delete($changeId){
		$sql = 'DELETE FROM alteration WHERE changeId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($changeId);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param AlterationMySql alteration
 	 */
	public function insert($alteration){
		$sql = 'INSERT INTO alteration (changeIdSM, changeType, shortDescription, impact, affectation, scheduledStart, rollbackStart, rollbackEnd, scheduledEnd, stateExecution, stateChange, directionIT_directionITId, managementIT_managementITId, headshipIT_headshipITId, boss_bossId, coordinator_coordinatorId, applicationOrInfrastructure_applicationOrInfrastructureId) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($alteration->getChangeIdSM());
		$sqlQuery->set($alteration->getChangeType());
		$sqlQuery->set($alteration->getShortDescription());
		$sqlQuery->set($alteration->getImpact());
		$sqlQuery->set($alteration->getAffectation());
		$sqlQuery->set($alteration->getScheduledStart());
		$sqlQuery->set($alteration->getRollbackStart());
		$sqlQuery->set($alteration->getRollbackEnd());
		$sqlQuery->set($alteration->getScheduledEnd());
		$sqlQuery->set($alteration->getStateExecution());
		$sqlQuery->setNumber($alteration->getStateChange());
		$sqlQuery->setNumber($alteration->getDirectionITDirectionITId());
		$sqlQuery->setNumber($alteration->getManagementITManagementITId());
		$sqlQuery->setNumber($alteration->getHeadshipITHeadshipITId());
		$sqlQuery->setNumber($alteration->getBossBossId());
		$sqlQuery->setNumber($alteration->getCoordinatorCoordinatorId());
		$sqlQuery->setNumber($alteration->getApplicationOrInfrastructureApplicationOrInfrastructureId());

		$id = $this->executeInsert($sqlQuery);	
		$alteration->setChangeId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param AlterationMySql alteration
 	 */
	public function insertWithId($alteration){
		$sql = 'INSERT INTO alteration (changeId, changeIdSM, changeType, shortDescription, impact, affectation, scheduledStart, rollbackStart, rollbackEnd, scheduledEnd, stateExecution, stateChange, directionIT_directionITId, managementIT_managementITId, headshipIT_headshipITId, boss_bossId, coordinator_coordinatorId, applicationOrInfrastructure_applicationOrInfrastructureId) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($alteration->getChangeId());
		
		$sqlQuery->set($alteration->getChangeIdSM());
		$sqlQuery->set($alteration->getChangeType());
		$sqlQuery->set($alteration->getShortDescription());
		$sqlQuery->set($alteration->getImpact());
		$sqlQuery->set($alteration->getAffectation());
		$sqlQuery->set($alteration->getScheduledStart());
		$sqlQuery->set($alteration->getRollbackStart());
		$sqlQuery->set($alteration->getRollbackEnd());
		$sqlQuery->set($alteration->getScheduledEnd());
		$sqlQuery->set($alteration->getStateExecution());
		$sqlQuery->setNumber($alteration->getStateChange());
		$sqlQuery->setNumber($alteration->getDirectionITDirectionITId());
		$sqlQuery->setNumber($alteration->getManagementITManagementITId());
		$sqlQuery->setNumber($alteration->getHeadshipITHeadshipITId());
		$sqlQuery->setNumber($alteration->getBossBossId());
		$sqlQuery->setNumber($alteration->getCoordinatorCoordinatorId());
		$sqlQuery->setNumber($alteration->getApplicationOrInfrastructureApplicationOrInfrastructureId());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AlterationMySql alteration
 	 */
	public function update($alteration){
		$sql = 'UPDATE alteration SET changeIdSM = ?, changeType = ?, shortDescription = ?, impact = ?, affectation = ?, scheduledStart = ?, rollbackStart = ?, rollbackEnd = ?, scheduledEnd = ?, stateExecution = ?, stateChange = ?, directionIT_directionITId = ?, managementIT_managementITId = ?, headshipIT_headshipITId = ?, boss_bossId = ?, coordinator_coordinatorId = ?, applicationOrInfrastructure_applicationOrInfrastructureId = ? WHERE changeId = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($alteration->getChangeIdSM());
		$sqlQuery->set($alteration->getChangeType());
		$sqlQuery->set($alteration->getShortDescription());
		$sqlQuery->set($alteration->getImpact());
		$sqlQuery->set($alteration->getAffectation());
		$sqlQuery->set($alteration->getScheduledStart());
		$sqlQuery->set($alteration->getRollbackStart());
		$sqlQuery->set($alteration->getRollbackEnd());
		$sqlQuery->set($alteration->getScheduledEnd());
		$sqlQuery->set($alteration->getStateExecution());
		$sqlQuery->setNumber($alteration->getStateChange());
		$sqlQuery->setNumber($alteration->getDirectionITDirectionITId());
		$sqlQuery->setNumber($alteration->getManagementITManagementITId());
		$sqlQuery->setNumber($alteration->getHeadshipITHeadshipITId());
		$sqlQuery->setNumber($alteration->getBossBossId());
		$sqlQuery->setNumber($alteration->getCoordinatorCoordinatorId());
		$sqlQuery->setNumber($alteration->getApplicationOrInfrastructureApplicationOrInfrastructureId());

		$sqlQuery->setNumber($alteration->getChangeId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM alteration';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByChangeIdSM($value){
    $sql = 'SELECT * FROM alteration WHERE changeIdSM = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByChangeType($value){
    $sql = 'SELECT * FROM alteration WHERE changeType = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByShortDescription($value){
    $sql = 'SELECT * FROM alteration WHERE shortDescription = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByImpact($value){
    $sql = 'SELECT * FROM alteration WHERE impact = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByAffectation($value){
    $sql = 'SELECT * FROM alteration WHERE affectation = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByScheduledStart($value){
    $sql = 'SELECT * FROM alteration WHERE scheduledStart = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByRollbackStart($value){
    $sql = 'SELECT * FROM alteration WHERE rollbackStart = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByRollbackEnd($value){
    $sql = 'SELECT * FROM alteration WHERE rollbackEnd = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByScheduledEnd($value){
    $sql = 'SELECT * FROM alteration WHERE scheduledEnd = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByStateExecution($value){
    $sql = 'SELECT * FROM alteration WHERE stateExecution = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByStateChange($value){
    $sql = 'SELECT * FROM alteration WHERE stateChange = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByDirectionITDirectionITId($value){
    $sql = 'SELECT * FROM alteration WHERE directionIT_directionITId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByManagementITManagementITId($value){
    $sql = 'SELECT * FROM alteration WHERE managementIT_managementITId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByHeadshipITHeadshipITId($value){
    $sql = 'SELECT * FROM alteration WHERE headshipIT_headshipITId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByBossBossId($value){
    $sql = 'SELECT * FROM alteration WHERE boss_bossId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByCoordinatorCoordinatorId($value){
    $sql = 'SELECT * FROM alteration WHERE coordinator_coordinatorId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByApplicationOrInfrastructureApplicationOrInfrastructureId($value){
    $sql = 'SELECT * FROM alteration WHERE applicationOrInfrastructure_applicationOrInfrastructureId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByChangeIdSM($value){
    $sql = 'DELETE FROM alteration WHERE changeIdSM = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByChangeType($value){
    $sql = 'DELETE FROM alteration WHERE changeType = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByShortDescription($value){
    $sql = 'DELETE FROM alteration WHERE shortDescription = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByImpact($value){
    $sql = 'DELETE FROM alteration WHERE impact = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByAffectation($value){
    $sql = 'DELETE FROM alteration WHERE affectation = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByScheduledStart($value){
    $sql = 'DELETE FROM alteration WHERE scheduledStart = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByRollbackStart($value){
    $sql = 'DELETE FROM alteration WHERE rollbackStart = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByRollbackEnd($value){
    $sql = 'DELETE FROM alteration WHERE rollbackEnd = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByScheduledEnd($value){
    $sql = 'DELETE FROM alteration WHERE scheduledEnd = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByStateExecution($value){
    $sql = 'DELETE FROM alteration WHERE stateExecution = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByStateChange($value){
    $sql = 'DELETE FROM alteration WHERE stateChange = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByDirectionITDirectionITId($value){
    $sql = 'DELETE FROM alteration WHERE directionIT_directionITId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByManagementITManagementITId($value){
    $sql = 'DELETE FROM alteration WHERE managementIT_managementITId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByHeadshipITHeadshipITId($value){
    $sql = 'DELETE FROM alteration WHERE headshipIT_headshipITId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByBossBossId($value){
    $sql = 'DELETE FROM alteration WHERE boss_bossId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByCoordinatorCoordinatorId($value){
    $sql = 'DELETE FROM alteration WHERE coordinator_coordinatorId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByApplicationOrInfrastructureApplicationOrInfrastructureId($value){
    $sql = 'DELETE FROM alteration WHERE applicationOrInfrastructure_applicationOrInfrastructureId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return AlterationMySql 
	 */
	protected function readRow($row){
		$alteration = new Alteration();
		
		$alteration->setChangeId($row['changeId']);
		$alteration->setChangeIdSM($row['changeIdSM']);
		$alteration->setChangeType($row['changeType']);
		$alteration->setShortDescription($row['shortDescription']);
		$alteration->setImpact($row['impact']);
		$alteration->setAffectation($row['affectation']);
		$alteration->setScheduledStart($row['scheduledStart']);
		$alteration->setRollbackStart($row['rollbackStart']);
		$alteration->setRollbackEnd($row['rollbackEnd']);
		$alteration->setScheduledEnd($row['scheduledEnd']);
		$alteration->setStateExecution($row['stateExecution']);
		$alteration->setStateChange($row['stateChange']);
		$alteration->setDirectionITDirectionITId($row['directionIT_directionITId']);
		$alteration->setManagementITManagementITId($row['managementIT_managementITId']);
		$alteration->setHeadshipITHeadshipITId($row['headshipIT_headshipITId']);
		$alteration->setBossBossId($row['boss_bossId']);
		$alteration->setCoordinatorCoordinatorId($row['coordinator_coordinatorId']);
		$alteration->setApplicationOrInfrastructureApplicationOrInfrastructureId($row['applicationOrInfrastructure_applicationOrInfrastructureId']);

		return $alteration;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return AlterationMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>