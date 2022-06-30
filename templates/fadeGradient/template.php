<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {die();} ?>

<section class="banner__holder">
  <div class="banner">
    <img class="banner__bullet" src="<?= $arResult['IMAGE'] ?>">
    <div class="banner__cover"></div>

    <div class="banner__content banBullet">
      <h2 class="banBullet__header"><?= $arResult['HEADER'] ?></h2>
      <p class="banBullet__headNote"><?= $arResult['HEADNOTE'] ?></p>

      <p class="banBullet__desc"><?= $arResult['DESCRIPTION'] ?></p>

      <a 
        href="<?= $arResult['BUTTON_LINK'] ?>"
        class="banBullet__send"
      >
        <?= $arResult['BUTTON_TEXT'] ?>
      </a>
    </div>

  </div>
</section>



<style>
  .banner {
    border-radius: <?= $arResult['BORRADIUS']?>px;
  }

  .banner__bullet {
    object-position: <?= $arResult['IMG_POSITION'] ?>;
  }

  .banner__content {
    width: <?= $arResult['CONTENT_ZONE_WIDTH'] ?>;
  }

  .banner__cover {
    backdrop-filter: blur(<?= $arResult['BLUR'] ?>px);
    background: linear-gradient(
      to top right,
      <?= $arResult['COVER_COLOR']?>,
      <?= $arResult['COVER_COLOR']?>,
      rgba(0, 0, 0, 0) 
    );
  }

  .banner__content {}
  .banBullet {}

  .banBullet__header {
    font-size: <?= $arResult['HEADER_SIZE'] ?>px;
  }

  .banBullet__headNote {
    font-size: <?= $arResult['HEADNOTE_SIZE'] ?>px;
  }

  .banBullet__desc {
    font-size: <?= $arResult['DESCRIPTION_SIZE'] ?>px;
  }

  .banBullet__send {
    font-size: <?= $arResult['BUTTON_SIZE'] ?>px;
  }
</style>