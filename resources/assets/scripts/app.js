$(document).foundation();

var pageHeight = $(document).height();
var navHeight = $('.top-bar').height();
var mediumNavHeight = $('.medium-nav').height();
var footerHeight = $('footer').height();
var minHeight = pageHeight - (navHeight + footerHeight);

$('.medium-nav').css({'height': 100 + '%'});
$('.wrapper').css({'padding-top': navHeight + 'px', 'min-height': minHeight + 10 + 'px' });