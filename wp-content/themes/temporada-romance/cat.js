var gato = document.getElementById('gato');
gato.onmouseover = function(){
	var orelhaLeft 	= 	this.querySelector('.orelha-left'),
	orelhaRight 	= 	this.querySelector('.orelha-right'),
	olhos 		=	this.querySelector('.olhos'),
	cauda 		= 	this.querySelector('.cauda');
	
	orelhaLeft.classList.toggle('orelha-left-atento',true);
	orelhaRight.classList.toggle('orelha-right-atento',true);
	olhos.classList.toggle('olhos-open', true);
	cauda.classList.toggle('cauda-parada',false);
	cauda.classList.toggle('cauda-levantada',true);
	cauda.classList.toggle('cauda-abanando',false);
}
gato.onmouseout = function(){
	var orelhaLeft 	= 	this.querySelector('.orelha-left'),
	orelhaRight 	= 	this.querySelector('.orelha-right'),
	olhos 		=	this.querySelector('.olhos'),
	cauda 		= 	this.querySelector('.cauda');

	orelhaLeft.classList.toggle('orelha-left-atento', false);
	orelhaRight.classList.toggle('orelha-right-atento', false);
	olhos.classList.toggle('olhos-open', false);

	cauda.classList.toggle('cauda-parada',true);
	cauda.classList.toggle('cauda-levantada',false);
	cauda.classList.toggle('cauda-abanando',false);
}
gato.onmouseup = function(){
	var cauda = this.querySelector('.cauda');
	cauda.classList.toggle('cauda-parada',false);
	cauda.classList.toggle('cauda-levantada',false);
	cauda.classList.toggle('cauda-abanando',true);
}