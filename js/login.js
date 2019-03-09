
$(".item1 >input").mouseenter(function(){
	$(".err_msg1").show().siblings().hide()
})
$(".item1 >input").mouseleave(function(){
	$(".err_msg1").hide()
})

$(".item3 >input").mouseenter(function(){
	$(".err_msg3").show().siblings().hide()
})
$(".item3 >input").mouseleave(function(){
	$(".err_msg3").hide()
})

// 点击登录
$("#loginsubmit").click(function(){
	$.ajax({
		type:"get",
		url:"php/login.php",
		data:{
			uname:$("#uname").val(),
			pwd:$("#pwd").val()
		},
		success:function(res){
			console.log(res);
			if(res == 4){
				alert("密码错误");
				location.href="login.html";
			}else if(res == 5){
				alert("用户名不存在，请重新登录");
				location.href="login.html";
			}else{
				alert("登录成功");
				location.href="index.html?name="+res;
				document.cookie = "name="+res;
			}
		}
	});
})
