<?php
/**
 * Class that operate on table 'coordinator'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-10 17:21
 */
class CoordinatorMySqlExtDAO extends CoordinatorMySqlDAO{
    function setSQL($sql){
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }
}
?>