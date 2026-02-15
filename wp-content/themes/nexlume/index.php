<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&family=Outfit:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/photoswipe@5.4.4/dist/photoswipe.css">
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/logos/NexLume Logo Leaf_white.svg">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/logos/NexLume Logo Leaf.png">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/logos/NexLume Logo Leaf.png">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
  // Count SVG pages in each division
  $theme_dir = get_template_directory();
  $theme_uri = get_template_directory_uri();

  $nexlume_pages = glob($theme_dir . '/assets/NexLume/*.svg');
  $nexlume_count = $nexlume_pages ? count($nexlume_pages) : 61;

  $air_pages = glob($theme_dir . '/assets/NexLumeAir/*.svg');
  $air_count = $air_pages ? count($air_pages) : 16;

  $shop_url = 'https://www.nexlume.co.in';
?>

<!-- ====== PRELOADER ====== -->
<div class="preloader" id="preloader">
  <img src="<?php echo $theme_uri; ?>/assets/logos/NexLume Logo Leaf_white.svg" alt="" aria-hidden="true" class="preloader__leaf" id="preloader-leaf">
  <img src="<?php echo $theme_uri; ?>/assets/logos/nexlume_logo_no_leaf.png" alt="NexLume" class="preloader__brand" id="preloader-brand">
  <div class="preloader__bar" id="preloader-bar"><div class="preloader__bar-fill"></div></div>
</div>

<!-- ====== NAVIGATION ====== -->
<nav class="nav" id="nav">
  <a href="<?php echo home_url(); ?>" class="nav__brand"><img src="<?php echo $theme_uri; ?>/assets/logos/Nexlume Logo white.png" alt="NexLume" class="nav__logo-img"></a>
  <ul class="nav__links" id="navLinks">
    <li><a href="#divisions">Divisions</a></li>
    <li><a href="#catalog">Catalog</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="<?php echo $shop_url; ?>" class="nav__shop" target="_blank" rel="noopener">Shop Now</a></li>
    <li><a href="#contact" class="nav__cta">Contact Us</a></li>
  </ul>
  <button class="nav__toggle" id="navToggle" aria-label="Toggle navigation">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- ====== HERO ====== -->
<section class="hero" id="hero">
  <div class="hero__bg">
    <div class="hero__bg-image" style="background-image: url('<?php echo $theme_uri; ?>/assets/hero_v1.jpg');"></div>
    <div class="hero__decor hero__decor--ring"></div>
    <div class="hero__decor hero__decor--line-v"></div>
    <div class="hero__decor hero__decor--dots"></div>
  </div>
  <div class="leaf-decor leaf-decor--hero"><img src="<?php echo $theme_uri; ?>/assets/logos/NexLume Logo Leaf_white.svg" alt="" aria-hidden="true"></div>

  <div class="hero__content">
    <span class="hero__eyebrow">Architectural Lighting & Ventilation</span>
    <h1 class="hero__title">Crafting Light.<br>Defining <span class="highlight">Spaces.</span></h1>
    <p class="hero__subtitle">European-standard luminaires and German-engineered ventilation — two divisions united to transform how you experience every room you walk into.</p>
    <div class="hero__actions">
      <a href="#catalog" class="btn-primary">
        View Catalog
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <a href="#divisions" class="btn-ghost">Explore Divisions</a>
    </div>
  </div>

  <div class="hero__scroll">
    <span>Scroll</span>
    <div class="hero__scroll-line"></div>
  </div>
</section>

<!-- ====== MARQUEE ====== -->
<div class="marquee">
  <div class="marquee__track">
    <div class="marquee__item">European Standards <span class="dot"></span></div>
    <div class="marquee__item">Architectural Lighting <span class="dot"></span></div>
    <div class="marquee__item">German Engineering <span class="dot"></span></div>
    <div class="marquee__item">Energy Efficient <span class="dot"></span></div>
    <div class="marquee__item">Smart Functionality <span class="dot"></span></div>
    <div class="marquee__item">Silent Ventilation <span class="dot"></span></div>
    <div class="marquee__item">Precision Craft <span class="dot"></span></div>
    <div class="marquee__item">Copper Motors <span class="dot"></span></div>
    <div class="marquee__item">European Standards <span class="dot"></span></div>
    <div class="marquee__item">Architectural Lighting <span class="dot"></span></div>
    <div class="marquee__item">German Engineering <span class="dot"></span></div>
    <div class="marquee__item">Energy Efficient <span class="dot"></span></div>
    <div class="marquee__item">Smart Functionality <span class="dot"></span></div>
    <div class="marquee__item">Silent Ventilation <span class="dot"></span></div>
    <div class="marquee__item">Precision Craft <span class="dot"></span></div>
    <div class="marquee__item">Copper Motors <span class="dot"></span></div>
  </div>
