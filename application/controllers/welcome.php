<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct() 
	{
		parent::__construct();
		header('Content-Type: text/html; charset=utf-8');	//设置全局编码
		$this->load->model('Welcome_model');
		$this->load->model('Advertiser_model');
		$this->load->model('Search_model');
		$this->load->model('Information_model');
		$this->load->model('Admin_model');
		$this->load->library('session');
		$this->load->library('new_pagination');
	}
	
	
	function head_left_view()
	{
		$data['location']=$this->Welcome_model->show_location();
		
		$this->load->view('index/header_view',$data);
		$this->load->view('index/left_view');
	}
	
	function right_foot_view()
	{
		$data['friendlink']=$this->Welcome_model->get_friendlink();
		$this->load->view('index/right_view');
      	$this->load->view('index/footer_view',$data);
	}

	public function index()
	{
		$this->head_left_view();
		$this->load->view('index/content_view');
		$this->right_foot_view();
	//	$this->output->enable_profiler(TRUE);
	}
	function search_action($offset='') {
		$keywords = $this->session->userdata('keywords');
		$total_rows=$this->Search_model->count_search($keywords);
		$config['base_url'] = site_url('welcome/search_action/');
		$config['total_rows'] = $total_rows;
		$config['use_page_numbers']=TRUE;
		$config['per_page'] = '15';
		$config['next_link'] = '下一页'; 
		$config['prev_link'] = '上一页';		
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['num_links'] = '2';	//放在当前页码的前面和后面的数字链接的数量
		$this->new_pagination->initialize($config); 
		$limit = 15;
		
		$data['pagination'] = $this->new_pagination->create_links();
		$data['total_rows']	= $total_rows;
		$data['advertiser']=$this->Search_model->search_action(urldecode($keywords),$limit,$offset);

		if($total_rows=='0')
		{	
			$this->load->view('error_404_content_view');
		}
		else
		{	$data['key']=urldecode($keywords);
			$data['total'] = $total_rows;
			$this->session->set_userdata('keywords', $keywords);
			$this->load->view('list_result_view',$data);	
		}
	}
	function search($key_words='')
	{
		$this->session->set_userdata('keywords', $key_words);
		$this->search_action();
		
	}

	
	
	function login_check()
	{
		if($this->Admin_model->login_check())
		{
			$session['is_login']=TRUE;
			$session['username']=$this->input->post('username');
			header('refresh:0; url='.site_url('admin'));
			$this->session->set_userdata($session);
		}
		else
		{
			header('refresh:0; url='.site_url('welcome/login'));
		}
	}
	
	function login()
	{
		$this->load->view('admin/login_view');
	}
	
	function advertiser($id='0')
	{
		if($id=='0')
		{
			$this->load->view('error_404_content_view');
		}
		else
		{
			$data['row']=$this->Advertiser_model->show_advertiser($id);
			if ($data['row']=='0') 
			{	
				$this->load->view('error_404_content_view');			
			}
			else
			{
				$this->load->view('advertiser_view',$data);
			}
		}
	}
	
	function information($tag='')
	{
		if($tag != '')
		{
			if($information=$this->Information_model->get_all_information($tag))
			{
				$data['information']=$information;
				$data['tag']=$tag;
				$this->load->view('index/header_view',$data);
				$this->load->view('index/left_information_view');
				$this->load->view('index/list_information_view');
				$this->right_foot_view();
			}else 
			{
				$this->load->view('error_404_view');
			}
		}else 
		{
			$this->load->view('error_404_view');
		}
	}
	function show_information($table='',$id='') {
		
		if($information=$this->Information_model->get_all_information($table))
		{
			$data['id']=$id;
			$data['tag']=$table;
			$data['information']=$information;
			$this->load->view('index/header_view',$data);
			$this->load->view('index/left_information_view');
			$this->load->view('show_information_view');
			$this->right_foot_view();
		}else 
		{
			$this->load->view('error_404_view');
		}
	}
	function get_date_information($table='',$year='',$month='') {
		if($table != '' || $year >0 || $month>0)
		{
			$information_date=$this->Information_model->get_date_information($table,$year,$month);
		}
		if($information=$this->Information_model->get_all_information($table))
		{
			$data['tag']=$table;
			$data['information']=$information;
			$data['information_date']=$information_date;
			$this->load->view('index/header_view',$data);
			$this->load->view('index/left_information_view');
			$this->load->view('show_information_date_view');
			$this->right_foot_view();
		}else 
		{
			$this->load->view('error_404_view');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */