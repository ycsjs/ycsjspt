<?php /* Smarty version Smarty-3.1.15, created on 2015-01-27 15:45:28
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods\goods_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:3003254c7391e507ac0-71338678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da30d9d16a0402af3d676da569fae184fed4fc91' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods\\goods_edit.html',
      1 => 1422344723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3003254c7391e507ac0-71338678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c7391e86ed14_11655867',
  'variables' => 
  array (
    'goods' => 0,
    'app_http_url' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c7391e86ed14_11655867')) {function content_54c7391e86ed14_11655867($_smarty_tpl) {?><!DOCTYPE html><!--[if IE 8]><html lang="en" class="ie8"> <![endif]--><!--[if IE 9]><html lang="en" class="ie9"> <![endif]--><!--[if !IE]><!--><html lang="en"> <!--<![endif]--><!-- BEGIN HEAD --><head>    <meta charset="utf-8"/>    <title>尤物后台管理系统-编辑商品</title>    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>    <meta content="" name="description"/>    <meta content="" name="author"/>    <!-- BEGIN GLOBAL MANDATORY STYLES -->    <link href="../../../../statics/resource/common/plugs/metronic/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/style-metro.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/style.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/style-responsive.css" rel="stylesheet" type="text/css"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>    <link href="../../../../statics/resource/common/plugs/metronic/css/uniform.default.css" rel="stylesheet" type="text/css"/>    <!-- END GLOBAL MANDATORY STYLES -->    <link href="../../../../statics/resource/common/plugs/umeditor/themes/default/css/umeditor.css" rel="stylesheet" type="text/css" />    <link href="../../../../statics/resource/common/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>    <!-- END GLOBAL MANDATORY STYLES -->    <!-- BEGIN PAGE LEVEL STYLES -->    <link href="../../../../statics/resource/common/plugs/metronic/css/select2_metro.css" rel="stylesheet" type="text/css" />    <!-- END PAGE LEVEL SCRIPTS -->    <link rel="shortcut icon" href="../../../../statics/resource/common/plugs/metronic/image/favicon.ico"/></head><!-- END HEAD --><!-- BEGIN BODY --><body class="page-header-fixed" style="background-color:#FFFFFF !important"><div class="tab-pane  margin-top-10">    <div class="portlet box green">        <div class="portlet-title">            <div class="caption"><i class="icon-reorder"></i>编辑<?php echo $_smarty_tpl->tpl_vars['goods']->value['NameCn'];?>
商品</div>            <div class="tools">                <a href="javascript:;" class="collapse"></a>            </div>        </div>        <div class="portlet-body form">            <!-- BEGIN FORM-->            <h3 class="form-section">                <h3 class="form-section">                    <?php echo $_smarty_tpl->tpl_vars['goods']->value['NameCn'];?>
详细信息：                    <a href="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
Goods/ListGoods"><button class="btn black" style="float: right">商品列表<i class="m-icon-swapright m-icon-white"></i></button></a>                    <a href="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
Goods/ViewGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><button class="btn blue" style="float: right">查看商品<i class="m-icon-swapright m-icon-white"></i></button></a>                    <a href="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
Goods/PictureGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><button class="btn purple" style="float: right">图片管理<i class="m-icon-swapright m-icon-white"></i></button></a>                </h3>            </h3>            <form action="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
Goods/EditGoods" method="post"  onSubmit="return chkinput(this)">                <div class="row-fluid">                    <div class="span6">                        <div class="control-group">                            <label class="control-label">商品唯一编号 *：</label>                            <div class="controls">                                <input maxlength="200" name="GoodsCode" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['GoodsCode'];?>
" class="m-wrap span12" />                            </div>                        </div>                    </div>                    <div class="span6">                        <div class="control-group">                            <label class="control-label">商品中文名称：</label>                            <div class="controls">                                <input maxlength="200" name="NameCn" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['NameCn'];?>
" class="m-wrap span12" />                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span6 ">                        <div class="control-group">                            <label class="control-label">商品英文名称：</label>                            <div class="controls">                                <input maxlength="200" name="NameEn" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['NameEn'];?>
" class="m-wrap span12" />                            </div>                        </div>                    </div>                    <div class="span6">                        <div class="control-group">                            <label class="control-label">商品拼音：</label>                            <div class="controls">                                <input maxlength="200" name="NamePinYin" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['NamePinYin'];?>
" class="m-wrap span12" />                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span3 ">                        <div class="control-group">                            <label class="control-label">商品品牌：</label>                            <div class="controls">                                <select name="BrandId" id="BrandId">                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['BrandId']==0) {?>selected="selected"<?php }?> value="0">七匹狼</option>                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['BrandId']==1) {?>selected="selected"<?php }?>  value="1" >贵人鸟</option>                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['BrandId']==2) {?>selected="selected"<?php }?>  value="2" >骆驼</option>                                </select>                            </div>                        </div>                    </div>                    <div class="span3">                        <div class="control-group">                            <label class="control-label">商品所属分类：</label>                            <div class="controls">                                <select name="CategoryId" id="CategoryId">                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['CategoryId']==0) {?>selected="selected"<?php }?> value="0">笔记本</option>                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['CategoryId']==1) {?>selected="selected"<?php }?>  value="1" >上衣</option>                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['CategoryId']==2) {?>selected="selected"<?php }?>  value="2" >Ipad</option>                                </select>                            </div>                        </div>                    </div>                    <div class="span3">                        <div class="control-group">                            <label class="control-label">商品目标群体：</label>                            <div class="controls">                                <select name="GroupId" id="GroupId">                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['GroupId']==0) {?>selected="selected"<?php }?> value="0">贤惠的她</option>                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['GroupId']==1) {?>selected="selected"<?php }?>  value="1">辛苦的她</option>                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['GroupId']==2) {?>selected="selected"<?php }?>  value="2">老公</option>                                </select>                            </div>                        </div>                    </div>                    <div class="span3 ">                        <div class="control-group">                            <label class="control-label">商品供应商：</label>                            <div class="controls">                                <select name="GoodsAgentId" id="GoodsAgentId">                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['GoodsAgentId']==0) {?>selected="selected"<?php }?> value="0">京东</option>                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['GoodsAgentId']==1) {?>selected="selected"<?php }?>  value="1" >亚马逊</option>                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['GoodsAgentId']==2) {?>selected="selected"<?php }?>  value="2" >天猫</option>                                </select>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span3">                        <div class="control-group">                            <label class="control-label">采购价：</label>                            <div class="controls">                                <input size="20" maxlength="20" name="BuyPrice" id="BuyPrice" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['BuyPrice'];?>
" class="m-wrap span12" />                            </div>                        </div>                    </div>                    <div class="span3">                        <div class="control-group">                            <label class="control-label">销售价：</label>                            <div class="controls">                                <input size="20" maxlength="20" name="SalePrice" id="SalePrice" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['SalePrice'];?>
" class="m-wrap span12" />                            </div>                        </div>                    </div>                    <div class="span3">                        <div class="control-group">                            <label class="control-label">市场价：</label>                            <div class="controls">                                <input size="20" maxlength="20" name="MarketPrice" id="MarketPrice" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['MarketPrice'];?>
" class="m-wrap span12" />                            </div>                        </div>                    </div>                    <div class="span3">                        <div class="control-group">                            <label class="control-label">币种：</label>                            <div class="controls">                                <select name="MoneyType" id="MoneyType">                                    <option <?php if ($_smarty_tpl->tpl_vars['goods']->value['MoneyType']==0) {?>selected="selected"<?php }?> value="0">人民币</option>                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['MoneyType']==1) {?>selected="selected"<?php }?>>美元</option>                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['goods']->value['MoneyType']==2) {?>selected="selected"<?php }?>>港币</option>                                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['goods']->value['MoneyType']==3) {?>selected="selected"<?php }?>>日元</option>                                    <option value="4" <?php if ($_smarty_tpl->tpl_vars['goods']->value['MoneyType']==4) {?>selected="selected"<?php }?>>欧元</option>                                </select>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span2 ">                        <div class="control-group">                            <label class="control-label">促销开始日期：</label>                            <div class="controls">                                <input  maxlength="200" name="PromotionStartDate" id="PromotionStartDate" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['PromotionStartDate'];?>
" class="m-wrap span12" placeholder="">                            </div>                        </div>                    </div>                    <div class="span2">                        <div class="control-group">                            <label class="control-label">促销结束日期：</label>                            <div class="controls">                                <input  maxlength="200" name="PromotionEndDate" id="PromotionEndDate" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['PromotionEndDate'];?>
" class="m-wrap span12" placeholder="">                            </div>                        </div>                    </div>                    <div class="span2">                        <div class="control-group">                            <label class="control-label">促销价：</label>                            <div class="controls">                                <input size="20" maxlength="20" name="PromotionPrice" id="PromotionPrice" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['PromotionPrice'];?>
" class="m-wrap span12" />                            </div>                        </div>                    </div>                    <div class="span2">                        <div class="control-group">                            <label class="control-label">是否促销：</label>                            <div class="controls">                                <label class="radio">                                    <div class="radio">                                        <input id="Goods_Promotion_0" value="0" name="Promotion" type="radio" <?php if ($_smarty_tpl->tpl_vars['goods']->value['Promotion']==0) {?>checked="checked" <?php }?> />                                    </div>                                    否                                </label>                                <label class="radio">                                    <div class="radio">                                        <input id="Goods_Promotion_1" value="1" name="Promotion" type="radio" <?php if ($_smarty_tpl->tpl_vars['goods']->value['Promotion']==1) {?>checked="checked" <?php }?> />                                    </div>                                    是                                </label>                            </div>                        </div>                    </div>                    <div class="span2">                        <div class="control-group">                            <label class="control-label">是否热销：</label>                            <div class="controls">                                <label class="radio">                                    <div class="radio">                                        <input id="Goods_Hot_0" value="0" name="Hot" type="radio" <?php if ($_smarty_tpl->tpl_vars['goods']->value['Hot']==0) {?>checked="checked" <?php }?> />                                    </div>                                    否                                </label>                                <label class="radio">                                    <div class="radio">                                        <input id="Goods_Hot_1" value="1" name="Hot" type="radio" <?php if ($_smarty_tpl->tpl_vars['goods']->value['Hot']==1) {?>checked="checked" <?php }?> />                                    </div>                                    是                                </label>                            </div>                        </div>                    </div>                    <div class="span2">                        <div class="control-group">                            <label class="control-label">是否上架：</label>                            <div class="controls">                                <label class="radio">                                    <div class="radio">                                        <input id="Goods_Valid_0" value="0" name="Valid" type="radio" <?php if ($_smarty_tpl->tpl_vars['goods']->value['Valid']==0) {?>checked="checked" <?php }?> />                                    </div>                                    否                                </label>                                <label class="radio">                                    <div class="radio">                                        <input id="Goods_Valid_1" value="1" name="Valid" type="radio" <?php if ($_smarty_tpl->tpl_vars['goods']->value['Valid']==1) {?>checked="checked" <?php }?> />                                    </div>                                    是                                </label>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span3">                        <div class="control-group">                            <label class="control-label">配送价格：</label>                            <div class="controls">                                <input size="20" maxlength="20" name="DeliveryPrice" id="DeliveryPrice" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['DeliveryPrice'];?>
" class="m-wrap span12" />                            </div>                        </div>                    </div>                    <div class="span3">                        <div class="control-group">                            <label class="control-label">是否配送：</label>                            <div class="controls">                                <label class="radio">                                    <div class="radio">                                        <input id="Goods_Delivery_0" value="0" name="Delivery" type="radio" <?php if ($_smarty_tpl->tpl_vars['goods']->value['Delivery']==0) {?>checked="checked" <?php }?> />                                    </div>                                    否                                </label>                                <label class="radio">                                    <div class="radio">                                        <input id="Goods_Delivery_1" value="1" name="Delivery" type="radio" <?php if ($_smarty_tpl->tpl_vars['goods']->value['Delivery']==1) {?>checked="checked" <?php }?> />                                    </div>                                    是                                </label>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span12 ">                        <div class="control-group">                            <label class="control-label">商品简介：</label>                            <div class="controls">                                <textarea id="Introduction" name="Introduction" style="width:800px;height:100px;margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['goods']->value['Introduction'];?>
</textarea>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span12 ">                        <div class="control-group">                            <label class="control-label">商品详细信息：</label>                            <div class="controls">                                <textarea id="Detail" name="Detail" style="width:800px;height:100px;margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['goods']->value['Detail'];?>
</textarea>                            </div>                        </div>                    </div>                </div>                <div class="row-fluid">                    <div class="span12 ">                        <div class="control-group">                            <label class="control-label">备注：</label>                            <div class="controls">                                <textarea maxlength="200" style="width:800px;height:60px;margin-top:10px;" name="Notice" id="Notice"><?php echo $_smarty_tpl->tpl_vars['goods']->value['Notice'];?>
</textarea>                            </div>                        </div>                    </div>                </div>                <div class="form-actions text-center">                    <input id="goods_id" name="goods_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"/>                    <button type="submit" class="btn blue"><i class="icon-ok"></i> 保存</button>                </div>            </form>            <!-- END FORM-->        </div>    </div></div><input id="save_error" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['save_error']->value;?>
"/><input type="hidden" id="app_http_url" name="app_http_url" value="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
"/><!-- END FOOTER --><!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --><!-- BEGIN CORE PLUGINS --><script src="../../../../statics/resource/common/plugs/metronic/js/jquery-1.10.1.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script><!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip --><script src="../../../../statics/resource/common/plugs/metronic/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/bootstrap.min.js" type="text/javascript"></script><!--[if lt IE 9]><script src="../../../../statics/resource/common/plugs/metronic/js/excanvas.min.js"></script><script src="../../../../statics/resource/common/plugs/metronic/js/respond.min.js"></script><![endif]--><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.slimscroll.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.blockui.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.cookie.min.js" type="text/javascript"></script><script src="../../../../statics/resource/common/plugs/metronic/js/jquery.uniform.min.js" type="text/javascript"></script><!-- END CORE PLUGINS --><!-- BEGIN PAGE LEVEL PLUGINS --><script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/select2.min.js"></script><!-- END PAGE LEVEL PLUGINS --><!-- BEGIN PAGE LEVEL SCRIPTS --><script src="../../../../statics/resource/common/plugs/metronic/js/app.js"></script><script src="../../../../statics/resource/common/plugs/metronic/js/form-samples.js"></script><!-- END PAGE LEVEL SCRIPTS --><script>    jQuery(document).ready(function () {        // initiate layout and plugins        App.init();        FormSamples.init();    });    var app_http_url = $("#app_http_url").val();    $(document).ready(function () {        //日历控件        $("#PromotionStartDate,#PromotionEndDate").datepicker({            changeMonth: true,            changeYear: true,            dateFormat: 'yy-mm-dd'        });        //保存提示信息        if ($("#save_error").val()) { //保存失败提示            alert("保存失败!");        }    });    //form表单验证    function chkinput(form) {        if ($.trim(form.GoodsCode.value) == "") {            alert("请输入商品唯一编号!");            form.GoodsCode.select();            return(false);        }        return true;    }</script></body></html><?php }} ?>
