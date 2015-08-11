(function($){
  $(window).load(function(){
  	var $menuTrigger = $('#collapse-menu');

    $menuTrigger.trigger('click');
    setTimeout( function(){
    	$menuTrigger.trigger('click');
	  }, 100);
  });
})(jQuery);