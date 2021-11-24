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
function changeModalSubmit($function){
	// $('#submit').on('click',function(){});
	if($function==''){
		$('#submit').attr('onclick','');
		return;
	} 
	$('#submit').attr('onclick',$function+'()');
}
function changeModalSubmit($function,$data){
	// $('#submit').on('click',function(){});
	if($function==''){
		$('#submit').attr('onclick','');
		return;
	} 
	$('#submit').attr('onclick',$function+'('+$data+')');
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
	});
}
function userDetail($username){
	changeModalSubmit('userChange', $username);
	$.get('/admin/user?detail=true&user='+$username,function(data, status){
		changeModalHead('Người dùng '+$username);
		changeModalBody(data);
	});
}
function feedbackDetail($number){
	$.get('/admin/feedback?detail=true&id='+$number,function(data, status){
		changeModalHead('Feedback '+$number);
		changeModalBody(data);
	});
}
function postDetail($number){
	$.get('/admin/posts?detail=true&id='+$number,function(data, status){
		changeModalHead('Bài viết '+$number);
		changeModalBody(data);
	});
}
function userAdd(){
	var username, name, phone, email, pass, type;
	username=$('#username').val();
	name=$('#name').val();
	phone=$('#phone').val();
	email=$('#mail').val();
	pass=$('#pass').val();
	type=$('input[name=type]:checked').val();
	$.post('/admin/user',
		{
			add:true,
			username:username,
			name:name, 
			phone:phone, 
			email:email, 
			pass:pass, 
			type:type
		},function(data, status){
			if(data==0){
				$('#message').text('Có trường nhập rỗng');
			}
			else if(data==1){
				$('#message').text('Username đã có');
			}
			else if(data==2){
				$('#message').text('Thành công, reload sau 2 giây');
				setTimeout(function(){
						location.reload();
					},2000);
			}
	});
	changeModalSubmit('');
}
function userBan($ele,$username){
	userStatusEle=$('*[name="sts-'+$username+'"]');
	userStatusContent=userStatusEle.text();
	userStatusBut=$('*[name="ban-'+$username+'"]');
	userStatusEle.toggleClass('text-danger');
	userStatusBut.toggleClass('btn-danger btn-success');
	if(userStatusContent.search('Hoạt động')!=-1){
		userStatusEle.text('Bị khóa');
		userStatusBut.text('Mở khóa');
	}
	else{	
		userStatusEle.text('Hoạt động');
		userStatusBut.text('Cấm');
	}
	$.post('/admin/user',
		{
			ban:true,
			banUserName:$username
		},function(data, sts){
			console.log(data);
		}
		);
}
function userChange($username){
	var name, phone, email, type;
	name=$('input[name="name"]').val();
	phone=$('input[name="phone"]').val();
	email=$('input[name="email"]').val();
	type=$('input[name=type]:checked').val();
	$.post('/admin/user',
		{
			change:true,
			username:$username,
			name:name, 
			phone:phone, 
			email:email, 
			type:type
		},function(data, status){
			if(data==0){
				$('#message').text('Có trường nhập rỗng');
			}
			else if(data==1){
				$('#message').text('Có lỗi xảy ra');
			}
			else if(data==2){
				$('#message').text('Thành công, reload sau 2 giây');
				setTimeout(function(){
						location.reload();
					},2000);
			}
	});
	changeModalSubmit('');
}