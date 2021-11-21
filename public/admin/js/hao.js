function setMenu($number) {
	var menu, node;
	menu=document.getElementById("menu").children;
	node=menu[$number].children;
	node[0].classList.add('active');
}
setMenu(menuNum);
function changeModalHead($content){
	document.getElementById("modal-head").innerHTML=$content;
}
function changeModalBody($content){
	document.getElementById("modal-body").innerHTML=$content;
}