<?php ob_start() ?> 
      <div id="slideshow">
        <button type="button" class="prev">Previous</button>
        <button type="button" class="next">Next</button>
        <div id="pager"></div>
        <div class="featured">
          <section>
            <img src="images/slideshow/shirt.png" alt="Shirt" class="feature left" />
            <div class="details">
              <img src="images/slideshow/redkap.png" alt="Red Kap" class="right" />
              <h3 class="h2">Real Work. Done Right.</h3>
              <button class="btn-lg" type="button"><span>View All Red Kap</span></button>
            </div>
          </section>  
          <section>
            <p>slide 2</p>
          </section>
        </div>
      </div>
<?php $content = ob_get_clean() ?>
<?php require('template.php') ?>
