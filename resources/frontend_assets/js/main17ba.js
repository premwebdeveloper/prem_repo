jQuery(document).ready(function($){$.scrollUp({animation:'fade',scrollDistance:12,scrollFrom:'top',scrollImg:{active:true,type:'background',src:'images/top.png'}});});$('.scrollthis').enscroll({verticalTrackClass:'track3',verticalHandleClass:'handle3',addPaddingToPane:false,verticalTrackClass:'vertical-track2',cornerClass:'corner2'});$(document).ready(function(){$(window).scroll(function(){if($(window).scrollTop()>300){$('.navbar').addClass('navbar-fixed-top');}if($(window).scrollTop()<331){$('.navbar').removeClass('navbar-fixed-top');}});});