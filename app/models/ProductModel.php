<?php
class ProductModel extends Model{    
    public function getListAll($table)
    {
        $data =  $this->db->tableBuilder($table)->selectBuilder()->getAllBuilder();
        return $data;
    }
    public function getById($id,$table,$field){
        $data = $this->db->tableBuilder($table)->selectBuilder()->whereBuilder($field,'=',$id)->getAllBuilder();
        return $data;
    }
    public function getListLimit($table,$begin,$base = 0)
    {
        $data =  $this->db->tableBuilder($table)->selectBuilder()->limitBuilder($begin, $base)->getAllBuilder();
        return $data;
    }
    public function getAllById($id, $table,$field){
        $data = $this->db->tableBuilder($table)->selectBuilder()->whereBuilder($field, '=', $id)->getAllBuilder();
        return $data;
    }

    public function getLastId() {
        $data = $this->db->lastInsertBuilder();
        return $data;
    }
    public function countAll($table) {
        $data = $this->db->tableBuilder($table)->countListBuilder();
        return $data;
    }
    public function countList($table,$field,$num){
        $data = $this->db->tableBuilder($table)->whereBuilder($field, '=', $num)->countListBuilder();
        return $data;
    }

    public function searchbyName($table,$search,$field,$selectField)
    {
        $data = $this->db->tableBuilder($table)->selectBuilder($selectField)->whereLikeBuilder($field, '%'.$search.'%')->getAllBuilder();
        return $data;
    }

    public function insert($data,$table)
    {
        $this->db->tableBuilder($table)->insertBuilder($data);
        return $this->db->lastInsertBuilder();
    }
    public function update($data, $id , $table)
    {
        $this->db->tableBuilder($table)->whereBuilder('product_Id', '=', $id)->updateBuilder($data);
    }

    public function delete($id,$table)
    {
        $this->db->tableBuilder($table)->whereBuilder('product_Id', '=', $id)->deleteBuilder();
    }

    public function getWith($table, $id, $tableWith ,$idWith){
        $data =  $this->db->tableWhereBuilder($table, $tableWith)->selectBuilder()->whereBuilder($id, '=', $idWith)->getTwoTableBuilder();
        return $data;
    }
}