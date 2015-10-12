<?php
/**
 * Class that operate on table 'boss'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-12 17:51
 */
class BossMySqlExtDAO extends BossMySqlDAO{
    function setSQL($sql){
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }
}
?>