<?php /* Smarty version Smarty-3.1.15, created on 2015-01-13 12:27:57
         compiled from "D:\wamp\www\iyouwu\themes\mobile\card\activity\card_band.html" */ ?>
<?php /*%%SmartyHeaderCode:287854b480b0397fb3-06068276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '853aff869e587d307749b7b7480c9de253564702' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\mobile\\card\\activity\\card_band.html',
      1 => 1421123273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287854b480b0397fb3-06068276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b480b0481949_08534014',
  'variables' => 
  array (
    'user_info' => 0,
    'card_information' => 0,
    'app_http_url' => 0,
    'http_resource_js_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b480b0481949_08534014')) {function content_54b480b0481949_08534014($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div>界面通行证昵称：<span><?php echo $_smarty_tpl->tpl_vars['user_info']->value['result']['nickname'];?>
</span></div>
<div>礼品卡号：<span><?php echo $_smarty_tpl->tpl_vars['card_information']->value['CardSign'];?>
</span></div>
<input type="hidden" id="uid" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['result']['uid'];?>
" />
<input type="hidden" id="app_http_url" name="app_http_url"  value="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
"/>

<button id="pp_card_bind" name="pp_card_bind">绑定</button>


<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['http_resource_js_url']->value;?>
jquery.min.js"></script>
<script>
    var app_http_url = $("#app_http_url").val();
    $("#pp_card_bind").click(function(){
        $.ajax({
            type: "post",
            url: app_http_url+"CheckCard/AjaxBindCard",
            dataType: "json",
            success: function (data) {
                if(data){
                    alert("绑定成功")
                }else{
                    alert("绑定失败")
                }
            }
        });
    });
</script>


</body>
</html><?php }} ?>
