//loading div hide(fadeOut for added sexiness) when page is finished loading[start]
$(window).load(function() {
  $(".loadingContain").show().delay(600).fadeOut(1250);
	$(".loadingContain2").show().delay(600).fadeOut(1250);
});
//[end]

//Waypoints JS fade in when in view

$('.working').waypoint(function() {
	$('.working div:nth-child(1)').delay(0250).animate({ opacity: 1 }, 400);
	$('.working div:nth-child(2)').delay(0750).animate({ opacity: 1 }, 400);
	$('.working div:nth-child(3)').delay(1000).animate({ opacity: 1 }, 400);
}, {
	offset: '98%'
});
