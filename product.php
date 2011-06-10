<?php ob_start() ?>

<div id="product-wrapper" class="wrapper">
  <div class="main-container right">
    <ul class="breadcrumbs inline">
      <li><a href="#">Home</a></li>
      <li>&nbsp;&gt;&nbsp;</li>
      <li><a href="#">Flame Resistant</a></li>
      <li>&nbsp;&gt;&nbsp;</li>
      <li class="active-breadcrumb">FR Coveralls</li>
    </ul>

    <div class="product-img-box">
      <img src="images/product/product.jpg" alt="Product" />
      <div class="product-options">Available Colors:</div>
      <ul class="inline">
        <li>colors</li>
        <li>go</li>
        <li>here</li>
      </ul>
    </div>

    <div class="product-details">
      <h1>Flame Resistant Cotton Contractor Coveralls</h1>
      <h2>HRC Level: 2</h2>

      <p class="our-price">
        <span class="price">Our Price: <strong class="maroon">$55.25</strong></span>
        <span class="item-info right">Item: <strong>CEC2</strong></span>
      </p>
      <p class="reg-price">
        <span class="strike">Mfg Price: <strong>$72.50</strong></span>
        <span class="item-info right">In Cart: <strong>None</strong></span>
      </p>
      <ul class="radio item-options">
        <li>
          <input type="radio" name="#" id="option1" value="value" class="radio">
          <label for="option1">Regular 30" Inseam</label>
        </li>
        <li>
          <input type="radio" name="#" id="option2" value="value" class="radio">
          <label for="option2">Long 32" Inseam</label>
        </li>
      </ul>
      <select class="left">
        <option value="color">Color</option>
      </select>
      <select class="left">
        <option value="Size">Size</option>
      </select>
      <div class="clearfix"></div>
      <input type="text" class="qty" />
      <span class="select-qty">Select Quantity</span>
      <div class="clearfix"></div>
      <button class="add-to" type="button"><span>Add To Cart</span></button>
      <div class="embroidery"><input type="checkbox" class="checkbox" /><label>Add Embroidery To This Item</label></div>
      <div class="details-accordion">
        <h3 class="accordion">FR Garment Details</h3>
        <ul>
          <li>list</li>
          <li>of</li>
          <li>details</li>
          <li>go</li>
          <li>here</li>
        </ul>
        <h3 class="accordion">Features</h3>
        <ul>
          <li>list</li>
          <li>of</li>
          <li>details</li>
          <li>go</li>
          <li>here</li>
        </ul>
      </div>
    </div>
  </div>
  <?php include('sidebar.php') ?>
</div>

<?php $content = ob_get_clean() ?>
<?php require('template.php') ?>
