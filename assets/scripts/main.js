var topMenuState = false;
var bottomMenuState = false;
var galleryOffset = 0;
var index = 0;

$( document ).ready(function() {
  $(".topSpace .beam, .topSpace .pillar").addClass("beamOn");
  $(".bottomSpace .beam, .bottomSpace .pillar").addClass("beamOff");
  $(".galleryArrowLeft").addClass("visuallyHidden");

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
    // change header menu arrow
    // $(".bottomSpace .headerArrow, .content .contentArrow").attr("src","assets/images/arrow-on.svg");
    // $(".topSpace .headerArrow, .content .contentArrow").attr("src","assets/images/arrow-off.svg");
    // change width of topSpace element
    $(".topSpace").addClass("topSpaceClosed").removeClass("topSpaceOpen")
    // // turn topSpace header elements to OFF state
    $(".topSpace .beam, .topSpace .pillar").addClass("beamOff").removeClass("beamOn")
    // turn bottomSpace header elements to ON state
    $(".bottomSpace .beam, .bottomSpace .pillar").addClass("beamOn").removeClass("beamOff")
  };


function handleMainMenu(container, menuState) {
  if (!menuState) {
    $(container + ' ' + ".headerArrow").addClass("headerArrow-rotate");
    // operate menu: 1) count # of location classes ( there are technically 4 but only need 2 bc of dup menu)
    for (i = 0; i < $('div.location').length / 2; i++) {
      $(container + ' ' + '.menuItem_' + i).css({'transform': 'translateY(' + ((i * 100) + 106) + 'px)' })
    };
  } else {
    $(container + ' ' + "img.headerArrow").removeClass("headerArrow-rotate");
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
    } else if (dir === 'right' && index < $('div.galleryMover').length + 1) {
      index++
      newGalleryOffset = galleryOffset - (window.innerWidth * 0.8)
    } else {
    }

    $('.galleryMover').css({'transform': 'translateX(' + newGalleryOffset + 'px)' })
    if (newGalleryOffset === 0){
      $(".galleryArrowLeft").addClass("visuallyHidden");
    } else {
      $(".galleryArrowLeft").removeClass("visuallyHidden");
    }

    if (index === $('div.galleryMover').length + 1){
      $(".galleryArrowRight").addClass("visuallyHidden");
    } else {
      $(".galleryArrowRight").removeClass("visuallyHidden");
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
