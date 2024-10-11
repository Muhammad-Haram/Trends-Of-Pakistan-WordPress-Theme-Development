<div class="cursor"></div>

<div class="navbar-promax">
  <!-- header -->
  <div id="header">

    <div class="navbar-right">
      <div class="logo">
        <a href="/">
             <img class="cursor-color" src="<?= get_template_directory_uri().'/images/logo.png'?>" alt="" />
        </a>
      </div>

      <div class="searchDiv cursor-color">
        <div class="searchLogo">
          <img class="cursor-color" src="<?= get_template_directory_uri().'/images/search.png'?>" alt="" />

        </div>
        <!-- <input class="searchbar" type="search" placeholder="search" /> -->
        <?php get_search_form();?>
      </div>

    </div>

    <div class="menu-icon bar cursor-color">
      <img class="menu-icon-img cursor-color" src="<?= get_template_directory_uri().'/images/open-01.png'?>" alt="" />

    </div>
  </div>
  <!-- header end -->

  <!-- menu  -->
  <div class="nav-info">

    <div class="nav-blur"></div>
    <div class="nav-content">
      <div class="nav-close">

        <div class="logo">
          <!-- <img class="cursor-color" src="/assets/img/logo.png" alt=""> -->
        </div>

        <div class="menu-icon close cursor-color">
          <img class="cursor-color" src="<?= get_template_directory_uri().'/images/close-01.png'?>" alt="" />
        </div>

      </div>

      <div class="nav-links">

        <ul class="nav-links-ul">
          <a class="cursor-color nav-links-anchor" href="/category/tending-news/"><li class="nav-links-li">Trending News</li></a>
          <a class="cursor-color nav-links-anchor" href="/category/sports/"><li class="nav-links-li">Sports</li></a>
          <a class="cursor-color nav-links-anchor" href="/category/health/"><li class="nav-links-li">Health</li></a>
          <a class="cursor-color nav-links-anchor" href="/category/politics/"><li class="nav-links-li">politics</li></a>
          <a class="cursor-color nav-links-anchor" href="/category/tech-and-telecom/"><li class="nav-links-li">Tech And Telecom
          </li></a>
          <a class="cursor-color nav-links-anchor" href="/category/entertainment/"><li class="nav-links-li">entertainment</li></a>
          <a class="cursor-color nav-links-anchor" href="/category/education/"><li class="nav-links-li">education</li></a>
          <a class="cursor-color nav-links-anchor" href="/category/business/"><li class="nav-links-li">Business</li></a>
          <a class="cursor-color nav-links-anchor" href="/contact-us"><li class="nav-links-li">Contact Us</li></a>

        </ul>
      </div>
    </div>

  </div>
  <!-- menu end  -->
</div>