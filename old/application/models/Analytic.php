<?php
defined('BASEPATH') or exit(':D');

class Analytic extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get daily info on transactions
     * @param type $start
     * @param type $limit
     * @param type $order_by
     * @param type $order_format
     * @return boolean
     */
    public function getDailyTrans($start = 0, $limit = 10, $order_by = 'DATE(createdOn)', $order_format = 'DESC')
    {

        $q = "SELECT count(DISTINCT(projectName)) as 'tot_trans' FROM modular_products WHERE DATE(createdOn) = CURRENT_DATE GROUP BY projectName";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            return $run_q->result();
        } else {
            return false;
        }
    }
    public function getDailyImports()
    {

        $q = "SELECT count(*) as 'tot_imports' FROM modular_products WHERE DATE(createdOn) = CURRENT_DATE";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            foreach ($run_q->result() as $get) {
                return $get->tot_imports;
            }
        } else {
            return false;
        }
    }

    public function getDailyPackings()
    {

        $q = "SELECT count(*) as 'tot_packs' FROM modular_packings WHERE DATE(packingOn) = CURRENT_DATE";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            foreach ($run_q->result() as $get) {
                return $get->tot_packs;
            }
        } else {
            return false;
        }
    }
    public function getDailyLoadings()
    {

        $q = "SELECT count(*) as 'tot_loads' FROM modular_loadings WHERE DATE(loadingOn) = CURRENT_DATE";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            foreach ($run_q->result() as $get) {
                return $get->tot_loads;
            }
        } else {
            return false;
        }
    }
    /**
     * Get Transactions info by days
     * @return boolean
     */
    public function getTransByDays()
    {
        if ($this->db->platform() == "sqlite3") {
            $q = "SELECT
				count(DISTINCT(ref)) as 'tot_trans',
				SUM(quantity) as 'qty_sold',
				SUM(totalPrice) as 'tot_earned',
				case cast (strftime('%w', transDate) as integer)
				  when 0 then 'Sunday'
				  when 1 then 'Monday'
				  when 2 then 'Tuesday'
				  when 3 then 'Wednesday'
				  when 4 then 'Thursday'
				  when 5 then 'Friday'
				  else 'Saturday' end as day
			  FROM transactions
			  GROUP BY day
			  ORDER BY tot_earned DESC";

            $run_q = $this->db->query($q, []);
        } else {
            $this->db->select('count(DISTINCT(ref)) as "tot_trans", SUM(quantity) as "qty_sold", SUM(totalPrice) as "tot_earned", DAYNAME(transDate) as "day"');
            $this->db->order_by('tot_earned', 'DESC');
            $this->db->group_by('day');
            $run_q = $this->db->get('transactions');
        }

        if ($run_q->num_rows() > 0) {
            return $run_q->result();
        } else {
            return false;
        }
    }

    /*
     ********************************************************************************************************************************
     */

    /**
     * Get Transactions info by months
     * @return boolean
     */
    public function getTransByMonths()
    {
        if ($this->db->platform() == "sqlite3") {
            $q = "SELECT
				count(DISTINCT(ref)) as 'tot_trans',
				SUM(quantity) as 'qty_sold',
				SUM(totalPrice) as 'tot_earned',
				case cast (strftime('%m', transDate) as integer)
				  when 01 then 'January'
				  when 02 then 'February'
				  when 03 then 'March'
				  when 04 then 'April'
				  when 05 then 'May'
				  when 06 then 'June'
				  when 07 then 'July'
				  when 08 then 'August'
				  when 09 then 'September'
				  when 10 then 'October'
				  when 11 then 'November'
				  when 12 then 'December' end as month
			  FROM transactions
			  GROUP BY month
			  ORDER BY tot_earned DESC";

            $run_q = $this->db->query($q, []);
        } else {
            $this->db->select('count(DISTINCT(ref)) as "tot_trans", SUM(quantity) as "qty_sold", SUM(totalPrice) as "tot_earned", MONTHNAME(transDate) as "month"');
            $this->db->order_by('tot_earned', 'DESC');
            $this->db->group_by('month');

            $run_q = $this->db->get('transactions');
        }

        if ($run_q->num_rows() > 0) {
            return $run_q->result();
        } else {
            return false;
        }
    }

    /*
     ********************************************************************************************************************************
     */

    /**
     * Get Transactions info by years
     * @return boolean
     */
    public function getTransByYears()
    {
        if ($this->db->platform() == "sqlite3") {
            $q = "SELECT
				count(DISTINCT(ref)) as 'tot_trans',
				SUM(quantity) as 'qty_sold',
				SUM(totalPrice) as 'tot_earned',
				strftime('%Y', transDate) as 'year'
			  FROM transactions
			  GROUP BY year
			  ORDER BY tot_earned DESC";

            $run_q = $this->db->query($q, []);
        } else {
            $this->db->select('count(DISTINCT(ref)) as "tot_trans", SUM(quantity) as "qty_sold", SUM(totalPrice) as "tot_earned", YEAR(transDate) as "year"');
            $this->db->order_by('tot_earned', 'DESC');
            $this->db->group_by('year');

            $run_q = $this->db->get('transactions');
        }

        if ($run_q->num_rows() > 0) {
            return $run_q->result();
        } else {
            return false;
        }
    }

    /*
     ********************************************************************************************************************************
     */

    /**
     * Selects most bought items
     * @return boolean
     */
    public function topDemanded()
    {
        $q = "SELECT items.name, SUM(transactions.quantity) as 'totSold' FROM items
                INNER JOIN transactions ON items.code=transactions.itemCode GROUP BY transactions.itemCode ORDER BY totSold DESC LIMIT 5";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            return $run_q->result();
        } else {
            return false;
        }
    }

    /*
     ********************************************************************************************************************************
     */

    /**
     * Selects least bought items
     * @return boolean
     */
    public function leastDemanded()
    {
        $q = "SELECT items.name, SUM(transactions.quantity) as 'totSold' FROM items
                INNER JOIN transactions ON items.code=transactions.itemCode GROUP BY transactions.itemCode ORDER BY totSold ASC LIMIT 5";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            return $run_q->result();
        } else {
            return false;
        }
    }

    /*
     ********************************************************************************************************************************
     */

    /**
     * Items that has brought highest income (in total)
     * @return boolean
     */
    public function highestEarners()
    {
        $q = "SELECT items.name, SUM(transactions.totalPrice) as 'totEarned' FROM items
                INNER JOIN transactions ON items.code=transactions.itemCode
                GROUP BY transactions.itemCode
                ORDER BY totEarned DESC LIMIT 5";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            return $run_q->result();
        } else {
            return false;
        }
    }

    /*
     ********************************************************************************************************************************
     */

    /**
     * Items that has brought lowest income (in total)
     * @return boolean
     */
    public function lowestEarners()
    {
        $q = "SELECT items.name, SUM(transactions.totalPrice) as 'totEarned' FROM items
               INNER JOIN transactions ON items.code=transactions.itemCode
               GROUP BY transactions.itemCode
               ORDER BY totEarned ASC LIMIT 5";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            return $run_q->result();
        } else {
            return false;
        }
    }

    /*
     ********************************************************************************************************************************
     */

    /**
     * selects all transactions done within the last 24hrs
     * @return boolean
     */
    public function totalSalesToday()
    {
        $q = "SELECT SUM(quantity) as 'totalTransToday' FROM transactions WHERE DATE(transDate) = CURRENT_DATE";

        $run_q = $this->db->query($q);

        if ($run_q->num_rows() > 0) {
            foreach ($run_q->result() as $get) {
                return $get->totalTransToday;
            }
        } else {
            return false;
        }
    }
}
