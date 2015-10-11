<?php
/**
 * Class that operate on table 'boss'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-10 17:21
 */
class BossMySqlDAO implements BossDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return Bos 
	 */
	public function load($id){
		$sql = 'SELECT * FROM boss WHERE bossId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM boss';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM boss ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param bos primary key
 	 */
	public function delete($bossId){
		$sql = 'DELETE FROM boss WHERE bossId = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($bossId);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table, id is auto-incremented
 	 *
 	 * @param BossMySql bos
 	 */
	public function insert($bos){
		$sql = 'INSERT INTO boss (bossName, bossState, headshipIT_headshipITId) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($bos->getBossName());
		$sqlQuery->setNumber($bos->getBossState());
		$sqlQuery->setNumber($bos->getHeadshipITHeadshipITId());

		$id = $this->executeInsert($sqlQuery);	
		$bos->setBossId($id);
		return $id;
	}
    
	/**
 	 * Insert record to table with specified id
 	 *
 	 * @param BossMySql bos
 	 */
	public function insertWithId($bos){
		$sql = 'INSERT INTO boss (bossId, bossName, bossState, headshipIT_headshipITId) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($bos->getBossId());
		
		$sqlQuery->set($bos->getBossName());
		$sqlQuery->setNumber($bos->getBossState());
		$sqlQuery->setNumber($bos->getHeadshipITHeadshipITId());

		$id = $this->executeInsert($sqlQuery);	
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param BossMySql bos
 	 */
	public function update($bos){
		$sql = 'UPDATE boss SET bossName = ?, bossState = ?, headshipIT_headshipITId = ? WHERE bossId = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($bos->getBossName());
		$sqlQuery->setNumber($bos->getBossState());
		$sqlQuery->setNumber($bos->getHeadshipITHeadshipITId());

		$sqlQuery->setNumber($bos->getBossId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM boss';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

  public function queryByBossName($value){
    $sql = 'SELECT * FROM boss WHERE bossName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->getList($sqlQuery);
  }

  public function queryByBossState($value){
    $sql = 'SELECT * FROM boss WHERE bossState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }

  public function queryByHeadshipITHeadshipITId($value){
    $sql = 'SELECT * FROM boss WHERE headshipIT_headshipITId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->getList($sqlQuery);
  }


  public function deleteByBossName($value){
    $sql = 'DELETE FROM boss WHERE bossName = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->set($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByBossState($value){
    $sql = 'DELETE FROM boss WHERE bossState = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }

  public function deleteByHeadshipITHeadshipITId($value){
    $sql = 'DELETE FROM boss WHERE headshipIT_headshipITId = ?';
    $sqlQuery = new SqlQuery($sql);
    $sqlQuery->setNumber($value);
    return $this->executeUpdate($sqlQuery);
  }


	
	/**
	 * Read row
	 *
	 * @return BossMySql 
	 */
	protected function readRow($row){
		$bos = new Bos();
		
		$bos->setBossId($row['bossId']);
		$bos->setBossName($row['bossName']);
		$bos->setBossState($row['bossState']);
		$bos->setHeadshipITHeadshipITId($row['headshipIT_headshipITId']);

		return $bos;
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
	 * @return BossMySql 
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