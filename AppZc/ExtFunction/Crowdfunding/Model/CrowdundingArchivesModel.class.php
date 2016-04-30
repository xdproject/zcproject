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
     * Ϊ��Ŀ�����Ŀ����
     * @param string $opt ��������
     * @param array $arinfo ���¼�Ҫ��Ϣ
     * @param array $arbody  ������������
     * @return bool|int �ɹ��򷵻أԣңգš�ʧ�����򷵻ء��ƣ��̣ӡ����¸�Ҫ�������ʧ���򷵻� -1
     */
    public function AddArchives($opt='add',$arinfo=array(),$arbody=array()){

            if(is_array($arinfo) && is_array($arbody)){
                switch($opt){
                    //�޸�����
                    case 'add':{
                        if(!$this->checkData($arinfo['title'],2)){
                            $In_ArId = $this->add($arinfo); //��������»�����Ϣ�����ݿ⵱��,�ɹ�������ӵ������±��
                            if(!$In_ArId) return false; //���ʧ����,�򷵻� -1 ���˳���ǰ����
                            $str_body = addslashes($arbody['body']);
                            $aid = $arbody['oid'];
                            $str_contentBody = "INSERT INTO `zc_addonarticle` (`aid`, `body`) VALUES ({$In_ArId},'{$str_body}');";
//                            var_dump($str_contentBody);
//                            die();
                            if($In_ArId>0) {
                                $Arc_BodyFlag = $this->execute($str_contentBody);
                                if($Arc_BodyFlag) {  //�ж���Ŀ���µ��������������Ƿ���ӳɹ�
                                 //   unset($temp_ContentBody, $temp_aid);
                                    return true;
                                } else
                                    return false;
                            }
                        }
                        return false; //�����Ѿ������򷵻�
                    } break;
                    //�޸�����
                    case 'edit':{
                        $In_ArId = $this->save($arinfo); //��������»�����Ϣ�����ݿ⵱��,�ɹ�������ӵ������±��
                        if(!$In_ArId) return false; //���ʧ����,�򷵻� -1 ���˳���ǰ����
                        $str_body = addslashes($arbody['body']);
                        $aid = $arbody['aid'];
                        $edit_str_Query = "UPDATE `zc_addonarticle` SET `body`='.{$str_body}.' WHERE  `zc_addonarticle`.`aid`={$aid};";
                        if($aid>0) {
                           $Arc_BodyFlag = $this->execute($edit_str_Query);
                            if($Arc_BodyFlag) {  //�ж���Ŀ���µ��������������Ƿ���ӳɹ�
                                return true;
                            } else
                                return false;
                        }
                        return false;
                    }break;
                    //ɾ������
                    case 'del':{

                    }break;
                    default:
                        return -3;
                    break;
                }
            }
    }

    /**
     * ��Ŀ���²�ѯ
     * @param $oid �ؼ��ֶ�  ͨ������$type���ı�oid�Ĳ�ͬ����
     * @param int $type ��ѯ���:
     *                  0:Ĭ��ֵ�ǰ���Ŀ�������ѯ
     *                  1:�������µı������ѯ
     *                  2:�������µı�������ѯ
     *                  3:�������µķ�����������ѯ
     *                  4:�������µı�־����ѯ
     *                  5:�������µ�Ȩ������ѯ
     * @return int �ɹ��������µļ�Ҫ��Ϣ ���򷵻ش�����
     */
    public function CheckData($oid,$type=0){
        $data_map = array(); //���ݲ�ѯ��ʱ
        //��ѯ��ʽ�ж�
        switch($type){
            case 0:
                $data_map['oid'] = $oid; //������Ŀ�ı������ѯ
                break;
            case 1:
                $data_map['id'] = $oid; //�������µı������ѯ����
                break;
            case 2:
                $data_map['title'] = $oid; //�������µı�������ѯ
                break;
            case 3:
                $data_map['senddate'] = $oid; //�������µķ�����������ѯ
                break;
            case 4:
                $data_map['flag'] = $oid; //�������µı�־λ����ѯ
                break;
            case 5:
                $data_map['short'] = $oid; //�������µ�Ȩ������ѯ
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
     * ��ȡָ����Ŀ�µ�������������
     * @param $oid ��Ŀ���
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
     * ��ȡ��Ŀ���µ���������
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
