<?php
/**
 * Class that operate on table 'changemanager'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-12 17:51
 */
class ChangemanagerMySqlDAO implements ChangemanagerDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Changemanager 
	 */
	public function load($id){
		$sql = 'SELECT * FROM changemanager WHERE idchangeManager = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM changemanager';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM changemanager ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param changemanager primary key
 	 */
	public function delete($idchangeManager){
		$sql = 'DELETE FROM changemanager WHERE idchangeManager = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idchangeManager);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param ChangemanagerMySql changemanager
 	 */
	public function insert($changemanager){
		$sql = 'INSERT INTO changemanager (changeManagerName, changeManagerEmail, changeManagerPassword, changeManagerState) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($changemanager->getChangeManagerName());
		$sqlQuery->set($changemanager->getChangeManagerEmail());
		$sqlQuery->set($changemanager->getChangeManagerPassword());
		$sqlQuery->setNumber($changemanager->getChangeManagerState());

		$id = $this->executeInsert($sqlQuery);	
		$changemanager->setIdchangeManager($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param ChangemanagerMySql changemanager
 	 */
	public function insertWithId($changemanager){
		$sql = 'INSERT INTO changemanager (idchangeManager, changeManagerName, changeManagerEmail, changeManagerPassword, changeManagerState) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($changemanager->getIdchangeManager());
		
		$sqlQuery->set($changemanager->getChangeManagerName());
		$sqlQuery->set($changemanager->getChangeManagerEmail());
		$sqlQuery->set($changemanager->getChangeManagerPassword());
		$sqlQuery->setNumber($changemanager->getChangeManagerState());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ChangemanagerMySql changemanager
 	 */
	public function update($changemanager){
		$sql = 'UPDATE changemanager SET changeManagerName = ?, changeManagerEmail = ?, changeManagerPassword = ?, changeManagerState = ? WHERE idchangeManager = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($changemanager->getChangeManagerName());
		$sqlQuery->set($changemanager->getChangeManagerEmail());
		$sqlQuery->set($changemanager->getChangeManagerPassword());
		$sqlQuery->setNumber($changemanager->getChangeManagerState());

		$sqlQuery->setNumber($changemanager->getIdchangeManager());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM changemanager';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByChangeManagerName($value){
    $sql = 'SELECT * FROM changemanager WHERE changeManagerName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByChangeManagerEmail($value){
    $sql = 'SELECT * FROM changemanager WHERE changeManagerEmail = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByChangeManagerPassword($value){
    $sql = 'SELECT * FROM changemanager WHERE changeManagerPassword = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByChangeManagerState($value){
    $sql = 'SELECT * FROM changemanager WHERE changeManagerState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByChangeManagerName($value){
    $sql = 'DELETE FROM changemanager WHERE changeManagerName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByChangeManagerEmail($value){
    $sql = 'DELETE FROM changemanager WHERE changeManagerEmail = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByChangeManagerPassword($value){
    $sql = 'DELETE FROM changemanager WHERE changeManagerPassword = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByChangeManagerState($value){
    $sql = 'DELETE FROM changemanager WHERE changeManagerState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return ChangemanagerMySql 
	 */
	protected function readRow($row){
		$changemanager = new Changemanager();
		
		$changemanager->setIdchangeManager($row['idchangeManager']);
		$changemanager->setChangeManagerName($row['changeManagerName']);
		$changemanager->setChangeManagerEmail($row['changeManagerEmail']);
		$changemanager->setChangeManagerPassword($row['changeManagerPassword']);
		$changemanager->setChangeManagerState($row['changeManagerState']);

		return $changemanager;
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
	 * @return ChangemanagerMySql 
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