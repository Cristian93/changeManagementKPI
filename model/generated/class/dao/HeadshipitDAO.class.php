<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-10-12 17:51
 */
interface HeadshipitDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Headshipit
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
 	 * @param headshipit primary key
 	 */
	public function delete($headshipITId);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Headshipit headshipit
 	 */
	public function insert($headshipit);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Headshipit headshipit
 	 */
	public function update($headshipit);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByHeadshipITName($value);

	public function queryByHeadshipITState($value);

	public function queryByManagementITManagementITId($value);


	public function deleteByHeadshipITName($value);

	public function deleteByHeadshipITState($value);

	public function deleteByManagementITManagementITId($value);


}
?>