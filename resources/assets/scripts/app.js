$(document).foundation();

var pageHeight = $(document).height();
var navHeight = $('.top-bar').height();
var footerHeight = $('footer').height();
var minHeight = pageHeight - (navHeight + footerHeight);

$('.wrapper').css({'padding-top': navHeight + 'px', 'min-height': minHeight + 10 + 'px' });
