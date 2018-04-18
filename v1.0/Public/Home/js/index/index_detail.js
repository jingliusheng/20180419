var HH = 0, mm = 0, ss = 0, str, timer;
$(".lh-indexDetail-domenu").on('click', '.lh-domenu-start', function () {
	$(this).addClass('lh-domenu-pause').removeClass('lh-domenu-start').html('暂停');
	timer = setInterval(function () {
		str = "";

		if (++ss == 60) {
			if (++mm == 60) {
				HH++;
				mm = 0;
			}
			ss = 0;
		}

		str += HH < 10 ? "0" + HH : HH;
		str += ":";
		str += mm < 10 ? "0" + mm : mm;
		str += ":";
		str += ss < 10 ? "0" + ss : ss;
		$("#lh-domenu-time").html(str);
	}, 1000);
});
$(".lh-indexDetail-domenu").on('click', '.lh-domenu-pause', function () {
	$(this).addClass('lh-domenu-start').removeClass('lh-domenu-pause').html('开始');
	clearInterval(timer);
});
$(".lh-domenu-over").click(function(){
	over();
	$(".lh-rgba-background").show();
	$(".lh-tributes-ischarge").show();
});
function over () {
	clearInterval(timer);
	$("#lh-domenu-time").html("00:00:00");
}

//点击购买贡品
$(".lh-indexDetail-buy").click(function () {
	$(".lh-rgba-background").show();
	$(".lh-tributes-buy").show();
});

//选择贡品
var temp = [];
$(".lh-tributes-list input").each(function () {
	$(this).click(function () {
		if (!$(this).is(':checked')) {
			for (var i in temp) {
				if (temp[i] === $(this).val()) {
					temp.splice(i, 1);
				}
			}
			$(".lh-tributes-list input").attr('disabled', false);
		} else {
			temp.push($(this).val());
			if (temp.length >= 4) {
				$(".lh-tributes-list input:not(':checked')").attr('disabled', true);
			} else {
				$(".lh-tributes-list input").attr('disabled', false);
			}
		}
	});
});
//取消购买
$(".lh-tributes-cancleBtn").click(function () {
	$(".lh-rgba-background").hide();
	$(".lh-tributes-buy").hide();
	temp = [];
	$(".lh-tributes-list input").each(function () {
		$(this).attr('checked', false);
	})
});
//确定购买
$(".lh-tributes-sureBtn").click(function () {
	var idStr= temp.sort().join(',');
	$.ajax({
		type:'post',
		url:'',
		async:true,
		data:{
			id:idStr
		},
		success:function(res){

		},
		error:function(res){
			console.log(res);
		}
	})
});

//不上贡
$(".lh-ischarge-cancleBtn").click(function(){
	$(".lh-rgba-background").hide();
	$(".lh-tributes-ischarge").hide();
});
//上贡
$(".lh-ischarge-sureBtn").click(function(){
$(".lh-tributes-payment").show();
});

//确定上贡
var reg=/(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)/;
$(".lh-payment-sureBtn").click(function(){
	var bin = $(".lh-lucky-bin").val();
	var type = $("input[name='paytype']:checked").val()
	if(!reg.test(bin)){
		showMessage("幸运币数量有误");
	}else if(!type) {
		showMessage("请选择支付方式");
	}else{
		/*
		* 进行支付
		* 支付成功的回调
		* $(".lh-tributes-payment").hide();
		* $(".lh-ischarge-img img").css({	"filter": "blur(0)"	});
		* */
	}
});
//关闭上贡
$(".lh-payment-cancleBtn").click(function(){
	$(".lh-tributes-payment").hide();
});
