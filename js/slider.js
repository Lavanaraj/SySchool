/***************************************************************************/ 
/************************1.SLIDER IMAGES***********************************/
/*************************************************************************/ 
$(document).ready(function(){
$("#slider").cycle({ 
fx:   'fade',    
timeout:  5000,
pause : 1,
next: "#n",
prev: "#p"
});
});
/***************************************************************************/ 
/************************2.SLIDER TEXTS************************************/
/*************************************************************************/ 
$(document).ready(function(){
$("#text-slider").cycle({ 
fx:      'turnDown', 
timeout:  5000,
delay:   400 ,
next: "#n",
prev: "#p"
});
});