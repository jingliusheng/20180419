var t=10,timer,sendData;

$(".lh-login-register-type span").each(function(){
	$(this).click(function(){
		$(this).addClass('current').siblings().removeClass('current');
		stopInterval();
		if($(this).index()==0){
			$(".lh-login-register-sure").html('登录');
		}else{
			$(".lh-login-register-sure").html('注册');
		}
	})
});
$(".getCode").on('click',function(){
	startInterval();
});

$(".lh-login-register-sure").click(function(){
	sendData={
		phone:$("input[name='phone']").val(),
		code:$("input[name='code']").val()
	}
	if(!sendData.phone){
		$(".lh-error-tips").text('请输入手机号码');
	}else if(!(/^1[34578]\d{9}$/.test(sendData.phone))){
		$(".lh-error-tips").text('手机号码格式不正确');
	}else if(!sendData.code){
		$(".lh-error-tips").text('请输入验证码');
	}else{
		$(".lh-error-tips").text('');
		alert('ajax提交啊')
	}

});


/*
* @description 开启定时器
* */
function startInterval(){
	$(".getCode").off('click');
	$(".getCode").text(t +'s');
	timer=setInterval(function(){
		$(".getCode").text(--t +'s');
		if(t<=0){
			clearInterval(timer);
			t=10;
			$(".getCode").on('click',function(){
				startInterval();
			});
			$(".getCode").text("获取验证码");
		}
	},1000)
}
/*
* @description 关闭定时器
* */
function stopInterval(){
	clearInterval(timer);
	t=10;
	$(".getCode").on('click',function(){
		startInterval();
	});
	$(".getCode").text("获取验证码");
}