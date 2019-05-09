<?php
namespace app\models;

use \system\framework\Model;

class Account extends Model
{
    public function loginSelect($data)
    {
        $result = $this->db->select("user","*",[
            "AND"=>[
                "username" => $data['username'],
                "password" => $data['password']
            ]
        ]);
        return $result;
    }
    public function registerInsert($data)
    {
        $result = $this->db->insert("user", [
            "username" => $data['username'],
            "password" => $data['password'],
            "regtime" => time()
        ]);
    }

    // 查询信息
    public function infoSelect($uid)
    {
        return $this->db->select("user","*",[
            'uid' => $uid
        ]);
    }

    // 更新信息
    public function infoUpdate($data)
    {
        $result = $this->db->update('user', $data,[
            'uid' => $data['uid']
        ]);
    }
}
