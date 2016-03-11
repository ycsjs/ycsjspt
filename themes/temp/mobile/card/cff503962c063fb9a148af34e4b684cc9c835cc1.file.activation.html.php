<?php /* Smarty version Smarty-3.1.15, created on 2015-01-13 10:23:44
         compiled from "D:\wamp\www\iyouwu\themes\mobile\card\activity\activation.html" */ ?>
<?php /*%%SmartyHeaderCode:1022454b333773eb281-42283885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cff503962c063fb9a148af34e4b684cc9c835cc1' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\mobile\\card\\activity\\activation.html',
      1 => 1421115816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1022454b333773eb281-42283885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b3337749af23_15770544',
  'variables' => 
  array (
    'app_http_url' => 0,
    'http_resource_js_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b3337749af23_15770544')) {function content_54b3337749af23_15770544($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>礼品卡激活页面</title>
</head>
<body>
<h3>礼品卡号：</h3>
<input id="card_sign" name="card_sign" value="" >
<button id="activation">激活</button>

<input type="hidden" id="app_http_url" name="app_http_url"  value="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
"/>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['http_resource_js_url']->value;?>
jquery.min.js"></script>
<script>
    var app_http_url = $("#app_http_url").val();
    $("#activation").click(function(){
        var card_sign=$("#card_sign").val();
        $.ajax({
            type: "post",
            url: app_http_url+"CheckCard/AjaxCheckValid",
            dataType: "json",
            data: {card_sign: card_sign},
            success: function (data) {
                if(data.state){
                    alert(data.msg);
                    var location_url = app_http_url+"Activity/CardBind&from=youwu";
                    window.location.href = "http://passport.jm.lan/user/login?backurl="+location_url

                }else{
                    alert(data.msg);
                }
            }
        });
    });
</script>
</body>
</html><?php }} ?>
