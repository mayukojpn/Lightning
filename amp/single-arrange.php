<!doctype html>
<html amp lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,intial-scale=1,minimum-scal=1">

<?php do_action( 'amp_post_template_head', $this ); ?>
<style amp-custom>
<?php $this -> load_parts( array( 'style' ) ); ?>
<?php do_action( 'amp_post_template_css', $this ); ?>
</style>

</head>
<body class="wrapper">

  <amp-sidebar id="mymenu" layout="nodisplay" side="right">
    <div class="container">
      <button class="menubtn" on="tap:mymenu.close">
        <span class="fa fa-close"></span>
        <span class="sr-only">メニューを閉じる</span>
      </button>

      <h2>MENU</h2>
        <?php if( has_nav_menu( 'ampnav' ) ) : ?>
          <?php wp_nav_menu( array(
            'theme_location' => 'ampnav',
            'container' => 'nav',
            'container_class' => 'ampnav'
          ) ); ?>
        <?php endif;?>
    </div>
  </amp-sidebar>

  <div class="main-wrapper">

  <header class="page-header">
    <div class="container">
      <div class="site">
        <a href="<?php echo $this -> get( 'home_url' ); ?>">
          <?php if( has_site_icon() ): ?>
            <amp-img src="<?php site_icon_url(180); ?>" alt="" width="42" height="42"></amp-img>
          <?php endif; ?>
          <?php echo $this -> get( 'blog_name' ); ?>
        </a>
      </div><!-- .site -->

      <button class="menubtn" on="tap:mymenu">
        <span class="fa fa-bars"></span>
        <span class="sr-only">メニューを開く</span>
      </button>

    </div>
  </header>

  <article class="kiji">

    <header class="kiji-header">
      <div class="container">
        <div class="kiji-cat">
          <?php echo get_the_category_list( '', '', $this -> ID ); ?>
          <?php echo get_the_tag_list( '<ul><li>', '</li><li>', '</li></ul>', $this -> ID ); ?>
        </div>

        <h1>
          <amp-fit-text width="800" height="60" layout="responsive">
            <?php echo $this -> get( 'post_title' ); ?>
            <amp-img src="<?php echo get_template_directory_uri(); ?>/amp/amp-label-white.png" alt="AMP" width="30" height="30">
              <div placeholder>&#9889;</div>
              <div fallback>&#9889;</div>
            </amp-img>
          </amp-fix-text>
        </h1>

        <div class="kiji-date">
          <span class="fa fa-clock-o"></span>
          <time datetime="<?php echo date( 'c', $this -> get( 'post_publish_timestamp' ) ); ?>">
            投稿：
            <?php echo date( 'Y 年 m 月 d 日', $this -> get( 'post_publish_timestamp') ); ?>
          </time>
          <?php if( date( 'Ymd', $this -> get( 'post_modified_timestamp' ) ) > date( 'Ymd', $this -> get( 'post_publish_timestamp' ) ) ): ?>
            |
          <time datetime="<?php echo date( 'c', $this -> get( 'post_modified_timestamp' ) ); ?>">
            更新：
            <?php echo date( 'Y 年 m 月 d 日', $this -> get( 'post_modified_timestamp' ) ); ?>
          </time>
          <?php endif; ?>
        </div>
      </div><!-- .container -->
    </header>
  <div class="container">
    <?php echo $this -> get( 'post_amp_content' ); ?>
  </div>
  </article>
  <div class="container">
    <div class="share">
      <amp-social-share type="twitter"  data-param-text="TITLE【AMP】" data-param-url="AMPDOC_URL" layout="flex-item"></amp-social-share>
      <amp-social-share type="facebook"  data-param-text="TITLE【AMP】"  data-param-url="AMPDOC_URL" data-param-app_id="XXXXXXXXX" layout="flex-item"></amp-social-share>
      <amp-social-share type="gplus"  data-param-text="TITLE【AMP】"  data-param-url="AMPDOC_URL" layout="flex-item"></amp-social-share>
    </div><!-- .share -->

    <?php global $post; ?>
    <?php $myposts = get_posts( array(
      'posts_per_page' => '6',
      'post__not_in' => array( $post -> ID ),
      'category__in' => wp_get_post_categories( $post -> ID ),
    ) );
    if( $myposts ): ?>

    <aside class="related">
      <h2>関連記事</h2>
      <amp-carousel type="carousel" height="240" layout="fixed-height">
      <?php
      foreach( $myposts as $post ):
        setup_postdata( $post ); ?>
        <div class="related-post">
          <a href="<?php echo amp_get_permalink( $post -> ID ); ?>">
          <?php if( has_post_thumbnail() ): ?>
            <amp-img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" width="150" height="150" alt=""></amp-img>
            <?php else: ?>
            <amp-img src="<?php echo get_template_directory_uri(); ?>/amp/thumb.jpg" width="150" height="150" alt=""></amp-img>
          <?php endif; ?>
          <h3><?php the_title(); ?></h3>
          </a>
        </div><!-- .related-post -->
      <?php endforeach; ?>
      </amp-carousel>
    </aside>

    <?php wp_reset_postdata();
    endif; ?>

  </div>

  <div class="container">
  <amp-img src="<?php echo get_template_directory_uri(); ?>/amp/footer.png" alt="" width="1500" height="216" layout="responsive"></amp-img>
  </div>

  <footer>
    <div class="container">
      <div class="copyright">
        &copy; <?php echo $this -> get( 'blog_name' ); ?>
      </div>
    </div>
  </footer>

</div><!-- .main-wrapper -->

<div class="side-wrapper">
  <aside class="side-nav">
    <h2>MENU</h2>
    <?php if( has_nav_menu( 'ampnav' ) ) : ?>
      <?php wp_nav_menu( array(
        'theme_location' => 'ampnav',
        'container' => 'nav',
        'container_class' => 'ampnav'
      ) ); ?>
    <?php endif; ?>
  </aside>

  <?php $myposts = get_posts( array(
    'posts_per_page' => '8',
    'meta_query' => array( array(
      'key' => '_thumbnail_id'
    ) ),
  ) );
  if( $myposts ) : ?>
  <aside class="side-recent">
    <h2>RECENT POST</h2>
    <ul>
      <?php
      foreach( $myposts as $post ) :
        setup_postdata( $post ); ?>
        <li>
          <a href="<?php echo amp_get_permalink( $post -> ID ); ?>">
            <amp-img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" width="150" height="150" alt=""></amp-img>
            <h3><?php the_title(); ?></h3>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </aside>
  <?php wp_reset_postdata();
  endif; ?>

</div>

<?php do_action( 'amp_post_template_footer', $this ); ?>

</body>
</html>
