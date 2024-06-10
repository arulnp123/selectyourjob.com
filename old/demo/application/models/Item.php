<?php
defined('BASEPATH') OR exit('');

class Item extends CI_Model{
    public function __construct(){
        parent::__construct();
        // $this->genlib->checkLogin();
    }
    
   
    public function getAll($orderBy, $orderFormat, $start=0, $limit=''){
        $this->db->limit($limit, $start);
        $this->db->order_by($orderBy, $orderFormat);
        
        $run_q = $this->db->get('modular_products');
        
        if($run_q->num_rows() > 0){
            return $run_q->result();
        }
        
        else{
            return FALSE;
        }
    }
    
    /*
    ********************************************************************************************************************************
    */
    
    
    /**
     * 
     * @param type $itemName
     * @param type $itemQuantity
     * @param type $itemPrice
     * @param type $itemDescription
     * @param type $itemCode
     * @return boolean
     */
    public function add($itemName, $itemQuantity, $itemPrice, $itemDescription, $itemCode){
        $data = ['name'=>$itemName, 'quantity'=>$itemQuantity, 'unitPrice'=>$itemPrice, 'description'=>$itemDescription, 'code'=>$itemCode];
                
        //set the datetime based on the db driver in use
        $this->db->platform() == "sqlite3" 
                ? 
        $this->db->set('dateAdded', "datetime('now')", FALSE) 
                : 
        $this->db->set('dateAdded', "NOW()", FALSE);
        
        $this->db->insert('modular_items', $data);
        
        if($this->db->insert_id()){
            return $this->db->insert_id();
        }
        
        else{
            return FALSE;
        }
    }
    
    /*
    ********************************************************************************************************************************
    */
    
    /**
     * 
     * @param type $value
     * @return boolean
     */
    public function itemsearch($value){
        $q = "SELECT * FROM items 
            WHERE 
            name LIKE '%".$this->db->escape_like_str($value)."%'
            || 
            code LIKE '%".$this->db->escape_like_str($value)."%'";
        
        $run_q = $this->db->query($q, [$value, $value]);
        
        if($run_q->num_rows() > 0){
            return $run_q->result();
        }
        
        else{
            return FALSE;
        }
    }
    
    
    /*
    ********************************************************************************************************************************
    */
    
    /**
     * To add to the number of an item in stock
     * @param type $itemId
     * @param type $numberToadd
     * @return boolean
     */
    public function incrementItem($itemId, $numberToadd){
        $q = "UPDATE modular_products SET quantity = quantity + ? WHERE id = ?";
        
        $this->db->query($q, [$numberToadd, $itemId]);
        
        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        
        else{
            return FALSE;
        }
    }
    
    /*
    ********************************************************************************************************************************
    */
    
    public function decrementItem($itemCode, $numberToRemove){
        $q = "UPDATE modular_products SET quantity = quantity - ? WHERE id = ?";
        
        $this->db->query($q, [$numberToRemove, $itemCode]);
        
        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        
        else{
            return FALSE;
        }
    }


    /*
    ********************************************************************************************************************************
    */
    
    
   public function newstock($itemId, $qty){
       $q = "UPDATE modular_products SET quantity = quantity + $qty WHERE id = ?";
       
       $this->db->query($q, [$itemId]);
       
       if($this->db->affected_rows()){
           return TRUE;
       }
       
       else{
           return FALSE;
       }
   }
   
   
   /*
    ********************************************************************************************************************************
    */
   
   public function deficit($itemId, $qty){
       $q = "UPDATE modular_products SET quantity = quantity - $qty WHERE id = ?";
       
       $this->db->query($q, [$itemId]);
       
       if($this->db->affected_rows()){
           return TRUE;
       }
       
       else{
           return FALSE;
       }
   }
   
   /*
    ********************************************************************************************************************************
    */
   
   /**
    * 
    * @param type $itemId
    * @param type $itemName
    * @param type $itemDesc
    * @param type $itemPrice
    */
   public function edit($itemId, $itemName, $itemDesc, $itemPrice){
       $data = ['name'=>$itemName, 'unitPrice'=>$itemPrice, 'description'=>$itemDesc];
       
       $this->db->where('id', $itemId);
       $this->db->update('modular_products', $data);
       
       return TRUE;
   }
   
   /*
    ********************************************************************************************************************************
    */
   
	public function getActiveItems($filter, $orderBy, $orderFormat){
        //$this->db->order_by($orderBy, $orderFormat);
		
		$this->db->where($filter);
		$this->db->where('quantity >=', 1);
        
        $run_q = $this->db->get('modular_products');
        
        if($run_q->num_rows() > 0){
            return $run_q->result();
        }
        
        else{
            return FALSE;
        }
    }
	public function getActiveProjects($orderBy, $orderFormat){
        //$this->db->order_by($orderBy, $orderFormat);
		$this->db->distinct();
        $this->db->select('projectName');
		$this->db->where('quantity >=', 1);
        $run_q = $this->db->get('modular_products');
        
        if($run_q->num_rows() > 0){
            return $run_q->result();
        }
        
        else{
            return FALSE;
        }
    }

    /*
    ********************************************************************************************************************************
    */

    /**
     * array $where_clause
     * array $fields_to_fetch
     * 
     * return array | FALSE
     */
    public function getItemInfo($where_clause, $fields_to_fetch){
        $this->db->select($fields_to_fetch);
        
        $this->db->where($where_clause);

        $run_q = $this->db->get('modular_products');
        
        return $run_q->num_rows() ? $run_q->row() : FALSE;
    }
       /**
     * array $where_clause
     * array $fields_to_fetch
     * 
     * return array | FALSE
     */
    public function getItemByProject($where_clause){
        $this->db->where($where_clause);
        $run_q = $this->db->get('modular_products');
        return $run_q->num_rows() ? $run_q->row() : FALSE;
    }
    /*
    ********************************************************************************************************************************
    */

     public function getCurrentStock($where_clause)
    {
        if ($this->db->platform() == "sqlite3") {
           
        } else {
            $this->db->select('modular_products.projectName, modular_products.cabinetName, modular_products.partName as partName, modular_products.file_1, modular_products.opquantity as OpQty, modular_packingLists.pkg_id as PackingId, modular_packingLists.quantity as PackingQty, modular_loadingLists.loading_id as LoadingId, modular_products.quantity as ClosingQty');
            $this->db->join('modular_packingLists', 'modular_packingLists.prd_id = modular_products.id', 'LEFT OUTER');
            $this->db->join('modular_packings', 'modular_packings.id = modular_packingLists.pkg_id', 'LEFT OUTER');
            $this->db->join('modular_loadingLists', 'modular_loadingLists.pkg_id = modular_packings.id', 'LEFT OUTER');
            $this->db->where($where_clause);
            $this->db->order_by('modular_products.projectName' );

            $run_q = $this->db->get('modular_products');
        }

        return $run_q->num_rows() ? $run_q->result() : false;
    }

    public function getItemsCumTotal(){
        $this->db->select("SUM(unitPrice*quantity) as cumPrice");

        $run_q = $this->db->get('modular_products');
        
        return $run_q->num_rows() ? $run_q->row()->cumPrice : FALSE;
    }
     public function getId($where_clause){
        $this->db->select("id");
        $this->db->where($where_clause);
        $run_q = $this->db->get('modular_products');
        
        return $run_q->num_rows() ? $run_q->row()->id : FALSE;
    }
}