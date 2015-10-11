<?php
/**
 * Class that operate on table 'managementit'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-10 17:21
 */
class ManagementitMySqlExtDAO extends ManagementitMySqlDAO{
    function setSQL($sql){
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }
}
?>