<?php
namespace app\models;

use \system\framework\Model;

class Borrow extends Model
{
    public function borrowInsert($data)
    {
        $this->db->insert('borrow', $data);
    }

    public function borrowSelect()
    {
        return $this->db->select('borrow', [
            "[>]user" => array("uid" => "uid")
        ],'*');
    }
    public function borrowUpdate($data)
    {
        $this->db->update('borrow', $data, [
            'bid' => $data['bid']
        ]);
    }

}
