<?php /* Smarty version Smarty-3.1.15, created on 2015-09-22 10:17:07
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/cattraction_line/cattraction_line_add.html" */ ?>
<?php /*%%SmartyHeaderCode:20197126015600ba2357e7f3-59159268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47b3b6b1b3bf077e59daed191781e1f1b4562fdb' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/cattraction_line/cattraction_line_add.html',
      1 => 1420968780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20197126015600ba2357e7f3-59159268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'cattraction_line' => 0,
    'schedule' => 0,
    'theme' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5600ba237dcbb1_83359783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5600ba237dcbb1_83359783')) {function content_5600ba237dcbb1_83359783($_smarty_tpl) {?><!DOCTYPE html><!--[if IE 8]><html lang="en" class="ie8"> <![endif]--><!--[if IE 9]><html lang="en" class="ie9"> <![endif]--><!--[if !IE]><!--><html lang="en"> <!--<![endif]--><!-- BEGIN HEAD --><head>    <meta charset="utf-8"/>    <title>尤物后台管理系统-新增境内线路</title>    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>    <meta content="" name="description"/>    <meta content="" name="author"/>    <!-- BEGIN GLOBAL MANDATORY STYLES -->    <link href="../../../../statics/resource/common/plugs/metronic/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/style-metro.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/style.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/style-responsive.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/uniform.default.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/umeditor/themes/default/css/umeditor.css" rel="stylesheet" type="text/css" />    <link href="../../../../statics/resource/common/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>    <!-- END GLOBAL MANDATORY STYLES -->    <!-- BEGIN PAGE LEVEL STYLES -->    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/select2_metro.css"/>    <!-- END PAGE LEVEL SCRIPTS -->    <link rel="shortcut icon" href="../../../../statics/resource/common/plugs/metronic/image/favicon.ico"/></head><!-- END HEAD --><!-- BEGIN BODY --><body class="page-header-fixed" style="background-color:#FFFFFF !important"><div class="tab-pane  margin-top-10">    <div class="portlet box green">        <div class="portlet-title">            <div class="caption"><i class="icon-reorder"></i>新增境内线路</div>            <div class="tools">                <a href="javascript:;" class="collapse"></a>            </div>        </div>        <div class="portlet-body form">            <!-- BEGIN FORM-->            <h3 class="form-section">               线路详细信息：               <a href="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
CattractionLine/ListCattractionLine"><button class="btn black" style="float: right">线路列表<i class="m-icon-swapright m-icon-white"></i></button></a>            </h3>            <form action="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
CattractionLine/AddCattractionLine" method="post" onSubmit="return chkinput(this)">                <div class="row-fluid">                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">线路编号 * ：</label>                            <div class="controls">                                <input  maxlength="200" name="LineCode" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['LineCode'];?>
" class="m-wrap span12" placeholder="">                            </div>                        </div>                    </div>                    <!--/span-->                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">线路名称：</label>                            <div class="controls">                                <input maxlength="100" size="50" name="Title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['Title'];?>
" class="m-wrap span12" placeholder="">                            </div>                        </div>                    </div>                    <!--/span-->                </div>                <div class="row-fluid">                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">线路供应商：</label>                            <div class="controls">                                <select name="TravelAgentId" id="TravelAgentId">                                    <option value="0">-请选择线路供应商-</option>                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['cattraction_line']->value['TravelAgentId']==1) {?>selected="selected"<?php }?>>华远</option>                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['cattraction_line']->value['TravelAgentId']==2) {?>selected="selected"<?php }?>>中青旅</option>                                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['cattraction_line']->value['TravelAgentId']==3) {?>selected="selected"<?php }?>>众信旅游</option>                                </select>                            </div>                        </div>                    </div>                    <!--/span-->                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">是否热门：</label>                            <div class="controls">                                <label class="radio">                                    <div class="radio"><input value="1" name="Hot" type="radio" <?php if ($_smarty_tpl->tpl_vars['cattraction_line']->value['Hot']==1) {?>checked="checked" <?php }?>></div>                                    是                                </label>                                <label class="radio">                                    <div class="radio"><input value="0" name="Hot" type="radio" <?php if ($_smarty_tpl->tpl_vars['cattraction_line']->value['Hot']==0) {?>checked="checked" <?php }?>></div>                                    无                                </label>                            </div>                        </div>                    </div>                    <!--/span-->                </div>                <div class="row-fluid">                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">儿童采购价：</label>                            <div class="controls">                                <input maxlength="50" name="ChildrenBuyPrice" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ChildrenBuyPrice'];?>
" class="m-wrap span12" placeholder="">                            </div>                        </div>                    </div>                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">儿童售价：</label>                            <div class="controls">                                <input  maxlength="50" name="ChildrenSellPrice" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ChildrenSellPrice'];?>
" class="m-wrap span12" placeholder="">                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">成人采购价：</label>                            <div class="controls">                                <input maxlength="200" name="AdultBuyPrice" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['AdultBuyPrice'];?>
" class="m-wrap span12" placeholder="">                            </div>                        </div>                    </div>                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">成人售价：</label>                            <div class="controls">                                <input  maxlength="200" name="AdultSellPrice" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['AdultSellPrice'];?>
" class="m-wrap span12" placeholder="">                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">游玩天数：</label>                            <div class="controls">                                <input  maxlength="200" name="DayNum" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['DayNum'];?>
" class="m-wrap span12" placeholder="">                            </div>                        </div>                    </div>                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">币种：</label>                            <div class="controls">                                <select name="MoneyType" id="MoneyType">                                    <option <?php if ($_smarty_tpl->tpl_vars['cattraction_line']->value['MoneyType']==0) {?>selected="selected"<?php }?> value="0">人民币</option>                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['cattraction_line']->value['MoneyType']==1) {?>selected="selected"<?php }?>>美元</option>                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['cattraction_line']->value['MoneyType']==2) {?>selected="selected"<?php }?>>港币</option>                                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['cattraction_line']->value['MoneyType']==3) {?>selected="selected"<?php }?>>日元</option>                                    <option value="4" <?php if ($_smarty_tpl->tpl_vars['cattraction_line']->value['MoneyType']==4) {?>selected="selected"<?php }?>>欧元</option>                                </select>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">有效期：</label>                            <div class="controls">                                <input maxlength="50" name="StartDate" id="StartDate" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['StartDate'];?>
" class="m-wrap span12" placeholder="">                            </div>                        </div>                    </div>                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">出发时间：</label>                            <div class="controls">                                <input  maxlength="200" name="GoOff" id="GoOff" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['GoOff'];?>
" class="m-wrap span12" placeholder="">                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span12 ">                        <div class="control-group">                            <label class="control-label">出团排期：</label>                            <div class="controls">                                <label class="checkbox">                                    <input value="0" name="Schedule[]" type="checkbox" <?php if (in_array(0,$_smarty_tpl->tpl_vars['schedule']->value)) {?>checked="checked"<?php }?> /> 周日                                </label>                                <label class="checkbox">                                    <input value="1" name="Schedule[]" type="checkbox" <?php if (in_array(1,$_smarty_tpl->tpl_vars['schedule']->value)) {?>checked="checked"<?php }?> /> 周一                                </label>                                <label class="checkbox">                                    <input value="2" name="Schedule[]" type="checkbox" <?php if (in_array(2,$_smarty_tpl->tpl_vars['schedule']->value)) {?>checked="checked"<?php }?> /> 周二                                </label>                                <label class="checkbox">                                    <input value="3" name="Schedule[]" type="checkbox" <?php if (in_array(3,$_smarty_tpl->tpl_vars['schedule']->value)) {?>checked="checked"<?php }?> /> 周三                                </label>                                <label class="checkbox">                                    <input value="4" name="Schedule[]" type="checkbox" <?php if (in_array(4,$_smarty_tpl->tpl_vars['schedule']->value)) {?>checked="checked"<?php }?> /> 周四                                </label>                                <label class="checkbox">                                    <input value="5" name="Schedule[]" type="checkbox" <?php if (in_array(5,$_smarty_tpl->tpl_vars['schedule']->value)) {?>checked="checked"<?php }?> /> 周五                                </label>                                <label class="checkbox">                                    <input value="6" name="Schedule[]" type="checkbox" <?php if (in_array(6,$_smarty_tpl->tpl_vars['schedule']->value)) {?>checked="checked"<?php }?> /> 周六                                </label>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span12 ">                        <label class="control-label">旅游主题：</label>                        <div class="controls">                            <label class="checkbox">                                <input value="0" name="Theme[]" type="checkbox" <?php if (in_array(0,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 地标                            </label>                            <label class="checkbox">                                <input value="1" name="Theme[]" type="checkbox" <?php if (in_array(1,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 文遗                            </label>                            <label class="checkbox">                                <input value="2" name="Theme[]" type="checkbox" <?php if (in_array(2,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 海岛                            </label>                            <label class="checkbox">                                <input value="3" name="Theme[]" type="checkbox" <?php if (in_array(3,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 亲子                            </label>                            <label class="checkbox">                                <input value="4" name="Theme[]" type="checkbox" <?php if (in_array(4,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 游轮                            </label>                            <label class="checkbox">                                <input value="5" name="Theme[]" type="checkbox" <?php if (in_array(5,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 徒步                            </label>                            <label class="checkbox">                                <input value="6" name="Theme[]" type="checkbox" <?php if (in_array(6,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 温泉                            </label>                            <label class="checkbox">                                <input value="7" name="Theme[]" type="checkbox" <?php if (in_array(7,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 滑雪                            </label>                            <label class="checkbox">                                <input value="8" name="Theme[]" type="checkbox" <?php if (in_array(8,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 美食                            </label>                            <label class="checkbox">                                <input value="9" name="Theme[]" type="checkbox" <?php if (in_array(9,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 游学                            </label>                            <label class="checkbox">                                <input value="10" name="Theme[]" type="checkbox" <?php if (in_array(10,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 访问                            </label>                            <label class="checkbox">                                <input value="11" name="Theme[]" type="checkbox" <?php if (in_array(11,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 自驾                            </label>                            <label class="checkbox">                                <input value="12" name="Theme[]" type="checkbox" <?php if (in_array(12,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 高尔夫                            </label>                            <label class="checkbox">                                <input value="13" name="Theme[]" type="checkbox" <?php if (in_array(13,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 潜水                            </label>                            <label class="checkbox">                                <input value="14" name="Theme[]" type="checkbox" <?php if (in_array(14,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 运动                            </label>                            <label class="checkbox">                                <input value="15" name="Theme[]" type="checkbox" <?php if (in_array(15,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 节庆                            </label>                            <label class="checkbox">                                <input value="16" name="Theme[]" type="checkbox" <?php if (in_array(16,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 观赛                            </label>                            <label class="checkbox">                                <input value="17" name="Theme[]" type="checkbox" <?php if (in_array(17,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 摄影                            </label>                            <label class="checkbox">                                <input value="18" name="Theme[]" type="checkbox" <?php if (in_array(18,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 探险                            </label>                            <label class="checkbox">                                <input value="19" name="Theme[]" type="checkbox" <?php if (in_array(19,$_smarty_tpl->tpl_vars['theme']->value)) {?>checked="checked"<?php }?> /> 考察                            </label>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span12 ">                        <div class="control-group">                            <label class="control-label">价格包含：</label>                            <div class="controls">                                <textarea id="PriceInclude" name="PriceInclude" style="width:800px;height:60px;margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['PriceInclude'];?>
</textarea>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span12 ">                        <div class="control-group">                            <label class="control-label">价格不包含：</label>                            <div class="controls">                                <textarea id="PriceNoInclude" name="PriceNoInclude" style="width:800px;height:60px;margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['PriceNoInclude'];?>
</textarea>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span12 ">                        <div class="control-group">                            <label class="control-label">线路简介：</label>                            <div class="controls">                                <textarea id="Introduction" name="Introduction" style="width:800px;height:60px;margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['Introduction'];?>
</textarea>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span12 ">                        <div class="control-group">                            <label class="control-label">线路详情：</label>                            <div class="controls">                                <textarea id="Detail" name="Detail" style="width:800px;height:150px;margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['Detail'];?>
</textarea>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span12 ">                        <div class="control-group">                            <label class="control-label">备注：</label>                            <div class="controls">                                <textarea maxlength="200" style="width:800px;height:60px;margin-top:10px;" name="Notice" id="Notice"><?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['Notice'];?>
</textarea>                            </div>                        </div>                    </div>                </div>                <div class="form-actions text-center">                    <button type="submit" class="btn blue"><i class="icon-ok"></i> 保存</button>                </div>            </form>            <!-- END FORM-->        </div>    </div></div><input id="save_error" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['save_error']->value;?>
"/><input type="hidden" id="app_http_url" name="app_http_url" value="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
"/><!-- END FOOTER --><!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --><!-- BEGIN CORE PLUGINS --><script src="../../../../statics/resource/common/plugs/metronic/js/jquery-1.10.1.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script><!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip --><script src="../../../../statics/resource/common/plugs/metronic/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/bootstrap.min.js" type="text/javascript"></script><!--[if lt IE 9]><script src="../../../../statics/resource/common/plugs/metronic/js/excanvas.min.js"></script><script src="../../../../statics/resource/common/plugs/metronic/js/respond.min.js"></script><![endif]--><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.slimscroll.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.blockui.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.cookie.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.uniform.min.js" type="text/javascript"></script><!-- END CORE PLUGINS --><!-- BEGIN PAGE LEVEL PLUGINS --><script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/select2.min.js"></script><!-- END PAGE LEVEL PLUGINS --><!-- BEGIN PAGE LEVEL SCRIPTS --><script src="../../../../statics/resource/common/plugs/metronic/js/app.js"></script><script src="../../../../statics/resource/common/plugs/metronic/js/form-samples.js"></script><script type="text/javascript" src="../../../../statics/resource/common/js/jquery.ui.min.js"></script><script type="text/javascript" src="../../../../statics/resource/common/plugs/umeditor/umeditor.config.js"></script><script type="text/javascript" src="../../../../statics/resource/common/plugs/umeditor/umeditor.min.js"></script><script type="text/javascript" src="../../../../statics/resource/common/plugs/umeditor/lang/zh-cn/zh-cn.js"></script><!-- END PAGE LEVEL SCRIPTS --><script>    jQuery(document).ready(function () {        // initiate layout and plugins        App.init();        FormSamples.init();    });    var app_http_url = $("#app_http_url").val();    $(document).ready(function () {        //富文本编辑器//        var um = UM.getEditor('Detail',{//            //这里可以选择自己需要的工具按钮名称,此处仅选择如下七个//            toolbar:['fullscreen source undo redo bold italic underline link unlink insertorderedlist insertunorderedlist paragraph  fontfamily fontsize'],//            //focus时自动清空初始化时的内容//            autoClearinitialContent:true,//            //关闭字数统计//            wordCount:false,//            //关闭elementPath//            elementPathEnabled:false,//            //默认的编辑区域高度//            initialFrameHeight:300//            //更多其他参数，请参考umeditor.config.js中的配置项//        });        //日历控件        $("#StartDate,#EndDate").datepicker({            changeMonth: true,            changeYear: true,            dateFormat: 'yy-mm-dd'        });        //保存提示信息        if ($("#save_error").val()) { //保存失败提示            alert("保存失败!");        }    });    //form表单验证    function chkinput(form) {        if ($.trim(form.LineCode.value) == "") {            alert("请输入线路唯一标识!");            form.LineCode.select();            return(false);        }        return true;    }</script><!-- END JAVASCRIPTS --></body><!-- END BODY --></html><?php }} ?>
