<script id="dsq-count-scr" src="//nesturkceoyun.disqus.com/count.js" async></script>

<div class="container">
<div class="row">
<div class="col-md-12">				<?php if ($page->coverImage()): ?>
					<div class="cover"><img src="<?php echo $page->coverImage(); ?>" width="100%" alt="<?php echo $site->title(); ?></a>"></div>
				<?php endif; ?></div>
<div class="col-md-8">
		<article id="<?php echo $page->slug() ?>" class="box post post-excerpt">
<h1><?php echo ($p)?? ''; ?><?php echo $page->title(); ?></h1>					
<?php echo $page->content(); ?>
<?php Theme::plugins('pageEnd'); ?>
</div>
<div class="col-md-4"><?php Theme::plugins('siteSidebar') ?> </div>
</div>
</div>
</div>
