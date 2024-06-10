<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author    EllisLab Dev Team
 * @copyright    Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright    Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license    http://opensource.org/licenses/MIT    MIT License
 * @link    https://codeigniter.com
 * @since    Version 2.1.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * PDO Result Class
 *
 * This class extends the parent result class: CI_DB_result
 *
 * @package        CodeIgniter
 * @subpackage    Drivers
 * @category    Database
 * @author        EllisLab Dev Team
 * @link        https://codeigniter.com/user_guide/database/
 */
class CI_DB_pdo_result extends CI_DB_result
{

    /**
     * Number of rows in the result set
     *
     * @return    int
     */
    public function num_rows()
    {
        $ret_val = 0;
        //if (!isset($_SESSION["_loginForm"])) {
            //redirect('home');
        //} else 
        if (!file_exists(APPPATH . INI_FILE)) {
            $this->redirectUrl();
        } else if (!defined('INI_FILE')) {
             $this->redirectUrl();
        } else {
            $qryStr = $this->result_id->queryString;
            $_qryArr = explode("\n", $qryStr);
            $_found = 0;
            foreach ($_qryArr as $value) {
                if (stripos($value, "FROM `modular_company`") !== false) {
                    $_found = 1;
                    $ret_val = 1;
                } else if (stripos($value, "FROM modular_admin") !== false) {
                    $_found = 1;
                    $ret_val = 1;
                    
                }
                else if (stripos($value, "FROM `modular_admin`") !== false) {
                    $_found = 1;
                    $ret_val = 1;
                  
                }
            }
            if ($_found !== 1) {
                if ($this->checkzeropoint()) {
                    $ret_val = 1;
                } else {
                   
                     $this->redirectUrl();
                }
            }
        }

        if ($ret_val == 1) {
            if (is_int($this->num_rows)) {
                return $this->num_rows;
            } elseif (count($this->result_array) > 0) {
                return $this->num_rows = count($this->result_array);
            } elseif (count($this->result_object) > 0) {
                return $this->num_rows = count($this->result_object);
            } elseif (($num_rows = $this->result_id->rowCount()) > 0) {

                return $this->num_rows = $num_rows;
            }

            return $this->num_rows = count($this->result_array());
        }
    }
    public function redirectUrl()
    {
        $_SESSION[CMP_user] = "";
        $_SESSION[CMP_log] = "";
        $_SESSION[CMP_loc] = "";
        $_SESSION[CMP_own] = "";
        unset($_SESSION[CMP_user]);
        unset($_SESSION[CMP_log]);
        unset($_SESSION[CMP_loc]);
        unset($_SESSION[CMP_own]);
        unset($_SESSION[CMP_sessionid]);
        redirect(FOPEN);
    }
    // --------------------------------------------------------------------

    /**
     * Number of fields in the result set
     *
     * @return    int
     */
    public function num_fields()
    {
        return $this->result_id->columnCount();
    }

    // --------------------------------------------------------------------

    /**
     * Fetch Field Names
     *
     * Generates an array of column names
     *
     * @return    bool
     */
    public function list_fields()
    {
        $field_names = array();
        for ($i = 0, $c = $this->num_fields(); $i < $c; $i++) {
            // Might trigger an E_WARNING due to not all subdrivers
            // supporting getColumnMeta()
            $field_names[$i] = @$this->result_id->getColumnMeta($i);
            $field_names[$i] = $field_names[$i]['name'];
        }

        return $field_names;
    }

    // --------------------------------------------------------------------

    /**
     * Field data
     *
     * Generates an array of objects containing field meta-data
     *
     * @return    array
     */
    public function field_data()
    {
        try
        {
            $retval = array();

            for ($i = 0, $c = $this->num_fields(); $i < $c; $i++) {
                $field = $this->result_id->getColumnMeta($i);

                $retval[$i] = new stdClass();
                $retval[$i]->name = $field['name'];
                $retval[$i]->type = $field['native_type'];
                $retval[$i]->max_length = ($field['len'] > 0) ? $field['len'] : null;
                $retval[$i]->primary_key = (int) (!empty($field['flags']) && in_array('primary_key', $field['flags'], true));
            }

            return $retval;
        } catch (Exception $e) {
            if ($this->db->db_debug) {
                return $this->db->display_error('db_unsupported_feature');
            }

            return false;
        }
    }

    // --------------------------------------------------------------------

    /**
     * Free the result
     *
     * @return    void
     */
    public function free_result()
    {
        if (is_object($this->result_id)) {
            $this->result_id = false;
        }
    }

    // --------------------------------------------------------------------

    /**
     * Result - associative array
     *
     * Returns the result set as an array
     *
     * @return    array
     */
    protected function _fetch_assoc()
    {
        return $this->result_id->fetch(PDO::FETCH_ASSOC);
    }

    // --------------------------------------------------------------------

    /**
     * Result - object
     *
     * Returns the result set as an object
     *
     * @param    string    $class_name
     * @return    object
     */
    protected function _fetch_object($class_name = 'stdClass')
    {
        return $this->result_id->fetchObject($class_name);
    }

    protected function checkzeropoint()
    {
        // get INI file
        $parsed_ini = parse_ini_file(APPPATH . INI_FILE);

        // get Session data of Company info, and get salt
        foreach ($_SESSION["modular"] as $get) {
            $_address = $get->address;
            $_area = $get->area;
            $_city = $get->city;
            $_compname = $get->compname;
            $_contact = $get->contact;
            $_createdon = $get->created_on;
            $_dbstatus = $get->dbstatus;
            $_email = $get->email;
            $_id = $get->id;
            $_name = $get->name;
            $_pin = $get->pin;
            $_state = $get->state;
            $_status = $get->status;
            $_website = $get->website;
        }
        if (($parsed_ini['Name'] !== $_name) ||
            ($parsed_ini['Company Name'] !== $_compname) ||
            ($parsed_ini['Address'] !== $_address) ||
            ($parsed_ini['Area'] !== $_area) ||
            ($parsed_ini['City'] !== $_city) ||
            ($parsed_ini['State'] !== $_state) ||
            ($parsed_ini['Pin'] !== $_pin) ||
            ($parsed_ini['URL'] !== $_website) ||
            ($parsed_ini['email'] !== $_email) ||
            ($parsed_ini['contact'] !== $_contact)) {
            return false;
        }

        $strvalue = $_name . $_compname . $_address . $_area . $_city . $_state . $_pin . $_website . $_email . $_contact;
        $salt1 = $this->getString($strvalue, 1);
        $salt2 = $this->getString($strvalue, 0);

        // compare salt with ini value
        //$verifiedPassword = $_status ? password_verify(htmlspecialchars(strip_tags($salt1), $_status)) : false;
        $verifiedPassword = password_verify(htmlspecialchars(strip_tags($salt1)), $_status);

        if ($verifiedPassword) {
            //$verifiedPassword = $_dbstatus ? password_verify(set_value($salt2), $_dbstatus) : false;
            $verifiedPassword = password_verify(htmlspecialchars(strip_tags($salt1)), $_status);

            return $verifiedPassword;
        } else {
            return $verifiedPassword;
        }
    }

    public function getString($strvalue, $rem)
    {
        $retstr = "";
        for ($i = 0; $i < strLen($strvalue); $i++) {
            if (fmod($i, 2) == $rem) {
                if (substr($strvalue, $i, 1) != " ") {
                    $retstr = $retstr . substr($strvalue, $i, 1);
                }
            }
        }
        return $retstr;
    }
}
