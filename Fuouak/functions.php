<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/
/*
 * 获取浏览次数
 */
function getViewsStr($widget, $format = "{views} ♡") {
    $fields = unserialize($widget->fields);
    if (array_key_exists('views',$fields))
        $views = (!empty($fields['views'])) ? intval($fields['views']) : 0;
    else
        $views = 0;
    
    //增加浏览次数
    if ($widget->is('single')) {
        $views = $views + 1;
        $widget->setField('views', 'str', strval($views), $widget->cid);
    }
    return str_replace("{views}", $views, $format);
}
//文章字数统计
function  art_count ($cid){
    $db=Typecho_Db::get ();
    $rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));
    $text = preg_replace("/[^\x{4e00}-\x{9fa5}]/u", "", $rs['text']);
    echo mb_strlen($text,'UTF-8');
}
/**
* 显示下一篇
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function theNext($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created > ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_ASC)
->limit(1);
$content = $db->fetchRow($sql);
 
if ($content) {
$content = $widget->filter($content);
$link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '">下一篇</a>';
echo $link;
} else {
echo $default;
}
}
 
/**
* 显示上一篇
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function thePrev($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created < ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_DESC)
->limit(1);
$content = $db->fetchRow($sql);
if ($content) {
$content = $widget->filter($content);
$link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '">上一篇</a>';
echo $link;
} else {
echo $default;
}
}

//百度收录
function baidu_record() {
$url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

if(checkBaidu($url)==1)
{echo "已收录";
}
else
{echo "<a style=\"color:red;\" rel=\"external nofollow\" title=\"点击提交收录！\" target=\"_blank\" href=\"http://zhanzhang.baidu.com/sitesubmit/index?sitename=$url\">未收录</a>";}
}
  function checkBaidu($url) { 
    $url = 'http://www.baidu.com/s?wd=' . urlencode($url); 
    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_URL, $url); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
    $rs = curl_exec($curl); 
    curl_close($curl); 
    if (!strpos($rs, '没有找到')) { //没有找到说明已被百度收录 
        return 1; 
    } else { 
        return -1; 
    } 
}





