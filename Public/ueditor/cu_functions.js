/**
 * Created by Administrator on 2016/4/26.
 */
/**
 * ��ȡ�༭�����еĴ���ʽ������
 * @param uidname  ��ѡ��,����༭��ID���ƻ���,�������ô�ѡ��
 * @returns {*|String}  ���ر༭�����еĴ���ʽ������
 */
function getUEFormatBody(uidname='container'){ return UE.getEditor(uidname).getContent(); }

/**
 * ��ȡ�༭�����еĴ��ı�����
 * @param uidname  ��ѡ��,����༭��ID���ƻ���,�������ô�ѡ��
 * @returns {*|String} ���ر༭�����еĵĴ��ı�����
 */
function getUETextBody(uidname='container'){return UE.getEditor(uidname).getPlainTxt();}
