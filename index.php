<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>


<div class="right-content">
  <div class="right-content-wrapper">
    <!-- start of block of home main-*-hover -->
    <?php
      $i = 1;
    ?>
    <div id="main_worship_hover" class="item-<?php echo $i++; ?> main-content hover-layer border-bottom-radius opacity-default">
      <header><span class="title">主日敬拜</span><span class="sw-icon-close sw-icon"></span></header>

      <section>
        <?php 

        $args = array(
          'cat'        => 90,

          ); 

        sw_cat_2column($args);
        ?>


      </section> 
      <footer>
        <h4 class="post-title"><a href="/category/%E4%B8%BB%E6%97%A5%E6%95%AC%E6%8B%9C%E7%A8%8B%E5%BA%8F/">更多..</a></h4>
      </footer>
    </div>

    <div id="main_sermon_hover" class="item-<?php echo $i++; ?>  main-content hover-layer border-bottom-radius opacity-default">
      <header><span class="title">讲道</span><span class="sw-icon-close sw-icon"></span></header>
      <section>
      <?php 
      $args = array(
        'cat'        => 89,
        'orderby'         => 'date',
        'order'           => 'DESC',
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'suppress_filters' => true ); 
      sw_cat_2column($args);


      ?>




      </section> 
      <footer>
        <h4 class="post-title"><a href="/category/%E8%AE%B2%E9%81%93/">全部讲道..</a></h4>
      </footer>
    </div>

    <div id="main_news_hover" class="item-<?php echo $i++; ?>  main-content hover-layer border-bottom-radius opacity-default">
      <header><span class="title">教会新闻</span><span class="sw-icon-close sw-icon"></span></header>
      <section>
        <?php 
          sw_image_news();

        ?>


      </section> 
      <footer>
        <h4 class="post-title"><a href="/category/%E6%95%99%E4%BC%9A%E6%96%B0%E9%97%BB/">更多..</a></h4>
      </footer>
    </div>


    <div id="main_outdoor_hover" class="item-<?php echo $i++; ?>  main-content hover-layer border-bottom-radius opacity-default">
      <header><span class="title">户外敬拜</span><span class="sw-icon-close sw-icon"></span></header>
      <section>
        <h2><a href="/tag/%E6%88%B7%E5%A4%96%E6%8E%A8%E8%8D%90%E8%B5%84%E6%96%99/">户外推荐资料<span class="more-link">(更多..)</span></a></h2>
        <?php 
        $args = array(
          'tag'        => '户外推荐资料',
          'displayType' => 'list-column-2'
          ); 
        sw_cat_2column($args);

        ?>
      </section>
      <section>
        <h2><a href="/category/%E6%88%B7%E5%A4%96%E4%B8%93%E6%A0%8F/%E6%88%B7%E5%A4%96%E9%80%9A%E6%8A%A5/">每周户外通报<span class="more-link">(更多..)</span></a></h2>
        <?php 
        $args = array(
          'cat'        => 84,
          'displayType' => 'list-column-2',
          'nopaging'  => false
          ); 
        sw_cat_2column($args);

        ?>
      </section>
      <footer>
        <!-- <h2 class="post-title"><a href="/category/%e6%88%b7%e5%a4%96%e4%b8%93%e6%a0%8f/%e6%88%b7%e5%a4%96%e9%80%9a%e6%8a%a5/">更多..</a></h2> -->
      </footer>
    </div>

    <div id="main_bylaw_hover" class="item-<?php echo $i++; ?>  main-content hover-layer border-bottom-radius opacity-default">
      <header><span class="title">教会条例</span><span class="sw-icon-close sw-icon"></span></header>
      <section>
        <?php 
        $args = array(
          'cat'        => 145,
          'displayType' => 'list-column-2',
          'nopaging'  => false
          ); 
        sw_cat_2column($args);

        ?>


      </section> 
      <footer>
        <!-- <h2 class="post-title"><a href="/category/%E8%AE%B2%E9%81%93/">全部讲道..</a></h2> -->
      </footer>
    </div>



    <div id="main_xh_hover" class="item-<?php echo $i++; ?>  main-content hover-layer border-bottom-radius opacity-default">
      <header><span class="title">杏花</span><span class="sw-icon-close sw-icon"></span></header>

      <section>

        <?php 
        // $catArgs = array(
        //   'swChildCat'   => 'latest',
        //   'child_of'     => 30,

        //  );
        // sw_cat_child_2column($catArgs);
        echo '<div class="block-bg-grey column-left">';
        sw_show_latestpost_of_cat(30);
        echo '</div>';
        echo '<div class="column-right">';
        sw_list_child_cat(array(
          'child_of'=> 30,
          'right_top_html' => '<h2 class="post-title"><a href="/%E6%9D%8F%E8%8A%B1pdf%E4%B8%8B%E8%BD%BD/">PDF下载</a> | <a href="/category/%E6%9D%8F%E8%8A%B1%E6%9C%9F%E5%88%8A/feed/atom/"><span id="cat_rss"></span></a></h2><p>&nbsp;</p>'
        ));

        echo '</div>';
      # code...
        ?>

      </section>
      <footer>
        <h4 class="post-title"><a href="/%E6%9D%8F%E8%8A%B1pdf%E4%B8%8B%E8%BD%BD/">PDF下载</a></h4>
        <h4 class="post-title"><a href="/category/%E6%9D%8F%E8%8A%B1%E6%9C%9F%E5%88%8A/">更多..</a></h4>
      </footer>
    </div>

    <div id="main_ejournal_hover" class="item-<?php echo $i++; ?>  main-content hover-layer border-bottom-radius opacity-default">
      <header><span class="title">网络期刊</span><span class="sw-icon-close sw-icon"></span></header>

      <section>

        <?php 
        // $catArgs = array(
        //   'swChildCat'   => 'latest',
        //   'child_of'     => 30,

        //  );
        // sw_cat_child_2column($catArgs);
        echo '<div class="block-bg-grey column-left">';
        sw_show_latestpost_of_cat(82);
        echo '</div>';
        echo '<div class="column-right">';
        sw_list_child_cat(array(
          'parent'=> 82,
          'right_top_html' => '<h2 class="post-title"><a href="/wp-content/uploads/ftp/ejournal/">PDF下载</a> | <a href="http://shwforum.us2.list-manage.com/subscribe?u=6d96183b90a528fe400446847&id=f0602d720c">订阅</a> | <a href="/category/%E7%BD%91%E7%BB%9C%E6%9C%9F%E5%88%8A/feed/atom/"><span id="cat_rss"></span></a> </h2><p>&nbsp;</p>'
        ));

        echo '</div>';
      # code...
        ?>

      </section>
      <footer>
        <h4 class="post-title"><a href="/wp-content/uploads/ftp/ejournal/">PDF下载</a> | <a href="http://shwforum.us2.list-manage.com/subscribe?u=6d96183b90a528fe400446847&id=f0602d720c">订阅</a>  | <a href="/category/%E7%BD%91%E7%BB%9C%E6%9C%9F%E5%88%8A/">更多..</a> </h4>
        <h4 class="post-title"></h4>
      </footer>
    </div>

    <!-- end of block of home main-*-hover -->
  </div>
