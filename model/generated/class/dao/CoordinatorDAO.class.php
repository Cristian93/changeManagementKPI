<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-10-10 17:21
 */
interface CoordinatorDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Coordinator
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
 	 * @param coordinator primary key
 	 */
	public function delete($coordinatorId);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Coordinator coordinator
 	 */
	public function insert($coordinator);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Coordinator coordinator
 	 */
	public function update($coordinator);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCoordinatorName($value);

	public function queryByCoordinatorState($value);

	public function queryByBossBossId($value);


	public function deleteByCoordinatorName($value);

	public function deleteByCoordinatorState($value);

	public function deleteByBossBossId($value);


}
?>