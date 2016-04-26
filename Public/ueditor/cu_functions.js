/**
 * Created by Administrator on 2016/4/26.
 */
/**
 * 获取编辑器当中的带格式的内容
 * @param uidname  可选项,如果编辑的ID名称换了,可以设置此选项
 * @returns {*|String}  返回编辑器当中的带格式的内容
 */
function getUEFormatBody(uidname='container'){ return UE.getEditor(uidname).getContent(); }

/**
 * 获取编辑器当中的纯文本内容
 * @param uidname  可选项,如果编辑的ID名称换了,可以设置此选项
 * @returns {*|String} 返回编辑器当中的的纯文本内容
 */
function getUETextBody(uidname='container'){return UE.getEditor(uidname).getPlainTxt();}
