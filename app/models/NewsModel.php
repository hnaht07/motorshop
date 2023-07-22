<?php 
class NewsModel extends Model{
    public function getListAll($table)
    {
        $data =  $this->db->tableBuilder($table)->selectBuilder()->getAllBuilder();
        return $data;
    }
    public function getById($id, $table, $field)
    {
        $data = $this->db->tableBuilder($table)->selectBuilder()->whereBuilder($field, '=', $id)->getAllBuilder();
        return $data;
    }
}

?>