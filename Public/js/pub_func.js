/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
 * Create-Date:2016-04-20 11:21:23
 * ZC-Project
 * Author:BarneyX
 * QQ:35353415
 * E-mail:vcmsdn@gmail.com
 *****************************************************************************/

/**
 * �ѱ༭�����е������ύ������������ȥ
 * @param data Ҫ�ύ������
 * @param post_url �ύ�ĵ�ַ
 * @param succcesscallback �ɹ�����õĻص�����
 * @param errorcallback ʧ�ܺ���õ��Զ��庯��
 * @param _type �ύ����  POST OR GET
 * @param _dtype �������� //"xml", "html", "script", "json", "jsonp", "text".
 * @constructor
 */
function UeditContentPost(data,post_url,succcesscallback,errorcallback,_type="post",_dtype='json'){
    $.ajax({ type:_type, url:post_url, data:data, dataType:_dtype, success:function(data){ succcesscallback(data); }, error:function(){ errorcallback(); } });
}