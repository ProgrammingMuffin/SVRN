var image_links = ["images/car1.png", "images/car2.png", "images/car3.jpg"];
var i = 0;
var max_len = 3;
var current = 0;
var timeout = 0;
var switch_time = 4000;

var carry = document.getElementById("carry");

function InitCarousel()
{
	current = 0;
	carry.src = image_links[current];
}

function updateCarousel()
{
	carry.src = image_links[current];
}

function NextImage()
{
	if(current >= max_len-1)
	{
		current = 0;
	}
	else
	{
		current++;
	}
	updateCarousel()
}

function PrevImage()
{
	if(current <= 0)
	{
		current = max_len-1;
	}
	else
	{
		current--;
	}
	updateCarousel()
}


function auto_switch(){
	InitCarousel();
	timeout = setInterval(NextImage, switch_time);
}

function click_next(){
	clearInterval(timeout);
	NextImage();
	timeout = setInterval(NextImage, switch_time);
}

function click_prev(){
	clearInterval(timeout);
	PrevImage();
	timeout = setInterval(NextImage, switch_time);
}