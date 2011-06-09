jQuery(function($){
  $('div.featured').cycle({
    fx: 'scrollHorz',
    timeout: 36000,
    speed: 600,
    prev: '.prev',
    next: '.next'
  });

  // grab the alt and make it a fake value
  $('#newsletter input:text, form#search input:text').each(function(){
    var curval = $(this).val();
    var altval = $(this).attr('alt');
    if (curval == "" || curval == altval) {
      $(this).css({"color":"#999"});
      $(this).val(altval);
    } else {
      $(this).css({"color":"#000"});
    }
  });

  // if focus, clear if necessary
  $('#newsletter input:text, #search input:text').focus(function(){
    var curval = $(this).val();
    var altval = $(this).attr('alt');
    $(this).css({"color":"#000"});
    if(curval==altval){
      $(this).val("");
    }
  });

  // if blur, put default text back and gray if necessary
  $('#newsletter input:text, #newsletter input:text').blur(function(){
    var curval = $(this).val();
    var altval = $(this).attr('alt');
    if(curval==""){
      $(this).css({"color":"#999"});
      $(this).val(altval);
    }
  });

  // nav adds extra class on hover
  $('li.level0').hover(function(){
    $(this).find('a.mainlink').addClass('over')
  }, function() {
    $(this).find('a.mainlink').removeClass('over'); 
  });
});
