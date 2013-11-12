$(document).ready(function(){
  $("#menu-primary-navigation").append('<li><a href="#" id="more-link">More</a></li>');

  $("#more-link").click(function(e){
    e.preventDefault();
    $('body').toggleClass('more-nav-expanded');
    $("#more-nav").slideToggle(100);
    if($('body').hasClass('more-nav-expanded')){
      $('body').animate({ paddingTop: 265 },100);
    }else{
      $('body').animate({ paddingTop: 65 },100);
    }
  });

  $(document).mouseup(function (e){
    if($('body').hasClass('more-nav-expanded') && ($("#main_wrap").is(e.target) || $("#main_wrap").has(e.target).length !== 0)){
      $('body').toggleClass('more-nav-expanded');
      $("#more-nav").slideToggle(100);
      $('body').animate({ paddingTop: 65 },100);
    }
  });

  $("#more-nav #close").click(function(e){
    e.preventDefault();
    $("#more-nav").slideToggle(100);
    $('body').toggleClass('more-nav-expanded');
    $('body').animate({ paddingTop: 65 },100);
  });
  
  $("#scroller_list").simplyScroll({
    auto: false,
    speed: 7
  });
  
  $('#home_hero_slider').carousel({
    interval: 4000
  })
});