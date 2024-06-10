<?php

defined('BASEPATH') or exit('');

class Packing extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * *******************************************************************************************************************************
     */

    /**
     * Get all packings
     * @param type $orderBy
     * @param type $orderFormat
     * @param type $start
     * @param type $limit
     * @return boolean
     */
    public function getAll($orderBy, $orderFormat, $start, $limit)
    {
        if ($this->db->platform() == "sqlite3") {
            $q = "SELECT modular_packings.id, modular_packings.description, modular_packings.barcode, modular_packings.packingOn
                FROM modular_packings
                ORDER BY {$orderBy} {$orderFormat}
                LIMIT {$limit} OFFSET {$start}";

            $run_q = $this->db->query($q);
        } else {
            $this->db->select('modular_packings.id, modular_packings.description,  modular_packings.packingOn, modular_packings.projectName, modular_products.cabinetName,  modular_products.partName, modular_packingLists.quantity, modular_loadingLists.loading_id');
            $this->db->join('modular_packingLists', 'modular_packings.id = modular_packingLists.pkg_id', 'INNER');
           $this->db->join('modular_loadingLists', 'modular_packings.id = modular_loadingLists.pkg_id', 'LEFT OUTER');
         $this->db->join('modular_products', 'modular_packingLists.prd_id = modular_products.id', 'INNER');
            $this->db->limit($limit, $start);
            $this->db->order_by($orderBy, $orderFormat);

            $run_q = $this->db->get('modular_packings');
        }

        if ($run_q->num_rows() > 0) {
            return $run_q->result();
        } else {
            return false;
        }
    }

    /*
     * *******************************************************************************************************************************
     */

    public function addHdr($_pkgName, $_prjName)
    {
        $data = ['description' => $_pkgName, 'projectName' => $_prjName];

        //set the datetime based on the db driver in use
        // $this->db->platform() == "sqlite3" ?
        //     $this->db->set('packingOn', "datetime('now')", FALSE) :
        //     $this->db->set('packingOn', "NOW()", FALSE);

        $this->db->insert('modular_packings', $data);

        if ($this->db->affected_rows()) {
            return $this->db->insert_id();
        } else {
            return "FAILES"; //FALSE;
        }
    }

    public function addTrl($_pkgId, $_prdId, $_qty)
    {
        $data = ['pkg_id' => $_pkgId, 'prd_id' => $_prdId, 'quantity' => $_qty];

        //set the datetime based on the db driver in use

        $this->db->insert('modular_packingLists', $data);

        if ($this->db->affected_rows()) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    /*
     * *******************************************************************************************************************************
     */

    /**
     * Get all packings with a particular ref
     * @param type $ref
     * @return boolean
     */
    public function getPkginfo($ref)
    {
      
       // $q = "SELECT * FROM modular_packings WHERE ref = ?";
        $this->db->select('modular_packings.id, modular_packings.description,  modular_packings.packingOn, modular_packings.projectName, modular_products.cabinetName, modular_products.partName, modular_packingLists.quantity');
        $this->db->join('modular_packingLists', 'modular_packings.id = modular_packingLists.pkg_id', 'INNER');
        $this->db->join('modular_products', 'modular_packingLists.prd_id = modular_products.id', 'INNER');
        $this->db->where("modular_packings.id = ", $ref);

        $run_q = $this->db->get('modular_packings');

        if ($run_q->num_rows() > 0) {
            return $run_q->result_array();
        } else {
            return false;
        }
    }

    /*
     * *******************************************************************************************************************************
     */
    public function getActivePackingIds($where_clause)
    {
        $this->db->select('modular_packings.id');
        $this->db->join('modular_loadingLists', 'modular_packings.id = modular_loadingLists.pkg_id', 'LEFT OUTER');
        $this->db->where($where_clause);
        $this->db->where("modular_loadingLists.loading_id IS NULL");
        
        $run_q = $this->db->get('modular_packings');

        if ($run_q->num_rows() > 0) {
            return $run_q->result();
        } else {
            return false;
        }
    }
    public function getActivePackingsInfo()
    {
       // $q = "SELECT * FROM modular_packings WHERE ref = ?";
        $this->db->select('modular_packings.id, modular_packings.description,  modular_packings.packingOn, modular_packings.projectName, modular_products.cabinetName, modular_products.partName, modular_packingLists.quantity, modular_loadingLists.loading_id');
        $this->db->join('modular_packingLists', 'modular_packings.id = modular_packingLists.pkg_id', 'INNER');
        $this->db->join('modular_loadingLists', 'modular_packings.id = modular_loadingLists.pkg_id', 'LEFT OUTER');
        $this->db->join('modular_products', 'modular_packingLists.pkg_id = modular_products.id', 'INNER');
       
        $this->db->where("modular_loadingLists.loading_id IS NULL");
        
        $run_q = $this->db->get('modular_packings');

        if ($run_q->num_rows() > 0) {
            return $run_q->result();
        } else {
            return false;
        }
    }

    /**
     * selects the total number of packings done so far
     * @return boolean
     */
    public function totalPackings()
    {
        $q = "SELECT count(DISTINCT id) as 'totalPkgs' FROM modular_packings";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            foreach ($run_q->result() as $get) {
                return $get->totalPkgs;
            }
        } else {
            return false;
        }
    }

 /**
     * array $where_clause
     * array $fields_to_fetch
     * 
     * return array | FALSE
     */
    public function getPackingInfoById($where_clause, $fields_to_fetch){
        $this->db->select($fields_to_fetch);
        // $this->db->select_sum('modular_packingLists.quantity');
        $this->db->join('modular_packings', 'modular_packings.id = modular_packingLists.pkg_id', 'INNER');
        $this->db->join('modular_products', 'modular_products.id = modular_packingLists.prd_id', 'INNER');
        $this->db->where($where_clause);
        $run_q = $this->db->get('modular_packingLists');
        
        return $run_q->num_rows() ? $run_q->row() : FALSE;
    }
    /*
     * *******************************************************************************************************************************
     */

    public function getDateRange($from_date, $to_date)
    {
        if ($this->db->platform() == "sqlite3") {
            $q = "SELECT packings.ref, packings.totalMoneySpent, packings.modeOfPayment, packings.staffId,
                packings.transDate, packings.lastUpdated, packings.amountTendered, packings.changeDue,
                admin.first_name || ' ' || admin.last_name AS 'staffName', SUM(packings.quantity) AS 'quantity',
                packings.cust_name, packings.cust_phone, packings.cust_email
                FROM packings
                LEFT OUTER JOIN admin ON packings.staffId = admin.id
                WHERE
                date(packings.transDate) >= {$from_date} AND date(packings.transDate) <= {$to_date}
                GROUP BY ref
                ORDER BY packings.transId DESC";

            $run_q = $this->db->query($q);
        } else {
            $this->db->select('modular_packings.id, modular_packings.description, modular_packings.packingOn, modular_products.partname,
                    modular_packingLists.quantity');

            $this->db->join('modular_packingLists', 'modular_packings.id = modular_packingLists.pkg_id', 'INNER');
            $this->db->join('modular_products', 'modular_packingLists.prd_id = modular_products.id', 'INNER');

            $this->db->where("DATE(modular_packings.packingOn) >= ", $from_date);
            $this->db->where("DATE(modular_packings.packingOn) <= ", $to_date);

            $this->db->order_by('modular_packings.id', 'DESC');

            $run_q = $this->db->get('modular_packings');
        }

        return $run_q->num_rows() ? $run_q->result() : false;
    }
}
