<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Sullivan Uniforms</title>
  <meta name="description" content="Find the complete selection of Red Kap Work Clothing, Uniforms, and Industrial Workwear. Discount pricing on Red Kap work clothing for all occupations: coveralls, work shirts, work pants, jackets, lab coats, and chef apparel.">
  <meta name="keywords" content="work, clothing, uniforms, clothes, red kap, shirts, industrial, shirt, flame, resistant, coveralls, pants">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <!-- CSS: implied media="all" - Print at bottom of CSS -->
  <link rel="stylesheet" href="css/style.css" />

  <!-- For less capable phones, reduces text size -->
  <link rel="stylesheet" media="handheld" href="css/handheld.css" />

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-1.7.min.js"></script>
</head>

<body>

  <div id="container">
    <header>
      <h1 id="logo">Sullivan Uniform | Professional Workwear, Exceptional Service</h1> 
      <div class="right">
        <ul id="toplinks" class="inline">
          <li><a href="#">Sign In</a> | <a href="#">My Account</a><li>
          <li class="cart"><a href="#">0 Items ($0.00)</a></li>
          <li><button type="button"><span>Checkout</span></button></li>
        </ul>
        <form id="search" action="#">
          <input type="text" alt="Enter Keyword or Sku #" name="search" class="search-bar" />
          <button type="submit"><span>Go</span></button>
        </form>
        <span class="phone">Call Us: <strong>1.800.978.4550</strong></span>
      </div>

      <nav>
        <ul class="inline">
          <li class="level0"><a class="mainlink" href="#">Industrial</a>
            <!-- include a new file for each drop down to increase readability -->
            <?php include('nav.php') ?>
          </li>
        </ul>
      </nav>
    </header>

    <div id="main">
      <?php echo $content ?>
    </div>
  </div>

  <footer>
    <div class="center">
      <h2 class="left">Free Shipping on Orders of $49 or More</h2>
      <button class="btn-lg footer-callout-btn" type="button"><span>See Full Details</span></button>
        <!-- include this only on the homepage -->
        <?php include('home-footer.php') ?>
      <div class="clearfix"></div>
      <form id="newsletter" class="right" action="#">
        <label>Join Our Discount Club</label>
        <input type="text" alt="Enter Email Address" name="newsletter_email" />
        <button type="submit" class="right"><span>Submit</span></button>
      </form>
      <div id="sitemap">
        <ul class="col">
          <li><a href="#">Catalogs</a></li>
          <li><a href="#">Email Manager</a></li>
          <li><a href="#">Laundry Care</a></li>
          <li><a href="#">Learn About FR Clothing</a></li>
        </ul>
        <ul class="col">
          <li><a href="#">Privacy &amp; Security</a></li>
          <li><a href="#">Return &amp; Exchanges</a></li>
          <li><a href="#">Satisfaction Guarantee</a></li>
          <li><a href="#">Size Charts</a></li>
        </ul>
        <ul class="col">
          <li><a href="#">Order History</a></li>
          <li><a href="#">Payment Options</a></li>
          <li><a href="#">Shipping</a></li>
          <li><a href="#">Volume &amp; Wholesale Pricing</a></li>
        </ul>
        <ul class="col">
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Embroidery</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
        <p class="copyright">&copy; Sullivan Uniform Company. All rights reserved.</p>
        <div class="mcfee">McAfee SECURE&reg; - Tested Daily</div>
      </div>
    </div>
  </footer>

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>

  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->

  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->
</body>
</html>
