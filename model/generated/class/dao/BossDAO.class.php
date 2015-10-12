<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-10-12 17:51
 */
interface BossDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Bos
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param bos primary key
 	 */
	public function delete($bossId);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Boss bos
 	 */
	public function insert($bos);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Boss bos
 	 */
	public function update($bos);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByBossName($value);

	public function queryByBossState($value);

	public function queryByHeadshipITHeadshipITId($value);


	public function deleteByBossName($value);

	public function deleteByBossState($value);

	public function deleteByHeadshipITHeadshipITId($value);


}
?>