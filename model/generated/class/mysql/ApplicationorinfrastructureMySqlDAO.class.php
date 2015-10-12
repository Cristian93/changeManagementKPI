<?php
/**
 * Class that operate on table 'applicationorinfrastructure'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-12 17:51
 */
class ApplicationorinfrastructureMySqlDAO implements ApplicationorinfrastructureDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Applicationorinfrastructure 
	 */
	public function load($id){
		$sql = 'SELECT * FROM applicationorinfrastructure WHERE applicationOrInfrastructureId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM applicationorinfrastructure';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM applicationorinfrastructure ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param applicationorinfrastructure primary key
 	 */
	public function delete($applicationOrInfrastructureId){
		$sql = 'DELETE FROM applicationorinfrastructure WHERE applicationOrInfrastructureId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($applicationOrInfrastructureId);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param ApplicationorinfrastructureMySql applicationorinfrastructure
 	 */
	public function insert($applicationorinfrastructure){
		$sql = 'INSERT INTO applicationorinfrastructure (applicationOrInfrastructureName, applicationOrInfrastructureState) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($applicationorinfrastructure->getApplicationOrInfrastructureName());
		$sqlQuery->setNumber($applicationorinfrastructure->getApplicationOrInfrastructureState());

		$id = $this->executeInsert($sqlQuery);	
		$applicationorinfrastructure->setApplicationOrInfrastructureId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param ApplicationorinfrastructureMySql applicationorinfrastructure
 	 */
	public function insertWithId($applicationorinfrastructure){
		$sql = 'INSERT INTO applicationorinfrastructure (applicationOrInfrastructureId, applicationOrInfrastructureName, applicationOrInfrastructureState) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($applicationorinfrastructure->getApplicationOrInfrastructureId());
		
		$sqlQuery->set($applicationorinfrastructure->getApplicationOrInfrastructureName());
		$sqlQuery->setNumber($applicationorinfrastructure->getApplicationOrInfrastructureState());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ApplicationorinfrastructureMySql applicationorinfrastructure
 	 */
	public function update($applicationorinfrastructure){
		$sql = 'UPDATE applicationorinfrastructure SET applicationOrInfrastructureName = ?, applicationOrInfrastructureState = ? WHERE applicationOrInfrastructureId = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($applicationorinfrastructure->getApplicationOrInfrastructureName());
		$sqlQuery->setNumber($applicationorinfrastructure->getApplicationOrInfrastructureState());

		$sqlQuery->setNumber($applicationorinfrastructure->getApplicationOrInfrastructureId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM applicationorinfrastructure';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByApplicationOrInfrastructureName($value){
    $sql = 'SELECT * FROM applicationorinfrastructure WHERE applicationOrInfrastructureName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByApplicationOrInfrastructureState($value){
    $sql = 'SELECT * FROM applicationorinfrastructure WHERE applicationOrInfrastructureState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByApplicationOrInfrastructureName($value){
    $sql = 'DELETE FROM applicationorinfrastructure WHERE applicationOrInfrastructureName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByApplicationOrInfrastructureState($value){
    $sql = 'DELETE FROM applicationorinfrastructure WHERE applicationOrInfrastructureState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return ApplicationorinfrastructureMySql 
	 */
	protected function readRow($row){
		$applicationorinfrastructure = new Applicationorinfrastructure();
		
		$applicationorinfrastructure->setApplicationOrInfrastructureId($row['applicationOrInfrastructureId']);
		$applicationorinfrastructure->setApplicationOrInfrastructureName($row['applicationOrInfrastructureName']);
		$applicationorinfrastructure->setApplicationOrInfrastructureState($row['applicationOrInfrastructureState']);

		return $applicationorinfrastructure;
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
	 * @return ApplicationorinfrastructureMySql 
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