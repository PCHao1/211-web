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

function addPicture($number){
	const node = document.createElement('input');
	node.setAttribute('type','file');
	node.setAttribute('class','form-control');
	node.setAttribute('accept','image/png, image/jpeg');
	var elem= document.getElementById('file');
	var chil= document.getElementById('addPicture');
	elem.insertBefore(node,chil);
}

function orderDetail($number) {
	$.get('/admin/orders?detail=true&id='+$number,function(data, status){
		changeModalHead('Đơn hàng số '+$number);
		changeModalBody(data);
	});
}
function productDetail($number){
	$.get('/admin/products?detail=true&id='+$number,function(data, status){
		changeModalHead('Sản phẩm mã '+$number);
		changeModalBody(data);
	})
}
function userDetail($username){
	$.get('/admin/user?detail=true&id='+$username,function(data, status){
		changeModalHead('Người dùng '+$username);
		changeModalBody(data);
	})
}
function feedbackDetail($number){
	$.get('/admin/feedback?detail=true&id='+$number,function(data, status){
		changeModalHead('Feedback '+$number);
		changeModalBody(data);
	})
}
function postDetail($number){
	$.get('/admin/posts?detail=true&id='+$number,function(data, status){
		changeModalHead('Bài viết '+$number);
		changeModalBody(data);
	})
}