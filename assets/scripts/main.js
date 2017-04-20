var topMenuState = false;
var bottomMenuState = false;
var topIsOpen = true;
var galleryOffset = 0;
var index = 0;
var galleryLength = $('.galleryMover .frame').length


$( document ).ready(function() {
  $(".topSpace .beam, .topSpace .pillar").addClass("beamOn");
  $(".topSpace .headerPillarAndIcon #arrow-outline").addClass("arrowOn")

  $(".bottomSpace .beam, .bottomSpace .pillar").addClass("beamOff");
  $(".bottomSpace .headerPillarAndIcon #arrow-outline").addClass("arrowOff")

  $(".galleryArrowLeft #arrow-outline").addClass("arrowOff");
  $(".galleryArrowRight #arrow-outline").addClass("arrowOn");

  $(".galleryArrowLeft").addClass("arrowOff");
});

$(".content").scroll(function() {
  if($(this).scrollTop() > 10) {
    $(".bottomSpace .mainMenu").addClass("menuBorderOn").removeClass("menuBorderOff");
  } else {
    $(".bottomSpace .mainMenu").addClass("menuBorderOff").removeClass("menuBorderOn");
  }
});

// open or close bottomSpace page
$('.bottomSpace').click(function(e){
  openbottomSpace();
  e.stopPropagation();
});

$('.topSpace').click(function(e){
  opentopSpace();
  e.stopPropagation();
});

// operate image gallery
$('.galleryArrowRight').click(function(e){
  if (topIsOpen) {
    galleryOffset = handleMoveGallery(galleryOffset, 'right')
  }
  e.stopPropagation();
});

$(".gallery").on("swipeleft",function(){
  if (topIsOpen) {
    galleryOffset = handleMoveGallery(galleryOffset, 'right')
  }
  e.stopPropagation();
});

$('.galleryArrowLeft').click(function(e){
  if (topIsOpen) {
    galleryOffset = handleMoveGallery(galleryOffset, 'left')
  }
  e.stopPropagation();
});

$(".gallery").on("swipeRight",function(){
  if (topIsOpen) {
    galleryOffset = handleMoveGallery(galleryOffset, 'left')
  }
  e.stopPropagation();
});


function opentopSpace() {
  topIsOpen = true
  if (bottomMenuState === true) {
    bottomMenuState = toggleMainMenu('.bottomSpace', bottomMenuState)
  }
  // change header menu arrow
  $(".bottomSpace .headerPillarAndIcon #arrow-outline").addClass("arrowOff").removeClass("arrowOn");
  $(".topSpace .headerPillarAndIcon #arrow-outline").addClass("arrowOn").removeClass("arrowOff");
  // change width of topSpace element
  $(".topSpace").addClass("topSpaceOpen").removeClass("topSpaceClosed");
  // turn topSpace header elements to ON state
  $(".topSpace .beam, .topSpace .pillar").addClass("beamOn").removeClass("beamOff");
  // turn bottomSpace header elements to OFF state
  $(".bottomSpace .beam, .bottomSpace .pillar").addClass("beamOff").removeClass("beamOn");

  if (index !== 0 ) {
    $(".galleryArrowLeft #arrow-outline").removeClass("arrowOff");
  }
  if (index < galleryLength -1 ) {
    $(".galleryArrowRight #arrow-outline").removeClass("arrowOff");
  }
};

function openbottomSpace() {
  topIsOpen = false
  if (topMenuState === true) {
    topMenuState = toggleMainMenu('.topSpace', topMenuState)
  }
  $(".galleryArrowLeft #arrow-outline, .galleryArrowRight #arrow-outline").addClass("arrowOff");

  $(".galleryArrowLeft").addClass("arrowOff");
  // change header menu arrow
  $(".bottomSpace .headerPillarAndIcon #arrow-outline").addClass("arrowOn").removeClass("arrowOff");
  $(".topSpace .headerPillarAndIcon #arrow-outline").addClass("arrowOff").removeClass("arrowOn");
  // change width of topSpace element
  $(".topSpace").addClass("topSpaceClosed").removeClass("topSpaceOpen")
  // // turn topSpace header elements to OFF state
  $(".topSpace .beam, .topSpace .pillar").addClass("beamOff").removeClass("beamOn")
  // turn bottomSpace header elements to ON state
  $(".bottomSpace .beam, .bottomSpace .pillar").addClass("beamOn").removeClass("beamOff")
};


function toggleMainMenu(container, menuState) {
  if (menuState === false) {
    $(container + ' ' + "svg.headerArrow").addClass("headerArrow-rotate-90");
    // operate menu: 1) count # of location classes ( there are technically 4 but only need 2 bc of dup menu)
    for (i = 0; i < $('div.location').length / 2; i++) {
      // this is calced like this bc the title has to be a little bigger thatn the menu items to cover the bottom border
      var menuItemOffset = 'translateY(' + ((i * $('div.location').height() ) + $('div.siteTitle').height()) + 'px)'
      $(container + ' ' + '.menuItem_' + i).css({
        '-webkit-transform': menuItemOffset,
        '-ms-transform': menuItemOffset,
        '-moz-transform': menuItemOffset,
        '-o-transform': menuItemOffset,
        'transform': menuItemOffset
      })
    };
  } else {
    $(container + ' ' + "svg.headerArrow").removeClass("headerArrow-rotate-90");
    for (i = 0; i < $('div.location').length / 2; i++) {
      $(container + ' ' + '.menuItem_' + i).css({
        '-webkit-transform': 'translateY(0)',
        '-ms-transform': 'translateY(0)',
        '-moz-transform': 'translateY(0)',
        '-o-transform': 'translateY(0)',
        'transform': 'translateY(0)'
      })
    };
  };
  return !menuState;
}

function handleMoveGallery(galleryOffset, dir) {
  newGalleryOffset = galleryOffset;
    if (dir === 'left' && index !== 0){
      index--
      newGalleryOffset = galleryOffset + (window.innerWidth * 0.8)
    } else if (dir === 'right' && index < galleryLength - 1) {
      index++
      newGalleryOffset = galleryOffset - (window.innerWidth * 0.8)
    } else {
    }

    $('.galleryMover').css({'transform': 'translateX(' + newGalleryOffset + 'px)' })
    if (newGalleryOffset === 0){
      $(".galleryArrowLeft #arrow-outline").addClass("arrowOff").removeClass("arrowOn");
    } else {
      $(".galleryArrowLeft #arrow-outline").removeClass("arrowOff").addClass("arrowOn");
    }

    if (index === galleryLength - 1){
      $(".galleryArrowRight #arrow-outline").addClass("arrowOff").removeClass("arrowOn");
    } else {
      $(".galleryArrowRight #arrow-outline").removeClass("arrowOff").addClass("arrowOn");
    }
  return newGalleryOffset;
}

// open top space menu
$('.topSpace .siteTitle, .topSpace .headerPillarAndIcon').click(function(e){
  if (topIsOpen) {
    topMenuState = toggleMainMenu('.topSpace', topMenuState)
  }
  e.stopPropagation();
});

// open bottom space menu
$('.bottomSpace .siteTitle, .bottomSpace .headerPillarAndIcon').click(function(e){
  if (!topIsOpen) {
    bottomMenuState = toggleMainMenu('.bottomSpace', bottomMenuState)
  }
  e.stopPropagation();
});

//map scroll disable
$('.map').click(function () {
    $('.map iframe').css("pointer-events", "auto");
});

$( ".map" ).mouseleave(function() {
  $('.map iframe').css("pointer-events", "none");
});
