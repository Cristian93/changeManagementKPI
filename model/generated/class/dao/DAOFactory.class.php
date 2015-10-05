<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AlterationDAO
	 */
	public static function getAlterationDAO(){
		return new AlterationMySqlExtDAO();
	}

	/**
	 * @return ApplicationorinfrastructureDAO
	 */
	public static function getApplicationorinfrastructureDAO(){
		return new ApplicationorinfrastructureMySqlExtDAO();
	}

	/**
	 * @return BossDAO
	 */
	public static function getBossDAO(){
		return new BossMySqlExtDAO();
	}

	/**
	 * @return CoordinatorDAO
	 */
	public static function getCoordinatorDAO(){
		return new CoordinatorMySqlExtDAO();
	}

	/**
	 * @return DirectionitDAO
	 */
	public static function getDirectionitDAO(){
		return new DirectionitMySqlExtDAO();
	}

	/**
	 * @return HeadshipitDAO
	 */
	public static function getHeadshipitDAO(){
		return new HeadshipitMySqlExtDAO();
	}

	/**
	 * @return ManagementitDAO
	 */
	public static function getManagementitDAO(){
		return new ManagementitMySqlExtDAO();
	}


}
?>