<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:17:14
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/iattraction_line/iattraction_line_list.html" */ ?>
<?php /*%%SmartyHeaderCode:82337815055ffa0ea3d2763-11752079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3baa6acbcada096c820ef2b57ffebeb4b92981cb' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/iattraction_line/iattraction_line_list.html',
      1 => 1420967792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82337815055ffa0ea3d2763-11752079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'iattraction_line_list' => 0,
    'iattraction_line' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa0ea465c79_80253749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa0ea465c79_80253749')) {function content_55ffa0ea465c79_80253749($_smarty_tpl) {?><!DOCTYPE html><!--[if IE 8]><html lang="en" class="ie8"> <![endif]--><!--[if IE 9]><html lang="en" class="ie9"> <![endif]--><!--[if !IE]><!--><html lang="en"> <!--<![endif]--><!-- BEGIN HEAD --><head>    <meta charset="utf-8"/>    <title>尤物后台管理系统-境外线路列表</title>    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>    <meta content="" name="description"/>    <meta content="" name="author"/>    <!-- BEGIN GLOBAL MANDATORY STYLES -->    <link href="../../../../statics/resource/common/plugs/metronic/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/style-metro.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/style.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/style-responsive.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/uniform.default.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/css/page.css" rel="stylesheet" type="text/css" />    <!-- END GLOBAL MANDATORY STYLES -->    <!-- BEGIN PAGE LEVEL STYLES -->    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/select2_metro.css"/>    <link rel="stylesheet" href="../../../../statics/resource/common/plugs/metronic/css/DT_bootstrap.css"/>    <!-- END PAGE LEVEL STYLES -->    <link rel="shortcut icon" href="../../../../statics/resource/common/plugs/metronic/image/favicon.ico"/></head><!-- END HEAD --><!-- BEGIN BODY --><body style="background-color:#FFFFFF !important"><!-- BEGIN EXAMPLE TABLE PORTLET--><div class="portlet box blue margin-top-10">    <div class="portlet-title">        <div class="caption"><i class="icon-edit"></i>境外线路列表</div>        <div class="tools"><a href="javascript:;" class="collapse"></a></div>    </div>    <div class="portlet-body">        <div class="clearfix">            <div class="btn-group pull-right">                <a href="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
IattractionLine/AddIattractionLine">                <button id="sample_editable_1_new" class="btn green">                    新增境外线路 <i class="icon-plus"></i>                </button>                </a>            </div>        </div>        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">            <thead>            <tr>                <th width="13%">序号</th>                <th width="15%">线路编号</th>                <th width="14%">线路名称</th>                <th width="14%">是否有效</th>                <th width="14%">线路供应商</th>                <th width="15%">出发时间</th>                <th width="15%">操作</th>            </tr>            </thead>            <tbody>            <?php  $_smarty_tpl->tpl_vars['iattraction_line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iattraction_line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['iattraction_line_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iattraction_line']->key => $_smarty_tpl->tpl_vars['iattraction_line']->value) {
$_smarty_tpl->tpl_vars['iattraction_line']->_loop = true;
?>            <tr>                <td width="13%" align="center"><?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
</td>                <td width="15%" align="center"><?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['LineCode'];?>
</td>                <td width="14%" align="center"><?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['Title'];?>
</td>                <td width="14%" align="center"><?php if ($_smarty_tpl->tpl_vars['iattraction_line']->value['Valid']==1) {?><span class="label label-success">有效</span><?php } else { ?><span class="label label-danger">无效</span><?php }?></td>                <td width="14%" align="center"><?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['TravelAgentId'];?>
</td>                <td width="15%" align="center"><?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['GoOff'];?>
</td>                <td align="center">                    <a href="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
IattractionLine/EditIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>                    <a href="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
IattractionLine/PictureIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
"><span class="label label-success">图片</span></a>                    <a href="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
IattractionLine/ViewIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
"><span class="label label-info">查看</span></a>                    <a href="javascript:;" class="change_valid" iattraction_line_id="<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
" valid="<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['Valid'];?>
" ><span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['iattraction_line']->value['Valid']==0) {?>恢复<?php } else { ?>删除<?php }?></span></a>                </td>            </tr>            <?php } ?>            </tbody>        </table>        <div class="row-fluid">            <div class="span6"></div>            <div class="span6">                <ul class="page_list" style="float: right;">                    <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
                </ul>            </div>        </div>    </div></div><input type="hidden" id="save_sign" name="save_sign"  value="<?php echo $_smarty_tpl->tpl_vars['save_sign']->value;?>
"/><input type="hidden" id="app_http_url" name="app_http_url"  value="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
"/><!-- END EXAMPLE TABLE PORTLET--><!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --><!-- BEGIN CORE PLUGINS --><script src="../../../../statics/resource/common/plugs/metronic/js/jquery-1.10.1.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script><!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip --><script src="../../../../statics/resource/common/plugs/metronic/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/bootstrap.min.js" type="text/javascript"></script><!--[if lt IE 9]><script src="../../../../statics/resource/common/plugs/metronic/js/excanvas.min.js"></script><script src="../../../../statics/resource/common/plugs/metronic/js/respond.min.js"></script><![endif]--><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.slimscroll.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.blockui.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.cookie.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.uniform.min.js" type="text/javascript"></script><!-- END CORE PLUGINS --><!-- BEGIN PAGE LEVEL PLUGINS --><script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/select2.min.js"></script><script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/jquery.dataTables.js"></script><script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/DT_bootstrap.js"></script><!-- END PAGE LEVEL PLUGINS --><!-- BEGIN PAGE LEVEL SCRIPTS --><script src="../../../../statics/resource/common/plugs/metronic/js/app.js"></script><script src="../../../../statics/resource/common/plugs/metronic/js/table-editable.js"></script><script>    jQuery(document).ready(function () {        App.init();//        TableEditable.init();    });    $(document).ready(function () {        if ($("#save_sign").val()) {            alert("保存成功");        }        /**         * 删除、恢复切换         */        $(".change_valid").click(function () {            var app_http_url = $("#app_http_url").val();            var iattraction_line_id = $(this).attr("iattraction_line_id");            var valid = $(this).attr("valid");            if (valid == 1) {                valid = 0;            } else {                valid = 1;            }            $.post(app_http_url + 'IattractionLine/AjaxChangeStatus', {'iattraction_line_id': iattraction_line_id, 'valid': valid}, function (data) {                if (data) {                    alert('修改成功!');                } else {                    alert('修改失败!');                }                window.location.reload();            });        });    });</script><!-- END BODY --></body></html><?php }} ?>
