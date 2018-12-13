<?php
/**
 * File(file.php)
 *
 * @package custom
 */
?>

<?php $this->need('header.php'); ?>

<br>
<center><font style="font-size:18px"><b><?php $this->options->title() ?> -- 归档区 </b></font> [总归档]</center>
<div id="body">
    <div class="container">
        <div>
              <br>
				<span>本版地址：<a><?php $this->options->index("file.html");?></a></span><span style="padding-left: 35%;">
				<br>
                 <span>板块说明：</span><span style="color:#308080">不乱于心，不困于情。不畏将来，不念过往。如此，安好。</span>
				</div>
                 <div style="padding-top: 10px;border-bottom: 3px solid #228B22;text-align: center;"></div>

				  <span>发帖人：<a><?php $this->author(); ?></a></span>
                  &nbsp;
                  &nbsp;
                  <span>本篇人气：<?php _e(getViewsStr($this));?></span>
                  &nbsp;
                  &nbsp;
                  <span>提交时间：<?php echo gmdate('Y-m-d H:i', $this->modified + Typecho_Widget::widget('Widget_Options')->timezone); ?></span>
                  <br>
                  <span>板块：<a>福否阿卡技术站归档区</a></span>
                  <br>
                  <span>发帖站：<?php $this->options->title() ?>（<?php $this->date('r'); ?>）</span>
                  <br>
      
      
      
      <div>
      <h3>板块归档</h3>

  <ul style="color: rgb(<?php echo(rand(0, 255)); ?>, <?php echo(rand(0,255)); ?>, <?php echo(rand(0, 255)); ?>)">
    <?php $this->widget('Widget_Metas_Category_List')
               ->parse('[ <a href="{permalink}">{name}</a> ({count}) ]'); ?></ul>

      
      
      </div>
      
      
        <div>
    <h3>标签归档</h3>    	
      <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=100')->to($tags); ?>
        <?php if($tags->have()): ?>
       <ul><?php while ($tags->next()): ?>
        [ <a style="color: rgb(<?php echo(rand(0, 255)); ?>, <?php echo(rand(0,255)); ?>, <?php echo(rand(0, 255)); ?>)" href="<?php $tags->permalink(); ?>" rel="tag" class="size-<?php $tags->split(5, 10, 20, 30); ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a> ]
        <?php endwhile; ?>
        <?php else: ?>
            [ <a><?php _e('没有任何标签'); ?></a> ]
        <?php endif; ?></ul>
    	
 </div>
      
      
      
               
<div>
    <h3>文章归档</h3>
<ul style="color: rgb(<?php echo(rand(0, 255)); ?>, <?php echo(rand(0,255)); ?>, <?php echo(rand(0, 255)); ?>)">
    <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
               ->parse('[ <a href="{permalink}">{date}</a> ]'); ?></ul>


		</div>

  

 <br>
  
  
  

</div>
<footer id="footer" role="contentinfo">
      <div class="container" style="padding-top: 10px;border-bottom: 3px solid #228B22;text-align: center;"></div>
      		<div class="container">
                <span>[<a href="/">首页</a>]</span>
                <span>[<a href="<?php $this->options->index("words.html");?>"> 留言</a>]</span>
                <span>[<a href="<?php $this->options->index("search.html");?>"> 搜索</a>]</span>
                <span>[<a href="<?php $this->options->index("link.html");?>"> 友链</a>]</span>
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
