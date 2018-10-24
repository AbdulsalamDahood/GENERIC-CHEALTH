<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Secure_session 
    {

        private $CI;
        private $session_name;

        function __construct() {
            $this->CI = & get_instance();
            $this->CI->load->library(array('user_agent'));
            $this->CI->load->helper('string');
             $this->CI->load->model('ion_auth/main_model');
            $this->session_name = $this->CI->config->item("app_session_name" , "ion_auth");
        }

        function getSessionName(){
            return $this->session_name;
        }



        function validateSessionString(){
            $numrows = TRUE;

            while($numrows){
                $userSession = random_string('alnum',32);
                $where = array("user_session" => $userSession);
                $numrows = ($this->count_where($where , "site_session") != 0) ? TRUE : FALSE;
                
            }
            return $userSession;
        }
        /*
        ******************************************************************************************
        **************************** Setting And Destroying Cookie *******************************
        ******************************************************************************************
        */
        function setSiteCookie($name , $value){
            $cookie = array(
                "name" => $name,
                "value" => $value,
                "expire" => $this->CI->config->item("app_session_expiry" , "ion_auth"),
                "path" => "/",
                "secure"=>TRUE,
                "httponly"=>FALSE,
            );

            $this->CI->load->helper("cookie");
            return ( setcookie($cookie['name'] , $cookie['value'] , $cookie['expire'] , $cookie['path']) ) ? TRUE : FALSE ;
        }


        function destroySiteCookie(){
            $cookie = array(
                "name" => $this->session_name,
                "value" =>"",
                "expire" => time()-3600,
                "path" => "/",
                "secure"=>TRUE,
                "httponly"=>FALSE,
            );

            $this->CI->load->helper("cookie");
            return ( setcookie($cookie['name'] , $cookie['value'] , $cookie['expire'] , $cookie['path']) ) ? TRUE : FALSE ;
        }
        /*
        ******************************************************************************************************
        **************************** Setting And Destroying Cookie And Session *******************************
        ******************************************************************************************************
        */
        function createSession($userSession , $session_type){
            
            if($session_type == "session"){

                $this->CI->session->set_userdata(array($this->session_name => $userSession));

               

               return (($this->CI->session->has_userdata($this->session_name)) ? TRUE : FALSE );
                
            }else{
                
                return ($this->setSiteCookie($this->session_name , $userSession)) ? TRUE : FALSE ;
            }
        }


        function destroySession(){
            if( isset($_COOKIE[$this->session_name]) ){
                //Deleting Cookie
                return ($this->destroySiteCookie()) ? TRUE : FALSE ;
            }else{
                //Deleting session
                return ($this->CI->session->unset_userdata($this->session_name)) ? TRUE : FALSE ;
                //return TRUE;
            }
        }
        /*
        ******************************************************************************************************
        ********************* Ending Setting And Destroying Cookie And Session *******************************
        ******************************************************************************************************
        */
        /*
        ***********************************************************************************************************
        **************************** Setting And Destroying Cookie And Session Data *******************************
        ***********************************************************************************************************
        */
        public function createSessionData($userId , $session_type ="session")
        {

            
            

            $userId = $userId;
            $userSession = $this->validateSessionString();
            $userOsPlatform = $this->CI->agent->platform();
            $userBrowser = $this->CI->agent->browser();
            $userIpAddress = $this->CI->input->ip_address();
            
            $this->destroySessionData($userId);

            $data = array(
                        "user_id" => $userId,
                        "user_session" => $userSession,
                        "session_type" => $session_type,
                        "user_os_platform" => $userOsPlatform,
                        "user_browser" => $userBrowser,
                        "user_ip_address" => $userIpAddress
                    );

                    
                    
            if($this->createSession($userSession , $session_type)){
                //Inserting into db Session or Cookie
                 

                return ($this->insert($data , "site_session")) ? TRUE : FALSE ;
                
            }else{
                return FALSE;
            }
           
        }


        public function updateSessionData($userId)
        {
            $session_type = (isset($_COOKIE[$this->session_name])) ? "cookie" : "session" ;
            $userId = $userId;
            $userSession = $this->validateSessionString();
            $userOsPlatform = $this->CI->agent->platform();
            $userBrowser = $this->CI->agent->browser();
            $userIpAddress = $this->CI->input->ip_address();
            
            $data = array(
                        "user_id" => $userId,
                        "user_session" => $userSession,
                        "session_type" => $session_type,
                        "user_os_platform" => $userOsPlatform,
                        "user_browser" => $userBrowser,
                        "user_ip_address" => $userIpAddress
                    );

            $where = array("user_id"=>$userId);
                    
            if($this->createSession($userSession , $session_type)){
                //Updating into db Session or Cookie
                return ($this->update($where,$data, "site_session")) ? TRUE : FALSE ;
                
            }else{
                return FALSE;
            }
        }

        public function destroySessionData($userId,$redirect="false")
        {
            $where = array("user_id"=>$userId);
            $this->destroySession();
            if($this->delete($where , "site_session")){
                // if($redirect == "true"){
                //     $this->CI->redirect_page->page("admin/login");
                // }else{
                //     return TRUE;
                // }              
            }else{
                return FALSE;
            }
        }


        function fetchSessionData()
        {

            if($this->CI->session->has_userdata($this->session_name)){

                $session_value = $this->CI->session->userdata($this->session_name);
            }
            else{

                $session_value = $_COOKIE[$this->session_name];
            }

           // echo "<script>alert(".$this->CI->session->userdata($this->session_name).")</script>";

            $data = array("user_session" => $session_value );

            $query = $this->get_where_with_order_by($data,"session_timestamp","DESC","site_session");

            if($query->num_rows() < 1){
                //Some program to log user out if no row return and delete any session or cookie
                if(!isset($_COOKIE[$this->session_name])  ){
                    $this->destroySession();
                    return FALSE;
                }
            }
            
            $row = $query->row_array();

           return ($row);
        }


        public function validateSessionData($userId)
        {
            $userId = $userId;
            $userOsPlatform = $this->CI->agent->platform();
            $userBrowser = $this->CI->agent->browser();
            $userIpAddress = $this->CI->input->ip_address();

            if($this->CI->session->has_userdata($this->session_name)){

                $user_session = $this->CI->session->userdata($this->session_name);
                $session_type = "session";
            }
            else{

                $user_session = $_COOKIE[$this->session_name];
                $session_type = "cookie";
            }
            
            // if( isset($_COOKIE[$this->session_name]) ){
            //     $user_session = $_COOKIE[$this->session_name];
            //     $session_type = "cookie";
            // }else{
            //     $s_name = $this->session_name;
            //     $user_session = $this->CI->session->s_name;
            //     $session_type = "session";
            // }

            $client_data = array(
                "user_id" => $userId,
                "user_session" => $user_session,
                "session_type" => $session_type,
                "user_os_platform" => $userOsPlatform,
                "user_browser" => $userBrowser,
                "user_ip_address" => $userIpAddress
            );

            if($this->fetchSessionData() != FALSE ){

                $db_data = $this->fetchSessionData();
            
                unset($db_data["session_timestamp"]);
                
                if($db_data == $client_data){

                    return ($this->updateSessionData($userId)) ? TRUE : FALSE ;

                }else{
                    $this->destroySessionData($userId);
                    return FALSE;
                }
            }else{
                return FALSE;
            }

            // $db_data["user_session"] == $client_data["user_session"] && $db_data["session_type"] == $client_data["session_type"] && 
            //     $db_data["user_os_platform"] == $client_data["user_os_platform"] && $db_data["user_browser"] == $client_data["user_browser"] && 
            //     $db_data["user_ip_address"] == $client_data["user_ip_address"] 

        }

        

































        /*
        ********************************************************************************************
        ****************************************** FETCH DATA **************************************
        ********************************************************************************************
        */
        function get_all($tablename)
        {
            $query = $this->CI->main_model->get_all($tablename);
            return $query;
        }

        function get_with_order_by($order_by,$order_by_style,$tablename)
        {
            $query = $this->CI->main_model->get_with_order_by($order_by,$order_by_style,$tablename);
            return $query;
        }


        function get_with_limit($limit, $offset,$tablename) 
        {
            if ((!is_numeric($limit)) || (!is_numeric($offset))) {
                die('Non-numeric variable!');
            }

            $query = $this->CI->main_model->get_with_limit($limit, $offset,$tablename);
            return $query;
        }


        function get_with_limit_and_order_by($limit, $offset, $order_by,$order_by_style,$tablename) 
        {
            if ((!is_numeric($limit)) || (!is_numeric($offset))) {
                die('Non-numeric variable!');
            }

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
            $query = $this->CI->main_model->get_where($where,$tablename);
            return $query;
        }

        function get_where_with_order_by($where,$order_by,$order_by_style,$tablename) 
        {
            $query = $this->CI->main_model->get_where_with_order_by($where,$order_by,$order_by_style,$tablename);
            return $query;
        }

        function get_where_with_limit($where,$limit,$offset,$tablename) 
        {   
            if ((!is_numeric($limit)) || (!is_numeric($offset))) {
                die('Non-numeric variable!');
            }

            $query = $this->CI->main_model->get_where_with_limit($where,$limit,$offset,$tablename);
            return $query;
        }

        function get_where_with_limit_and_order_by($where,$limit,$offset,$order_by,$order_by_style,$tablename)
        {   
            if ((!is_numeric($limit)) || (!is_numeric($offset))) {
                die('Non-numeric variable!');
            }

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
            $query = $this->CI->main_model->get_where_with_or($where,$or,$tablename);
            return $query;
        }

        function get_where_with_or_and_order_by($where,$or,$order_by,$order_by_style,$tablename) 
        {
            $query = $this->CI->main_model->get_where_with_order_by($where,$order_by,$order_by_style,$tablename);
            return $query;
        }

        function get_where_with_or_with_limit($where,$or,$limit,$offset,$tablename) 
        {   
            if ((!is_numeric($limit)) || (!is_numeric($offset))) {
                die('Non-numeric variable!');
            }

            $query = $this->CI->main_model->get_where_with_or_with_limit($where,$or,$limit,$offset,$tablename);
            return $query;
        }

        function get_where_with_or_with_limit_and_order_by($where,$or,$limit,$offset,$order_by,$order_by_style,$tablename)
        {   
            if ((!is_numeric($limit)) || (!is_numeric($offset))) {
                die('Non-numeric variable!');
            }
            
            $query = $this->CI->main_model->get_where_with_or_with_limit_and_order_by($where,$or,$limit,$offset,$order_by,$order_by_style,$tablename);
            return $query;
        }
        /*
        ************************************************************************************************
        ************************************************************************************************
        */
        function insert($data,$tablename)
        {
            if($this->CI->main_model->_insert($data,$tablename)){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        function update($where, $data,$tablename)
        {
            if($this->CI->main_model->_update($where, $data,$tablename)){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        function delete($where,$tablename)
        {
            if($this->CI->main_model->_delete($where,$tablename)){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        function count_where($where,$tablename) 
        {
            $count = $this->CI->main_model->count_where($where,$tablename);
            return $count;
        }

        function count_all($tablename) 
        {
            $count_all = $this->CI->main_model->count_all($tablename);
            return $count_all;
        }

        function get_max($tablename) 
        {
            $max_id = $this->CI->main_model->get_max($tablename);
            return $max_id;
        }

        function custom_query($mysql_query,$data) 
        {
            $query = $this->CI->main_model->_custom_query($mysql_query,$data);
            return $query;
        }
        

        

    }

