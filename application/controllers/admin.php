<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('Buliding_model');
		$this->load->model('Welcome_model');
		$this->load->model('Advertiser_model');
		$this->load->model('Information_model');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->model('File_model');	
	}
	
	function quit()
	{
		$this->session->sess_destroy();
		header('refresh:0; url='.base_url());
	}
	
	function head() 
	{
		$this->load->view('admin/head_view');
	}
	
	function left_menu() 
	{
  		$this->load->view('admin/left_menu_view');
	}
	
	function main() 
	{
		$this->load->view('admin/main_view');
	}
	
	function other() 
	{
		$this->load->view('admin/other_view');
	}
	
	function index()
	{
		$data['username']=$this->session->userdata('username');
		$this->load->view('admin/admin_view',$data);
	}
	
	function buliding_manage()
	{
		$data['buliding_list']=$this->Buliding_model->buliding_list();
		$this->load->view('admin/buliding_manage_view',$data);
	}
	 
	function add_buliding()
	{
		$flag=$this->Buliding_model->add();
		if($flag)
		{
			$data['buliding_list']=$this->Buliding_model->buliding_list();
			$this->load->view('admin/buliding_manage_view',$data);
		}
	}
	
	function del_buliding($id)
	{
		if($this->Buliding_model->del($id))
		{
			$data['buliding_list']=$this->Buliding_model->buliding_list();
			$this->load->view('admin/buliding_manage_view',$data);
		}
	}
	
	function floor_manage($id)
	{
		$data['parent_id']=$id;
		$data['buliding_list']=$this->Buliding_model->buliding_list();
		$this->load->view('admin/floor_manage_view',$data);
	}
	
	function add_floor()
	{
		$flag=$this->Buliding_model->add();
		if($flag)
		{
			$data['parent_id']=$this->input->post('parent_id');
			$data['buliding_list']=$this->Buliding_model->buliding_list();
			$this->load->view('admin/floor_manage_view',$data);
		}
	}
	
	function del_floor($id,$parent_id)
	{
		if($this->Buliding_model->del($id))
		{
			$data['parent_id']=$parent_id;
			$data['buliding_list']=$this->Buliding_model->buliding_list();
			$this->load->view('admin/floor_manage_view',$data);
		}
	}
	
	function house_manage($id)
	{
		$data['parent_id']=$id;
		$data['buliding_list']=$this->Buliding_model->buliding_list();
		$this->load->view('admin/house_manage_view',$data);
	}
	
	function add_house()
	{
		$flag=$this->Buliding_model->add();
		if($flag)
		{
			$data['parent_id']=$this->input->post('parent_id');
			$data['buliding_list']=$this->Buliding_model->buliding_list();
			$this->load->view('admin/house_manage_view',$data);
		}
	}
	
	function del_house($id,$parent_id)
	{
		if($this->Buliding_model->del($id))
		{
			$data['parent_id']=$parent_id;
			$data['buliding_list']=$this->Buliding_model->buliding_list();
			$this->load->view('admin/house_manage_view',$data);
		}
	}
	
	function add_advertiser()
	{
		$data['location']=$this->Welcome_model->show_location();
		$this->load->view('admin/add_advertiser_view',$data);
	}
	
	function add_advertiser_action()
	{
		if($new_id=$this->Advertiser_model->add_advertiser())
		{
			$this->list_advertiser();
		}
	}
	
	function list_advertiser($offset='')
	{
		$config['base_url'] = site_url('admin/list_advertiser/');
		$config['total_rows'] = $this->Advertiser_model->count_advertiser();
		$config['per_page'] = '10';
		$config['use_page_numbers']=TRUE;
		$config['next_link'] = '下一页'; 
		$config['prev_link'] = '上一页';		
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['num_links'] = '2';	//放在当前页码的前面和后面的数字链接的数量
		$this->pagination->initialize($config); 		
		$limit = 10;
		
		$data['pagination'] = $this->pagination->creination ;
		$data['total_rows']=$this->Advertiser_model->count_advertiser();
		$data['advertiser']=$this->Advertiser_model->show_limit_advertiser($limit,$offset);
		$this->load->view('admin/list_advertiser_view',$data);
	}
	
	function show_advertiser($id='0')
	{
		if($id=='0')
		{
			$this->load->view('error_404_view');
		}
		else
		{
			$data['row']=$this->Advertiser_model->show_advertiser($id);
			if ($data['row']=='0') 
			{
				$this->load->view('error_404_view');
			}
			else
			{
				$this->load->view('admin/show_advertiser_view',$data);
			}
		}
	}
	
	function edit_advertiser($id='0'){
		if($id=='0')
		{
			$this->load->view('error_404_view');
		}
		else 
		{
			$data['location_id']=$id;
			$data['advertiser']=$this->Advertiser_model->show_advertiser($id);
			$this->load->view('admin/edit_advertiser_view',$data);
		}
	}
	
	function edit_advertiser_action()
	{
		if($this->Advertiser_model->update_advertiser())
		{
			header('refresh:0; url='.site_url('admin/edit_advertiser/'.$this->input->post('location_id')));
		}
	}
	
	function del_advertiser($id='0')
	{
		if($id=='0')
		{
			$this->load->view('error_404_view');
		}
		else 
		{
			if($this->Advertiser_model->del_advertiser($id))
			{
				header('refresh:0; url='.site_url('admin/list_advertiser'));
			}
		}
	}
	
	function list_friendlink()
	{
		$data['link']=$this->Admin_model->list_friendlink();
		$this->load->view('admin/list_friendlink_view',$data);
	}
	
	function add_friendlink()
	{
		$this->load->view('admin/add_friendlink_view');
	}
	
	function add_friendlink_action() {
		if($this->Admin_model->add_friendlink())
		{
			$this->list_friendlink();
		}else {
			$this->load->view('error_404_view');
		}
	}
	
	function del_friendlink($id='0')
	{
		if($this->Admin_model->del_friendlink($id))
		{
			$this->list_friendlink();
		}else {
			echo "删除失败";
		}
	}
	
	function edit_friendlink($id='0')
	{
		if($data['link']=$this->Admin_model->get_link($id))
		{
			$this->load->view('admin/edit_friendlink_view',$data);
		}else {
			echo '读取出错';
		}
		
	}
	
	function edit_friendlink_action($id='0')
	{
		if($this->Admin_model->edit_friendlink($id))
		{
			$this->list_friendlink();
		}else
		{
			echo '读取出错';
		}
	}
	
	function edit_manage($id='0')
	 {
		if($data['query']=$this->Admin_model->get_buliding($id))
		{
			$this->load->view('admin/edit_manage_view',$data);
		}
		
	}
	
	function edit_manage_action() 
	{
		if($this->Admin_model->edit_buliding())
		{
			$this->buliding_manage();
		}
		
	}
	function get_time()
	{
		$year=date("Y");
		$month=date("m");
		$day=date("d");
		$hour=date("H");
		$minute=date("i");
		$time=array(
			'year' => $year,
			'month' => $month,
			'day' => $day,
			'hour' => $hour,
			'minute' => $minute
		);
		return $time;
	}
	
	function add_intelligence()
	{	
		$data['time'] = $this->get_time();
		$data['table'] = 'intelligence';
		$this->load->view('admin/add_intelligence_news_view',$data);	
	}
	function add_news() 
	{
		$data['time'] = $this->get_time();
		$data['table'] = 'news';
		$this->load->view('admin/add_intelligence_news_view',$data);;
	}
	function add_intelligence_news_action($table='') {
		if($this->Information_model->add_information($table))
		{
			if('intelligence'==$table)
			{
				$this->list_intelligence();
			}else 
			{
				$this->list_news();
			}
		}else 
		{
			echo 'ERROE:未插入数据库！';
		}
	}
	function list_intelligence($offset='')
	{
		$config['base_url'] = site_url('admin/list_intelligence/');
		$config['total_rows'] = $this->Information_model->count_intelligence();
		$config['per_page'] = '15';
		$config['use_page_numbers']=TRUE;
		$config['next_link'] = '下一页'; 
		$config['prev_link'] = '上一页';		
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['num_links'] = '2';	//放在当前页码的前面和后面的数字链接的数量
		$this->pagination->initialize($config); 		
		$limit = 15;
		
		$data['pagination'] = $this->pagination->create_links();
		$data['title_tag']='intelligence';
		$data['title']='谍报';
		$data['information']=$this->Information_model->show_limit_intelligence($limit,$offset);
		$this->load->view('admin/list_information_view',$data);
	}
	function list_news($offset='')
	{
		$config['base_url'] = site_url('admin/list_news/');
		$config['total_rows'] = $this->Information_model->count_news();
		$config['per_page'] = '15';
		$config['use_page_numbers']=TRUE;
		$config['next_link'] = '下一页'; 
		$config['prev_link'] = '上一页';		
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['num_links'] = '2';	//放在当前页码的前面和后面的数字链接的数量
		$this->pagination->initialize($config); 		
		$limit = 15;
		
		$data['pagination'] = $this->pagination->create_links();
		$data['title_tag']='news';
		$data['title']='新闻';
		$data['information']=$this->Information_model->show_limit_news($limit,$offset);
		$this->load->view('admin/list_information_view',$data);
	}
	
	function edit_information_statue($tag='',$id='')
	{
		if($tag=='' || $id=='')
		{
			echo '出错了_1';
		}else 
		{
			if($this->Information_model->update_statue($tag,$id))
			{
				if('intelligence'==$tag)
				{
					$this->list_intelligence();
				}else if('news'==$tag)
				{
					$this->list_news();
				}else {
					echo '出错了_2';
				}
			}else 
			{
				echo '出错了_3';
			}
		}
	}
	function del_information($table='',$id='') {
		if($table != '' || $id != '')
		{
			if($this->Information_model->del_information($table,$id))
			{
				if('intelligence' == $table)
				{
					$this->list_intelligence();
				}else if('news' == $table)
				{
					$this->list_news();
				}
			}
		}else 
		{
			echo 'tag或者id为空！';
		}
		
	}
	function edit_information($table='',$id='') {
		if($table != '' || $id != '')
		{
			$information=$this->Information_model->get_information($table,$id);
			$data=array(
				'information' => $information->row_array(),
				'time' => $this->get_time(),
				'table' => $table,
				'id' => $id
			);
			$this->load->view('admin/edit_information_view',$data);
		}else 
		{
			echo 'tag或者id为空！';
		}
	}
	
	function edit_information_action($table='',$id='') {
		if($table != '' || $id != '')
		{
			$time=$this->get_time();
			if($this->Information_model->update_information($table,$id))
			{
				if('intelligence' == $table)
				{
					$this->list_intelligence();
				}else if('news' == $table)
				{
					$this->list_news();
				}
			}
		}else 
		{
			echo 'tag或者id为空！';
		}
	}
	function add_excel_advertiser() {
		$this->load->view('admin/add_excel_advertiser_view');
	}
	function add_excel_advertiser_action() {
		$this->Advertiser_model->add_excel_advertiser();
	}
}


/* End of file admin.php */
/* Location: ./application/controllers/admin.php */