<?php
/**
 * Fuouak 主题是自己写的一个主题，本来自己用，现在开源0v0
 * 
 * Email：i_suyc@163.com 
 * @package Typecho Replica Theme 
 * @author 福否阿卡
 * @version 1.0
 * @link http://blog.suyc.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<br>
<div><center><font style="font-size:18px"><b><?php $this->options->title() ?> -- 文章区 </b></font> [本站总文章区]</center></div>
<div id="body">
    <div class="container">
            <table >
                <br>
                <br>
				<div><span>本站域名：<a herf="<?php $this->options->siteUrl(); ?>"><?php $this->options->siteUrl(); ?></a></span><span style="padding-left: 50%;"><a href="<?php $this->options->feedUrl(); ?>">↑订阅本版</a></span>
				<br>
                <span>站长大人：<a herf="https://www.fufouaka.com">福否阿卡</a></span><div>
                <div style="padding-top: 10px;border-bottom: 3px solid #228B22;text-align: center;"></div>
              	<br>
                   <tr bgcolor="e8e8e8"  >
                        <td>ID</td>
                        <td>未</td>
                        <td>贴主</td>
                        <td>日期</td>
                      	<td>标签</td>
                        <td>板块</td>
                        <td>标题</td>
                        <td>人气</td>
                   </tr> 
                   <tr><?php while($this->next()): ?>
                        <td ><?php $this->cid(); ?></td>
                     	<td>◊</td>
                        <td><a><?php $this->author(); ?></a></td>
                        <td><?php $this->date('M j H:i'); ?></td>     
                        <td><a href="<?php $this->options->index("tag.php");?>"><?php $this->tags(',', true, 'none'); ?></a></td>
                        <td>○ <a href="<?php $this->permalink() ?>"><?php $this->title() ?><span style="color:#008080">(<?php echo art_count($this->cid); ?>字节)</span></a></td>
                        <td><?php $this->category(','); ?></td>
                        <td><span style="color:red;"><?php _e(getViewsStr($this));?></span></td>
                   </tr><?php endwhile; ?>
              </table>
        </div>
</div>
<?php $this->need('footer.php'); ?> 
  


