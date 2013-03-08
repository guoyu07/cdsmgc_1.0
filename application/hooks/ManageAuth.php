<?php 
class ManageAuth {    
	private $CI;            
	public function __construct() {        
		$this->CI = &get_instance();     
	}            
	/**     * 权限认证     */    
	public function auth() {        
		$this->CI->load->helper('url');        
		if ( preg_match("/admin.*/i", uri_string()) ) {                  
			$this->CI->load->library('session');            
			if( !$this->CI->session->userdata('username') ) {        // 用户未登陆                
				redirect('welcome/login');                
				return;            
			}        
		}            
	}        
}

?>
