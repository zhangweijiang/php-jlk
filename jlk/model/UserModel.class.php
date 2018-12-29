<?php
/****
author: zwj
url: http://www.boolshop.com
****/


class UserModel extends Model{
    protected $table = 'user';
    protected $fields = array('username','password','email','telephone');
    public $pk = 'id';
    public function selectbyname($name,$pwd){
    	$sql="select * from ".$this->table." where username='".$name."' and password='".$pwd."' and status=1";
    	 return $this->db->getAll($sql);
    }
    public function selectbyphone($phone,$pwd){
    	$sql="select * from ".$this->table." where telephone='".$phone."' and password='$pwd'"." and status=1";
    	 return $this->db->getAll($sql);
    }
    public function update_status($id,$status){
        $sql="update ".$this->table." set status=$status where id=$id";
         return $this->db->execute($sql);
    }
}