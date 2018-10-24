<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Main_model extends CI_Model
    {

        function __construct() {
        parent::__construct();
        }
        /*
        *
        */
        function get_table() {
            return "site_session";
        }


        /*
        ********************************************************************************************
        ****************************************** FETCH DATA **************************************
        ********************************************************************************************
        */
        function get_all($table = ""){
            $table = ($table == "") ? $this->get_table() : $table ;
            $query=$this->db->get($table);
            return $query;
        }

        function get_with_order_by($order_by,$order_by_style,$table = ""){
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->order_by($order_by,$order_by_style);
            $query=$this->db->get($table);
            return $query;
        }

        function get_with_limit($limit, $offset,$table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->limit($limit, $offset);
            $query=$this->db->get($table);
            return $query;
        }

        function get_with_limit_and_order_by($limit, $offset, $order_by,$order_by_style,$table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->limit($limit, $offset);
            $this->db->order_by($order_by,$order_by_style);
            $query=$this->db->get($table);
            return $query;
        }


        /*
        ********************************************************************************************
        ********************************** FETCH USING EXPRESSION WITH *****************************
        ********************************************************************************************
        */
        function get_where($where,$table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->where($where);
            $query=$this->db->get($table);
            return $query;
        }

        function get_where_with_order_by($where,$order_by,$order_by_style,$table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->where($where);
            $this->db->order_by($order_by,$order_by_style);
            $query=$this->db->get($table);
            return $query;
        }

        function get_where_with_limit($where,$limit,$offset,$table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->where($where);
            $this->db->limit($limit, $offset);
            $query=$this->db->get($table);
            return $query;
        }

        function get_where_with_limit_and_order_by($where,$limit,$offset,$order_by,$order_by_style,$table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->where($where);
            $this->db->limit($limit, $offset);
            $this->db->order_by($order_by,$order_by_style);
            $query=$this->db->get($table);
            return $query;
        }
        

        /*
        ********************************************************************************************
        ********************************** FETCH USING EXPRESSION WITH OR **************************
        ********************************************************************************************
        */
        function get_where_with_or($where,$or,$table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->where($where);
            $this->db->or_where($or);
            $query=$this->db->get($table);
            return $query;
        }

        function get_where_with_or_and_order_by($where,$or,$order_by,$order_by_style,$table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->where($where);
            $this->db->or_where($or);
            $this->db->order_by($order_by,$order_by_style);
            $query=$this->db->get($table);
            return $query;
        }

        function get_where_with_or_with_limit($where,$or,$limit,$offset,$table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->where($where);
            $this->db->or_where($or);
            $this->db->limit($limit, $offset);
            $query=$this->db->get($table);
            return $query;
        }

        function get_where_with_or_with_limit_and_order_by($where,$or,$limit,$offset,$order_by,$order_by_style,$table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->where($where);
            $this->db->or_where($or);
            $this->db->limit($limit, $offset);
            $this->db->order_by($order_by,$order_by_style);
            $query=$this->db->get($table);
            return $query;
        }


        /*
        *
        */
        function _insert($data,$table = ""){
            $table = ($table == "") ? $this->get_table() : $table ;
            
            if($this->db->insert($table, $data)){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        function _update($where, $data,$table = ""){
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->where($where);
            if($this->db->update($table, $data)){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        function _delete($where,$table = ""){
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->where($where);
            if($this->db->delete($table)){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        function count_where($where,$table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->where($where);
            $query=$this->db->get($table);
            $num_rows = $query->num_rows();
            return $num_rows;
        }

        function count_all($table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $query=$this->db->get($table);
            $num_rows = $query->num_rows();
            return $num_rows;
        }

        function get_max($table = "") {
            $table = ($table == "") ? $this->get_table() : $table ;
            $this->db->select_max('id');
            $query = $this->db->get($table);
            $row=$query->row();
            $id=$row->id;
            return $id;
        }

        function _custom_query($mysql_query,$data) {
            $query = $this->db->query($mysql_query);
            $this->db->query($mysql_query, $data);
            return $query;
        }

    }