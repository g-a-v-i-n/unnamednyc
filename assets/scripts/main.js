
var topMenuState = false;
var bottomMenuState = false;
var topIsOpen = true;
var galleryOffset = 0;
var index = 0;
var camListState = false;
var eqListState = false;
var galleryLength = $('.galleryMover .frame').length


$(".topSpace .beam, .topSpace .pillar").addClass("beamOn");
$(".topSpace .headerPillarAndIcon #arrow-outline").addClass("arrowOn")

$(".bottomSpace .beam, .bottomSpace .pillar").addClass("beamOff");
$(".bottomSpace .headerPillarAndIcon #arrow-outline").addClass("arrowOff")

$(".galleryArrowLeft #arrow-outline").addClass("arrowOff");
$(".galleryArrowRight #arrow-outline").addClass("arrowOn");

$(".galleryArrowLeft").addClass("arrowOff");
$(".galleryArrowRightContainer").addClass("galleryArrowRightContainerHover")


$(".content").scroll(function() {
  if($(this).scrollTop() > 10) {
    $(".bottomSpace .siteTitle").addClass("menuBorderOn").removeClass("menuBorderOff");
  } else if (!bottomMenuState) {
    $(".bottomSpace .siteTitle").addClass("menuBorderOff").removeClass("menuBorderOn");
  }
});

// open or close bottomSpace page
$('.bottomSpace').click(function(e){
  if (topIsOpen === true) {
    openbottomSpace();
  } else if ($(e.target).hasClass('location') === false && event.target.tagName.toLowerCase() !== 'h2' && bottomMenuState === true) {
    bottomMenuState = toggleMainMenu('.bottomSpace', bottomMenuState)
  }
  e.stopPropagation();

});

$(".bottomSpace").hammer().bind("swipeleft",function(e){
  if (topIsOpen === true) {
    openbottomSpace();
  } else if ($(e.target).hasClass('location') === false && event.target.tagName.toLowerCase() !== 'h2' && bottomMenuState === true) {
    bottomMenuState = toggleMainMenu('.bottomSpace', bottomMenuState)
  }
  e.stopPropagation();
});


$('.topSpace').click(function(e){
  if (topIsOpen === false) {
    opentopSpace();
  } else if ($(e.target).hasClass('location') === false && event.target.tagName.toLowerCase() !== 'h2' && topMenuState === true) {
    topMenuState = toggleMainMenu('.topSpace', topMenuState)
  }
  e.stopPropagation();

});

$(".topSpace").hammer().bind("swiperight",function(e){
  if (topIsOpen === false) {
    opentopSpace();
  } else if ($(e.target).hasClass('location') === false && event.target.tagName.toLowerCase() !== 'h2' && topMenuState === true) {
    topMenuState = toggleMainMenu('.topSpace', topMenuState)
  }
  e.stopPropagation();

});

// operate image gallery
$('.galleryArrowRightContainer').click(function(e){
  if (topIsOpen) {
    galleryOffset = handleMoveGallery(galleryOffset, 'right')
  }
});

$(".gallery").hammer().bind("swipeleft",function(e){
  if (topIsOpen) {
    galleryOffset = handleMoveGallery(galleryOffset, 'right')
  }
});

$('.galleryArrowLeftContainer').click(function(e){
  if (topIsOpen) {
    galleryOffset = handleMoveGallery(galleryOffset, 'left')
  } else {
    opentopSpace();
  }
});

$(".gallery").hammer().bind("swiperight",function(e){
  if (topIsOpen) {
    galleryOffset = handleMoveGallery(galleryOffset, 'left')
  }
});

document.onkeydown = checkKey;

function checkKey(e) {
    e = e || window.event;
    if (e.keyCode == '37') {
      if (topIsOpen) {
        galleryOffset = handleMoveGallery(galleryOffset, 'left')
      }
      e.stopPropagation();
    }
    else if (e.keyCode == '39') {
      if (topIsOpen) {
        galleryOffset = handleMoveGallery(galleryOffset, 'right')
      }
      e.stopPropagation();
    }

}