</div>

<!-- ====== DIVISIONS ====== -->
<section class="section" id="divisions" style="position:relative; overflow:hidden;">
  <div class="leaf-decor leaf-decor--divisions"><img src="<?php echo $theme_uri; ?>/assets/logos/NexLume Logo Leaf_white.svg" alt="" aria-hidden="true"></div>
  <div class="section__header reveal">
    <span class="section__eyebrow">Our Divisions</span>
    <h2 class="section__title">Two Pillars of <span class="highlight">Excellence</span></h2>
    <p class="section__desc">From architectural lighting to precision ventilation — NexLume brings world-class engineering to every corner of your space.</p>
  </div>

  <div class="divisions">
    <!-- NexLume Lighting -->
    <div class="division-card division-card--lighting reveal reveal-delay-1" data-division="nexlume" onclick="switchCatalog('nexlume')">
      <div class="division-card__glow"></div>
      <div class="division-card__visual">
        <img src="<?php echo $theme_uri; ?>/assets/div_card_nexlume.jpg" alt="NexLume Lighting" class="division-card__image">
      </div>
      <div class="division-card__overlay"></div>
      <div class="division-card__content">
        <span class="division-card__tag">Lighting Division</span>
        <img src="<?php echo $theme_uri; ?>/assets/logos/Nexlume Logo white.png" alt="NexLume" class="division-card__logo">
        <p class="division-card__tagline">Where Design Meets Performance.</p>
        <p class="division-card__desc">Architectural lighting designed to create spaces that are both highly functional and visually captivating. European standards tailored for the Indian market.</p>
        <span class="division-card__cta">
          View Catalog
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </span>
        <a href="<?php echo $shop_url; ?>" class="division-card__shop" target="_blank" rel="noopener" onclick="event.stopPropagation()">
          Shop Products
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4zM3 6h18M16 10a4 4 0 01-8 0"/></svg>
        </a>
      </div>
    </div>

    <!-- NexLume Air -->
    <div class="division-card division-card--air reveal reveal-delay-2" data-division="air" onclick="switchCatalog('air')">
      <div class="division-card__glow"></div>
      <div class="division-card__visual">
        <img src="<?php echo $theme_uri; ?>/assets/div_card_nexlume_air.jpg" alt="NexLume Air" class="division-card__image">
      </div>
      <div class="division-card__overlay"></div>
      <div class="division-card__content">
        <span class="division-card__tag">Ventilation Division</span>
        <img src="<?php echo $theme_uri; ?>/assets/logos/NexLume Air Logo white.png" alt="NexLume Air" class="division-card__logo">
        <p class="division-card__tagline">Silent Elegance. German Standards. Lasting Comfort.</p>
        <p class="division-card__desc">Truly German standards in design, performance, and reliability. Architectural fans with copper motors, ball bearings, and whisper-quiet operation.</p>
        <span class="division-card__cta">
          View Catalog
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </span>
        <a href="<?php echo $shop_url; ?>" class="division-card__shop" target="_blank" rel="noopener" onclick="event.stopPropagation()">
          Shop Products
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4zM3 6h18M16 10a4 4 0 01-8 0"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ====== CATALOG VIEWER ====== -->
<section class="section section--dark catalog" id="catalog">
  <div class="section__header reveal">
    <span class="section__eyebrow">Product Catalog</span>
    <h2 class="section__title">Browse Our <span class="highlight">Collections</span></h2>
    <p class="section__desc">Explore our complete product catalogs — click any page to zoom, or jump to any page instantly.</p>
  </div>

  <!-- Tabs -->
  <div class="catalog__tabs reveal">
    <button class="catalog__tab active" data-catalog="nexlume" onclick="switchCatalog('nexlume')">
      <span class="catalog__tab-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9 18h6M10 22h4M12 2a7 7 0 0 1 5 12c-1 1-1.5 2-1.5 3H8.5C8.5 16 8 15 7 14A7 7 0 0 1 12 2z"/>
        </svg>
      </span>
      <span class="catalog__tab-label">NexLume Lighting</span>
    </button>
    <button class="catalog__tab" data-catalog="air" onclick="switchCatalog('air')">
      <span class="catalog__tab-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"/>
        </svg>
      </span>
      <span class="catalog__tab-label">NexLume Air</span>
    </button>
  </div>

  <div class="catalog__viewer reveal reveal-delay-1">

    <!-- NexLume Panel -->
    <div class="catalog__panel active" id="panel-nexlume" data-total="<?php echo $nexlume_count; ?>">

      <div class="catalog__page-display">
        <button class="catalog__fullscreen-btn" onclick="openCatalogLightbox('nexlume')" title="Open full viewer">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 3H5a2 2 0 00-2 2v3m18 0V5a2 2 0 00-2-2h-3m0 18h3a2 2 0 002-2v-3M3 16v3a2 2 0 002 2h3"/></svg>
        </button>
        <div class="catalog__page-hint">Click to zoom &amp; browse</div>
        <img
          id="page-nexlume"
          class="catalog__page-img"
          src="<?php echo $theme_uri; ?>/assets/NexLume/1.svg"
          alt="NexLume Catalog Page 1"
          loading="eager"
          onclick="openCatalogLightbox('nexlume')"
          title="Click to open full viewer"
        >
      </div>

      <div class="catalog__nav">
        <button class="catalog__nav-btn" id="prev-nexlume" onclick="changePage('nexlume', -1)" disabled>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        </button>

        <div class="catalog__nav-center">
          <span class="catalog__page-info" id="info-nexlume">Page <strong>1</strong> of <strong><?php echo $nexlume_count; ?></strong></span>
          <div class="catalog__page-jump">
            <input
              type="number"
              class="catalog__jump-input"
              id="jump-nexlume"
              min="1"
              max="<?php echo $nexlume_count; ?>"
              placeholder="Go to page…"
              aria-label="Jump to page"
            >
            <button class="catalog__jump-btn" onclick="handleJump('nexlume')" title="Go to page">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
          </div>
        </div>

        <button class="catalog__nav-btn" id="next-nexlume" onclick="changePage('nexlume', 1)">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>
      </div>

      <div class="catalog__thumbstrip">
        <div class="catalog__thumbtrack" id="thumbs-nexlume">
          <?php for ($i = 1; $i <= $nexlume_count; $i++): ?>
          <div class="catalog__thumb<?php echo $i === 1 ? ' active' : ''; ?>" onclick="goToPage('nexlume', <?php echo $i; ?>)">
            <img data-src="<?php echo $theme_uri; ?>/assets/NexLume/<?php echo $i; ?>.svg" alt="Page <?php echo $i; ?>" class="lazy-thumb">
            <span class="catalog__thumb-num"><?php echo $i; ?></span>
          </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>

    <!-- NexLume Air Panel -->
    <div class="catalog__panel" id="panel-air" data-total="<?php echo $air_count; ?>">

      <div class="catalog__page-display">
        <button class="catalog__fullscreen-btn" onclick="openCatalogLightbox('air')" title="Open full viewer">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 3H5a2 2 0 00-2 2v3m18 0V5a2 2 0 00-2-2h-3m0 18h3a2 2 0 002-2v-3M3 16v3a2 2 0 002 2h3"/></svg>
        </button>
        <div class="catalog__page-hint">Click to zoom &amp; browse</div>
        <img
          id="page-air"
          class="catalog__page-img"
          src="<?php echo $theme_uri; ?>/assets/NexLumeAir/1.svg"
          alt="NexLume Air Catalog Page 1"
          loading="lazy"
          onclick="openCatalogLightbox('air')"
          title="Click to open full viewer"
        >
      </div>

      <div class="catalog__nav">
        <button class="catalog__nav-btn" id="prev-air" onclick="changePage('air', -1)" disabled>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        </button>

        <div class="catalog__nav-center">
          <span class="catalog__page-info" id="info-air">Page <strong>1</strong> of <strong><?php echo $air_count; ?></strong></span>
          <div class="catalog__page-jump">
            <input
              type="number"
              class="catalog__jump-input"
              id="jump-air"
              min="1"
              max="<?php echo $air_count; ?>"
              placeholder="Go to page…"
              aria-label="Jump to page"
            >
            <button class="catalog__jump-btn" onclick="handleJump('air')" title="Go to page">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
          </div>
        </div>

        <button class="catalog__nav-btn" id="next-air" onclick="changePage('air', 1)">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </button>
      </div>

      <div class="catalog__thumbstrip">
        <div class="catalog__thumbtrack" id="thumbs-air">
          <?php for ($i = 1; $i <= $air_count; $i++): ?>
          <div class="catalog__thumb<?php echo $i === 1 ? ' active' : ''; ?>" onclick="goToPage('air', <?php echo $i; ?>)">
            <img data-src="<?php echo $theme_uri; ?>/assets/NexLumeAir/<?php echo $i; ?>.svg" alt="Page <?php echo $i; ?>" class="lazy-thumb">
            <span class="catalog__thumb-num"><?php echo $i; ?></span>
          </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ====== ABOUT ====== -->
