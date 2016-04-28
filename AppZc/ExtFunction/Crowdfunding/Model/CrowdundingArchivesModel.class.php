<?php
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
            $temp_aid = 0;  //文章的编号临时缓存变量
            $temp_ContentBody  =""; //文章主体内容的缓存变量
            if(is_array($arinfo) && is_array($arbody)){
                switch($opt){
                    //修改文章
                    case 'add':{
                        if(!$this->checkData($arinfo['title'],2)){
                            $In_ArId = $this->add($arinfo); //添加新文章基本信息到数据库当中,成功返回添加的文章新编号
                            if(!$In_ArId) return -1; //如果失败了,则返回 -1 并退出当前操作
                            list($temp_aid,$temp_ContentBody)= $arbody;
                            if($temp_aid>0 && !empty($temp_ContentBody)) {
                                $Arc_BodyFlag = $this->execute("INSERT INTO `zc_application`.`zc_addonarticle` (`aid`, `body`) VALUES ({$temp_aid},{htmlspecialchars($temp_ContentBody)} );");
                                if($Arc_BodyFlag) {  //判断项目文章的主体文章内容是否添加成功
                                    unset($temp_ContentBody, $temp_aid);
                                    return true;
                                } else
                                    return false;
                            }
                        }
                        return -2; //文章已经存在则返回
                    } break;
                    //修改文章
                    case 'edit':{
                        $In_ArId = $this->save($arinfo); //添加新文章基本信息到数据库当中,成功返回添加的文章新编号
                        if(!$In_ArId) return -1; //如果失败了,则返回 -1 并退出当前操作
                        list($temp_aid,$temp_ContentBody)= $arbody;
                        if($temp_aid>0 && !empty($temp_ContentBody)) {
                            //$Arc_BodyFlag = $this->execute("INSERT INTO {DB_PREFIX}.`zc_addonarticle` (`aid`, `body`) VALUES ({$temp_aid},{htmlspecialchars($temp_ContentBody)} );");
                            $Arc_BodyFlag = $this->execute("UPDATE `zc_application`.`zc_addonarticle` SET `body`='.{htmlspecialchars($temp_ContentBody)}.' WHERE  `aid`={$arinfo['id']};");
                            if($Arc_BodyFlag) {  //判断项目文章的主体文章内容是否添加成功
                                unset($temp_ContentBody, $temp_aid);
                                return true;
                            } else
                                return false;
                        }
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
        if($type==0)
            $res_article = $this->where($data_map)->select();
        else
            $res_article =$this->where($data_map)->find();

        if(is_array($res_article)){ return $res_article; }
        return false;
    }
}
