<?php /* Smarty version Smarty-3.1.15, created on 2015-01-28 00:09:10
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_brand\goods_brand_add.html" */ ?>
<?php /*%%SmartyHeaderCode:1374754c7a595a7ee69-86495959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ef8a56b4cd1cc4148f465c80303b7532bdfe868' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_brand\\goods_brand_add.html',
      1 => 1422373617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1374754c7a595a7ee69-86495959',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c7a595b1f109_55059002',
  'variables' => 
  array (
    'app_http_url' => 0,
    'goods_brand' => 0,
    'travel_supplier' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c7a595b1f109_55059002')) {function content_54c7a595b1f109_55059002($_smarty_tpl) {?><!DOCTYPE html><!--[if IE 8]><html lang="en" class="ie8"> <![endif]--><!--[if IE 9]><html lang="en" class="ie9"> <![endif]--><!--[if !IE]><!--><html lang="en"> <!--<![endif]--><!-- BEGIN HEAD --><head>    <meta charset="utf-8"/>    <title>尤物后台管理系统-新增品牌</title>    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>    <meta content="" name="description"/>    <meta content="" name="author"/>    <!-- BEGIN GLOBAL MANDATORY STYLES -->    <link href="../../../../statics/resource/common/plugs/metronic/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/style-metro.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/style.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/style-responsive.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/uniform.default.css" rel="stylesheet" type="text/css"/>    <!-- END GLOBAL MANDATORY STYLES -->    <!-- BEGIN PAGE LEVEL STYLES -->    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/select2_metro.css"/>    <!-- END PAGE LEVEL SCRIPTS -->    <link rel="shortcut icon" href="../../../../statics/resource/common/plugs/metronic/image/favicon.ico"/></head><!-- END HEAD --><!-- BEGIN BODY --><body class="page-header-fixed" style="background-color:#FFFFFF !important"><div class="tab-pane  margin-top-10">    <div class="portlet box green">        <div class="portlet-title">            <div class="caption"><i class="icon-reorder"></i>新增品牌</div>            <div class="tools">                <a href="javascript:;" class="collapse"></a>            </div>        </div>        <div class="portlet-body form">            <!-- BEGIN FORM-->            <form action="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
GoodsBrand/AddGoodsBrand" method="post" onSubmit="return chkinput(this)" class="form-horizontal" enctype="multipart/form-data">                <h3 class="form-section">品牌：</h3>                <div class="row-fluid">                    <div class="span6">                        <div class="control-group">                            <label class="control-label">品牌中文名称 *：</label>                            <div class="controls">                                <input name="NameCn" type="text" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['goods_brand']->value['NameCn'];?>
" class="m-wrap span12" />                            </div>                        </div>                    </div>                    <div class="span6">                        <div class="control-group">                            <label class="control-label">品牌英文名称：</label>                            <div class="controls">                                <input name="NameEn" type="text" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['goods_brand']->value['NameEn'];?>
" class="m-wrap span12" />                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span6">                        <div class="control-group">                            <label class="control-label">商品图标：</label>                            <div class="controls">                                <input type="file" name="Logo" value=""/>                            </div>                        </div>                    </div>                    <div class="span6">                        <div class="control-group">                            <label class="control-label">是否有效：</label>                            <div class="controls">                                <label class="radio">                                    <div class="radio">                                        <input value="0" name="Valid" type="radio">                                    </div>                                    否                                </label>                                <label class="radio">                                    <div class="radio">                                        <input value="1" name="Valid" type="radio" checked="checked">                                    </div>                                    是                                </label>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span12 ">                        <div class="control-group">                            <label class="control-label">商品介绍：</label>                            <div class="controls">                                <textarea maxlength="200" style="width:800px;height:60px;margin-top:10px;" name="Introduction" id="Introduction"><?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['Introduction'];?>
</textarea>                            </div>                        </div>                    </div>                </div>                <div class="form-actions text-center">                    <button type="submit" class="btn blue"><i class="icon-ok"></i> 保存</button>                    <button type="button" id="goods_brand_list_bak" class="btn">返回</button>                </div>            </form>            <!-- END FORM-->        </div>    </div></div><input type="hidden" id="save_error" value="<?php echo $_smarty_tpl->tpl_vars['save_error']->value;?>
" /><input type="hidden" id="app_http_url" name="app_http_url"  value="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
"/><input type="hidden" id="goods_brand_list" value="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
GoodsBrand/ListGoodsBrand" /><!-- END FOOTER --><!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --><!-- BEGIN CORE PLUGINS --><script src="../../../../statics/resource/common/plugs/metronic/js/jquery-1.10.1.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script><!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip --><script src="../../../../statics/resource/common/plugs/metronic/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/bootstrap.min.js" type="text/javascript"></script><!--[if lt IE 9]><script src="../../../../statics/resource/common/plugs/metronic/js/excanvas.min.js"></script><script src="../../../../statics/resource/common/plugs/metronic/js/respond.min.js"></script><![endif]--><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.slimscroll.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.blockui.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.cookie.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.uniform.min.js" type="text/javascript"></script><!-- END CORE PLUGINS --><!-- BEGIN PAGE LEVEL PLUGINS --><script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/select2.min.js"></script><!-- END PAGE LEVEL PLUGINS --><!-- BEGIN PAGE LEVEL SCRIPTS --><script src="../../../../statics/resource/common/plugs/metronic/js/app.js"></script><script src="../../../../statics/resource/common/plugs/metronic/js/form-samples.js"></script><!-- END PAGE LEVEL SCRIPTS --><script>    jQuery(document).ready(function () {        // initiate layout and plugins        App.init();        FormSamples.init();    });    var app_http_url = $("#app_http_url").val();    $(document).ready(function () {        if ($("#save_error").val()) { //保存失败提示            alert("保存失败!");        }        $("#goods_brand_list_bak").click(function () { //返回按钮            window.location.href = $("#goods_brand_list").val();        });    });    //form表单验证    function chkinput(form) {        if ($.trim(form.NameCn.value) == "") {            alert("请输入品牌!");            form.NameCn.select();            return(false);        }        return true;    }</script><!-- END JAVASCRIPTS --></body><!-- END BODY --></html><?php }} ?>
