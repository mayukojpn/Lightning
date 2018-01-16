<?php
$theme_options_default = lightning_theme_options_default();
$lightning_theme_options = get_option('lightning_theme_options', $theme_options_default );

// count top slide
$top_slide_count_max = lightning_top_slide_count_max();
$top_slide_count = lightning_top_slide_count( $lightning_theme_options );
$top_slide_count = apply_filters('lightning_top_slide_count',$top_slide_count);

if ( $top_slide_count ) : ?>
<?php
if ( empty( $lightning_theme_options['top_slide_time'] ) )
{
	$interval = 4000;
} else {
	$interval = esc_attr( $lightning_theme_options['top_slide_time'] );
}
?>
<div id="top__fullcarousel" data-interval="<?php echo $interval;?>" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">

<div class="item item-1 active">
	<a href="//demo.dev3.biz/jpnstyle/about/guestroom/">
		<picture>
		<img src="https://demo.dev3.biz/jpnstyle/wp-content/uploads/sites/4/2018/01/00.jpg" alt="" class="slide-item-img">
		</picture>
		<div class="slide-cover" style="background-color:#000000;opacity:0.5"></div>
	</a>
	<div class="slide-text-set mini-content mini-content-1" style="text-align:center">
	<div class="container">
		<h3 class="slide-text-title" style="color:#ffffff;text-shadow:0 0 2px #000000">
		古民家で過ごす穏やかな時間									</h3>
		<div class="slide-text-caption" style="color:#ffffff;text-shadow:0 0 2px #000000">
		郊外から少し離れたところにひっそりあるゲストハウスです。<br />
		ホテルや旅館とはまた違った町家ステイをお楽しみください。									</div>
		<style type="text/css">.mini-content-1 .btn-ghost { border-color:#ffffff;color:#ffffff;box-shadow:0 0 2px #000000;text-shadow:0 0 2px #000000; }.mini-content-1 .btn-ghost:hover { border-color:#bcb52b; background-color:#bcb52b; color:#fff; text-shadow:none; }</style>									<a class="btn btn-ghost" href="//demo.dev3.biz/jpnstyle/about/guestroom/">お部屋を見る</a>
	</div><!-- .container -->
	</div><!-- [ /.slide-text-set.mini-content  ] -->
</div><!-- [ /.item ] -->

<div class="item item-2">
	<a href="//demo.dev3.biz/jpnstyle/about/cuisine/">
		<picture>
		<img src="https://demo.dev3.biz/jpnstyle/wp-content/uploads/sites/4/2017/10/8a10e706aa1d6dccd443d51cfe335393_m-e1508471156876.jpg" alt="" class="slide-item-img">
		</picture>
		<div class="slide-cover" style="background-color:#000000;opacity:0.5"></div>
	</a>

	<div class="slide-text-set mini-content mini-content-2" style="text-align:center">
	<div class="container">
		<h3 class="slide-text-title" style="color:#ffffff;">
		旬の京野菜で作るおばんざい									</h3>
		<div class="slide-text-caption" style="color:#ffffff;">
		地元京都で採れる旬の野菜を使った和食のご提供をしております。<br />
		素朴な味付けだけど、旨味たっぷりのどこか懐かしい味をご賞味ください。									</div>

		<style type="text/css">.mini-content-2 .btn-ghost { border-color:#ffffff;color:#ffffff; }.mini-content-2 .btn-ghost:hover { border-color:#bcb52b; background-color:#bcb52b; color:#fff; text-shadow:none; }</style>									<a class="btn btn-ghost" href="//demo.dev3.biz/jpnstyle/about/cuisine/">お食事情報を見る</a>

	</div><!-- .container -->
	</div><!-- [ /.slide-text-set.mini-content  ] -->
</div><!-- [ /.item ] -->
</div><!-- [ /.carousel-inner ] -->

<?php if ($top_slide_count >= 2 ) :?>
    <a class="left carousel-control" href="#top__fullcarousel" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
    <a class="right carousel-control" href="#top__fullcarousel" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
<?php endif; ?>

</div><!-- [ /#top__fullcarousel ] -->
<?php endif; ?>
