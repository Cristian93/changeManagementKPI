<?php
/**
 * Class that operate on table 'directionit'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-05 03:55
 */
class DirectionitMySqlDAO implements DirectionitDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Directionit 
	 */
	public function load($id){
		$sql = 'SELECT * FROM directionit WHERE directionITId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM directionit';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM directionit ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param directionit primary key
 	 */
	public function delete($directionITId){
		$sql = 'DELETE FROM directionit WHERE directionITId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($directionITId);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param DirectionitMySql directionit
 	 */
	public function insert($directionit){
		$sql = 'INSERT INTO directionit (directionITName, directionITState) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($directionit->getDirectionITName());
		$sqlQuery->setNumber($directionit->getDirectionITState());

		$id = $this->executeInsert($sqlQuery);	
		$directionit->setDirectionITId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param DirectionitMySql directionit
 	 */
	public function insertWithId($directionit){
		$sql = 'INSERT INTO directionit (directionITId, directionITName, directionITState) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($directionit->getDirectionITId());
		
		$sqlQuery->set($directionit->getDirectionITName());
		$sqlQuery->setNumber($directionit->getDirectionITState());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DirectionitMySql directionit
 	 */
	public function update($directionit){
		$sql = 'UPDATE directionit SET directionITName = ?, directionITState = ? WHERE directionITId = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($directionit->getDirectionITName());
		$sqlQuery->setNumber($directionit->getDirectionITState());

		$sqlQuery->setNumber($directionit->getDirectionITId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM directionit';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByDirectionITName($value){
    $sql = 'SELECT * FROM directionit WHERE directionITName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByDirectionITState($value){
    $sql = 'SELECT * FROM directionit WHERE directionITState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByDirectionITName($value){
    $sql = 'DELETE FROM directionit WHERE directionITName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByDirectionITState($value){
    $sql = 'DELETE FROM directionit WHERE directionITState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return DirectionitMySql 
	 */
	protected function readRow($row){
		$directionit = new Directionit();
		
		$directionit->setDirectionITId($row['directionITId']);
		$directionit->setDirectionITName($row['directionITName']);
		$directionit->setDirectionITState($row['directionITState']);

		return $directionit;
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
	 * @return DirectionitMySql 
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