<section class="section" id="about" style="position:relative; overflow:hidden;">
  <div class="leaf-decor leaf-decor--about"><img src="<?php echo $theme_uri; ?>/assets/logos/NexLume Logo Leaf_white.svg" alt="" aria-hidden="true"></div>
  <div class="about-grid">
    <div class="about__visual reveal">
      <div class="about__image-block">
        <img src="<?php echo $theme_uri; ?>/assets/who_we_are.jpg" alt="Who We Are" class="about__image">
        <div class="about__accent-box"></div>
      </div>
    </div>

    <div class="about__content">
      <span class="about__eyebrow reveal">Who We Are</span>
      <h2 class="about__title reveal reveal-delay-1">Illuminating the <span class="highlight">Future</span></h2>
      <p class="about__text reveal reveal-delay-2">NexLume brings together two powerful divisions under one roof — architectural lighting that redefines how light interacts with spaces, and German-engineered ventilation that promotes healthier living environments.</p>
      <p class="about__text reveal reveal-delay-3">With a focus on European standards tailored to the Indian market, we continually push the boundaries of energy efficiency, smart functionality, and timeless design. Every product is built to inspire, endure, and elevate everyday living.</p>

      <div class="about__stats reveal reveal-delay-4">
        <div class="about__stat">
          <div class="about__stat-number" data-count="200">0</div>
          <div class="about__stat-label">Products</div>
        </div>
        <div class="about__stat">
          <div class="about__stat-number" data-count="48">0</div>
          <div class="about__stat-label">Cities Served</div>
        </div>
        <div class="about__stat">
          <div class="about__stat-number" data-count="2">0</div>
          <div class="about__stat-label">Divisions</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====== NEWSLETTER / CONTACT ====== -->
