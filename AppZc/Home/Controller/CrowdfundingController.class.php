<?php
/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
* Create-Date:2016-04-20 11:21:23
* ZC-Project
* Author:BarneyX
* QQ:35353415
* E-mail:vcmsdn@gmail.com
*****************************************************************************/
namespace Home\Controller;
use ExtFunction\Crowdfunding\Api\CFController;

class CrowdfundingController extends BasicController {

	public static $CFCObject = null;

	public function _initialize(){
		parent::_initialize();
		static::$CFCObject = new CFController();
	}

	public function index(){
		$this->_initialize();
		$this->assign('create_time',time());
		$objlist =static ::$CFCObject->getObjlist();
		//var_dump($objlist);
		//die();
		$this->assign('objlist',$objlist);
		$this->display();
	}

	public function replayindex(){$this->display();}
	public function crlist(){$this->display();}

	public function addBodyIndex(){

		if(empty(I("get.oid")) || empty(I("get.cdt")) || empty(I("get.cname")))
			$this->error("系统错误!");
		$objinfo = array('oid'=>I("get.oid"),'cdt'=>I("get.cdt"),'cname'=>I("get.cname"));

		$this->assign('zc_body',static::$CFCObject->getObjBody(I("get.oid")));
		$this->assign('objinfo',$objinfo);
		$this->display();
	}
	public function addbodyem(){$this->display();}

	public function ueditor(){

		$data = new \Org\Util\Ueditor();
		echo $data->output();
	}


	/**
	 * 添加新项目到数据库当中
	 */
	public function AddProject(){
		if(!IS_POST)
			$this->error("系统错误,请稍后重试!");
		$addProjectObj = D("Object");
		if($addProjectObj->create())
			$this->success("项目新建成功!");
		else
			$this->error("项目建立失败!!");


	}

	/**
	 *为项目添加主体介绍内容
	 */
	public function AddProjectBody(){

		if(!IS_POST)
				exit("Error");
		$data_map=array();
		$data_map['oid'] = I("post.oid");
		$data_map['lastdt']=I("post.lastdt");
		$data_map['cdt'] =I("post.cdt");
		$data_map['body'] =I("post.body");
		if(static::$CFCObject->addObjBody($data_map))
			exit(json_encode(array('status'=>true,'msg'=>'添加成功!','omsg'=>'/index.php?s=/home/Crowdfunding/index.html')));
		else
            exit(json_encode(array('status'=>false,'msg'=>'操作失败了!!','omsg'=>'')));
	}

	/**
	 * 为项目添加文章
	 */
	public function AddObjArcData(){
		if(isset($_GET['cp']))
		    switch($_GET['cp']){
		    	case "add":
		    		$this->display('oparc');
					exit();
		    		break;
		    	case "edit":
		    		break;
		    	case "del":
		    		break;
		    	default:
		    		$this->error("错误!");
		    		break;

		    }

			$this->display('arclist');


	}
}
