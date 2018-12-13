<?php
/**
 * Link(link.php)
 *
 * @package custom
 */
?>

<?php $this->need('header.php'); ?>



                           <br>
                  <center><font style="font-size:18px"><b><?php $this->options->title() ?> -- 友链区 </b></font> [友情链接]</center>
<div id="body">
    <div class="container">
        <div>
<br>
				<span>本版地址：<a><?php $this->options->index("link.html");?></a></span><span style="padding-left: 35%;">
				<br>
                 <span>板块说明：</span><span style="color:#308080">有朋自远方来，不亦乐乎</span>
                 <div style=" padding-top: 10px;border-bottom: 3px solid #228B22;text-align: center;"></div>

				  <span>发帖人：<a  href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                  &nbsp;
                  &nbsp;
                  <span>本篇人气：<?php _e(getViewsStr($this));?></span>
                  &nbsp;
                  &nbsp;
                  <span>提交时间：<?php echo gmdate('Y-m-d H:i', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?></span>
                  <br>
                  <span>标题：<a><?php $this->options->title() ?><?php $this->title() ?>区</a></span>
                  <br>
                  <span>发帖站：<?php $this->options->title() ?>（<?php $this->date('r'); ?>）</span>
                  <br>
               

                  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    			  <section class="widget">
				  <h3 class="widget-title"><?php _e('友情链接'); ?></h3>
                  <ul type="circle">      
                  <a href="http://www.fufouaka.com">福否阿卡</a> &nbsp; &nbsp;<span>一个励志成为全栈的90后小伙子</span>
                  <br>
<br>
                  <a href="http://weyooz.cn">未由</a> &nbsp; &nbsp;&nbsp;<span>一个皮的不行的博客哦</span>

                  </ul>
				  </section>    
      			  <br>
                  <br>
		</div>
  
             <?php endif; ?>             

</div>
<footer id="footer" role="contentinfo">
      <div class="container" style="padding-top: 10px;border-bottom: 3px solid #228B22;text-align: center;"></div>
      		<div class="container">
                <span>[<a href="/">首页</a>]</span>
                <span>[<a href="<?php $this->options->index("file.html");?>"> 归档</a>]</span>
                <span>[<a href="<?php $this->options->index("words.html");?>"> 留言</a>]</span>
                <span>[<a href="<?php $this->options->index("search.html");?>"> 搜索</a>]</span>
                <span>[<a href="<?php $this->options->index("about.html");?>"> 关于站</a>]</span>
                <br>
                <div style="padding-top: 10px"><span>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> <a href="http://www.miitbeian.gov.cn">豫ICP备17039294号</a>
                        网站运行：<span id="htmer_time" style="color:#444444;">
                                <script type="text/javascript" language="javascript">
                                    function secondToDate(second) {
                                    if (!second) {
                                    return 0;
                                    }
                                    var time = new Array(0, 0, 0, 0, 0);
                                    if (second >= 365 * 24 * 3600) {
                                    time[0] = parseInt(second / (365 * 24 * 3600));
                                    second %= 365 * 24 * 3600;
                                    }
                                    if (second >= 24 * 3600) {
                                    time[1] = parseInt(second / (24 * 3600));
                                    second %= 24 * 3600;
                                    }
                                    if (second >= 3600) {
                                    time[2] = parseInt(second / 3600);
                                    second %= 3600;
                                    }
                                    if (second >= 60) {
                                    time[3] = parseInt(second / 60);
                                    second %= 60;
                                    }
                                    if (second > 0) {
                                    time[4] = second;
                                    }
                                    return time;
                                    }
                                    function setTime() {
                                    // 博客创建时间秒数，时间格式中，月比较特殊，是从0开始的，所以想要显示5月，得写4才行，如下
                                    var create_time = Math.round(new Date(Date.UTC(2018, 2, 15, 0, 0, 0))//修改建站时间
                                    .getTime() / 1000);
                                    // 当前时间秒数,增加时区的差异
                                    var timestamp = Math.round((new Date().getTime() + 8 * 60 * 60 * 1000) / 1000);
                                    currentTime = secondToDate((timestamp - create_time));
                                    currentTimeHtml = currentTime[0] + '年' + currentTime[1] + '天'
                                    + currentTime[2] + '时' + currentTime[3] + '分' + currentTime[4]
                                    + '秒';
                                    document.getElementById("htmer_time").innerHTML = currentTimeHtml;
                                    }
                                    setInterval(setTime, 1000);
                              </script>
                                  </span>
                        </span>
                  </div>

</div>                                                  
</footer>




      