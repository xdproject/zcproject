/******************************************************************************
 * Builder-Tools:Zend Studio v10.6.2
 * Create-Date:2016-04-20 11:21:23
 * ZC-Project
 * Author:BarneyX
 * QQ:35353415
 * E-mail:vcmsdn@gmail.com
 *****************************************************************************/

/**
 * 把编辑器当中的内容提交到服务器当中去
 * @param data 要提交的数据
 * @param post_url 提交的地址
 * @param succcesscallback 成功后调用的回调函数
 * @param errorcallback 失败后调用的自定义函数
 * @param _type 提交类型  POST OR GET
 * @param _dtype 数据类型 //"xml", "html", "script", "json", "jsonp", "text".
 * @constructor
 */
function UeditContentPost(data,post_url,succcesscallback,errorcallback,_type="post",_dtype='json'){
    $.ajax({ type:_type, url:post_url, data:data, dataType:_dtype, success:function(data){ succcesscallback(data); }, error:function(){ errorcallback(); } });
}