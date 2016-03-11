$(document).ready(function () {
    var params = {
        otherParams: [],
        fileInput: $("#fileImage").get(0),
        dragDrop: $("#fileDragArea").get(0),
        upButton: $("#fileSubmit").get(0),
        url: $("#uploadForm").attr("action"),
        filter: function (files) {
            var arrFiles = [];
            if (files.length > 20) {
                alert('每次上传图片应该小于20张。');
            } else {
                for (var i = 0, file; file = files[i]; i++) {
                    if (file.type.indexOf("image") == 0) {
                        if (file.size >= 1024000) {
                            alert('您这张"' + file.name + '"图片大小过大，应小于1M');
                        } else {
                            arrFiles.push(file);
                        }
                    } else {
                        alert('文件"' + file.name + '"不是图片。');
                    }
                }
            }
            return arrFiles;
        },
        onSelect: function (files) {
            var html = '', i = 0;
            $("#preview").html('<div class="upload_loading"></div>');
            var funAppendImage = function () {
                file = files[i];
                if (file) {
                    var reader = new FileReader()
                    reader.onload = function (e) {
                        html = html + "<div id='uploadList_" + i + "' class='upload_append_list mt10'><p><strong>" + file.name + "</strong>" +
                            "<a href='javascript:' class='upload_delete' title='删除' data-index='" + i + "'>删除</a><br />" +
                            "<img id='uploadImage_" + i + "' src='" + e.target.result + "' class='upload_image' /><br />" +
                            "<strong>标题：</strong><input type='text' size='32' val='' name='pictureTitle_" + i + "' id='pictureTitle_" + i + "'><br />" +
                            "<strong>描述：</strong><textarea  rows='1' cols='24'  name='pictureDescription_" + i + "' id='pictureDescription_" + i + "'></textarea></p>" +
                            "<span id='uploadProgress_" + i + "' class='upload_progress'></span>" +
                            "</div>";
                        i++;
                        funAppendImage();
                    }
                    reader.readAsDataURL(file);
                } else {
                    $("#preview").html(html);
                    if (html) {
                        //删除方法
                        $(".upload_delete").click(function () {
                            ZXXFILE.funDeleteFile(files[parseInt($(this).attr("data-index"))]);
                            return false;
                        });
//提交按钮显示
                        $("#fileSubmit").removeClass("hidden");
                    } else {
                        //提交按钮隐藏
                        $("#fileSubmit").addClass("hidden");
                    }
                }
            };
            funAppendImage();
        },
        fill: function () {
            if ($(".upload_append_list").length > 20) {
                alert("每次上传不可超过20张图片");
                return false;
            }
            return true;
        },
        onDelete: function (file) {
            $("#uploadList_" + file.index).fadeOut();
        },
        onDragOver: function () {
            $(this).addClass("upload_drag_hover");
        },
        onDragLeave: function () {
            $(this).removeClass("upload_drag_hover");
        },
        onProgress: function (file, loaded, total) {
            var eleProgress = $("#uploadProgress_" + file.index), percent = (loaded / total * 100).toFixed(2) + '%';
            eleProgress.show().html(percent);
        },
        onSuccess: function (file, response) {
            $("#uploadInf").append("<p>" + file.name + "上传成功，图片目录是：" + response + "</p>");
        },
        onFailure: function (file) {
            $("#uploadInf").append("<p>图片" + file.name + "上传失败！</p>");
            $("#uploadImage_" + file.index).css("opacity", 0.2);
        },
        onComplete: function () {
            //提交按钮隐藏
            $("#fileSubmit").addClass("hidden");
            //file控件value置空
            $("#fileImage").val("");
            $("#uploadInf").append("<p>当前图片全部上传完毕，可继续添加上传。</p>");
            window.location.reload();
        },
        getFullUri: function (file, i) {
            var url_params = "";
            if(upload_base_uri!==""&&upload_base_uri!==undefined){
                url_params = upload_base_uri;
            }else{
                url_params="/?1=1"
            }

            if (file.name) {
                url_params += "&picture_name=" + encodeURI(file.name);
            }

            if ($("#pictureTitle_" + i).val()) {
                url_params += "&picture_title=" + encodeURI($("#pictureTitle_" + i).val());
            }

            if ($("#pictureDescription_" + i).val()) {
                url_params += "&picture_description=" + encodeURI($("#pictureDescription_" + i).val());
            }
            return url_params;
        }
    };
    ZXXFILE = $.extend(ZXXFILE, params);
    ZXXFILE.init();
});


