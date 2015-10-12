<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-10-12 17:51
 */
interface DirectionitDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Directionit
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
 	 * @param directionit primary key
 	 */
	public function delete($directionITId);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Directionit directionit
 	 */
	public function insert($directionit);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Directionit directionit
 	 */
	public function update($directionit);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDirectionITName($value);

	public function queryByDirectionITState($value);


	public function deleteByDirectionITName($value);

	public function deleteByDirectionITState($value);


}
?>