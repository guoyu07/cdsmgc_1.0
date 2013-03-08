<?php
class File_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		header('Content-Type: text/html; charset=utf-8');	
	}
	
	function upload_jpg()
	{
		$error=0;
		if ($_FILES['file']['error']>0) 
		{
			switch ($_FILES['userfile']['error']) 
			{
				case 1: $error='文件大小超出允许上传的大小';break;
				case 2: $error='文件大小超出上传的大小！';break;
				case 3: $error='文件没有全部上传成功！';break;
				case 4: $error='文件没有上传成功！';break;
				case 6: $error='不能上传文件：没有设置好缓存文件夹！';break;
				case 7: $error='上传失败：不能在磁盘上写入文件！';break;
			}
			exit;
		}
		if($_FILES["file"]["size"] > 60000)
		{
			$error='文件大小超过允许上传的大小！';
		}
		if(($_FILES["file"]["type"] != "image/jpeg")&&($_FILES["file"]["type"] != "image/pjpeg"))
		{
			$error='文件格式错误，只能上传jpg！';
			exit;
		}
		$upfile='uploads/'.date("YmdHis").'.jpg';
		if (is_uploaded_file($_FILES['file']['tmp_name']))    //判断指定的文件是否是通过 HTTP POST 上传
		{    
			if (!move_uploaded_file($_FILES['file']['tmp_name'], $upfile))   //将上传的文件移动到新位置
			{   
				$error='出现异常：不能将文件移动到指定文件夹！';
				exit;
			}
		}
		else 
		{
			$error='文件上传方式错误，可能遭受攻击！';
			exit;
		}
		return $error;
	}
	
	function upload($id)
	{
		$error=0;
		$watermark=1;   //是否附加水印(1为加水印,其他为不加水印);
		$watertype=1;   //水印类型(1为文字,2为图片)
		$waterposition=2;   //水印位置(1为左下角,2为右下角,3为左上角,4为右上角,5为居中);
		$waterstring="http://www.mzlhappy.com/"; //水印字符串
		$waterimg="xplore.gif";  //水印图片
		$uptypes=array('image/jpg',  //上传文件类型列表
 			'image/jpeg',
 			'image/png',
 			'image/jpeg',
 			'image/gif',
 			'image/bmp',
 			'image/pjpeg',
 			'image/x-png');  
		$max_file_size=20000000;   //上传文件大小限制, 单位BYTE
		$path_parts=pathinfo($_SERVER['PHP_SELF']); //取得当前路径
		$time=time();
		$destination_folder='uploads/'.date("Y",$time).'/'; //上传文件路径
		$destination_folder .=date("m",$time).'/source/'; //上传文件路径
		if(is_array($_FILES['upfile']))
		{	
			for($i=0;$i<count($_FILES['upfile']);$i++)
			{
				if ($_SERVER['REQUEST_METHOD'] == 'POST')
				{
					if (! is_uploaded_file($_FILES["upfile"]['tmp_name'][$i]))
					{
						// echo $_FILES["upfile"][tmp_name][$i];
						//echo "<font color='red'>文件不存在！</font>";
						$error='文件不存在！';
						exit;
					}
					// echo $_FILES["upfile"][tmp_name][$i];
 					$file = $_FILES["upfile"];
 					if($max_file_size < $file["size"][$i])    //检查文件大小
 					{    
 					//	echo "<font color='red'>文件太大！</font>";
 						$error='文件大小超过允许上传的大小！';
 						exit;
  					}
					if(! in_array($file["type"][$i], $uptypes))   //检查文件类型
					{   
					//	echo "<font color='red'>不能上传此类型文件！</font>";
						$error='文件格式错误！';
 						exit;
					}
					if(! file_exists($destination_folder))
					if(! mkdir($destination_folder,0777,true))
					{
					//	echo "<font color='red'>您创建目录失败,请手动创建！</a>";
						$error='创建目录失败,请手动创建！';
						exit;
					}
					$filename=$file["tmp_name"][$i];
					$image_size = getimagesize($filename);
					$pinfo=pathinfo($file["name"][$i]);
					$ftype=$pinfo['extension'];
					$destination = $destination_folder.$i.time().".".$ftype;
					if (file_exists($destination) && $overwrite != true)
					{
     				//	echo "<font color='red'>同名文件已经存在了！</a>";
     					$error='同名文件已经存在了！';
     					exit;
  					}
					//echo $destination;
 					if(! move_uploaded_file ($filename, $destination))
 					{
   					//	echo "<font color='red'>移动文件出错！</a>";
   						$error='移动文件出错！';
     					exit;
  					}
  					else
  					{
  						$arr=array(
							'advertiser_id' => $id,
							'img_type' => 'source',
							'img' => $destination
						);
						$this->db->insert('advertiser_img', $arr);
  						if(!file_exists('uploads/'.date("Y",$time).'/'.date("m",$time).'/thumb/'))
						if(!mkdir('uploads/'.date("Y",$time).'/'.date("m",$time).'/thumb/',0777,true))
						{
						//	echo "<font color='red'>您创建目录失败,请手动创建！</a>";
							$error='创建缩略图目录失败,请手动创建！';
							exit;
						}	
						$config['image_library'] = 'gd2';
						$config['create_thumb'] = TRUE;
						$config['maintain_ratio'] = TRUE;
						$config['width'] = 160;
						$config['height'] = 120;
						$config['source_image'] = $destination;				
						$config['new_image']='uploads/'.date("Y",$time).'/'.date("m",$time).'/thumb/'.$i.time().".".$ftype;
						$this->load->library('image_lib',$config);
						$this->load->initialize($config); 
						if($this->image_lib->resize())
						{
						$arr=array(
							'advertiser_id' => $id,
							'img_type' => 'thumb',
							'img' => 'uploads/'.date("Y",$time).'/'.date("m",$time).'/thumb/'.$i.time()."_thumb.".$ftype
						);
						$this->db->insert('advertiser_img', $arr);
						}
  					}		
				}
			}
		}	
		return $error;
	}
}