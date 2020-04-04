<header class="banner">

	<div class="ep-header ep-header-wrapper">
		
		<div class="ep-menu-deco">
			<div class="ep-menu-deco-line">
				<div class="menu-deco-point-isTopLeft"></div>
				<div class="menu-deco-point-isTop"></div>
				<div class="menu-deco-point-isTopRight"></div>
			</div>

			<div class="ep-menu-deco-line">
				<div class="menu-deco-point-isMiddleLeft"></div>
				<div class="menu-deco-point-isMiddle"></div>
				<div class="menu-deco-point-isMiddleRight"></div>
			</div>

			<div class="ep-menu-deco-line">
				<div class="menu-deco-point-isBottomLeft"></div>
				<div class="menu-deco-point-isBottom"></div>
				<div class="menu-deco-point-isBottomRight"></div>
			</div>
		</div>
	</div>


<div class="ep-menu open">

<nav class="menu_hover">
  <div class="bleft">
      <div class="menu__item_hover">
        <a class="menu__item-link_hover" href="<?php echo e(get_permalink( get_page_by_title( 'index' ))); ?>">A Propos</a>
        <img class="menu__item-img_hover" src="<?= App\asset_path('images/1.jpg'); ?>" alt="Some image"/>
        <div class="marquee_hover">
          <div class="marquee__inner_hover" aria-hidden="true">
            <span>A Propos</span>
            <span>A Propos</span>
            <span>A Propos</span>
            <span>A Propos</span>
          </div>
        </div>
      </div>
      <div class="menu__item_hover">
        <a class="menu__item-link_hover" href="<?php echo e(get_permalink( get_page_by_title( 'realisations' ))); ?>">Realisations</a>
        <img class="menu__item-img_hover" src="<?= App\asset_path('images/2.jpg'); ?>" alt="Some image"/>
        <div class="marquee_hover">
          <div class="marquee__inner_hover" aria-hidden="true">
            <span>Realisations</span>
            <span>Realisations</span>
            <span>Realisations</span>
            <span>Realisations</span>
          </div>
        </div>
      </div>
      <div class="menu__item_hover">
        <a class="menu__item-link_hover" href="<?php echo e(get_permalink( get_page_by_title( 'contact' ))); ?>">Contact</a>
        <img class="menu__item-img_hover" src="<?= App\asset_path('images/contact.jpg'); ?>" alt="Some image"/>
        <div class="marquee_hover">
          <div class="marquee__inner_hover" aria-hidden="true">
            <span>Contact</span>
            <span>Contact</span>
            <span>Contact</span>
            <span>Contact</span>
          </div>
        </div>
      </div>
    </nav>
</div>






</header>
