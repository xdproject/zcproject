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
	 * 用户操作控制器,根据用户的操作跳转到相应的操作界面
	 */
	public function AddObjArcData(){
		if(isset($_GET['cp']))
		    switch($_GET['cp']){
				//文章添加
		    	case "add":
					$this->assign('arc_attrinfo',array(
						'oid'=>I("get.oid"),
							'opt'=>'add'
						)
					);
		    		$this->display('oparc');
					exit();
		    		break;
				//文章编辑
		    	case "edit":
					$arcInfo = static::$CFCObject->getOneZcProjectArticle(I("get.aid"));
					$this->assign('arc_attrinfo',array(
							'oid'=>I("get.oid"),
							'aid'=>I("get.aid"),
							'opt'=>'edit'
						)
					);
					$this->assign('arcinfo',$arcInfo);
//					var_dump($arcInfo);
//					die();
					$this->display("oparc");
					exit();
		    		break;
		    	case "del":
		    		break;
		    	default:
		    		$this->error("错误!");
		    		break;
		    }
			$arclist = static::$CFCObject->getZcProjectArticleList(I("get.oid"));
			//var_dump($arclist);
            //die();
			$this->assign('oid',I("get.oid"));
			$this->assign('arclist',$arclist);
			$this->display('arclist');
	}

	/**
	 * 为指定的项目添加或是修改文章
	 * @param array $arcinfo 文章概要信息
	 * @param array $arcbody 文章主体内容
	 * @return bool 如果文章添加成功则返回TRUE 否则返回 FALSE
	 */
	public function OptZcProjectArchives(){

		//判读当前数据是否以POST方式来提交的,如果不是POST方式提交的,则认为他是错误的!
		if(!IS_POST) $this->error("操作错误!");
		    $arcinfo = array(
		    	'oid'=>I("post.oid"),
				'redirecturl'=>I("post.redirecturl"),
		    	'short'=>I("post.short"),
		    	'flag'=>I("post.flag"),
		    	'shorttitle'=>I("post.shorttitle"),
		    	'title'=>I("post.title"),
		    	'color'=>I("post.color"),
		    	'writer'=>htmlspecialchars(I("post.writer")),
		    	'source'=>htmlspecialchars(I("post.source")),
		    	'litpic'=>I("post.litpic"),
		    	'pubdate'=>date('Y-m-d H:i:s',time()),//I("post.pubdate"),
		    	'senddate'=>date('Y-m-d H:i:s',time()),//I("post.senddate"),
		    	'keywords'=>I("post.keywords"),
		    	'description'=>htmlspecialchars(I("post.description"))
		    );

		    $arcbody = array(
                'oid'=>I("post.oid"),
		    	'typeid'=>0, //附加信息-当前没有什么卵用!!
		    	'body'=>I("post.body")
		    );

			$optfunc = I("post.opt");
			if($optfunc==="edit"){
				$arcinfo = array_merge($arcinfo,array('id'=>I("post.aid")));
				$arcbody = array_merge($arcbody,array('aid'=>I("post.aid")));
			}

			if(!empty($optfunc)) {
				if (static::$CFCObject->AddZcProjectArticle($optfunc, $arcinfo, $arcbody))
					exit(json_encode(array('status'=>true,'msg'=>'文章添加成功!','jmpurl'=>'/index.php?s=/home/crowdfunding/AddObjArcData/oid/'.I("post.oid"))));

			}else
				exit(json_encode(array('status'=>false,'msg'=>'操作失败了!!','omsg'=>'')));

	}
}
