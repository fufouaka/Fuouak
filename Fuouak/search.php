<?php
/**
 * Search Page(search.php)
 *
 * @package custom
 */
?>

<?php $this->need('header.php'); ?>

<br>
<center><font style="font-size:18px"><b>福否阿卡技术站 -- 内容区 </b></font> [搜索Search]</center>
<div id="body">
    <div class="container">
        <div>
          <span>
            <center> <div class="site-search col-3 kit-hidden-tb">
                <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                   <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                   <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                   <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                </form>
            	</div>
              </center>
            </span>

             <table >
                 <br>
                    <tr bgcolor="e8e8e8"  >
                        <td>ID</td>
                        <td>未</td>
                        <td>标题</td>
                        <td>时间</td>
                        <td>作者</td>
                        <td>标签</td>
                        <td>人气</td>
                    </tr> 
                 	<div style="\#header\ \{\ padding-top: 35px;border-bottom: 3px solid #228B22;text-align: center;"></div>
              		<br>
                    <tr>
                      <?php while($this->next()): ?>
                        <td><?php $this->cid(); ?></td>
                        <td >◊</td>
                        <td><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></td>
                        <td><?php $this->date('F j, Y'); ?></td>
                      	<td><?php $this->author(); ?></td>
                        <td><?php $this->category(','); ?></td>
                      	<td><?php _e(getViewsStr($this));?></td>
                    </tr>
                  <?php endwhile; ?>
              </table>
              <br> 
              <br>
		</div>
      </div>
</div>
<footer id="footer" role="contentinfo">
      <div class="container" style="padding-top: 10px;border-bottom: 3px solid #228B22;text-align: center;"></div>
      		<div class="container">
                <span>[<a href="/">首页</a>]</span>
                <span>[<a href="<?php $this->options->index("file.html");?>"> 归档</a>]</span>
                <span>[<a href="<?php $this->options->index("words.html");?>"> 留言</a>]</span>
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




      