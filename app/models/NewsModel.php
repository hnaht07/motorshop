<?php 
class NewsModel extends Model{
    public function getListAll($table,$select = '*')
    {
        $data =  $this->db->tableBuilder($table)->selectBuilder($select)->getAllBuilder();
        return $data;
    }
    public function getById($id, $table, $field)
    {
        $data = $this->db->tableBuilder($table)->selectBuilder()->whereBuilder($field, '=', $id)->getAllBuilder();
        return $data;
    }
    public function getListLimit($table, $begin, $base = 0)
    {
        $data =  $this->db->tableBuilder($table)->selectBuilder()->limitBuilder($begin, $base)->getAllBuilder();
        return $data;
    }
    public function countAll($table)
    {
        $data = $this->db->tableBuilder($table)->countListBuilder();
        return $data;
    }
}

?>