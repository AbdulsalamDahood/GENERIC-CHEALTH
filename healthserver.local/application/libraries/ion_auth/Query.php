<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Query 
    {

        private $CI; 

        function __construct() {
            $this->CI = & get_instance();
        }


        /*
        ********************************************************************************************
        ****************************************** FETCH DATA **************************************
        ********************************************************************************************
        */
        function get_all($tablename)
        {
            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->get_all($tablename);
            return $query;
        }

        function get_with_order_by($order_by,$order_by_style,$tablename)
        {
            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->get_with_order_by($order_by,$order_by_style,$tablename);
            return $query;
        }


        function get_with_limit($limit, $offset,$tablename) 
        {
            if ((!is_numeric($limit)) || (!is_numeric($offset))) {
                die('Non-numeric variable!');
            }

            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->get_with_limit($limit, $offset,$tablename);
            return $query;
        }


        function get_with_limit_and_order_by($limit, $offset, $order_by,$order_by_style,$tablename) 
        {
            if ((!is_numeric($limit)) || (!is_numeric($offset))) {
                die('Non-numeric variable!');
            }

            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->get_with_limit($limit, $offset, $order_by,$order_by_style,$tablename);
            return $query;
        }
        /*
        ********************************************************************************************
        ********************************** FETCH USING EXPRESSION WITH *****************************
        ********************************************************************************************
        */
        function get_where($where,$tablename)
        {
            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->get_where($where,$tablename);
            return $query;
        }

        function get_where_with_order_by($where,$order_by,$order_by_style,$tablename) 
        {
            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->get_where_with_order_by($where,$order_by,$order_by_style,$tablename);
            return $query;
        }

        function get_where_with_limit($where,$limit,$offset,$tablename) 
        {   
            if ((!is_numeric($limit)) || (!is_numeric($offset))) {
                die('Non-numeric variable!');
            }

            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->get_where_with_limit($where,$limit,$offset,$tablename);
            return $query;
        }

        function get_where_with_limit_and_order_by($where,$limit,$offset,$order_by,$order_by_style,$tablename)
        {   
            if ((!is_numeric($limit)) || (!is_numeric($offset))) {
                die('Non-numeric variable!');
            }

            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->get_where_with_limit_and_order_by($where,$limit,$offset,$order_by,$order_by_style,$tablename);
            return $query;
        }
        /*
        ********************************************************************************************
        ********************************** FETCH USING EXPRESSION WITH OR **************************
        ********************************************************************************************
        */
        function get_where_with_or($where,$or,$tablename)
        {
            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->get_where_with_or($where,$or,$tablename);
            return $query;
        }

        function get_where_with_or_and_order_by($where,$or,$order_by,$order_by_style,$tablename) 
        {
            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->get_where_with_order_by($where,$order_by,$order_by_style,$tablename);
            return $query;
        }

        function get_where_with_or_with_limit($where,$or,$limit,$offset,$tablename) 
        {   
            if ((!is_numeric($limit)) || (!is_numeric($offset))) {
                die('Non-numeric variable!');
            }

            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->get_where_with_or_with_limit($where,$or,$limit,$offset,$tablename);
            return $query;
        }

        function get_where_with_or_with_limit_and_order_by($where,$or,$limit,$offset,$order_by,$order_by_style,$tablename)
        {   
            if ((!is_numeric($limit)) || (!is_numeric($offset))) {
                die('Non-numeric variable!');
            }
            
            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->get_where_with_or_with_limit_and_order_by($where,$or,$limit,$offset,$order_by,$order_by_style,$tablename);
            return $query;
        }
        /*
        ************************************************************************************************
        ************************************************************************************************
        */
        function insert($data,$tablename)
        {
            $this->CI->load->model('ion_auth/main_model');
            if($this->CI->main_model->_insert($data,$tablename)){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        function update($where, $data,$tablename)
        {
            $this->CI->load->model('ion_auth/main_model');
            if($this->CI->main_model->_update($where, $data,$tablename)){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        function delete($where,$tablename)
        {
            $this->CI->load->model('ion_auth/main_model');
            if($this->CI->main_model->_delete($where,$tablename)){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        function count_where($where,$tablename) 
        {
            $this->CI->load->model('ion_auth/main_model');
            $count = $this->CI->main_model->count_where($where,$tablename);
            return $count;
        }

        function count_all($tablename) 
        {
            $this->CI->load->model('ion_auth/main_model');
            $count_all = $this->CI->main_model->count_all($tablename);
            return $count_all;
        }

        function get_max($tablename) 
        {
            $this->CI->load->model('ion_auth/main_model');
            $max_id = $this->CI->main_model->get_max($tablename);
            return $max_id;
        }

        function custom_query($mysql_query,$data) 
        {
            $this->CI->load->model('ion_auth/main_model');
            $query = $this->CI->main_model->_custom_query($mysql_query,$data);
            return $query;
        }

    }