<section class="section section--dark" id="contact" style="position:relative; overflow:hidden;">
  <div class="leaf-decor leaf-decor--contact"><img src="<?php echo $theme_uri; ?>/assets/logos/NexLume Logo Leaf_white.svg" alt="" aria-hidden="true"></div>

  <div class="contact-wrap">

    <!-- Left: Info panel -->
    <div class="contact__info">
      <span class="section__eyebrow reveal">Get In Touch</span>
      <h2 class="contact__title reveal reveal-delay-1">Let's Shape<br>Your <span class="highlight">Light.</span></h2>
      <p class="contact__desc reveal reveal-delay-2">Whether you're designing a residential space, a commercial interior, or exploring our trade programme — our team is here to help you every step of the way.</p>

      <div class="contact__details reveal reveal-delay-3">
        <div class="contact__detail-item">
          <span class="contact__detail-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          </span>
          <div>
            <span class="contact__detail-label">Email Us</span>
            <a href="mailto:hello@nexlume.co.in" class="contact__detail-value">hello@nexlume.co.in</a>
          </div>
        </div>
        <div class="contact__detail-item">
          <span class="contact__detail-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </span>
          <div>
            <span class="contact__detail-label">Response Time</span>
            <span class="contact__detail-value">Within 24 hours</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Right: Contact Form 7 -->
    <div class="contact__form-wrap reveal reveal-delay-2">
      <div class="contact__form-card">
        <h3 class="contact__form-heading">Send Us a Message</h3>
        <?php if ( shortcode_exists('contact-form-7') ) :
          echo do_shortcode('[contact-form-7 id="0113da6" title="Contact Nex Lume"]');
        else : ?>
          <p class="contact__cf7-notice">
            <strong>Contact Form 7</strong> is not active.<br>
            Go to <em>WP Admin → Plugins → Add New</em> to install it, then replace <code>REPLACE_WITH_FORM_ID</code> in <code>index.php</code> with your form's ID.
          </p>
        <?php endif; ?>
      </div>
    </div>

  </div>
