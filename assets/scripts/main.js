var topMenuState = false;
var bottomMenuState = false;
var galleryOffset = 0;
var index = 0;
var galleryLength = $('.galleryMover .frame').length


$( document ).ready(function() {
  $(".topSpace .beam, .topSpace .pillar").addClass("beamOn");
  $(".topSpace .headerArrowContainer #arrow-outline").addClass("arrowOn")

  $(".bottomSpace .beam, .bottomSpace .pillar").addClass("beamOff");
  $(".bottomSpace .headerArrowContainer #arrow-outline").addClass("arrowOff")

  $(".galleryArrowLeft #arrow-outline").addClass("arrowOff");
  $(".galleryArrowRight #arrow-outline").addClass("arrowOn");

  $(".galleryArrowLeft").addClass("arrowOff");

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
  galleryOffset = handleMoveGallery(galleryOffset, 'right')
  e.stopPropagation();
});

$('.galleryArrowLeft').click(function(e){
  galleryOffset = handleMoveGallery(galleryOffset, 'left')
  e.stopPropagation();
});


function opentopSpace() {
  // change header menu arrow
  $(".bottomSpace .headerArrowContainer #arrow-outline").addClass("arrowOff").removeClass("arrowOn");
  $(".topSpace .headerArrowContainer #arrow-outline").addClass("arrowOn").removeClass("arrowOff");
  // change width of topSpace element
  $(".topSpace").addClass("topSpaceOpen").removeClass("topSpaceClosed");
  // turn topSpace header elements to ON state
  $(".topSpace .beam, .topSpace .pillar").addClass("beamOn").removeClass("beamOff");
  // turn bottomSpace header elements to OFF state
  $(".bottomSpace .beam, .bottomSpace .pillar").addClass("beamOff").removeClass("beamOn");
};

function openbottomSpace() {
  // change header menu arrow
  $(".bottomSpace .headerArrowContainer #arrow-outline").addClass("arrowOn").removeClass("arrowOff");
  $(".topSpace .headerArrowContainer #arrow-outline").addClass("arrowOff").removeClass("arrowOn");
  // change width of topSpace element
  $(".topSpace").addClass("topSpaceClosed").removeClass("topSpaceOpen")
  // // turn topSpace header elements to OFF state
  $(".topSpace .beam, .topSpace .pillar").addClass("beamOff").removeClass("beamOn")
  // turn bottomSpace header elements to ON state
  $(".bottomSpace .beam, .bottomSpace .pillar").addClass("beamOn").removeClass("beamOff")
};


function handleMainMenu(container, menuState) {
  if (!menuState) {
    $(container + ' ' + "svg.headerArrow").addClass("headerArrow-rotate-minus90").removeClass("headerArrow-rotate-90");
    // operate menu: 1) count # of location classes ( there are technically 4 but only need 2 bc of dup menu)
    for (i = 0; i < $('div.location').length / 2; i++) {
      $(container + ' ' + '.menuItem_' + i).css({'transform': 'translateY(' + ((i * 100) + 106) + 'px)' })
    };
  } else {
    $(container + ' ' + "svg.headerArrow").removeClass("headerArrow-rotate-90");
    for (i = 0; i < $('div.location').length / 2; i++) {
      $(container + ' ' + '.menuItem_' + i).css({'transform': 'translateY(0)' })
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
$('.topSpace .siteTitle').click(function(e){
  topMenuState = handleMainMenu('.topSpace', topMenuState)
  e.stopPropagation();
});

$('.topSpace .headerArrowContainer').click(function(e){
  topMenuState = handleMainMenu('.topSpace', topMenuState)
  e.stopPropagation();
});

// open bottom space menu
$('.bottomSpace .siteTitle').click(function(e){
  bottomMenuState = handleMainMenu('.bottomSpace', bottomMenuState)
  e.stopPropagation();
});

$('.bottomSpace .headerArrowContainer').click(function(e){
  bottomMenuState = handleMainMenu('.bottomSpace', bottomMenuState)
  e.stopPropagation();
});

//map scroll disable
$('.map').click(function () {
    $('.map iframe').css("pointer-events", "auto");
});

$( ".map" ).mouseleave(function() {
  $('.map iframe').css("pointer-events", "none");
});
