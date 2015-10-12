<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-10-12 17:51
 */
interface ChangemanagerDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Changemanager
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
 	 * @param changemanager primary key
 	 */
	public function delete($idchangeManager);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Changemanager changemanager
 	 */
	public function insert($changemanager);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Changemanager changemanager
 	 */
	public function update($changemanager);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByChangeManagerName($value);

	public function queryByChangeManagerEmail($value);

	public function queryByChangeManagerPassword($value);

	public function queryByChangeManagerState($value);


	public function deleteByChangeManagerName($value);

	public function deleteByChangeManagerEmail($value);

	public function deleteByChangeManagerPassword($value);

	public function deleteByChangeManagerState($value);


}
?>