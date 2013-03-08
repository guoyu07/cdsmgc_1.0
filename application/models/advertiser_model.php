<?php
class Advertiser_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function show_advertiser($id,$table='advertiser') 
	{ 
		$query=$this->db->get_where($table,array('location_id'=>$id));
		if($query->num_rows()=='1')
		{
			$row=$query->row_array();
			return $row; 
		}
		else
		{
			return 0;
		}
	}
	
	function show_limit_advertiser($limit,$offset,$table='advertiser') 
	{ 
		if(! $limit)
		{
			$query=$this->db->get($table);
		} 
		else 
		{
			$this->db->limit($limit,$offset);
			$query=$this->db->get($table);
		}
		return $query;
	}
	
	function show_all_advertiser($table='advertiser') 
	{ 
		$query=$this->db->get($table);
		return $query;
	}
	
	function count_advertiser($table='advertiser')
	{
		$query=$this->db->get($table);
		return $query->num_rows();
	}
	
	function add_advertiser($table='advertiser')
	{
		$location_id=$this->input->post('s3');
		$data=array(
			'location_id' => trim($this->input->post('s3')),
			'name' => trim($this->input->post('name')),
			'business' => trim($this->input->post('business')),
			'linkman' => trim($this->input->post('linkman')),
			'qq' => trim($this->input->post('qq')),
			'website' => trim($this->input->post('website')),
			'scale' => trim($this->input->post('scale')),
			'open_time' => trim($this->input->post('open_time')),
			'phone' => trim($this->input->post('phone'))
		);
		$this->db->where('location_id',$location_id);
		$query=$this->db->get($table);
		if($query->num_rows()=='0')
		{
			if($this->db->insert($table,$data))
			{
				$new_id_number = $this->db->insert_id();
			}
			else
			{
				$new_id_number=0;
			}
		} 
		else
		{
			$new_id_number=0;
			echo  '此位置已有商家！';
		}
		return $new_id_number;
	}
	
	function show_parent($id,$table='location')
	{
		$array= array();
		$query=$this->db->get($table);
		foreach ($query->result_array() as $row)
		{
			if($row['id']==$id)
			{
				$array[0]=$row['name'];
				foreach($query->result_array() as $row1)
				{
					if($row1['id']==$row['parent_id'])
					{
						$array[1]=$row1['name'];
						foreach($query->result_array() as $row2)
						{
							if ($row2['id']==$row1['parent_id'])
							{
								$array[2]=$row2['name'];
							}
						}
					}
				}
			}
		}
		return $array;
	}
	
	function update_advertiser($table='advertiser')
	{
		$data=array(
			'location_id' => trim($this->input->post('location_id')),
			'name' => trim($this->input->post('name')),
			'business' => trim($this->input->post('business')),
			'linkman' => trim($this->input->post('linkman')),
			'qq' => trim($this->input->post('qq')),
			'website' => trim($this->input->post('website')),
			'scale' => trim($this->input->post('scale')),
			'open_time' => trim($this->input->post('open_time')),
			'phone' => trim($this->input->post('phone'))
		);
		$this->db->where('location_id',$this->input->post('location_id'));
		return $this->db->update($table,$data);
	}
	
	function del_advertiser($id='0',$table='advertiser')
	{
		$this->db->where('location_id',$id);
		return $this->db->delete($table);
	}
	
	function separate($value)
	{
		$array=explode(';',$value);
		return $array;
	}
	function get_img($id='0',$table='advertiser_img')
	{
		$img=array();
		$this->db->select('img');
		$this->db->where('advertiser_id',$id);
		$this->db->where('img_type','thumb');
		$result=$this->db->get($table);
		$i=0;
		foreach ($result->result_array() as $row)
		{
			$img[$i]=$row['img'];
			$i++;
		}
		return $img;
	}
	function add_excel_advertiser() 
	{
		$path=base_url().'upload/excel/';
		if ($_FILES["upfile"]["type"] == "application/vnd.ms-excel")
 		{
  			if ($_FILES["upfile"]["error"] > 0)
    		{
    			echo "Return Code: " . $_FILES["upfile"]["error"] . "<br />";
    		}
  			else
    		{
    			echo "Upload: " . $_FILES["upfile"]["name"] . "<br />";
    			echo "Type: " . $_FILES["upfile"]["type"] . "<br />";
    			echo "Size: " . ($_FILES["upfile"]["size"] / 1024) . " Kb<br />";
    			echo "Temp file: " . $_FILES["upfile"]["tmp_name"] . "<br />";
    			if (file_exists($path . $_FILES["upfile"]["name"]))
      			{
      				echo $_FILES["upfile"]["name"] . " already exists. ";
      			}
    			else
      			{
      				move_uploaded_file($_FILES["upfile"]["tmp_name"],$path . $_FILES["upfile"]["name"]);
      				echo "Stored in: " . $path . $_FILES["upfile"]["name"];
      			}
    		}
  		}
		else
  		{
  			echo "Invalid file";
	  	}
	}
}


/* End of file advertiser_model.php */
/* Location: ./application/models/advertiser_model.php */