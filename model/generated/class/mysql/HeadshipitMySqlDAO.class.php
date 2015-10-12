<?php
/**
 * Class that operate on table 'headshipit'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-12 17:51
 */
class HeadshipitMySqlDAO implements HeadshipitDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Headshipit 
	 */
	public function load($id){
		$sql = 'SELECT * FROM headshipit WHERE headshipITId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM headshipit';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM headshipit ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param headshipit primary key
 	 */
	public function delete($headshipITId){
		$sql = 'DELETE FROM headshipit WHERE headshipITId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($headshipITId);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param HeadshipitMySql headshipit
 	 */
	public function insert($headshipit){
		$sql = 'INSERT INTO headshipit (headshipITName, headshipITState, managementIT_managementITId) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($headshipit->getHeadshipITName());
		$sqlQuery->setNumber($headshipit->getHeadshipITState());
		$sqlQuery->setNumber($headshipit->getManagementITManagementITId());

		$id = $this->executeInsert($sqlQuery);	
		$headshipit->setHeadshipITId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param HeadshipitMySql headshipit
 	 */
	public function insertWithId($headshipit){
		$sql = 'INSERT INTO headshipit (headshipITId, headshipITName, headshipITState, managementIT_managementITId) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($headshipit->getHeadshipITId());
		
		$sqlQuery->set($headshipit->getHeadshipITName());
		$sqlQuery->setNumber($headshipit->getHeadshipITState());
		$sqlQuery->setNumber($headshipit->getManagementITManagementITId());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param HeadshipitMySql headshipit
 	 */
	public function update($headshipit){
		$sql = 'UPDATE headshipit SET headshipITName = ?, headshipITState = ?, managementIT_managementITId = ? WHERE headshipITId = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($headshipit->getHeadshipITName());
		$sqlQuery->setNumber($headshipit->getHeadshipITState());
		$sqlQuery->setNumber($headshipit->getManagementITManagementITId());

		$sqlQuery->setNumber($headshipit->getHeadshipITId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM headshipit';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByHeadshipITName($value){
    $sql = 'SELECT * FROM headshipit WHERE headshipITName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByHeadshipITState($value){
    $sql = 'SELECT * FROM headshipit WHERE headshipITState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByManagementITManagementITId($value){
    $sql = 'SELECT * FROM headshipit WHERE managementIT_managementITId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByHeadshipITName($value){
    $sql = 'DELETE FROM headshipit WHERE headshipITName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByHeadshipITState($value){
    $sql = 'DELETE FROM headshipit WHERE headshipITState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByManagementITManagementITId($value){
    $sql = 'DELETE FROM headshipit WHERE managementIT_managementITId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return HeadshipitMySql 
	 */
	protected function readRow($row){
		$headshipit = new Headshipit();
		
		$headshipit->setHeadshipITId($row['headshipITId']);
		$headshipit->setHeadshipITName($row['headshipITName']);
		$headshipit->setHeadshipITState($row['headshipITState']);
		$headshipit->setManagementITManagementITId($row['managementIT_managementITId']);

		return $headshipit;
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
	 * @return HeadshipitMySql 
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