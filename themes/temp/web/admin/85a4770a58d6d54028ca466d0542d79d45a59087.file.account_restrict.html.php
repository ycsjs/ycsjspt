<?php /* Smarty version Smarty-3.1.15, created on 2016-01-02 00:52:01
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/account/account_restrict.html" */ ?>
<?php /*%%SmartyHeaderCode:7010449765686aeb154a611-49857385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85a4770a58d6d54028ca466d0542d79d45a59087' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/account/account_restrict.html',
      1 => 1420905550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7010449765686aeb154a611-49857385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'all_menu' => 0,
    'val' => 0,
    'va' => 0,
    'key' => 0,
    'ke' => 0,
    'k' => 0,
    'account_restrict' => 0,
    'v' => 0,
    'account_info' => 0,
    'app_http_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5686aeb15edc50_29809363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5686aeb15edc50_29809363')) {function content_5686aeb15edc50_29809363($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>尤物后台管理系统-管理员权限管理</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="../../../../statics/resource/common/plugs/metronic/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../../../statics/resource/common/plugs/metronic/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../../../statics/resource/common/plugs/metronic/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../../../statics/resource/common/plugs/metronic/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="../../../../statics/resource/common/plugs/metronic/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="../../../../statics/resource/common/plugs/metronic/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="../../../../statics/resource/common/plugs/metronic/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="../../../../statics/resource/common/plugs/metronic/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/chosen.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/select2_metro.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/clockface.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/bootstrap-toggle-buttons.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="../../../../statics/resource/common/plugs/metronic/css/multi-select-metro.css" />
    <link href="../../../../statics/resource/common/plugs/metronic/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="../../../../statics/resource/common/plugs/metronic/image/favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed" style="background-color:#FFFFFF !important">

<!-- BEGIN SAMPLE FORM PORTLET-->
<div class="portlet box blue margin-top-10">
<div class="portlet-title">
    <div class="caption"><i class="icon-reorder"></i>管理员权限管理</div>
    <div class="tools">
        <a href="javascript:;" class="collapse"></a>
    </div>
</div>
<div class="portlet-body form">
<!-- BEGIN FORM-->

    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
        <div class="alert alert-success">
            <label class="control-label"><strong style="font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['menu_name'];?>
</strong> &nbsp;<input type="checkbox" value="" class="yes_menu_all" select_all="false"/>全选</label>
            <?php  $_smarty_tpl->tpl_vars['va'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['va']->_loop = false;
 $_smarty_tpl->tpl_vars['ke'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['menu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['va']->key => $_smarty_tpl->tpl_vars['va']->value) {
$_smarty_tpl->tpl_vars['va']->_loop = true;
 $_smarty_tpl->tpl_vars['ke']->value = $_smarty_tpl->tpl_vars['va']->key;
?>
                <div class="alert alert-info">
                    <label class="control-label"><strong style="font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['va']->value['menu_name'];?>
</strong> &nbsp;<input type="checkbox" value="" class="yes_menu_all" select_all="false"/>全选</label>
                    <div class="controls">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['va']->value['menu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <label class="checkbox alert" restrict_menu=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['ke']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 >
                                <input type="checkbox" class='restrict' value=""
                                <?php if (($_smarty_tpl->tpl_vars['account_restrict']->value[$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['ke']->value][$_smarty_tpl->tpl_vars['k']->value]==1)) {?>
                                has_restrict='true'
                                <?php } else { ?>
                                has_restrict='false'
                                <?php }?>
                                />
                                <?php echo $_smarty_tpl->tpl_vars['v']->value['menu_name'];?>

                            </label>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>




<div class="form-actions text-center">
    <input type="hidden" id="account_id" value="<?php echo $_smarty_tpl->tpl_vars['account_info']->value['ID'];?>
"/>
    <input type="hidden" id="app_http_url" value="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
"/>
    <button type="submit" id="save_restrict" class="btn blue">保存</button>
    <a href="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
Account/ListAccount"><button type="button" id="cancel_restrict" class="btn">返回</button></a>
</div>

<!-- END FORM-->
</div>
</div>
<!-- END SAMPLE FORM PORTLET-->

<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="../../../../statics/resource/common/plugs/metronic/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="../../../../statics/resource/common/plugs/metronic/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../../../statics/resource/common/plugs/metronic/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="../../../../statics/resource/common/plugs/metronic/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="../../../../statics/resource/common/plugs/metronic/js/excanvas.min.js"></script>
<script src="../../../../statics/resource/common/plugs/metronic/js/respond.min.js"></script>
<![endif]-->
<script src="../../../../statics/resource/common/plugs/metronic/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../../../statics/resource/common/plugs/metronic/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../../../statics/resource/common/plugs/metronic/js/jquery.cookie.min.js" type="text/javascript"></script>
<script src="../../../../statics/resource/common/plugs/metronic/js/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/ckeditor.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/select2.min.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/jquery.toggle.buttons.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/clockface.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/date.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/daterangepicker.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/jquery.input-ip-address-control-1.0.min.js"></script>
<script type="text/javascript" src="../../../../statics/resource/common/plugs/metronic/js/jquery.multi-select.js"></script>
<script src="../../../../statics/resource/common/plugs/metronic/js/bootstrap-modal.js" type="text/javascript" ></script>
<script src="../../../../statics/resource/common/plugs/metronic/js/bootstrap-modalmanager.js" type="text/javascript" ></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../../../statics/resource/common/plugs/metronic/js/app.js"></script>
<script src="../../../../statics/resource/common/plugs/metronic/js/form-components.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>

    $(document).ready(function () {
        App.init();
        FormComponents.init();

        //初始化打钩有权限的菜单项
        $(".restrict").each(function () {
            if ($(this).attr("has_restrict") == "true") {
                $(this).parent("span").addClass("checked");
            }
        });

        //逐个点击菜单项
        $(".restrict").click(function () {
            if ($(this).attr("has_restrict") == "true") {
                $(this).parent("span").removeClass("checked");
                $(this).attr("has_restrict", "false");
            } else {
                $(this).parent("span").addClass("checked");
                $(this).attr("has_restrict", "true");
            }
        });

        //全选按钮点击
        $(".yes_menu_all").click(function () {
            if (!($(this).attr("select_all") == "false")) {
                $(this).parent().parent().parent().parent().find(".yes_menu_all").parent("span").removeClass("checked");
                $(this).parent().parent().parent().parent().find(".restrict").parent("span").removeClass("checked");
                $(this).parent().parent().parent().parent().find(".restrict").attr("has_restrict",false);
                $(this).attr("select_all", "false");
            } else {
                $(this).parent().parent().parent().parent().find(".yes_menu_all").parent("span").addClass("checked");
                $(this).parent().parent().parent().parent().find(".restrict").parent("span").addClass("checked");
                $(this).parent().parent().parent().parent().find(".restrict").attr("has_restrict",true);
                $(this).attr("select_all", "true");
            }
        });

        //保存权限
        $("#save_restrict").click(function () {
            var restrict = [];
            $(".restrict").each(function () {
                if ($(this).attr("has_restrict") == "true") {
                    var restrict_menu = $(this).parent().parent().parent().attr("restrict_menu");
                    restrict.push(restrict_menu);
                }
            });
            var app_http_url = $("#app_http_url").val();
            var restrict_str = restrict.join(":");
            var account_id = $.trim($("#account_id").val());
            if (account_id !== '' && restrict_str !== '') {
                $.ajax({
                    type: "get",
                    url: app_http_url + "Account/AjaxSaveRestrictAccount",
                    dataType: "json",
                    data: {restrict_str: restrict_str, account_id: account_id},
                    success: function (data) {
                        if (data) {
                            alert("修改成功!");
                        }
                    }
                });
            }
        });
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>
