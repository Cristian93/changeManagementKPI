<?php
/**
 * Class that operate on table 'coordinator'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-10 17:21
 */
class CoordinatorMySqlDAO implements CoordinatorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Coordinator 
	 */
	public function load($id){
		$sql = 'SELECT * FROM coordinator WHERE coordinatorId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM coordinator';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM coordinator ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param coordinator primary key
 	 */
	public function delete($coordinatorId){
		$sql = 'DELETE FROM coordinator WHERE coordinatorId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($coordinatorId);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param CoordinatorMySql coordinator
 	 */
	public function insert($coordinator){
		$sql = 'INSERT INTO coordinator (coordinatorName, coordinatorState, boss_bossId) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($coordinator->getCoordinatorName());
		$sqlQuery->setNumber($coordinator->getCoordinatorState());
		$sqlQuery->setNumber($coordinator->getBossBossId());

		$id = $this->executeInsert($sqlQuery);	
		$coordinator->setCoordinatorId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param CoordinatorMySql coordinator
 	 */
	public function insertWithId($coordinator){
		$sql = 'INSERT INTO coordinator (coordinatorId, coordinatorName, coordinatorState, boss_bossId) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($coordinator->getCoordinatorId());
		
		$sqlQuery->set($coordinator->getCoordinatorName());
		$sqlQuery->setNumber($coordinator->getCoordinatorState());
		$sqlQuery->setNumber($coordinator->getBossBossId());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CoordinatorMySql coordinator
 	 */
	public function update($coordinator){
		$sql = 'UPDATE coordinator SET coordinatorName = ?, coordinatorState = ?, boss_bossId = ? WHERE coordinatorId = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($coordinator->getCoordinatorName());
		$sqlQuery->setNumber($coordinator->getCoordinatorState());
		$sqlQuery->setNumber($coordinator->getBossBossId());

		$sqlQuery->setNumber($coordinator->getCoordinatorId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM coordinator';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByCoordinatorName($value){
    $sql = 'SELECT * FROM coordinator WHERE coordinatorName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByCoordinatorState($value){
    $sql = 'SELECT * FROM coordinator WHERE coordinatorState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByBossBossId($value){
    $sql = 'SELECT * FROM coordinator WHERE boss_bossId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByCoordinatorName($value){
    $sql = 'DELETE FROM coordinator WHERE coordinatorName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByCoordinatorState($value){
    $sql = 'DELETE FROM coordinator WHERE coordinatorState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByBossBossId($value){
    $sql = 'DELETE FROM coordinator WHERE boss_bossId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return CoordinatorMySql 
	 */
	protected function readRow($row){
		$coordinator = new Coordinator();
		
		$coordinator->setCoordinatorId($row['coordinatorId']);
		$coordinator->setCoordinatorName($row['coordinatorName']);
		$coordinator->setCoordinatorState($row['coordinatorState']);
		$coordinator->setBossBossId($row['boss_bossId']);

		return $coordinator;
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
	 * @return CoordinatorMySql 
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