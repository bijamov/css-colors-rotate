// <button onclick="loader_on()">on</button>
// <button onclick="loader_off()">off</button>

function loader_on()
{
	$('.nbed_loader').css('opacity','100%');
	$('.nbed_loader').css('z-index','666');
	$('body').css('opacity','40%');

}

function loader_off()
{
	$('.nbed_loader').css('opacity','0%');
	$('.nbed_loader').css('z-index','-666');
	$('body').css('opacity','100%');

}