</section>

<!-- ====== FOOTER ====== -->
<footer class="footer" style="position:relative; overflow:hidden;">
  <div class="leaf-decor leaf-decor--footer"><img src="<?php echo $theme_uri; ?>/assets/logos/NexLume Logo Leaf_white.svg" alt="" aria-hidden="true"></div>

  <!-- Pre-footer CTA band -->
  <div class="footer__cta-band" style="background-image: url('<?php echo $theme_uri; ?>/assets/footer_wide.jpg');">
    <div class="footer__cta-overlay"></div>

    <!-- Leaf overlays on the figure -->
    <img src="<?php echo $theme_uri; ?>/assets/logos/NexLume Logo Leaf_white.svg" alt="" aria-hidden="true" class="footer__cta-leaf footer__cta-leaf--primary">
    <img src="<?php echo $theme_uri; ?>/assets/logos/NexLume Logo Leaf_white.svg" alt="" aria-hidden="true" class="footer__cta-leaf footer__cta-leaf--echo">

    <div class="footer__cta-inner">
      <h3 class="footer__cta-title reveal">Where Shadows Complete the <span class="highlight">Story.</span></h3>
      <a href="#contact" class="footer__cta-link reveal reveal-delay-2">Get In Touch</a>
    </div>
  </div>

  <!-- Shop strip -->
  <a href="<?php echo $shop_url; ?>" class="footer__shop-strip" target="_blank" rel="noopener">
    <div class="footer__shop-strip-inner">
      <span class="footer__shop-strip-eyebrow">Ready to elevate your space?</span>
      <span class="footer__shop-strip-label">Shop the Collection</span>
    </div>
    <span class="footer__shop-strip-arrow" aria-hidden="true">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </span>
  </a>

  <!-- Footer info row -->
  <div class="footer__info">
    <div class="footer__info-left">
      <span class="footer__info-label">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        Contact Us
      </span>
      <h3 class="footer__info-heading">Bring your <strong>vision</strong> to life<br>with light and air.</h3>
      <div class="footer__info-contact">
        <span class="footer__info-contact-label">Reach us at</span>
        <a href="mailto:hello@nexlume.co.in" class="footer__info-contact-link">
          hello@nexlume.co.in
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
        </a>
      </div>
    </div>

    <div class="footer__info-right">
      <nav class="footer__info-nav" aria-label="Footer navigation">
        <a href="#divisions">Divisions</a>
        <a href="#catalog">Catalog</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
      </nav>
      <div class="footer__mini-shop">
        <span class="footer__mini-shop-label">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4zM3 6h18M16 10a4 4 0 01-8 0"/></svg>
          Shop Online
        </span>
        <a href="<?php echo $shop_url; ?>" class="footer__mini-shop-link" target="_blank" rel="noopener">
          nexlume.co.in
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7v10"/></svg>
        </a>
      </div>
    </div>
  </div>

  <!-- Oversized brand wordmark -->
  <div class="footer__wordmark-wrap">
    <div class="footer__wordmark-glow"></div>
    <span class="footer__wordmark" aria-hidden="true">NexLume</span>
  </div>

  <!-- Bottom bar -->
  <div class="footer__bottom">
    <p class="footer__copy">&copy; <?php echo date('Y'); ?> NexLume. All rights reserved.</p>
    <div class="footer__social">
      <a href="#" aria-label="Instagram">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1.5" fill="currentColor" stroke="none"/></svg>
      </a>
      <a href="#" aria-label="LinkedIn">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="3"/><path d="M7 10v7M7 7v.01M11 10v7m0-4c0-2 1.5-3 3-3s3 1 3 3v4"/></svg>
      </a>
      <a href="#" aria-label="Facebook">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
      </a>
    </div>
  </div>
</footer>

<!-- Back to top -->
<button id="back-to-top" aria-label="Back to top">
  <svg class="btt__ring" viewBox="0 0 44 44" aria-hidden="true">
    <circle class="btt__track"    cx="22" cy="22" r="18"/>
    <circle class="btt__progress" cx="22" cy="22" r="18"/>
  </svg>
  <svg class="btt__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    <path d="M12 19V5M5 12l7-7 7 7"/>
  </svg>
</button>

<?php wp_footer(); ?>

