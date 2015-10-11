<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-10-10 17:21
 */
interface AlterationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Alteration
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
 	 * @param alteration primary key
 	 */
	public function delete($changeIdSM);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Alteration alteration
 	 */
	public function insert($alteration);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Alteration alteration
 	 */
	public function update($alteration);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByChangeType($value);

	public function queryByShortDescription($value);

	public function queryByImpact($value);

	public function queryByAffectation($value);

	public function queryByScheduledStart($value);

	public function queryByRollbackStart($value);

	public function queryByRollbackEnd($value);

	public function queryByScheduledEnd($value);

	public function queryByStateExecution($value);

	public function queryByStateChange($value);

	public function queryByDirectionITDirectionITId($value);

	public function queryByManagementITManagementITId($value);

	public function queryByHeadshipITHeadshipITId($value);

	public function queryByBossBossId($value);

	public function queryByCoordinatorCoordinatorId($value);

	public function queryByApplicationOrInfrastructureApplicationOrInfrastructureId($value);

	public function queryByChangeManegerIdchangeManeger($value);


	public function deleteByChangeType($value);

	public function deleteByShortDescription($value);

	public function deleteByImpact($value);

	public function deleteByAffectation($value);

	public function deleteByScheduledStart($value);

	public function deleteByRollbackStart($value);

	public function deleteByRollbackEnd($value);

	public function deleteByScheduledEnd($value);

	public function deleteByStateExecution($value);

	public function deleteByStateChange($value);

	public function deleteByDirectionITDirectionITId($value);

	public function deleteByManagementITManagementITId($value);

	public function deleteByHeadshipITHeadshipITId($value);

	public function deleteByBossBossId($value);

	public function deleteByCoordinatorCoordinatorId($value);

	public function deleteByApplicationOrInfrastructureApplicationOrInfrastructureId($value);

	public function deleteByChangeManegerIdchangeManeger($value);


}
?>