function opentopSpace() {
  topIsOpen = true
  if (bottomMenuState === true) {
    bottomMenuState = toggleMainMenu('.bottomSpace', bottomMenuState)
  }
  $(".topSpace").removeClass("topSpaceInactiveHover");
  $('.topSpace').css('cursor', 'auto');
  $('.bottomSpace .content').css('overflow-y', 'hidden')
  $('.bottomSpace .content').css('pointer-events', 'none')

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
  $(".topSpace").removeClass("topSpaceActiveHover");
  $('.bottomSpace').css('cursor', 'auto');
  $('.bottomSpace .content').css('overflow-y', 'scroll')
  $('.bottomSpace .content').css('pointer-events', 'auto')

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
    $(container + " " + ".siteTitle").addClass("menuBorderOn").removeClass("menuBorderOff");
    $(container + ' ' + "svg.headerArrow").removeClass("headerArrow-rotate-45");
    $(container + ' ' + "svg.headerArrow").addClass("headerArrow-rotate-90");
    // operate menu: 1) count # of location classes ( there are technically 4 but only need 2 bc of dup menu)
    for (i = 0; i < $('.location').length / 2; i++) {
      // this is calced like this bc the title has to be a little bigger thatn the menu items to cover the bottom border
      var menuItemOffset = 'translateY(' + ((i * $('.location').height() ) + $('.siteTitle').height()) + 'px)'
      $(container + ' ' + '.menuItem_' + i).css({
        '-webkit-transform': menuItemOffset,
        '-ms-transform': menuItemOffset,
        '-moz-transform': menuItemOffset,
        '-o-transform': menuItemOffset,
        'transform': menuItemOffset
      })
    };
  } else {
    if ($(".bottomSpace .content").scrollTop() < 10){
      $(container + " " + ".siteTitle").removeClass("menuBorderOn").addClass("menuBorderOff");
    }
    $(container + ' ' + "svg.headerArrow").removeClass("headerArrow-rotate-90");
    $(container + ' ' + "svg.headerArrow").removeClass("headerArrow-rotate-45");
    for (i = 0; i < $('a.location').length / 2; i++) {
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
// gallery
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
      $(".galleryArrowLeftContainer").removeClass("galleryArrowLeftContainerHover")
    } else {
      $(".galleryArrowLeft #arrow-outline").removeClass("arrowOff").addClass("arrowOn");
      $(".galleryArrowLeftContainer").addClass("galleryArrowLeftContainerHover")
    }

    if (index === galleryLength - 1){
      $(".galleryArrowRight #arrow-outline").addClass("arrowOff").removeClass("arrowOn");
      $(".galleryArrowRightContainer").removeClass("galleryArrowRightContainerHover")

    } else {
      $(".galleryArrowRight #arrow-outline").removeClass("arrowOff").addClass("arrowOn");
      $(".galleryArrowRightContainer").addClass("galleryArrowRightContainerHover")

    }
  return newGalleryOffset;
}

function toggleCollapsableList(container, state) {
  if (state === true) {
    $(container + ' ' + "div.listItem").addClass("listHider");
    $(container + ' ' + ".expandButton" ).html( "<p>See More</p>" );
  } else {
    $(container + ' ' + "div.listItem").removeClass("listHider");
    $(container + ' ' + ".expandButton" ).html( "<p>See Less</p>" );
  };
  return !state;
}

// open collapsable list
$('.cameraList .expandButton').click(function(e){
  if (!topIsOpen) {
    camListState = toggleCollapsableList('.cameraList', camListState)
  }
  e.stopPropagation();
});

// open collapsable list
$('.equipmentList .expandButton').click(function(e){
  if (!topIsOpen) {
    eqListState = toggleCollapsableList('.equipmentList', eqListState)
  }
  e.stopPropagation();
});

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


if ($('.equipmentList .listItem').length < 6) {
  $('.equipmentList .expandButton').css("display", "none");
}

if ($('.cameraList .listItem').length < 6) {
  $('.cameraList .expandButton').css("display", "none");
}

//bottomspace nudge
$(".bottomSpace").hover(function(e){
  if (topIsOpen){
    $(".topSpace").addClass("topSpaceActiveHover")
    $('.bottomSpace').css('cursor', 'pointer');
  }
  }, function(){
    $(".topSpace").removeClass("topSpaceActiveHover");
    $('.bottomSpace').css('cursor', 'auto');
});

// topspace nudge
$(".topSpace").hover(function(e){
    if (!topIsOpen){
    $(".topSpace").addClass("topSpaceInactiveHover")
    $('.topSpace').css('cursor', 'pointer');
    }
  }, function(){
  $(".topSpace").removeClass("topSpaceInactiveHover");
  $('.topSpace').css('cursor', 'auto');
});

// menu arrow hover
$(".topSpace .siteTitle, .topSpace .headerArrowContainer").hover(function(e){
    $(".topSpace svg.headerArrow").addClass("headerArrow-rotate-45");
    $(".topSpace .siteTitle").addClass("siteTitleHover");
    $('.headerArrowContainer').css('cursor', 'pointer');

  }, function(){
    $(".topSpace svg.headerArrow").removeClass("headerArrow-rotate-45");
    $(".topSpace .siteTitle").removeClass("siteTitleHover");
    $('.headerArrowContainer').css('cursor', 'auto');
});

// menu arrow hover
$(".bottomSpace .siteTitle, .bottomSpace .headerArrowContainer").hover(function(e){
    $(".bottomSpace svg.headerArrow").addClass("headerArrow-rotate-45");
    $(".bottomSpace .siteTitle").addClass("siteTitleHover");
    $('.headerArrowContainer').css('cursor', 'pointer');

  }, function(){
    $(".bottomSpace svg.headerArrow").removeClass("headerArrow-rotate-45");
    $(".bottomSpace .siteTitle").removeClass("siteTitleHover");
    $('.headerArrowContainer').css('cursor', 'auto');


});