<!-- Preloader GSAP animation -->
<script>
(function() {
  var leaf   = document.getElementById('preloader-leaf');
  var brand  = document.getElementById('preloader-brand');
  var bar    = document.getElementById('preloader-bar');
  var fill   = bar ? bar.querySelector('.preloader__bar-fill') : null;

  // Filter states — consistent function order so GSAP can interpolate cleanly
  var fOrange = 'sepia(1) saturate(8) hue-rotate(-15deg) brightness(0.95) ' +
                'drop-shadow(0 0 18px rgba(254,130,53,1)) ' +
                'drop-shadow(0 0 50px rgba(254,130,53,0.7)) ' +
                'drop-shadow(0 0 90px rgba(254,130,53,0.35))';

  var fWhite  = 'sepia(0) saturate(1) hue-rotate(0deg) brightness(1) ' +
                'drop-shadow(0 0 0px rgba(254,130,53,0)) ' +
                'drop-shadow(0 0 0px rgba(254,130,53,0)) ' +
                'drop-shadow(0 0 0px rgba(254,130,53,0))';

  var fFloat  = 'sepia(0.12) saturate(2) hue-rotate(-10deg) brightness(1) ' +
                'drop-shadow(0 0 16px rgba(254,130,53,0.55)) ' +
                'drop-shadow(0 0 0px rgba(254,130,53,0)) ' +
                'drop-shadow(0 0 0px rgba(254,130,53,0))';

  // Entrance timeline
  var tl = gsap.timeline();

  tl.from(leaf, {
      opacity: 0,
      scale: 0.25,
      rotation: -40,
      filter: fOrange,
      duration: 1.1,
      ease: 'elastic.out(1, 0.5)',
      transformOrigin: '50% 50%'
    })
    // Hold orange for a beat
    .to(leaf, { filter: fOrange, duration: 0.35 })
    // Cool from orange → white
    .to(leaf, { filter: fWhite, duration: 1.2, ease: 'power2.out' })
    .from(brand, {
      opacity: 0,
      y: 14,
      duration: 0.5,
      ease: 'power3.out'
    }, '-=0.8')
    .from(bar, {
      opacity: 0,
      scaleX: 0,
      duration: 0.4,
      ease: 'power2.out',
      transformOrigin: 'left center'
    }, '-=0.15')
    .to(fill, {
      width: '100%',
      duration: 1.0,
      ease: 'power1.inOut'
    }, '-=0.1')
    .add(function() {
      // Float loop — warm glow pulses at top of each cycle
      gsap.to(leaf, {
        y: -10,
        rotation: 6,
        filter: fFloat,
        duration: 2.2,
        ease: 'sine.inOut',
        yoyo: true,
        repeat: -1
      });
    });
})();
</script>

<!-- PhotoSwipe v5 core (UMD) -->
<script src="https://cdn.jsdelivr.net/npm/photoswipe@5.4.4/dist/umd/photoswipe.umd.min.js"></script>

