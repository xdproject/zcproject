<?php
/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
 * Create-Date:2016-04-29
 * ZC-Project
 * Author:BarneyX
 * QQ:35353415
 * E-mail:vcmsdn@gmail.com
 *****************************************************************************/
namespace ExtFunction\Crowdfunding\Model;
use Think\Model;

class CrowdundingArchivesModel extends Model {

    protected $tableName = 'archives';

    /**
     * 为项目添加项目文章
     * @param string $opt 操作方法
     * @param array $arinfo 文章简要信息
     * @param array $arbody  文章主体内容
     * @return bool|int 成功则返回ＴＲＵＥ　失败了则返回　ＦＡＬＳ　文章概要内容添加失败则返回 -1
     */
    public function AddArchives($opt='add',$arinfo=array(),$arbody=array()){

            if(is_array($arinfo) && is_array($arbody)){
                switch($opt){
                    //修改文章
                    case 'add':{
                        if(!$this->checkData($arinfo['title'],2)){
                            $In_ArId = $this->add($arinfo); //添加新文章基本信息到数据库当中,成功返回添加的文章新编号
                            if(!$In_ArId) return false; //如果失败了,则返回 -1 并退出当前操作
                            $str_body = addslashes($arbody['body']);
                            $aid = $arbody['oid'];
                            $str_contentBody = "INSERT INTO `zc_addonarticle` (`aid`, `body`) VALUES ({$In_ArId},'{$str_body}');";
//                            var_dump($str_contentBody);
//                            die();
                            if($In_ArId>0) {
                                $Arc_BodyFlag = $this->execute($str_contentBody);
                                if($Arc_BodyFlag) {  //判断项目文章的主体文章内容是否添加成功
                                 //   unset($temp_ContentBody, $temp_aid);
                                    return true;
                                } else
                                    return false;
                            }
                        }
                        return false; //文章已经存在则返回
                    } break;
                    //修改文章
                    case 'edit':{
                        $In_ArId = $this->save($arinfo); //添加新文章基本信息到数据库当中,成功返回添加的文章新编号
                        if(!$In_ArId) return false; //如果失败了,则返回 -1 并退出当前操作
                        $str_body = addslashes($arbody['body']);
                        $aid = $arbody['aid'];
                        $edit_str_Query = "UPDATE `zc_addonarticle` SET `body`='.{$str_body}.' WHERE  `zc_addonarticle`.`aid`={$aid};";
                        if($aid>0) {
                           $Arc_BodyFlag = $this->execute($edit_str_Query);
                            if($Arc_BodyFlag) {  //判断项目文章的主体文章内容是否添加成功
                                return true;
                            } else
                                return false;
                        }
                        return false;
                    }break;
                    //删除文章
                    case 'del':{

                    }break;
                    default:
                        return -3;
                    break;
                }
            }
    }

    /**
     * 项目文章查询
     * @param $oid 关键字段  通过设置$type来改变oid的不同含义
     * @param int $type 查询类别:
     *                  0:默认值是按项目编号来查询
     *                  1:按照文章的编号来查询
     *                  2:按照文章的标题来查询
     *                  3:按照文章的发布日期来查询
     *                  4:按照文章的标志来查询
     *                  5:按照文章的权利来查询
     * @return int 成功返回文章的简要信息 否则返回错误编号
     */
    public function CheckData($oid,$type=0){
        $data_map = array(); //数据查询临时
        //查询方式判断
        switch($type){
            case 0:
                $data_map['oid'] = $oid; //按照项目的编号来查询
                break;
            case 1:
                $data_map['id'] = $oid; //按照文章的编号来查询数据
                break;
            case 2:
                $data_map['title'] = $oid; //按照文章的标题来查询
                break;
            case 3:
                $data_map['senddate'] = $oid; //按照文章的发布日期来查询
                break;
            case 4:
                $data_map['flag'] = $oid; //按照文章的标志位来查询
                break;
            case 5:
                $data_map['short'] = $oid; //按照文章的权重来查询
                break;
            default:
                return -2;
            break;
        }

        switch($type){
            case 0:
                $res_article = $this->where($data_map)->select();
                break;
            case 'one':
                $res_article =$this->where($data_map)->find();
                break;
            default:
                $res_article =$this->where($data_map)->find();
                break;
        }

        if(is_array($res_article)){ return $res_article; }
        return false;
    }

    /**
     * 获取指定项目下的所有文章总数
     * @param $oid 项目编号
     */
    public function getObjArticleCount($oid){
        $arc_count = $this->where(array('oid'=>$oid))->count();
        if($arc_count>0)
            return $arc_count;
           // return array('oc_count'=>$arc_count);
        else
            return 0;
            //return array('oc_count'=>'0');
    }

    /**
     * 获取项目文章的主体内容
     * @param $aid
     * @return bool|mixed
     */
    public function getArticleBody($aid){
        $res_body = $this->query('SELECT  `body` FROM `zc_addonarticle`  WHERE `aid`='.$aid);
//        var_dump($res_body);
//        die();
        if(is_array($res_body))
            return $res_body[0];
        else
            return false;
    }
}
