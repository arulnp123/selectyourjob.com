<?php
defined('BASEPATH') or exit('');

class Import extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function ImportProjects($data_excel)
    {
         $this->db->insert('modular_products', $data_excel);
    }


    /*
     * *******************************************************************************************************************************
     */

    /**
     * selects the total number of imports done so far
     * @return boolean
     */
    public function totalImports() {
        $q = "SELECT count(DISTINCT id) as 'totalRecs' FROM modular_products";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            foreach ($run_q->result() as $get) {
                return $get->totalRecs;
            }
        }
        else {
            return FALSE;
        }
    }

    
    /*
     * *******************************************************************************************************************************
     */

    /**
     * Get all transactions
     * @param type $orderBy
     * @param type $orderFormat
     * @param type $start
     * @param type $limit
     * @return boolean
     */
    public function getAll($orderBy, $orderFormat, $start, $limit) {
        if ($this->db->platform() == "sqlite3") {
            $q = "SELECT *
                FROM modular_products
               
                ORDER BY {$orderBy} {$orderFormat}
                LIMIT {$limit} OFFSET {$start}";

            $run_q = $this->db->query($q);
        }
        else {
            $this->db->select('projectName, cabinetName, partName, file_1, file_2, length, width, isPartRotation, quantity, material, thickness, edge_1, edge_2, edge_3, edge_4, createdOn');
            
            $this->db->limit($limit, $start);
            $this->db->order_by($orderBy, $orderFormat);

            $run_q = $this->db->get('modular_products');
        }

        if ($run_q->num_rows() > 0) {
            return $run_q->result();
        }
        else {
            return FALSE;
        }
    }


}