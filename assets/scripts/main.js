var menuState = false;

$( document ).ready(function() {
  $(".topSpace .beam, .topSpace .pillar").addClass("beamOn");
  $(".bottomSpace .beam, .bottomSpace .pillar").addClass("beamOff");
  // sorry very horrible fix
  $('.topSpaceWrapper').css({'height':(($('.bottomSpace').height()))+'px'});
});
// open or close bottomSpace page
$('.bottomSpace').click(function(e){
  openbottomSpace();
  e.stopPropagation();
});

$('.contentArrow').click(function(e){
  openbottomSpace();
  e.stopPropagation();
});

$('.topSpace').click(function(e){
  opentopSpace();
  e.stopPropagation();
});

$('.bottomSpace').mouseover(function(e){
  $(".content .contentArrow").addClass("genericOpacity");
  e.stopPropagation();
});

$('.topSpace').mouseover(function(e){
  $(".content .contentArrow").removeClass("genericOpacity");
  e.stopPropagation();
});

function opentopSpace() {
  menuState = true;
  handleMainMenu();
  // change header menu arrow
  // $(".bottomSpace .headerArrow, .content .contentArrow").attr("src","assets/images/arrow-off.svg");
  // $(".topSpace .headerArrow, .content .contentArrow").attr("src","assets/images/arrow-on.svg");
  // change width of topSpace element
  $(".topSpace").addClass("topSpaceOpen").removeClass("topSpaceClosed");
  // turn topSpace header elements to ON state
  $(".topSpace .beam, .topSpace .pillar").addClass("beamOn").removeClass("beamOff");
  // turn bottomSpace header elements to OFF state
  $(".bottomSpace .beam, .bottomSpace .pillar").addClass("beamOff").removeClass("beamOn");
};

function openbottomSpace() {
    menuState = true;
    handleMainMenu();
    // change header menu arrow
    // $(".bottomSpace .headerArrow, .content .contentArrow").attr("src","assets/images/arrow-on.svg");
    // $(".topSpace .headerArrow, .content .contentArrow").attr("src","assets/images/arrow-off.svg");
    // change width of topSpace element
    $(".topSpace").addClass("topSpaceClosed").removeClass("topSpaceOpen");
    // // turn topSpace header elements to OFF state
    $(".topSpace .beam, .topSpace .pillar").addClass("beamOff").removeClass("beamOn");
    // turn bottomSpace header elements to ON state
    $(".bottomSpace .beam, .bottomSpace .pillar").addClass("beamOn").removeClass("beamOff");
  };


function handleMainMenu() {
  if (menuState === false) {
    $(".headerArrow").addClass("headerArrow-rotate");
    // operate menu 1) count # of location classes ( there are technically 4 but only need 2 bc of dup menu)
    for (i = 0; i < $('div.location').length / 2; i++) {
      $('.menuItem_' + i).css({
        'transform': 'translateY(' + ((i * 100) + 106) + 'px)' })
    };

    menuState = true;

  } else {
    $("img.headerArrow").removeClass("headerArrow-rotate");
    // operate menu 1) count # of location classes ( there are technically 4 but only need 2 bc of dup menu)
    for (i = 0; i < $('div.location').length / 2; i++) {
      $('.menuItem_' + i).css({
        'transform': 'translateY(0)' })
    };

    menuState = false;
  };
}
// open or close menu
$('.siteTitle').click(function(e){
  handleMainMenu()
e.stopPropagation();
});

$('.headerArrowContainer').click(function(e){
  handleMainMenu()
e.stopPropagation();
});
