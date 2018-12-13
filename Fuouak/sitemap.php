<?php
/**
*Sitemap(sitemap.html)
*
* @package custom
*/
?>
<?php $this->need('header.php'); ?>


  <div><center><font style="font-size:18px"><b><?php $this->options->title() ?> -- 网站地图 </b></font> [SiteMap]</center></div>

<div id="body">
    <div class="container">
      <div style="padding-top: 10px;border-bottom: 3px solid #228B22;text-align: center;"></div>
  <div id="content">
      <h5>文章列表</h5>
      <ul>
      <?php
      $stat = Typecho_Widget::widget('Widget_Stat');
      $this->widget('Widget_Contents_Post_Recent', 'pageSize='.$stat->publishedPostsNum)->to($archives);
      $year=0; $mon=0; $i=0; $j=0;
      while($archives->next()){
          $year_tmp = date('Y',$archives->created);
          $mon_tmp = date('m',$archives->created);
          $y=$year; $m=$mon;
          if ($year > $year_tmp || $mon > $mon_tmp) {
              $output .= '</ul>';
          }
          $output .= '<li><a href="'.$archives->permalink .'">'. $archives->title .'</a></li>';
      }
      $output .= '</ul>';
      echo $output;
      ?>
    </ul>
  </div>
  <div id="content">
    <h5>分类目录</h5>
      <ul><?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
      </ul>
  </div>
  <div id="content">
    <h5>独立页面</h5>
    <ul class="clearfix" id="nav_menu">
      <li><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
      <?php $this->widget('Widget_Contents_Page_List')
                 ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
    </ul>
  </div>
</div></div>
      <div class="container" style="padding-top: 10px;border-bottom: 3px solid #228B22;text-align: center;"></div>
<div><center><span>Copyright&copy; <?php $this->date('Y'); ?> SKILL.FUFOUAKA.COM  <a href="<?php $this->options->index("sitemap.html");?>"> SiteMap</a></span></center></div>
<div><center><span>由<a href="http://typecho.org">Typecho</a>强力驱动  Theme by <a href="https://github.com/fufouaka">Fuouak</a></span></center></div>
