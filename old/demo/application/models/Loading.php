<?php

defined('BASEPATH') or exit('');

class Loading extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * *******************************************************************************************************************************
     */

    /**
     * Get all loadings
     * @param type $orderBy
     * @param type $orderFormat
     * @param type $start
     * @param type $limit
     * @return boolean
     */
    public function getAll($orderBy, $orderFormat, $start, $limit)
    {
        if ($this->db->platform() == "sqlite3") {
            $q = "SELECT modular_loadings.id, modular_loadings.customerName, modular_loadings.barcode, modular_loadings.loadingOn
                FROM modular_loadings
                ORDER BY {$orderBy} {$orderFormat}
                LIMIT {$limit} OFFSET {$start}";

            $run_q = $this->db->query($q);
        } else {
         $this->db->select('modular_loadings.id, modular_loadings.customerName,  modular_loadings.loadingOn, modular_packings.projectName, SUM(modular_packingLists.quantity) AS quantity, (SELECT COUNT(DISTINCT pkg_id) AS tot FROM modular_loadingLists WHERE loading_id = modular_loadings.id) as tot_quantity');
		
         $this->db->join('modular_loadings', 'modular_loadings.id = modular_loadingLists.loading_id', 'INNER');
         $this->db->join('modular_packings', 'modular_packings.id = modular_loadingLists.pkg_id', 'INNER');
         $this->db->join('modular_packingLists', 'modular_packingLists.pkg_id = modular_packings.id', 'INNER');
         $this->db->group_by('modular_loadings.id');
         $this->db->limit($limit, $start);
         $this->db->order_by($orderBy, $orderFormat);
			
         $run_q = $this->db->get('modular_loadingLists');		 
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

    public function addHdr($_ldgFor, $_ldgAddress, $_ldgCity, $_ldgContactNo)
    {
        $data = ['customerName' => $_ldgFor, 'address' => $_ldgAddress, 'city' => $_ldgCity, 'contactNos' => $_ldgContactNo];

        //set the datetime based on the db driver in use

        $this->db->insert('modular_loadings', $data);

        if ($this->db->affected_rows()) {
            return $this->db->insert_id();
        } else {
            return "FAILES"; //FALSE;
        }
    }

    public function addTrl($_ldgId, $_pkgId)
    {
        $data = ['loading_id' => $_ldgId, 'pkg_id' => $_pkgId];

        //set the datetime based on the db driver in use

        $this->db->insert('modular_loadingLists', $data);

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
     * Get all loadings with a particular ref
     * @param type $ref
     * @return boolean
     */
    public function getLdginfo($ref)
    {
     $q = "SELECT modular_products.projectName, modular_products.cabinetName, modular_products.partName, modular_packingLists.quantity, modular_packings.id as pkgId, modular_packings.packingOn, modular_loadings.*, SUM(modular_packingLists.quantity) AS 'quantity' FROM modular_loadings
	 INNER JOIN modular_loadingLists ON modular_loadings.id = modular_loadingLists.loading_id
	 INNER JOIN modular_packings ON modular_packings.id = modular_loadingLists.pkg_id
	 INNER JOIN modular_packingLists ON modular_packingLists.pkg_id = modular_packings.id
	 INNER JOIN modular_products ON modular_products.id = modular_packingLists.prd_id WHERE modular_loadings.id = {$ref}
                GROUP BY modular_loadingLists.pkg_id";

            $run_q = $this->db->query($q);
       // $q = "SELECT * FROM modular_loadings WHERE ref = ?";
       /* $this->db->select('modular_products.projectName, modular_products.cabinetName, modular_products.partName, modular_packingLists.quantity, modular_packings.id as pkgId, modular_packings.packingOn, modular_loadings.* ');
        $this->db->join('modular_loadingLists', 'modular_loadings.id = modular_loadingLists.loading_id', 'INNER');
        $this->db->join('modular_packings', 'modular_packings.id = modular_loadingLists.pkg_id', 'INNER');
       
	   $this->db->join('modular_packingLists', 'modular_packingLists.pkg_id = modular_packings.id', 'INNER');
        $this->db->join('modular_products', 'modular_products.id = modular_packingLists.prd_id', 'INNER');
        $this->db->where("modular_loadings.id = ", $ref);

        $run_q = $this->db->get('modular_loadings');*/

        if ($run_q->num_rows() > 0) {
            return $run_q->result_array();
        } else {
            return false;
        }
    }

    /*
     * *******************************************************************************************************************************
     */
    /**
     * selects the total number of packings done so far
     * @return boolean
     */
    public function totalLoadings()
    {
        $q = "SELECT count(DISTINCT id) as 'totalPkgs' FROM modular_loadings";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            foreach ($run_q->result() as $get) {
                return $get->totalPkgs;
            }
        } else {
            return false;
        }
    }

    /*
     * *******************************************************************************************************************************
     */

    public function getDateRange($from_date, $to_date)
    {
        if ($this->db->platform() == "sqlite3") {
            $q = "SELECT loadings.ref, loadings.totalMoneySpent, loadings.modeOfPayment, loadings.staffId,
                loadings.transDate, loadings.lastUpdated, loadings.amountTendered, loadings.changeDue,
                admin.first_name || ' ' || admin.last_name AS 'staffName', SUM(loadings.quantity) AS 'quantity',
                loadings.cust_name, loadings.cust_phone, loadings.cust_email
                FROM loadings
                LEFT OUTER JOIN admin ON loadings.staffId = admin.id
                WHERE
                date(loadings.transDate) >= {$from_date} AND date(loadings.transDate) <= {$to_date}
                GROUP BY ref
                ORDER BY loadings.transId DESC";

            $run_q = $this->db->query($q);
        } else {
            $this->db->select('modular_loadings.id, modular_loadings.customerName,  modular_loadings.loadingOn, modular_loadingLists.pkg_id, modular_packings.projectName, SUM(modular_packingLists.quantity) AS quantity');
            $this->db->join('modular_loadings', 'modular_loadings.id = modular_loadingLists.loading_id', 'INNER');
            $this->db->join('modular_packings', 'modular_packings.id = modular_loadingLists.pkg_id', 'INNER');
            $this->db->join('modular_packingLists', 'modular_packingLists.pkg_id = modular_packings.id', 'INNER');
   
            $this->db->where("DATE(modular_loadings.loadingOn) >= ", $from_date);
            $this->db->where("DATE(modular_loadings.loadingOn) <= ", $to_date);
            $this->db->group_by('modular_packingLists.pkg_id');

            $this->db->order_by('modular_loadings.id', 'DESC');

            $run_q = $this->db->get('modular_loadingLists');
        }

        return $run_q->num_rows() ? $run_q->result() : false;
    }
}
