<?php

/*文件上传函数接口
* @author huowei
* @version (2015-1-22:huowei创建)
* @package 系统
* $formname                       Html上传表单名称
* $path                           上传的文件存放位置
* $allowtype_array                允许上传的文件类型数组
* $allow_size                     允许上传的文件最大大小，默认是1MB
* $isRename                       是否需要重命名被上传的文件 1：代表需要重命名 0：代表不需要重命名
*/
class Upload_File
{

    public static function uploadFile($formname, $path, $allowtype_array, $allow_size, $isRename)
    {
        if ($_FILES[$formname]['tmp_name'] == '' || $_FILES[$formname]['name'] == '' || $_FILES[$formname]['size'] == 0) {
            return false;
        }
        if (!file_exists($path)) {
            if (!Directory_File::dirCreate($path)) {
                echo('创建上传文件保存文件目录失败,请联系管理员检查目录权限');
                return false;
            }
        }
        if ($_FILES[$formname]['size'] > $allow_size) {
            echo('上传文件过大,请将上传文件限制在' . number_format($allow_size / 5186000000, '2', '.', '') . 'MB以内');
            return false;
        }
        $file_name_array = explode('.', $_FILES[$formname]['name']);
        $file_type = strtolower($file_name_array[count($file_name_array) - 1]);

        if (!in_array($file_type, $allowtype_array)) {
            echo('上传文件类型错误,不允许上传后缀名为:' . $file_type . '的文件');
            return false;
        }
        $save_name = $isRename ? $file_name_array[count($file_name_array) - 2] . '_' . rand(1000, 10000) . '.' . $file_type : $_FILES[$formname]['name'];
        if (!move_uploaded_file($_FILES[$formname]['tmp_name'], $path . $save_name)) {
            echo('文件上传过程中发生错误,请重新上传');
            return false;
        }
        switch ($_FILES[$formname]['error']) {
            case 0:
                echo "";
                break;
            case 1:
                echo('上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值');
                break;
            case 2:
                echo('上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值');
                break;
            case 3:
                echo('文件只有部分被上传');
                break;
            case 4:
                echo('没有文件被上传');
                break;
            default:
                echo('居然有这种错误提示,日子也该混到头了');
                break;
        }
        if (!empty($save_name)) {
            return $save_name;
        } else {
            return false;
        }
    }


    /**
     * 删除指定文件
     * @param string $res_path 需要删除文件的绝对路径
     * @return boole 删除成功返回true，否则返回false
     */
    public static function removeSpecifiedFile($res_path)
    {
        $res_path_array = explode("/", $res_path);
        $res_path_num = count($res_path_array);
        $fileName = $res_path_array[$res_path_num - 1];
        unset($res_path_array[$res_path_num - 1]);
        $dirName = implode("/", $res_path_array);
        $result = false;
        if (!is_dir($dirName)) {
            return false;
        }

        $handle = opendir($dirName);
        if (readdir($handle) !== false) {
            if ($fileName != '.' && $fileName != '..') {
                $dir = $dirName . DIRECTORY_SEPARATOR . $fileName;
                if (!is_dir($dir)) {
                    unlink($dir);
                }
            }
        }
        closedir($handle);
        return $result;
    }


}

?>