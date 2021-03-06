<?php 
namespace firdows\orgchart; 
use yii\web\AssetBundle; 


class OrgChartAsset extends AssetBundle { 
    public $sourcePath = '@bower/orgchart/dist'; //กำหนดที่เก็บ Asset(css,js,image  ) 
    public $css = [  //กำหนดลงทะเบียนไฟล์ css 
      'css/jquery.orgchart.css',
    ]; 
    //public $cssOptions = ['position' => \yii\web\View::POS_HEAD];
  
    public $js = [ //กำหนดลงทะเบียนไฟล์ javascript 
      'js/jquery.orgchart.js', 
    ]; 

    public $depends = [ //กำหนดให้ลงทะเบียนหลังจาก Asset เหล่านี้ 
      'yii\bootstrap\BootstrapPluginAsset',
      'firdows\orgchart\Html2CanvasAsset',
    ]; 
  
    //public $publishOptions = ['forceCopy' => true];
}
