<?php
if(!defined('CAN_RUN')) {
	exit('Access Denied');
}

class db_sql_account_set extends base_set {
	protected $table_name = 'db_sql_account';
	protected $id_name = 'id';

}
?>