</div>
<?php
$j = 1;
?>

<div class="left-nav">
  <a id="main_worship" href="/category/%E4%B8%BB%E6%97%A5%E6%95%AC%E6%8B%9C%E7%A8%8B%E5%BA%8F/" class="default main-list item-<?php echo $j++;?>"><span class="txt">主日敬拜</span></a>
  <a id="main_sermon" href="/category/%E8%AE%B2%E9%81%93/" class="default main-list  item-<?php echo $j++;?>"><span class="txt">讲道</span></a>
  <a id="main_news" href="" class="default main-list  item-<?php echo $j++;?>"><span class="txt">教会新闻</span></a>
  <a id="main_outdoor" href="/category/%E6%88%B7%E5%A4%96%E4%B8%93%E6%A0%8F/%E6%88%B7%E5%A4%96%E9%80%9A%E6%8A%A5/" class="main-list item-<?php echo $j++;?>"><span class="txt">户外敬拜</span></a>

  <!-- <a id="main_outdoor_interview" href="javascript:void(0)" class="main-list item-2"><span class="txt">户外访谈</span></a> -->
  <a id="main_bylaw" href="" class="main-list item-<?php echo $j++;?>" title="查看守望各事工部门的规章制度文档"><span class="txt">教会条例</span></a>
  <a id="main_xh" href="/category/%E6%9D%8F%E8%8A%B1%E6%9C%9F%E5%88%8A/" class="main-list item-<?php echo $j++;?>"><span class="txt">杏花</span></a>
  <a id="main_ejournal" href="/category/%E7%BD%91%E7%BB%9C%E6%9C%9F%E5%88%8A/" class="main-list item-<?php echo $j++;?>"><span class="txt">网络期刊</span></a>
</div>




<?php get_footer(); ?>
