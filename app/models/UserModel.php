<?php
class UserModel extends Model{
    public function getListById($id, $table)
    {
        $data = $this->db->tableBuilder($table)->whereBuilder($table, '=', $id)->getOneBuilder();
        return $data;
    }
    public function getById($id, $table, $field)
    {
        $data = $this->db->tableBuilder($table)->selectBuilder()->whereBuilder($field, '=', $id)->getAllBuilder();
        return $data;
    }
    public function insert($data, $table)
    {
        $this->db->tableBuilder($table)->insertBuilder($data);
        return $this->db->lastInsertBuilder();
    }
    public function getLastId()
    {
        $data = $this->db->lastInsertBuilder();
        return $data;
    }

    public function update($data, $id, $table)
    {
        $this->db->tableBuilder($table)->whereBuilder($table, '=', $id)->updateBuilder($data);
    }

    public function delete($id, $table)
    {
        $this->db->tableBuilder($table)->whereBuilder($table, '=', $id)->deleteBuilder();
    }
}


?>