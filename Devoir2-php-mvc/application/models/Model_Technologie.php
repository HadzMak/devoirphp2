<?php

class Model_Technologie extends CI_Model
{
    public function getAllTechnologie()
    {
        $sql = $this->db->get('technologie');
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}

