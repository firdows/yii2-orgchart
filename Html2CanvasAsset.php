<?php 
namespace firdows\orgchart; 
use yii\web\AssetBundle; 


class Html2CanvasAsset extends AssetBundle { 
    public $sourcePath = '@bower/html2canvas/build'; //กำหนดที่เก็บ Asset(css,js,image  ) 
    public $css = [  //กำหนดลงทะเบียนไฟล์ css 
     // 'css/jquery.orgchart.css',
    ]; 
    //public $cssOptions = ['position' => \yii\web\View::POS_HEAD];
  
    public $js = [ //กำหนดลงทะเบียนไฟล์ javascript 
      'html2canvas.min.js',
      'https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js',
    ]; 

    public $depends = [ //กำหนดให้ลงทะเบียนหลังจาก Asset เหล่านี้ 
      'yii\bootstrap\BootstrapPluginAsset',
    ]; 
  
    //public $publishOptions = ['forceCopy' => true];
}
