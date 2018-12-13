<?php
/**
 * 留言板块(words.php)
 *
 * @package custom
 */
?>
<?php $this->need('header.php'); ?>

<center><font style="font-size:18px"><b><?php $this->options->title() ?> -- 内容区 </b></font> [留言板块]</center>

<div id="body">
    <div class="container">
			 <div style=" padding-top: 35px;border-bottom: 3px solid #228B22;text-align: center;"></div>
                  <div style="text-align: left;">
                                       <div id="<?php $this->respondId(); ?>" class="respond">
                                               <h3 id="response"><?php _e('留言咯'); ?></h3>
                                               <form method="post" action="<?php $this->commentUrl() ?>" >
                                                <?php if($this->user->hasLogin()): ?>
                                                <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
                                                <?php else: ?>
                                                 <tr>
                                                <span>
                                                    <label for="author" class="required"><?php _e('Name'); ?></label>
                                                    <input type="text" name="author" id="author" class="text" placeholder="福否阿卡" value="<?php $this->remember('author'); ?>"  />
                                                </span>
                                                <span>
                                                    <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
                                                    <input type="email" name="mail" id="mail" class="text" placeholder="admin@admin.com" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> <?php endif; ?> />
                                                </span>
                                                <span>
                                                    <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('WebSite'); ?></label>
                                                    <input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> <?php endif; ?> />
                                                </span>
                                                </tr>
                                                <?php endif; ?>
                                                <span>
                                                    <label for="textarea" class="required"><?php _e('Content'); ?></label>
                                                    <textarea rows="8" cols="50" name="text" id="textarea" placeholder="福否阿卡，一个励志成为全栈的90后小伙子" class="textarea" style="height: 50px; font-size: 13px;"><?php $this->remember('text'); ?></textarea>
                                                </span>
                                                <p>
                                                    <button type="submit" class="submit"><?php _e('提交留言'); ?></button>
                                                </p>
                                                </form>
                                         </div>
                                    <div>
                                      
                                      
                                      

                                      
                                      
                                      
                                      
<footer id="footer" role="contentinfo">
      <div class="container" style="padding-top: 10px;border-bottom: 3px solid #228B22;text-align: center;"></div>
      		<div class="container">
                <span>[<a href="/">首页</a>]</span>
                <span>[<a href="<?php $this->options->index("file.html");?>"> 归档</a>]</span>
                <span>[<a href="<?php $this->options->index("search.html");?>"> 搜索</a>]</span>
                <span>[<a href="<?php $this->options->index("link.html");?>"> 友链</a>]</span>
                <span>[<a href="<?php $this->options->index("about.html");?>"> 关于站</a>]</span>
                <br>

                  
				  </div>
                  <div style="text-align: left;"><?php include('comments.php'); ?></div>
              
              
              
              
              
              
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

</div></div> </div>