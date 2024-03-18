    <div class="container">
    <div class="row row-cols-1 row-cols-md-3">
    <?php if (empty($content)) { $language->p('No pages found'); } ?>
    <?php foreach ($content as $page): ?>
      <div class="col">
        <h3><a href="<?php echo $page->permalink(); ?>"></h3>
        <div>
          <img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" alt="<?php echo $page->title(); ?>" width="100%"></a>
        </div>
        </a>
      </div>
    <?php endforeach ?>
    </div>
    </div>


    <!-- fo nav -->
    <?php if (Paginator::numberOfPages()>1): ?>
    <div class="container">
    <div class="btn-group rounded-pill" role="group" aria-label="Basic example">
      <?php if (Paginator::showPrev()): ?>
<p align="center"><a class="button" href="<?php echo Paginator::previousPageUrl() ?>" role="button"><i class="fas fa-arrow-left"></i> Yeniler</a></p>
      <?php endif ?>
      <?php if (Paginator::showNext()): ?>
<p align="center"><a class="button" href="<?php echo Paginator::nextPageUrl() ?>" role="button">Eskiler <i class="fas fa-arrow-right"></i></a></p>
      <?php endif ?>
    </div>
    </div>
    <?php endif ?>

