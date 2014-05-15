$(document).ready(function(){
  $("#menu-primary-navigation").append('<li><a href="#" id="more-link">More</a></li>');
  
  var current_body_padding_top = $('body').css('padding-top');
  var more_nav_animation_speed = 200;

  $("#more-link").click(function(e){
    var current_body_padding_top = $('body').css('padding-top');
    console.log(current_body_padding_top);
    e.preventDefault();
    $('body').toggleClass('more-nav-expanded');
    $("#more-nav").slideToggle(more_nav_animation_speed,'swing');
    if($('body').hasClass('more-nav-expanded')){
      $('body').animate({ paddingTop: current_body_padding_top + 200 },more_nav_animation_speed,'swing');
    }else{
      $('body').animate({ paddingTop: current_body_padding_top },more_nav_animation_speed,'swing');
    }
  });

  $(document).mouseup(function (e){
    if($('body').hasClass('more-nav-expanded') && ($("#main_wrap").is(e.target) || $("#main_wrap").has(e.target).length !== 0)){
      $('body').toggleClass('more-nav-expanded');
      $("#more-nav").slideToggle(more_nav_animation_speed,'swing');
      $('body').animate({ paddingTop: current_body_padding_top },more_nav_animation_speed,'swing');
    }
  });

  $("#more-nav #close").click(function(e){
    e.preventDefault();
    $("#more-nav").slideToggle(more_nav_animation_speed,'swing');
    $('body').toggleClass('more-nav-expanded');
    $('body').animate({ paddingTop: current_body_padding_top },more_nav_animation_speed,'swing');
  });
  
  $("#scroller_list").simplyScroll({
    auto: true,
    speed: 2
  });
  
  $('#home_hero_slider').carousel({
    interval: 6000
  })
  
  jQuery('ul.nav li.dropdown').hover(function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn();
  }, function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut();
  });
  jQuery('ul.nav li.dropdown>a').click(function(e) {
    e.preventDefault();
    window.location.assign($(this).attr('href'));
  });
  
  if($("#announcement_wrap").length > 0){
    if($("#announcement_wrap").is(':hidden')){
      $("#announcement_wrap").delay(2000).slideToggle(500);
      var elemheight = parseInt($("#announcement_wrap").css('height'), 10);
      var bodypad = parseInt($("body").css('padding-top'), 10);
      console.log(elemheight + bodypad);
      $('body').delay(2000).animate({paddingTop: elemheight + bodypad },500);
    }
    
    $("#announcement_close").click(function(e){
      e.preventDefault();
      $("#announcement_wrap").slideToggle(500);
      $('body').animate({paddingTop: 61 },500);
    });
  }
  
});