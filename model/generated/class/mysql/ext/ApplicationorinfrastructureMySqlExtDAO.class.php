<?php
/**
 * Class that operate on table 'applicationorinfrastructure'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-05 03:55
 */
class ApplicationorinfrastructureMySqlExtDAO extends ApplicationorinfrastructureMySqlDAO{
    function setSQL($sql){
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }
}
?>