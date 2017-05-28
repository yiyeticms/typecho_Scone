<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

    /*$form->addInput($css->multiMode());

    $Compress= new Typecho_Widget_Helper_Form_Element_Radio('Compress',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用HTML代码压缩功能'), _t('默认禁止，启用则会gzip压缩HTML代码'));
    $form->addInput($Compress);*/

function themeConfig($form) {

    $gyw = new Typecho_Widget_Helper_Form_Element_Textarea('gyw', NULL, NULL, _t('关于我'), _t('在这里填入你的个人介绍，默认显示在首页'));
    
    $form->addInput($gyw);

    $glink = new Typecho_Widget_Helper_Form_Element_Text('glink', NULL, NULL, _t('你的github库'), _t('在这里填入你的github库地址'));
    $form->addInput($glink);

    $mlink = new Typecho_Widget_Helper_Form_Element_Text('mlink', NULL, NULL, _t('你的联系邮箱'), _t('在这里填入你的邮箱联系地址,其格式为（mailto:admin@yiyeti.cc）'));
    $form->addInput($mlink);

    $ico = new Typecho_Widget_Helper_Form_Element_Text('ico', NULL, NULL, _t('你的ico图标地址【必填】'), _t('在这里填入你的ICO图标地址，若没有你可以自行制作ico图标后放到站点根目录，在此处填入链接即可'));
    $form->addInput($ico);
}