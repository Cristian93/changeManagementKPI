<?php
/**
 * Class that operate on table 'directionit'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-05 03:55
 */
class DirectionitMySqlExtDAO extends DirectionitMySqlDAO{
    function setSQL($sql){
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }
}
?>