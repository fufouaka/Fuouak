<?php
/**
 * 关于站(about.php)
 *
 * @package custom
 */
?>

<?php $this->need('header.php'); ?>



                           <br>
                  <center><font style="font-size:18px"><b><?php $this->options->title() ?> -- 关于站 </b></font> [关于本站]</center>
<div id="body">
    <div class="container">
        <div>
                <br>
				<span>本站域名：<a><?php $this->options->index("about.html");?></a></span>
				<br>
                 <span>板块说明：<a style="color:#308080">福否阿卡，一个励志成为全栈的90后小伙子</a></span>
				</div>
                 <div style="padding-top: 10px;border-bottom: 3px solid #228B22;text-align: center;"></div>

				  <span>发帖人：<a  href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                  &nbsp;
                  &nbsp;
                  <span>本篇人气：<a style="color:red;"><?php _e(getViewsStr($this));?></a></span>
                  &nbsp;
                  &nbsp;
                  <span>提交时间：<?php echo gmdate('Y-m-d H:i', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?></span>
                  <br>
                  <span>标题：<a><?php $this->title() ?></a></span>
                  <br>
                  <span>发帖站：<?php $this->options->title() ?>（<?php $this->date('r'); ?>）</span>
                  <br>
      			  <br>
                  <h3 class="widget-title"><?php _e('壹言观世'); ?></h3>
                  <ul><span>
                  <script type="text/javascript" src="https://api.lwl12.com/hitokoto/main/get?encode=js&charset=utf-8"></script><div id="lwlhitokoto">&hearts;&nbsp;&nbsp;<script>lwlhitokoto()</script>&nbsp;&nbsp;&hearts;</div>
                    </span></ul>
      			  <h3 class="widget-title"><?php _e('本站系统'); ?></h3>
      			  <ul><h5>系统：<a href="http://typecho.org/">Typecho</a></h5></ul>
      			  <ul><h5>主题：<a href="https://github.com/fufouaka">Fuouak</a> &nbsp;<span>[ 基于默认主题自修改 ]</span></h5></ul>
      
                  <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    			  <section class="widget">
				  <h3 class="widget-title"><?php _e('站&nbsp;&nbsp;&nbsp;&nbsp;长'); ?></h3>
                  <ul type="circle">      
                  <a href="http://www.fufouaka.com">福否阿卡</a> &nbsp; &nbsp;<span>一个励志成为全栈的90后小伙子</span>
                  </ul>
                  <ul>      
                  <h5>他的网站：</h5>
                  </ul>
                  <ul type="circle">      
                  <a href="https://www.fufouaka.com">主页站</a> &nbsp; &nbsp;<span>https://www.fufouaka.com</span>
                  </ul>
                  <ul type="circle"> 
                    <a href="https://skill.fufouaka.com">技术站</a> &nbsp; &nbsp;<span>https://skill.fufouaka.com</span>
                  </ul>
                  <ul type="circle"> 
                    <a href="https://blog.fufouaka.com">博客站</a> &nbsp; &nbsp;<span>https://blog.fufouaka.com</span>
                  </ul>
                  <ul type="circle"> 
                      <a href="https://nav.fufouaka.com">导航站</a> &nbsp; &nbsp;<span>https://nav.fufouaka.com</span>
                  </ul>
                  <ul type="circle"> 
                      <a href="https://img.fufouaka.com">图床站</a> &nbsp; &nbsp;<span>https://img.fufouaka.com</span>
                  </ul>
                  <ul type="circle"> 
                     <a href="https://api.fufouaka.com">API站</a> &nbsp; &nbsp;<span>https://api.fufouaka.com</span>
                  </ul>
                  <ul type="circle"> 
                     <a href="https://wy.fufouaka.com">网页站</a> &nbsp; &nbsp;<span>https://wy.fufouaka.com</span>
                  </ul>
				  </section>    
      			  
      			  

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
                <span>[<a href="<?php $this->options->index("link.html");?>"> 友链</a>]</span>
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




      