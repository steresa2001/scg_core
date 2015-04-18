// if browser is Opera
$(document).ready(function() {
    // if browser is Opera
    if (navigator.userAgent.match(/Opera/i) )	{
        $('#grid-wrapper').css({'max-width': '60.19em'});
		$('head').append('<link href="css/conditional/opera.css" type="text/css" rel="stylesheet" />');
	    }
	 });