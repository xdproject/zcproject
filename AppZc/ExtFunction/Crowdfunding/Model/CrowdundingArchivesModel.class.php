<?php
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
            $temp_aid = 0;  //���µı����ʱ�������
            $temp_ContentBody  =""; //�����������ݵĻ������
            if(is_array($arinfo) && is_array($arbody)){
                switch($opt){
                    //�޸�����
                    case 'add':{
                        if(!$this->checkData($arinfo['title'],2)){
                            $In_ArId = $this->add($arinfo); //��������»�����Ϣ�����ݿ⵱��,�ɹ�������ӵ������±��
                            if(!$In_ArId) return -1; //���ʧ����,�򷵻� -1 ���˳���ǰ����
                            list($temp_aid,$temp_ContentBody)= $arbody;
                            if($temp_aid>0 && !empty($temp_ContentBody)) {
                                $Arc_BodyFlag = $this->execute("INSERT INTO `zc_application`.`zc_addonarticle` (`aid`, `body`) VALUES ({$temp_aid},{htmlspecialchars($temp_ContentBody)} );");
                                if($Arc_BodyFlag) {  //�ж���Ŀ���µ��������������Ƿ���ӳɹ�
                                    unset($temp_ContentBody, $temp_aid);
                                    return true;
                                } else
                                    return false;
                            }
                        }
                        return -2; //�����Ѿ������򷵻�
                    } break;
                    //�޸�����
                    case 'edit':{
                        $In_ArId = $this->save($arinfo); //��������»�����Ϣ�����ݿ⵱��,�ɹ�������ӵ������±��
                        if(!$In_ArId) return -1; //���ʧ����,�򷵻� -1 ���˳���ǰ����
                        list($temp_aid,$temp_ContentBody)= $arbody;
                        if($temp_aid>0 && !empty($temp_ContentBody)) {
                            //$Arc_BodyFlag = $this->execute("INSERT INTO {DB_PREFIX}.`zc_addonarticle` (`aid`, `body`) VALUES ({$temp_aid},{htmlspecialchars($temp_ContentBody)} );");
                            $Arc_BodyFlag = $this->execute("UPDATE `zc_application`.`zc_addonarticle` SET `body`='.{htmlspecialchars($temp_ContentBody)}.' WHERE  `aid`={$arinfo['id']};");
                            if($Arc_BodyFlag) {  //�ж���Ŀ���µ��������������Ƿ���ӳɹ�
                                unset($temp_ContentBody, $temp_aid);
                                return true;
                            } else
                                return false;
                        }
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
        if($type==0)
            $res_article = $this->where($data_map)->select();
        else
            $res_article =$this->where($data_map)->find();

        if(is_array($res_article)){ return $res_article; }
        return false;
    }
}
