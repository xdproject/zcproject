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


function Zc_MsgBox(caption='ZcProject!',msgbox='ZcProject��StudioIT !!!!~~'){
    document.writeln("  <div class=\"modal fade bs-example-modal-sm\" id=\"ZcProject-MsgBox\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\"> ");
    document.writeln("   <div class=\"modal-dialog modal-sm\"> ");
    document.writeln("    <div class=\"modal-content\"> ");
    document.writeln("     <div class=\"modal-header\"> ");
    document.writeln("      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button> ");
    document.writeln("      <h4 class=\"modal-title\" id=\"myModalLabel\">"+caption+"</h4> ");
    document.writeln("     </div> ");
    document.writeln("     <div class=\"modal-body\">");
    document.writeln("<p>"+msgbox+"</p>");
    document.writeln("     </div> ");
    document.writeln("     <div class=\"modal-footer\"> ");
    document.writeln("      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button> ");
    document.writeln("      <button type=\"button\" class=\"btn btn-primary\">Save changes</button> ");
    document.writeln("     </div> ");
    document.writeln("    </div> ");
    document.writeln("   </div> ");
    document.writeln("  </div>");
    $("#ZcProject-MsgBox").modal();
}


