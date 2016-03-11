<?php
/*
 * 生成验证码类
 * 使用方法
 * session_start();
 * require_once('ValidationCode.class.php');
 * $image = new ValidationCode('80','20','4');    //图片长度、宽度、字符个数
 * $image->outImg();
 * $_SESSION['validationcode'] = $image->checkcode; //存贮验证码到 $_SESSION 中
*/
class Validation_Code
{
    private $width, $height, $codenum;
    private $codestr = array("A", "B", "C", "D", "E", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "2", "3", "4", "5", "6", "7", "8", "9");
    public $checkcode; //产生的验证码
    private $checkimage; //验证码图片
    private $disturbColor = ''; //干扰像素
    private $cacheType = 1;

    /*
    * 参数：（宽度，高度，字符个数）
    */
    public function __construct($width = '80', $height = '20', $codenum = '4', $cacheType = 1)
    {
        $this->width = $width;
        $this->height = $height;
        $this->codenum = $codenum;
        $this->cacheType = $cacheType;
    }

    public function __destruct()
    {
        unset($this->width, $this->height, $this->codenum);
    }

    /**
     * 输出图片
     */
    public function outImg()
    {
        //产生验证码
        $this->createCode();
        //产生图片
        $this->createImage();
        //设置干扰像素
        $this->setDisturbColor();
        //往图片上写验证码
        $this->writeCheckCodeToImage();
        $type = $this->cacheType;
        //同一页面生成2个不同的验证码存放到session中
        switch ($type) {
            case 1:
                $_SESSION['captchaCode'] = $this->checkcode;
                break;
            case 2:
                $_SESSION['txtLoginCaptcha'] = $this->checkcode;
                break;
            default:
                $_SESSION['captchaCode'] = $this->checkcode;
                break;
        }

        //输出头
        $this->outFileHeader();
        imagepng($this->checkimage);
        imagedestroy($this->checkimage);
    }

    /**
     * 输出头
     */
    private function outFileHeader()
    {
        ob_clean();
        header("Content-type: image/png");
    }

    /**
     * 产生验证码
     */
    private function createCode()
    {
        $this->checkcode = $this->getrandstr($this->codenum);
    }

    /*
    * 从指的数组中随机取得指定长度的字符串
    */
    public function getrandstr($str_len)
    {
        $characters = $this->codestr;
        $re_str = "";
        shuffle($characters);
        for (; strlen($re_str) < $str_len;) {
            $re_str .= $characters[mt_rand(0, count($characters))];
        }
        return $re_str;
    }

    /**
     * 产生验证码图片
     */
    private function createImage()
    {
        $this->checkimage = @imagecreate($this->width, $this->height);
        $back = imagecolorallocate($this->checkimage, 255, 255, 255);
        $border = imagecolorallocate($this->checkimage, 255, 255, 255);
        imagefilledrectangle($this->checkimage, 0, 0, $this->width - 1, $this->height - 1, $back); // 白色底
        imagerectangle($this->checkimage, 0, 0, $this->width - 1, $this->height - 1, $border); // 黑色边框
    }

    /**
     * 设置图片的干扰像素
     */
    private function setDisturbColor()
    {
        for ($i = 0; $i <= 200; $i++) {
            $this->disturbColor = imagecolorallocate($this->checkimage, rand(0, 255), rand(0, 255), rand(0, 255));
            imagesetpixel($this->checkimage, rand(2, 128), rand(2, 38), $this->disturbColor);
        }
    }

    /**
     * 在验证码图片上逐个画上验证码
     */
    private function writeCheckCodeToImage()
    {
        for ($i = 0; $i <= $this->codenum; $i++) {
            $bg_color = imagecolorallocate($this->checkimage, rand(0, 255), rand(0, 128), rand(0, 255));
            $x = floor($this->width / $this->codenum) * $i;
            $y = rand(0, $this->height - 15);
            imagechar($this->checkimage, rand(8, 10), $x, $y, $this->checkcode[$i], $bg_color);
        }
    }

}

?>