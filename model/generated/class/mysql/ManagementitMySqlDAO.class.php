<?php
/**
 * Class that operate on table 'managementit'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-12 17:51
 */
class ManagementitMySqlDAO implements ManagementitDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Managementit 
	 */
	public function load($id){
		$sql = 'SELECT * FROM managementit WHERE managementITId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM managementit';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM managementit ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param managementit primary key
 	 */
	public function delete($managementITId){
		$sql = 'DELETE FROM managementit WHERE managementITId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($managementITId);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param ManagementitMySql managementit
 	 */
	public function insert($managementit){
		$sql = 'INSERT INTO managementit (managementITName, managementITState, directionIT_directionITId) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($managementit->getManagementITName());
		$sqlQuery->setNumber($managementit->getManagementITState());
		$sqlQuery->setNumber($managementit->getDirectionITDirectionITId());

		$id = $this->executeInsert($sqlQuery);	
		$managementit->setManagementITId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param ManagementitMySql managementit
 	 */
	public function insertWithId($managementit){
		$sql = 'INSERT INTO managementit (managementITId, managementITName, managementITState, directionIT_directionITId) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($managementit->getManagementITId());
		
		$sqlQuery->set($managementit->getManagementITName());
		$sqlQuery->setNumber($managementit->getManagementITState());
		$sqlQuery->setNumber($managementit->getDirectionITDirectionITId());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ManagementitMySql managementit
 	 */
	public function update($managementit){
		$sql = 'UPDATE managementit SET managementITName = ?, managementITState = ?, directionIT_directionITId = ? WHERE managementITId = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($managementit->getManagementITName());
		$sqlQuery->setNumber($managementit->getManagementITState());
		$sqlQuery->setNumber($managementit->getDirectionITDirectionITId());

		$sqlQuery->setNumber($managementit->getManagementITId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM managementit';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByManagementITName($value){
    $sql = 'SELECT * FROM managementit WHERE managementITName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByManagementITState($value){
    $sql = 'SELECT * FROM managementit WHERE managementITState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByDirectionITDirectionITId($value){
    $sql = 'SELECT * FROM managementit WHERE directionIT_directionITId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByManagementITName($value){
    $sql = 'DELETE FROM managementit WHERE managementITName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByManagementITState($value){
    $sql = 'DELETE FROM managementit WHERE managementITState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByDirectionITDirectionITId($value){
    $sql = 'DELETE FROM managementit WHERE directionIT_directionITId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return ManagementitMySql 
	 */
	protected function readRow($row){
		$managementit = new Managementit();
		
		$managementit->setManagementITId($row['managementITId']);
		$managementit->setManagementITName($row['managementITName']);
		$managementit->setManagementITState($row['managementITState']);
		$managementit->setDirectionITDirectionITId($row['directionIT_directionITId']);

		return $managementit;
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
	 * @return ManagementitMySql 
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