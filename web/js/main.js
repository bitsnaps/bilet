//if user not loged in this button will display a message
function buyButton() {
    var s1 = document.getElementById('buyMovieInfo');

    if (s1.style.display === 'none') {
        s1.style.display = 'block';
    }else{
		s1.style.display = 'none';
	}
}
