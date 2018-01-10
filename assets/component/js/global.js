$(document).ready(function(){

// SELECT
$('select').material_select();

//SIDENAV
$(".button-collapse").sideNav();

// DROPDOWN
$('.dropdown-button').dropdown({
	inDuration: 300,
	outDuration: 225,
	constrain_width: true,
	hover: true,
	belowOrigin: true,
	alignment: 'left'      
});

//DATEPICKER
$('.datepicker').pickadate({
	selectMonths: true,
	selectYears: 15
});

});
// END DOCUMENT FUNCTION


//BOX AKUN
$('#kotak-akun').hide();
var down = true;
$('#btn-akun').click(function(){
	if (down) {
		down = false;
		$('#kotak-akun').fadeIn();
	}else{
		down = true;
		$('#kotak-akun').fadeOut();
	}
});

//BACK TO PREVIOUS PAGE
function goBack() {
	window.history.back();
}

// validasi angka huruf
function getkey(e)
{
	if (window.event)
		return window.event.keyCode;
	else if (e)
		return e.which;
	else
		return null;
}
function angkadanhuruf(e, goods, field)
{
	var angka, karakterangka;
	angka = getkey(e);
	if (angka == null) return true;

	karakterangka = String.fromCharCode(angka);
	karakterangka = karakterangka.toLowerCase();
	goods = goods.toLowerCase();

// check goodkeys
if (goods.indexOf(karakterangka) != -1)
	return true;
// control angka
if ( angka==null || angka==0 || angka==8 || angka==9 || angka==27 )
	return true;

if (angka == 13) {
	var i;
	for (i = 0; i < field.form.elements.length; i++)
		if (field == field.form.elements[i])
			break;
		i = (i + 1) % field.form.elements.length;
		field.form.elements[i].focus();
		return false;
	};
// else return false
return false;
}