<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-10-10 17:21
 */
interface ApplicationorinfrastructureDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Applicationorinfrastructure
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
 	 * @param applicationorinfrastructure primary key
 	 */
	public function delete($applicationOrInfrastructureId);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Applicationorinfrastructure applicationorinfrastructure
 	 */
	public function insert($applicationorinfrastructure);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Applicationorinfrastructure applicationorinfrastructure
 	 */
	public function update($applicationorinfrastructure);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByApplicationOrInfrastructureName($value);

	public function queryByApplicationOrInfrastructureState($value);


	public function deleteByApplicationOrInfrastructureName($value);

	public function deleteByApplicationOrInfrastructureState($value);


}
?>