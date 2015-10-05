<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-10-05 03:55
 */
interface ManagementitDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Managementit
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
 	 * @param managementit primary key
 	 */
	public function delete($managementITId);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Managementit managementit
 	 */
	public function insert($managementit);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Managementit managementit
 	 */
	public function update($managementit);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByManagementITName($value);

	public function queryByManagementITState($value);

	public function queryByDirectionITDirectionITId($value);


	public function deleteByManagementITName($value);

	public function deleteByManagementITState($value);

	public function deleteByDirectionITDirectionITId($value);


}
?>