<script>
(function() {
  'use strict';

  // ======= CONFIG =======
  var themeUri = '<?php echo esc_js($theme_uri); ?>';
  var catalogs = {
    nexlume: { current: 1, total: <?php echo $nexlume_count; ?>, path: '/assets/NexLume/' },
    air:     { current: 1, total: <?php echo $air_count; ?>,     path: '/assets/NexLumeAir/' }
  };
  var activeCatalog = 'nexlume';

  // ======= PRELOADER =======
  window.addEventListener('load', function() {
    setTimeout(function() {
      gsap.to('#preloader', {
        opacity: 0,
        duration: 0.65,
        ease: 'power2.inOut',
        onComplete: function() {
          var el = document.getElementById('preloader');
          el.style.visibility  = 'hidden';
          el.style.pointerEvents = 'none';
        }
      });
    }, 800);
  });

  // ======= NAVBAR + BACK TO TOP =======
  var nav        = document.getElementById('nav');
  var bttBtn     = document.getElementById('back-to-top');
  var bttCircle  = document.querySelector('.btt__progress');
  var bttLen = 2 * Math.PI * 18; // r=18 → ~113.1
  bttCircle.style.strokeDasharray  = bttLen;
  bttCircle.style.strokeDashoffset = bttLen;

  window.addEventListener('scroll', function() {
    var scrollTop  = window.pageYOffset || document.documentElement.scrollTop;
    var docHeight  = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var progress   = docHeight > 0 ? scrollTop / docHeight : 0;

    nav.classList.toggle('scrolled', scrollTop > 50);
    bttBtn.classList.toggle('visible', scrollTop > 300);
    bttCircle.style.strokeDashoffset = bttLen * (1 - progress);
  });

  bttBtn.addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  var toggle = document.getElementById('navToggle');
  var links  = document.getElementById('navLinks');
  var navEl  = document.getElementById('nav');
  function openMenu() {
    // Move links to body so it's outside nav's backdrop-filter stacking context
    document.body.appendChild(links);
    links.classList.add('open');
    navEl.classList.add('menu-open');
    toggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }
  function closeMenu() {
    links.classList.remove('open');
    navEl.classList.remove('menu-open');
    // Move links back inside nav before the toggle button
    navEl.insertBefore(links, toggle);
    toggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }
  if (toggle) {
    toggle.addEventListener('click', function() {
      links.classList.contains('open') ? closeMenu() : openMenu();
    });
    links.querySelectorAll('a').forEach(function(a) {
      a.addEventListener('click', function() { closeMenu(); });
    });
  }

  // ======= SCROLL REVEAL =======
  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  document.querySelectorAll('.reveal').forEach(function(el) { observer.observe(el); });

  // ======= COUNTER ANIMATION =======
  var counterObs = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        var el       = entry.target;
        var target   = parseInt(el.getAttribute('data-count'));
        var duration = 1800;
        var startTime = null;
        function animate(t) {
          if (!startTime) startTime = t;
          var p = Math.min((t - startTime) / duration, 1);
          var eased = 1 - Math.pow(1 - p, 3);
          el.textContent = Math.floor(eased * target) + '+';
          if (p < 1) requestAnimationFrame(animate);
        }
        requestAnimationFrame(animate);
        counterObs.unobserve(el);
      }
    });
  }, { threshold: 0.5 });
  document.querySelectorAll('[data-count]').forEach(function(el) { counterObs.observe(el); });

  // ======= SMOOTH SCROLL =======
  document.querySelectorAll('a[href^="#"]').forEach(function(a) {
    a.addEventListener('click', function(e) {
      var id = this.getAttribute('href');
      if (id === '#') return;
      var el = document.querySelector(id);
      if (el) { e.preventDefault(); el.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
  });

  // ======= LAZY THUMB LOADING =======
  var thumbsLoaded = { nexlume: false, air: false };

  function loadThumbs(name) {
    if (thumbsLoaded[name]) return;
    thumbsLoaded[name] = true;
    document.querySelectorAll('#thumbs-' + name + ' .lazy-thumb').forEach(function(img) {
      img.src = img.getAttribute('data-src');
    });
  }

  // Load NexLume thumbs when catalog section enters viewport
  var catalogObs = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        loadThumbs('nexlume');
        catalogObs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  var catalogSection = document.getElementById('catalog');
  if (catalogSection) catalogObs.observe(catalogSection);

  // ======= CATALOG SWITCHING =======
  window.switchCatalog = function(name) {
    activeCatalog = name;
    loadThumbs(name);

    document.querySelectorAll('.catalog__tab').forEach(function(tab) {
      tab.classList.toggle('active', tab.getAttribute('data-catalog') === name);
    });
    document.querySelectorAll('.catalog__panel').forEach(function(panel) {
      panel.classList.toggle('active', panel.id === 'panel-' + name);
    });

    var catalogSection = document.getElementById('catalog');
    if (catalogSection) {
      setTimeout(function() {
        catalogSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }, 100);
    }
  };

  // ======= PAGE NAVIGATION =======
  window.changePage = function(name, dir) {
    var c = catalogs[name];
    var newPage = c.current + dir;
    if (newPage < 1 || newPage > c.total) return;
    goToPage(name, newPage);
  };

  window.goToPage = function(name, page) {
    var c = catalogs[name];
    c.current = page;

    var img = document.getElementById('page-' + name);
    if (img) {
      img.classList.add('loading');
      img.onload  = function() { img.classList.remove('loading'); };
      img.onerror = function() { img.classList.remove('loading'); };
      img.src = themeUri + c.path + page + '.svg';
      img.alt = (name === 'nexlume' ? 'NexLume' : 'NexLume Air') + ' Catalog Page ' + page;
    }

    var prevBtn = document.getElementById('prev-' + name);
    var nextBtn = document.getElementById('next-' + name);
    if (prevBtn) prevBtn.disabled = (page <= 1);
    if (nextBtn) nextBtn.disabled = (page >= c.total);

    var info = document.getElementById('info-' + name);
    if (info) info.innerHTML = 'Page <strong>' + page + '</strong> of <strong>' + c.total + '</strong>';

    var thumbs = document.querySelectorAll('#thumbs-' + name + ' .catalog__thumb');
    thumbs.forEach(function(thumb, i) {
      thumb.classList.toggle('active', i === page - 1);
    });
    if (thumbs[page - 1]) {
      thumbs[page - 1].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
    }
  };

  // ======= JUMP TO PAGE (inline viewer) =======
  window.handleJump = function(name) {
    var input = document.getElementById('jump-' + name);
    if (!input) return;
    var page = parseInt(input.value, 10);
    var c    = catalogs[name];
    if (!isNaN(page) && page >= 1 && page <= c.total) {
      goToPage(name, page);
      input.value = '';
    } else {
      input.classList.add('invalid');
      setTimeout(function() { input.classList.remove('invalid'); }, 700);
    }
  };

  // Enter key in jump inputs
  document.querySelectorAll('.catalog__jump-input').forEach(function(input) {
    input.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') {
        var name = this.id.replace('jump-', '');
        handleJump(name);
      }
    });
  });

  // ======= CATALOG LIGHTBOX (PhotoSwipe v5) =======
  function buildPswpItems(catalogName) {
    var c     = catalogs[catalogName];
    var label = catalogName === 'nexlume' ? 'NexLume' : 'NexLume Air';
    var items = [];
    for (var i = 1; i <= c.total; i++) {
      items.push({
        src:    themeUri + c.path + i + '.svg',
        width:  794,
        height: 1123,
        alt:    label + ' Catalog Page ' + i
      });
    }
    return items;
  }

  window.openCatalogLightbox = function(name) {
    if (typeof PhotoSwipe === 'undefined') {
      console.warn('PhotoSwipe not loaded');
      return;
    }
    var c          = catalogs[name];
    var items      = buildPswpItems(name);
    var startIndex = c.current - 1;
    var total      = c.total;

    var pswp = new PhotoSwipe({
      dataSource:          items,
      index:               startIndex,
      bgOpacity:           0.96,
      zoom:                true,
      pinchToClose:        false,
      closeOnVerticalDrag: false,
      padding:             { top: 60, bottom: 60, left: 40, right: 40 }
    });

    // ---- Custom "Jump to page" bar element ----
    pswp.on('uiRegister', function() {
      pswp.ui.registerElement({
        name:      'page-jump',
        order:     9,
        isButton:  false,
        appendTo:  'bar',
        html:
          '<div class="pswp__page-jump">' +
            '<span class="pswp__jump-label">Go to</span>' +
            '<input class="pswp__jump-input" type="number" min="1" max="' + total + '" value="' + c.current + '" aria-label="Go to page">' +
            '<span class="pswp__jump-sep">/ ' + total + '</span>' +
            '<button class="pswp__jump-go">Go</button>' +
          '</div>',
        onInit: function(el, pswpInstance) {
          var input  = el.querySelector('.pswp__jump-input');
          var goBtn  = el.querySelector('.pswp__jump-go');

          // Sync input when slide changes
          pswpInstance.on('change', function() {
            input.value = pswpInstance.currIndex + 1;
          });

          function doJump() {
            var n = parseInt(input.value, 10);
            if (!isNaN(n) && n >= 1 && n <= total) {
              pswpInstance.goTo(n - 1);
            } else {
              input.select();
            }
          }

          goBtn.addEventListener('click', doJump);

          input.addEventListener('keydown', function(e) {
            // Prevent PhotoSwipe arrow/esc keys while typing
            e.stopPropagation();
            if (e.key === 'Enter') doJump();
          });

          // Temporarily disable arrow-key nav while input is focused
          input.addEventListener('focus',  function() { pswpInstance.options.arrowKeys = false; });
          input.addEventListener('blur',   function() { pswpInstance.options.arrowKeys = true;  });
        }
      });
    });

    // Sync inline viewer when gallery closes
    pswp.on('beforeDestroy', function() {
      goToPage(name, pswp.currIndex + 1);
    });

    pswp.init(); // Opens the gallery immediately
  };

})();
</script>

</body>
</html>
