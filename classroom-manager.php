<?php
require 'config.php';
if(!empty($_SESSION['id'])){
    $id = $_SESSION['id'];
    $result = mysqli_query($conn, "SELECT * FROM user_info WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
}
else{
    header('Location: login.php');
}

?>


<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta name="generator" content="Docutils 0.17.1: http://docutils.sourceforge.net/" />

    <title>PART A: EFFECTIVE CLASSROOM MANAGEMENT &#8212; Teacher as classroom manager (UNISA Edition)</title>
    
  <!-- Loaded before other Sphinx assets -->
  <link href="_static/styles/theme.css?digest=1999514e3f237ded88cf" rel="stylesheet">
<link href="_static/styles/pydata-sphinx-theme.css?digest=1999514e3f237ded88cf" rel="stylesheet">

    
  <link rel="stylesheet"
    href="_static/vendor/fontawesome/5.13.0/css/all.min.css">
  <link rel="preload" as="font" type="font/woff2" crossorigin
    href="_static/vendor/fontawesome/5.13.0/webfonts/fa-solid-900.woff2">
  <link rel="preload" as="font" type="font/woff2" crossorigin
    href="_static/vendor/fontawesome/5.13.0/webfonts/fa-brands-400.woff2">

    <link rel="stylesheet" type="text/css" href="_static/pygments.css" />
    <link rel="stylesheet" href="_static/styles/sphinx-book-theme.css?digest=5115cc725059bd94278eecd172e13a965bf8f5a9" type="text/css" />
    <link rel="stylesheet" type="text/css" href="_static/togglebutton.css" />
    <link rel="stylesheet" type="text/css" href="_static/copybutton.css" />
    <link rel="stylesheet" type="text/css" href="_static/mystnb.css" />
    <link rel="stylesheet" type="text/css" href="_static/sphinx-thebe.css" />
    <link rel="stylesheet" type="text/css" href="_static/design-style.b7bb847fb20b106c3d81b95245e65545.min.css" />
    
  <!-- Pre-loaded scripts that we'll load fully later -->
  <link rel="preload" as="script" href="_static/scripts/pydata-sphinx-theme.js?digest=1999514e3f237ded88cf">

    <script data-url_root="./" id="documentation_options" src="_static/documentation_options.js"></script>
    <script src="_static/jquery.js"></script>
    <script src="_static/underscore.js"></script>
    <script src="_static/doctools.js"></script>
    <script src="_static/clipboard.min.js"></script>
    <script src="_static/copybutton.js"></script>
    <script src="_static/scripts/sphinx-book-theme.js?digest=9c920249402e914e316237a7dbc6769907cce411"></script>
    <script>let toggleHintShow = 'Click to show';</script>
    <script>let toggleHintHide = 'Click to hide';</script>
    <script>let toggleOpenOnPrint = 'true';</script>
    <script src="_static/togglebutton.js"></script>
    <script>var togglebuttonSelector = '.toggle, .admonition.dropdown, .tag_hide_input div.cell_input, .tag_hide-input div.cell_input, .tag_hide_output div.cell_output, .tag_hide-output div.cell_output, .tag_hide_cell.cell, .tag_hide-cell.cell';</script>
    <script src="_static/design-tabs.js"></script>
    <script>const THEBE_JS_URL = "https://unpkg.com/thebe@0.8.2/lib/index.js"
const thebe_selector = ".thebe,.cell"
const thebe_selector_input = "pre"
const thebe_selector_output = ".output, .cell_output"
</script>
    <script async="async" src="_static/sphinx-thebe.js"></script>
    <link rel="index" title="Index" href="genindex.html" />
    <link rel="search" title="Search" href="search.html" />
    <link rel="next" title="Exercises" href="exercises.html" />
    <link rel="prev" title="Imprint page" href="imprint-page.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="docsearch:language" content="None">
    

    <!-- Google Analytics -->
    
  </head>
  <body data-spy="scroll" data-target="#bd-toc-nav" data-offset="60">
<!-- Checkboxes to toggle the left sidebar -->
<input type="checkbox" class="sidebar-toggle" name="__navigation" id="__navigation" aria-label="Toggle navigation sidebar">
<label class="overlay overlay-navbar" for="__navigation">
    <div class="visually-hidden">Toggle navigation sidebar</div>
</label>
<!-- Checkboxes to toggle the in-page toc -->
<input type="checkbox" class="sidebar-toggle" name="__page-toc" id="__page-toc" aria-label="Toggle in-page Table of Contents">
<label class="overlay overlay-pagetoc" for="__page-toc">
    <div class="visually-hidden">Toggle in-page Table of Contents</div>
</label>
<!-- Headers at the top -->
<div class="announcement header-item noprint">My announcement!</div>
<div class="header header-item noprint"></div>

    
    <div class="container-fluid" id="banner"></div>

    

    <div class="container-xl">
      <div class="row">
          
<!-- Sidebar -->
<div class="bd-sidebar noprint" id="site-navigation">
    <div class="bd-sidebar__content">
        <div class="bd-sidebar__top"><div class="navbar-brand-box">
    <a class="navbar-brand text-wrap" href="index.html">
      
        <!-- `logo` is deprecated in Sphinx 4.0, so remove this when we stop supporting 3 -->
        
      
      
      <img src="_static/logo.jpg" class="logo" alt="logo">
      
      
      <h1 class="site-logo" id="site-title">Teacher as classroom manager (UNISA Edition)</h1>
      
    </a>
</div><form class="bd-search d-flex align-items-center" action="search.html" method="get">
  <i class="icon fas fa-search"></i>
  <input type="search" class="form-control" name="q" id="search-input" placeholder="Search this book..." aria-label="Search this book..." autocomplete="off" >
</form><nav class="bd-links" id="bd-docs-nav" aria-label="Main">
    <div class="bd-toc-item active">
        
        <ul class="nav bd-sidenav bd-sidenav__home-link">
            <li class="toctree-l1">
                <a class="reference internal" href="intro.html">
                    Cover
                </a>
            </li>
        </ul>
        <ul class="current nav bd-sidenav">
 <li class="toctree-l1">
  <a class="reference internal" href="imprint-page.html">
   Imprint page
  </a>
 </li>
 <li class="toctree-l1 current active has-children">
  <a class="current reference internal" href="#">
   PART A: EFFECTIVE CLASSROOM MANAGEMENT
  </a>
  <input checked="" class="toctree-checkbox" id="toctree-checkbox-1" name="toctree-checkbox-1" type="checkbox"/>
  <label for="toctree-checkbox-1">
   <i class="fas fa-chevron-down">
   </i>
  </label>
  <ul>
   <li class="toctree-l2">
    <a class="reference internal" href="exercises.html">
     Exercises
    </a>
   </li>
  </ul>
 </li>
</ul>

<ul class="nav bd-sidenav bd-sidenav__home-link">
  <li class="toctree-l1">
      <a class="reference internal" href="logout.php">
          Logout
      </a>
  </li>
</ul>

    </div>
</nav></div>
        <div class="bd-sidebar__bottom">
             <!-- To handle the deprecated key -->
            
            <div class="navbar_extra_footer">
            Powered by <a href="https://jupyterbook.org">Jupyter Book</a>
            </div>
            
        </div>
    </div>
    <div id="rtd-footer-container"></div>
</div>


          


          
<!-- A tiny helper pixel to detect if we've scrolled -->
<div class="sbt-scroll-pixel-helper"></div>
<!-- Main content -->
<div class="col py-0 content-container">
    
    <div class="header-article row sticky-top noprint">
        



<div class="col py-1 d-flex header-article-main">
    <div class="header-article__left">
        
        <label for="__navigation"
  class="headerbtn"
  data-toggle="tooltip"
data-placement="right"
title="Toggle navigation"
>
  

<span class="headerbtn__icon-container">
  <i class="fas fa-bars"></i>
  </span>

</label>

        
    </div>
    <div class="header-article__right">
<div class="menu-dropdown menu-dropdown-launch-buttons">
  <button class="headerbtn menu-dropdown__trigger"
      aria-label="Launch interactive content">
      <i class="fas fa-rocket"></i>
  </button>
  <div class="menu-dropdown__content">
    <ul>
      <li>
        <a href="https://mybinder.org/v2/gh/executablebooks/jupyter-book/master?urlpath=tree/classroom-manager.ipynb"
   class="headerbtn"
   data-toggle="tooltip"
data-placement="left"
title="Launch on Binder"
>
  

<span class="headerbtn__icon-container">
  
    <img src="_static/images/logo_binder.svg">
  </span>
<span class="headerbtn__text-container">Binder</span>
</a>

      </li>
      
    </ul>
  </div>
</div>

<button onclick="toggleFullScreen()"
  class="headerbtn"
  data-toggle="tooltip"
data-placement="bottom"
title="Fullscreen mode"
>
  

<span class="headerbtn__icon-container">
  <i class="fas fa-expand"></i>
  </span>

</button>

<div class="menu-dropdown menu-dropdown-download-buttons">
  <button class="headerbtn menu-dropdown__trigger"
      aria-label="Download this page">
      <i class="fas fa-download"></i>
  </button>
  <div class="menu-dropdown__content">
    <ul>
      <li>
        <a href="_sources/classroom-manager.ipynb"
   class="headerbtn"
   data-toggle="tooltip"
data-placement="left"
title="Download source file"
>
  

<span class="headerbtn__icon-container">
  <i class="fas fa-file"></i>
  </span>
<span class="headerbtn__text-container">.ipynb</span>
</a>

      </li>
      
      <li>
        
<button onclick="printPdf(this)"
  class="headerbtn"
  data-toggle="tooltip"
data-placement="left"
title="Print to PDF"
>
  

<span class="headerbtn__icon-container">
  <i class="fas fa-file-pdf"></i>
  </span>
<span class="headerbtn__text-container">.pdf</span>
</button>

      </li>
      
    </ul>
  </div>
</div>
<label for="__page-toc"
  class="headerbtn headerbtn-page-toc"
  
>
  

<span class="headerbtn__icon-container">
  <i class="fas fa-list"></i>
  </span>

</label>

    </div>
</div>

<!-- Table of contents -->
<div class="col-md-3 bd-toc show noprint">
    <div class="tocsection onthispage pt-5 pb-3">
        <i class="fas fa-list"></i> Contents
    </div>
    <nav id="bd-toc-nav" aria-label="Page">
        <ul class="visible nav section-nav flex-column">
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#chapter-1">
   CHAPTER 1
  </a>
 </li>
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#the-millennial-generation-understanding-and-engaging-todays-learners">
   The Millennial Generation: understanding and engaging today’s learners
  </a>
  <ul class="nav section-nav flex-column">
   <li class="toc-h3 nav-item toc-entry">
    <a class="reference internal nav-link" href="#defining-the-millennial-generation-by-birth-date-and-name">
     1.1 DEFINING THE MILLENNIAL GENERATION BY BIRTH DATE AND NAME
    </a>
   </li>
   <li class="toc-h3 nav-item toc-entry">
    <a class="reference internal nav-link" href="#characteristics-of-the-millennial-generation">
     1.2 CHARACTERISTICS OF THE MILLENNIAL GENERATION
    </a>
   </li>
   <li class="toc-h3 nav-item toc-entry">
    <a class="reference internal nav-link" href="#learning-styles-of-the-millennial-generation">
     1.3 LEARNING STYLES OF THE MILLENNIAL GENERATION
    </a>
    <ul class="nav section-nav flex-column">
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#experimental-activities">
       1.3.1 Experimental activities
      </a>
     </li>
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#technology">
       1.3.2 Technology
      </a>
     </li>
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#structure">
       1.3.3 Structure
      </a>
     </li>
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#teamwork">
       1.3.4 Teamwork
      </a>
     </li>
    </ul>
   </li>
   <li class="toc-h3 nav-item toc-entry">
    <a class="reference internal nav-link" href="#understanding-and-engaging-todays-learners">
     1.4 UNDERSTANDING AND ENGAGING TODAY’S LEARNERS
    </a>
    <ul class="nav section-nav flex-column">
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#introduction">
       1.4.1 Introduction
      </a>
     </li>
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#learner-centred-learning">
       1.4.2 Learner-centred learning
      </a>
     </li>
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#understanding-learners">
       1.4.3 Understanding learners
      </a>
     </li>
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#engaging-learners">
       1.4.4 Engaging learners
      </a>
      <ul class="nav section-nav flex-column">
       <li class="toc-h5 nav-item toc-entry">
        <a class="reference internal nav-link" href="#connect-with-content">
         1.4.4.1 Connect with content
        </a>
       </li>
       <li class="toc-h5 nav-item toc-entry">
        <a class="reference internal nav-link" href="#connect-learners-with-each-other">
         1.4.4.2 Connect learners with each other
        </a>
       </li>
      </ul>
     </li>
    </ul>
   </li>
  </ul>
 </li>
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#the-digital-divide">
   1.5 THE DIGITAL DIVIDE
  </a>
  <ul class="nav section-nav flex-column">
   <li class="toc-h3 nav-item toc-entry">
    <a class="reference internal nav-link" href="#what-is-the-digital-divide">
     1.5.1 What is the digital divide?
    </a>
   </li>
  </ul>
 </li>
</ul>

    </nav>
</div>
    </div>
    <div class="article row">
        <div class="col pl-md-3 pl-lg-5 content-container">
            <!-- Table of contents that is only displayed when printing the page -->
            <div id="jb-print-docs-body" class="onlyprint">
                <h1>PART A: EFFECTIVE CLASSROOM MANAGEMENT</h1>
                <!-- Table of contents -->
                <div id="print-main-content">
                    <div id="jb-print-toc">
                        
                        <div>
                            <h2> Contents </h2>
                        </div>
                        <nav aria-label="Page">
                            <ul class="visible nav section-nav flex-column">
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#chapter-1">
   CHAPTER 1
  </a>
 </li>
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#the-millennial-generation-understanding-and-engaging-todays-learners">
   The Millennial Generation: understanding and engaging today’s learners
  </a>
  <ul class="nav section-nav flex-column">
   <li class="toc-h3 nav-item toc-entry">
    <a class="reference internal nav-link" href="#defining-the-millennial-generation-by-birth-date-and-name">
     1.1 DEFINING THE MILLENNIAL GENERATION BY BIRTH DATE AND NAME
    </a>
   </li>
   <li class="toc-h3 nav-item toc-entry">
    <a class="reference internal nav-link" href="#characteristics-of-the-millennial-generation">
     1.2 CHARACTERISTICS OF THE MILLENNIAL GENERATION
    </a>
   </li>
   <li class="toc-h3 nav-item toc-entry">
    <a class="reference internal nav-link" href="#learning-styles-of-the-millennial-generation">
     1.3 LEARNING STYLES OF THE MILLENNIAL GENERATION
    </a>
    <ul class="nav section-nav flex-column">
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#experimental-activities">
       1.3.1 Experimental activities
      </a>
     </li>
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#technology">
       1.3.2 Technology
      </a>
     </li>
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#structure">
       1.3.3 Structure
      </a>
     </li>
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#teamwork">
       1.3.4 Teamwork
      </a>
     </li>
    </ul>
   </li>
   <li class="toc-h3 nav-item toc-entry">
    <a class="reference internal nav-link" href="#understanding-and-engaging-todays-learners">
     1.4 UNDERSTANDING AND ENGAGING TODAY’S LEARNERS
    </a>
    <ul class="nav section-nav flex-column">
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#introduction">
       1.4.1 Introduction
      </a>
     </li>
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#learner-centred-learning">
       1.4.2 Learner-centred learning
      </a>
     </li>
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#understanding-learners">
       1.4.3 Understanding learners
      </a>
     </li>
     <li class="toc-h4 nav-item toc-entry">
      <a class="reference internal nav-link" href="#engaging-learners">
       1.4.4 Engaging learners
      </a>
      <ul class="nav section-nav flex-column">
       <li class="toc-h5 nav-item toc-entry">
        <a class="reference internal nav-link" href="#connect-with-content">
         1.4.4.1 Connect with content
        </a>
       </li>
       <li class="toc-h5 nav-item toc-entry">
        <a class="reference internal nav-link" href="#connect-learners-with-each-other">
         1.4.4.2 Connect learners with each other
        </a>
       </li>
      </ul>
     </li>
    </ul>
   </li>
  </ul>
 </li>
 <li class="toc-h2 nav-item toc-entry">
  <a class="reference internal nav-link" href="#the-digital-divide">
   1.5 THE DIGITAL DIVIDE
  </a>
  <ul class="nav section-nav flex-column">
   <li class="toc-h3 nav-item toc-entry">
    <a class="reference internal nav-link" href="#what-is-the-digital-divide">
     1.5.1 What is the digital divide?
    </a>
   </li>
  </ul>
 </li>
</ul>

                        </nav>
                    </div>
                </div>
            </div>
            <main id="main-content" role="main">
                
              <div>
                
  <section class="tex2jax_ignore mathjax_ignore" id="part-a-effective-classroom-management">
<h1>PART A: EFFECTIVE CLASSROOM MANAGEMENT<a class="headerlink" href="#part-a-effective-classroom-management" title="Permalink to this headline">#</a></h1>
<section id="chapter-1">
<h2>CHAPTER 1<a class="headerlink" href="#chapter-1" title="Permalink to this headline">#</a></h2>
</section>
<section id="the-millennial-generation-understanding-and-engaging-todays-learners">
<h2>The Millennial Generation: understanding and engaging today’s learners<a class="headerlink" href="#the-millennial-generation-understanding-and-engaging-todays-learners" title="Permalink to this headline">#</a></h2>
<p><em>S.P. Mokoena</em></p>
<p>The latest generation, which is called Generation Z, is believed to share characteristics with the Millennial Generation that are relevant to the discussions in this chapter.</p>
<p>It is not unusual for even veteran educators to express some bewilderment about teaching today’s learners. Pedagogy that these educators have been using seems no longer to be effective. Seasoned educators say that many of today’s learners seem to have changed, and suggest that innovative pedagogical initiatives may be useful in teaching them (Weimer 2003; Spence 2001; Sporer 2001). A literature review by Coates (2007) itemised a need for educators to review their approaches to teaching in order to be successful in this new educational environment. Educators cannot expect to meet the challenges of today with yesterday’s tools and expect them to be working tomorrow. A large number of today’s learners are growing up in a fast-paced, techno- logical, outcomes-orientated environment. As a result of their development within this environment, it may be argued that they have acquired a number of distinctive traits. The overwhelming number of media messages that they have received in their lifetimes has led them to develop a significant level of scepticism towards any infor- mation that they receive. Educators should consider this generation as giving them an opportunity to question and enhance their approach to teaching and reduce the bureaucracy of their classrooms.</p>
<section id="defining-the-millennial-generation-by-birth-date-and-name">
<h3>1.1 DEFINING THE MILLENNIAL GENERATION BY BIRTH DATE AND NAME<a class="headerlink" href="#defining-the-millennial-generation-by-birth-date-and-name" title="Permalink to this headline">#</a></h3>
<p>By many accounts, the beginning and ending dates defining the parameters of the Millennial Generation vary from the beginning year 1982 to the ending year 2003. This cohort is known by different names, which include: Generation-D, Net Gen, Gen Y, Newmills, Millennial, Nexters, Generation Next, Echo Boomers, and the Digital Gen- eration (Mokoena 2016). Even the latest generation, which is called Generation Z, is believed to share characteristics with the Millennial Generation that are relevant to the discussions in this chapter. The Millennial Generation is the first ubiquitous cohort of learners raised on, and confirmed as, experts in the latest, fastest, cool- est, greatest, newest electronic technologies on the planet. Along with being a most diverse group of children, the next section discusses some characteristics associated with this generation.</p>
</section>
<section id="characteristics-of-the-millennial-generation">
<h3>1.2 CHARACTERISTICS OF THE MILLENNIAL GENERATION<a class="headerlink" href="#characteristics-of-the-millennial-generation" title="Permalink to this headline">#</a></h3>
<p>Books and articles have been written on Millennials that describe their characteris- tics (Wong &amp; Wong 2007; Tapscott 2009; Strauss &amp; Howe 2006; Mokoena 2016). A few characteristics associated with Millennials are listed below:</p>
<ul class="simple">
<li><p>Technology savvy: communicate more through technology than in person; they blog, Google, tweet, chat, and use Wikipedia to acquire sources of information.</p></li>
<li><p>Rely on search engines for information: research has shown that almost 89 per cent of Millennials search for everything with search engines such as Google.</p></li>
<li><p>Prefer teamwork and collaboration: they prefer to work in teams rather than alone and also to share what they have learnt through collaboration in small groups.</p></li>
<li><p>Constantly seek feedback: receiving regular and speedy feedback, especially on their academic performance, is essential to them.</p></li>
<li><p>Short attention span: prefer to be actively engaged and have fun in doing tasks, otherwise boredom and impatience take over.</p></li>
<li><p>Learn by trial and error: prefer to play with technology, hitting keys until they figure it out. They will only seek help if they cannot come up with an answer.</p></li>
<li><p>Interested in multimedia: Millennials are accustomed to entertainment, speed, and accessing music, games, videos and information in their own way. As such, they prefer interactive media rather than passive media.</p></li>
<li><p>Multitask on everything: can do several tasks easily at the same time. For example, can chat with a friend on a cellphone while surfing the net and watching TV or doing homework</p></li>
<li><p>Learn by inductive discovery: prefer to learn by performing tasks rather than being told what to do. Millennials are kinaesthetic, experiential, hands-on learners.</p></li>
<li><p>Emotionally open: since they are open to meeting new people, sharing personal information through social media, they prefer an environment where they can express their feelings easily.</p></li>
</ul>
<p>Although this is not an exhaustive list, it can be seen from this list that there are many characteristics pertaining to the Millennial Generation. With all of these characteristics in mind, Howe and Strauss (2000) believe that the following seven core traits can also be linked to the Millennial Generation:</p>
<ol class="simple">
<li><p>They have been made to feel they are special.</p></li>
<li><p>They have been sheltered by their parents and society.</p></li>
<li><p>They are confident, with high levels of trust and optimism.</p></li>
<li><p>They have developed strong team-building skills (team-oriented).</p></li>
<li><p>They are conventional, following rules and standards.</p></li>
<li><p>They have been pressured to study hard and excel.</p></li>
<li><p>They are high achievers and highly educated.</p></li>
</ol>
<p>Tapscott (2009), on the other hand, lists eight “norms” (distinctive attitudinal and behavioural characteristics) that can also be linked to Millennials, and these include: freedom, customisation, scrutiny, integrity, collaboration, entertainment, speed, and innovation. Therefore, understanding the characteristics, core traits and norms associated with Millennials is essential as it helps to connect with them both in class and out of class. Again, in order to connect meaningfully with this generation, you also need to know their culture, the latest technology they use, their interests, intelligence strengths, learning styles, and the way they think.</p>
</section>
<section id="learning-styles-of-the-millennial-generation">
<h3>1.3 LEARNING STYLES OF THE MILLENNIAL GENERATION<a class="headerlink" href="#learning-styles-of-the-millennial-generation" title="Permalink to this headline">#</a></h3>
<p>It is important first to discuss and understand the learning styles of this cohort. In the 21st-century classroom, learners want to control how, why, and when a task is com- pleted. Woods, Wilson and Walkovich (2011) identify the preferred learning styles of Millennial Generation learners as follows:</p>
<ul class="simple">
<li><p>Experimental activities</p></li>
<li><p>Using technology</p></li>
<li><p>Structure</p></li>
<li><p>Teamwork</p></li>
</ul>
<section id="experimental-activities">
<h4>1.3.1 Experimental activities<a class="headerlink" href="#experimental-activities" title="Permalink to this headline">#</a></h4>
<p>Kinaesthetic and visual learning styles are the most prevalent in Millennial Genera- tion learners. Rather than learning by the traditional transmission or the auditory lec- torial learning model, which treats learners as passive receptacles of information, Millennial Generation learners prefer “active learning”. They favour learning experiences that actively engage them, and construct their own learning by “doing” rather than simply being told. They also prefer multisensory media such as diagrams, graphs, video and flow charts, rather than merely text.</p>
<p>Such an approach to learning is effective – learners retain five per cent of materials presented in the classroom, 10 per cent of what they read, 20 to 30 per cent of what they see, and 75 per cent of what they do. Consequently, a discovery approach to learning or an approach of process over content increases information retention by lessening opportunities for boredom and increasing learner participation. However, a balance needs to be maintained between didactic and discovery approaches. The goal must be to match the appropriate use of technology with the content and the learners’ learning styles (Woods, Wilson &amp; Walkovich 2011).</p>
</section>
<section id="technology">
<h4>1.3.2 Technology<a class="headerlink" href="#technology" title="Permalink to this headline">#</a></h4>
<p>Millennial Generation learners are technologically savvy and therefore relate to and appreciate the flexibility and the convenience of an online teaching environment. Like all learners, they engage better with material that is meaningful or anchored within their own experiences. This, together with a greater ability to study at their own time, pace and choosing, is recognised as being important in order to provide an environment for deep learning and understanding. However, more technology is not neces- sarily better. It is not technology per se that makes learning engaging: it is the learning activity. Therefore, as indicated by phrases such as Web “surfing” and “texting”, the only innovations valued are those that enable engagement by making learning more active, social and learner-centred. However, for those learners who are neither technology or net savvy due to class, nationality, or other factors that limit access, special instruction or training sessions should be provided to give them opportunities to be brought up to the same level of their more efficient peers.</p>
</section>
<section id="structure">
<h4>1.3.3 Structure<a class="headerlink" href="#structure" title="Permalink to this headline">#</a></h4>
<p>Although today’s learners want to be entertained, learning has to be “high touch” as well as “high tech”. Millennial Generation learners prefer a supportive learning environment, which appropriately scaffolds or structures the teaching and learning process. Consequently, presenting material in “bite-sized chunks” or via a step-by- step approach, makes large bodies of text more manageable and more readily pro- cessed. Additionally, although tasks may be done online, feedback and monitoring by instructors still fulfil an important motivational role.</p>
</section>
<section id="teamwork">
<h4>1.3.4 Teamwork<a class="headerlink" href="#teamwork" title="Permalink to this headline">#</a></h4>
<p>Millennial Generation learners gravitate towards activities that promote peer or social interaction. They often prefer group-based approaches to study and activities that encourage cooperative learning, Indeed, the prevalence of online gaming encourages collaboration among players and thus provides a context for the emergence of learning communities. Such collaborative activities improve learner relationships and social development. They also increase academic learning and retention, cognitive development, and active engagement, and provide an authentic learning experience that develops marketable skills, such as communication and teamwork.</p>
</section>
</section>
<section id="understanding-and-engaging-todays-learners">
<h3>1.4 UNDERSTANDING AND ENGAGING TODAY’S LEARNERS<a class="headerlink" href="#understanding-and-engaging-todays-learners" title="Permalink to this headline">#</a></h3>
<section id="introduction">
<h4>1.4.1 Introduction<a class="headerlink" href="#introduction" title="Permalink to this headline">#</a></h4>
<p>When educators get together to talk about their work, the conversation inevitably comes round to the learners they are teaching – their habits, the challenges they are facing and the challenges they pose as learners. One of the best resources on this topic is the video by Michael Wesch, a cultural anthropologist at Kansas State University. In this video (Wesch 2007), Michael asked his students a simple question: “What is it like being a student today?” Student responses – at once provocative and dis- turbing – say a lot about the current generation of college and university students and how educators can create environments that would help them learn. Students seem to feel that they are not being taught in the ways best suited to help them achieve deep, meaningful learning. They seek engagement and connection. Given the characteris- tics of the Millennial Generation, in this they seem to be typical of Millennial learners. That being said, the questions then become, “How can we understand the learners in our classrooms?” and when we understand them, “How can we meet them where they are?”</p>
</section>
<section id="learner-centred-learning">
<h4>1.4.2 Learner-centred learning<a class="headerlink" href="#learner-centred-learning" title="Permalink to this headline">#</a></h4>
<p>Learner-centred learning has the power to motivate and inspire today’s learners – Millennial or otherwise – and is a tool for creating the kind of students you would like to teach. It is useful to focus on two elements at the heart of learner-centred learn- ing when discussing how to apply it in classroom situations, namely understanding learners, and engaging learners, that is, connecting them with content and each other.</p>
</section>
<section id="understanding-learners">
<h4>1.4.3 Understanding learners<a class="headerlink" href="#understanding-learners" title="Permalink to this headline">#</a></h4>
<p>Understanding learners means taking an interest in them as persons and making clear your commitment to being a partner in their learning. According to Price (2009), Mil- lennial learners think the ideal educator is energetic, enthusiastic, flexible, tuned into learners, friendly and approachable.</p>
<p>Another strategy for meeting learners where they are is to use their names during your class. If you cannot remember names (either because your class is too large or you simply do not have the knack for it), there are techniques to help you. Some educators print class rosters with students’ pictures so that they can refer to students by name whenever possible. Others ask learners to state their names before answering a question or offering a comment. This approach personalises classes in a very import- ant way and shows learners that you care about them as individuals. Finally, you might arrive a few minutes early for class and stay a few minutes late, to greet learn- ers as they enter and leave a class. This is a great opportunity to talk to your learners, learn about them, and show that you are a partner in their learning.</p>
</section>
<section id="engaging-learners">
<h4>1.4.4 Engaging learners<a class="headerlink" href="#engaging-learners" title="Permalink to this headline">#</a></h4>
<p>According to Price (2009), the number one characteristic the Millennial Generation desires in an ideal learning environment is that it be interactive and participatory. In other words, it connects learners to content and to each other in meaningful ways.</p>
<section id="connect-with-content">
<h5>1.4.4.1 Connect with content<a class="headerlink" href="#connect-with-content" title="Permalink to this headline">#</a></h5>
<p>Today’s learners value content that they can access anywhere, anytime. Online resources appeal in ways that traditional, printed textbooks do not. It is important to assign complex reading to learners, but you might ask yourself whether you can balance this with other kinds of resources: videos, podcasts, or other forms of multimedia.
You might also set assignments in which learners themselves generate content that is used to teach their peers. In one biology class, learner groups were responsible for researching a topic assigned by the educator. These groups were required to create a video presentation of their information, along with five questions, for the rest of the class. These videos were uploaded to YouTube where other class members watched them. The educator then assigned learners to discuss the questions online and in class. This particular approach shows a good intersection of engagement and participatory learning.
Systematically endeavour to incorporate diversity issues into your teaching content, irrespective of whether your class is diverse or not. Create opportunities for a racial, ethnic, and gender mix of learners to interact in various activities, especially in group projects or assignments in and out of class.</p>
</section>
<section id="connect-learners-with-each-other">
<h5>1.4.4.2 Connect learners with each other<a class="headerlink" href="#connect-learners-with-each-other" title="Permalink to this headline">#</a></h5>
<p>Today’s learners clearly value social connections and use technology to facilitate these. Why not leverage that in your classroom? Build formal and informal cooperative learning activities into your teaching material and encourage learners to come up with ways to establish a community of practice. They may start Facebook groups or use other social networking platforms to collaborate. They may use blogs, wikis or Google Docs as platforms for shared knowledge creation. When you employ student-centred principles of this kind, learners are more likely to be inspired by your teaching. If the learners are not given the opportunity to learn using their strengths and learning styles, they are likely to baulk at your methods. It has been demonstrat- ed in the previous sections that straight teaching and textbook reading do not work for Millennials. Mix it up; incorporate a variety of strategies (Fournier &amp; Bajt 2009). The operative words for Millennials to be successful are digital, visual, speed, hands-on (engaged), multimedia, multitask, interactive, collaborative, feedback, and connected. Engagement is critical, by whatever means you choose to achieve it. So even in large classes, strive for engagement.</p>
</section>
</section>
</section>
</section>
<section id="the-digital-divide">
<h2>1.5 THE DIGITAL DIVIDE<a class="headerlink" href="#the-digital-divide" title="Permalink to this headline">#</a></h2>
<section id="what-is-the-digital-divide">
<h3>1.5.1 What is the digital divide?<a class="headerlink" href="#what-is-the-digital-divide" title="Permalink to this headline">#</a></h3>
<p>The concept ‘digital divide’ has been in existence since the mid-1990s (Poore 2016). It is generally understood to describe not only the gap between those who have access to digital technology and related systems and those who do not, but also the gap between those who use digital technology to access the knowledge, networks, and resources to build digital capital and those who do not (Poore 2016; Dornisch 2013; Welch &amp; Dooley 2013). It is essential, therefore, to note that although many young people today appear always to be connected, things might not be as they seem. Some might have limited effective access to digital technology both inside and outside the home and classroom, and some might have none at all. Learners from low socioeconomic backgrounds might fall into this category, especially if their families cannot afford to pay for a gadget, as might learners who live in rural or remote areas where access to technology is non-existent. How can you support such learners? What is your role in helping them to participate as responsible digital citizens? You need to ask these questions considering the socio-economic backgrounds of such learners.</p>
<p><strong>TAM2601 The teacher as classroom manager - Dr Sepheka</strong></p>
<div class="cell tag_remove-input docutils container">
<div class="cell_output docutils container">
<div class="output text_html">
<iframe
    width="560"
    height="315"
    src="https://www.youtube.com/embed/0Ab8WZQa0sA"
    frameborder="0"
    allowfullscreen

></iframe>
</div></div>
</div>
</section>
</section>
<div class="toctree-wrapper compound">
</div>
</section>

    <script type="text/x-thebe-config">
    {
        requestKernel: true,
        binderOptions: {
            repo: "binder-examples/jupyter-stacks-datascience",
            ref: "master",
        },
        codeMirrorConfig: {
            theme: "abcdef",
            mode: "python"
        },
        kernelOptions: {
            kernelName: "python3",
            path: "./."
        },
        predefinedOutput: true
    }
    </script>
    <script>kernelName = 'python3'</script>

              </div>
              
            </main>
            <footer class="footer-article noprint">
                
    <!-- Previous / next buttons -->
<div class='prev-next-area'>
    <a class='left-prev' id="prev-link" href="imprint-page.html" title="previous page">
        <i class="fas fa-angle-left"></i>
        <div class="prev-next-info">
            <p class="prev-next-subtitle">previous</p>
            <p class="prev-next-title">Imprint page</p>
        </div>
    </a>
    <a class='right-next' id="next-link" href="exercises.html" title="next page">
    <div class="prev-next-info">
        <p class="prev-next-subtitle">next</p>
        <p class="prev-next-title">Exercises</p>
    </div>
    <i class="fas fa-angle-right"></i>
    </a>
</div>
            </footer>
        </div>
    </div>
    <div class="footer-content row">
        <footer class="col footer"><p>
  
    By Coetzee SA, Van Niekerk EH (Editors)<br/>
  
      &copy; Copyright 2019-Present.<br/>
</p>
        </footer>
    </div>
    
</div>


      </div>
    </div>
  
  <!-- Scripts loaded after <body> so the DOM is not blocked -->
  <script src="_static/scripts/pydata-sphinx-theme.js?digest=1999514e3f237ded88cf"></script>


  </body>
</html>