<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="render" content="webkit">
<meta name="keywords" content="">
<meta name="description" content="">
<title>幸福之家-
	祈福、许愿
</title>
<link rel="shortcut icon" type="image/x-icon" href="">
<link rel="stylesheet" href="/Public/Home/css/mod/globe.css">
<link rel="stylesheet" href="/Public/Home/css/mod/model.css">


  <link rel="stylesheet" href="/Public/Home/css/index/index_detail.css">

</head>
<body>
<div class="header bg1">
	<div class="header-content">
		<a class="lh-fl-header" href="<?php echo U('Index/index');?>">
			<img src="/Public/Home/img/web/logo-icon.png" width="43" height="43">
			幸运之家，你心灵的庇护所！
		</a>
		<div class="lh-fr-header">
			<div class="lh-login-header">
				<!--<div class="login-register">-->
				<!--<a href="<?php echo U('Index/login');?>">登录</a><span class="lh-login-spilit">|</span><a href="<?php echo U('Index/login');?>" class="lh-register">注册</a>-->
				<!--</div>-->
				<div class="lh-userInfo">
					<a href="<?php echo U('Index/user');?>" class="lh-userInfo-link">
						<img src="/Public/Home/img/web/logo-icon.png" width="43" height="43" class="lh-userInfo-avatar">
						<span class="lh-userInfo-name">123123123123</span>
						<br/>
						<span class="lh-userInfo-level">等级：LV1</span>
					</a>
					<a href="<?php echo U('Index/logout');?>" class="lh-logout">注销</a>
				</div>
			
			</div>
			<div class="lh-nav-header">
				<a href="<?php echo U('Index/miji');?>" class="lh-nav-item">幸运秘籍</a>
				<a href="<?php echo U('Index/jingshu');?>" class="lh-nav-item">经书下载</a>
				<a href="" class="lh-nav-item">体验建议</a>
				<a href="" class="lh-nav-item">收藏本站</a>
			</div>
		</div>
	</div>
</div>
<div id="main">
  <div class="main-wrapper">
    
  <div class="main-content">
    <div class="lh-linkToIndex"><a href="<?php echo U('Index/index');?>">&lt;返回首页</a></div>
    <div class="lh-indexDetail">
      <p class="lh-indexDetail-title">祈福、许愿</p>
      <div>
        <img src="/Public/Home/img/web/index_detail_01.png">
        <div class="lh-tributes">
          <ul class="lh-tributes-1f">
            <li><img src="/Public/Home/img/web/香.png" alt=""></li>
            <li><img src="/Public/Home/img/web/水果.png" alt=""></li>
            <li><img src="/Public/Home/img/web/蜡烛.png" alt=""></li>
            <li><img src="/Public/Home/img/web/花.png" alt=""></li>
            <li><img src="/Public/Home/img/web/香.png" alt=""></li>
          </ul>
          <ul class="lh-tributes-2f">
            <li><img src="/Public/Home/img/web/香.png" alt=""></li>
          </ul>
        </div>
      </div>
      <div class="lh-indexDetail-domenu">
        <div class="lh-domenu lh-domenu-start">开始</div>
        <div class="lh-domenu-desc">
          <p>点击这里开始进行祈福、许愿</p>
          <p id="lh-domenu-time">00:00:00</p>
        </div>
        <div class="lh-domenu lh-domenu-over">结束</div>
      </div>
      <span class="lh-indexDetail-buy">
        <img src="/Public/Home/img/web/shop-car.png" width="26" height="23">
        购买贡品
      </span>
    </div>

    <div class="lh-rgba-background">
      <!--购买贡品-->
      <div class="lh-tributes-buy">
        <div class="lh-tributes-title">贡品购买</div>
        <div class="lh-tributes-msg">
          <p class="lh-vip">
            <span class="lh-vip-name">会员：16912345678</span>
            <span>等级：Lv1</span>
          </p>
          <ul class="lh-tributes-list">
            <li>
              <div>
                <img src="/Public/Home/img/web/香.png">
              </div>
              <label for="xiang">
                <input type="checkbox" id="xiang" value="1">
                供香
              </label>
              <p>20幸运币</p>
            </li>
            <li>
              <div>
                <img src="/Public/Home/img/web/水果.png">
              </div>
              <label for="guo">
                <input type="checkbox" id="guo" value="2">
                供果
              </label>
              <p>20幸运币</p>
            </li>
            <li>
              <div>
                <img src="/Public/Home/img/web/蜡烛.png">
              </div>
              <label for="deng">
                <input type="checkbox" id="deng" value="3">
                供灯
              </label>
              <p>20幸运币</p>
            </li>
            <li>
              <div>
                <img src="/Public/Home/img/web/花.png">
              </div>
              <label for="hua">
                <input type="checkbox" id="hua" value="4">
                供花
              </label>
              <p>20幸运币</p>
            </li>
            <li>
              <div>
                <img src="/Public/Home/img/web/香.png">
              </div>
              <label for="xiang1">
                <input type="checkbox" id="xiang1" value="5">
                供香
              </label>
              <p>20幸运币</p>
            </li>
            <li>
              <div>
                <img src="/Public/Home/img/web/水果.png">
              </div>
              <label for="guo1">
                <input type="checkbox" id="guo1" value="6">
                供果
              </label>
              <p>20幸运币</p>
            </li>
            <li>
              <div>
                <img src="/Public/Home/img/web/蜡烛.png">
              </div>
              <label for="deng1">
                <input type="checkbox" id="deng1" value="7">
                供灯
              </label>
              <p>20幸运币</p>
            </li>
            <li>
              <div>
                <img src="/Public/Home/img/web/花.png">
              </div>
              <label for="hua1">
                <input type="checkbox" id="hua1" value="8">
                供花
              </label>
              <p>20幸运币</p>
            </li>
            <li>
              <div>
                <img src="/Public/Home/img/web/花.png">
              </div>
              <label for="hua2">
                <input type="checkbox" id="hua2" value="9">
                供花
              </label>
              <p>20幸运币</p>
            </li>
          </ul>
          <div class="lh-tributes-btns">
            <span class="lh-tributes-sureBtn">确 定</span><span class="lh-tributes-cancleBtn">取 消</span>
          </div>
          <div class="lh-tributes-tips">
            一次最多只能选择4种贡品，贡品有效时间为24小时
          </div>
        </div>
      </div>
      <!--是否上贡-->
      <div class="lh-tributes-ischarge">
        <div class="lh-tributes-title">是否上贡</div>
        <div class="lh-ischarge-well">
          <span class="lh-ischarge-well-name">上贡好处：</span>
          <p class="lh-ischarge-desc">
            这就是上贡好处这就是上贡好处这就是上贡好处这就是上贡好处这就是上贡好处这就是上贡好处这就是上贡好处这就是上贡好处这就是上贡好处
          </p>
        </div>
        <div class="lh-ischarge-img">
          <img src="/Public/Home/img/web/符.png" height="100%">
        </div>
        <div class="lh-ischarge-btns">
          <span class="lh-ischarge-sureBtn">上 贡</span><span class="lh-ischarge-cancleBtn">不上贡</span>
        </div>
      </div>
      <!--上贡-->
      <div class="lh-tributes-payment">
        <div class="lh-tributes-title">上贡</div>
        <div class="lh-payment-msg">
          <div class="lh-vip">
            <span class="lh-vip-name">会员：16912345678</span>
            <span>等级：Lv1</span>
            <div id="triangle-up"></div>
            <p>会员等级越高，幸运级越高，折扣更高！</p>
          </div>
          <div class="lh-payment-info">
            <span>上贡幸运币:</span>
            <div class="lh-payment-type">
              <input type="text" placeholder="请输入幸运币数量" class="lh-lucky-bin">
              <div class="lh-type-ali">
                <input type="radio" name="paytype" id="alipay" value="1">
                <span>
                  <img src="/Public/Home/img/web/ali_pay.png" width="37" height="38">
                  <label for="alipay">
                    支付宝支付
                  </label>
                </span>
              </div>
              <div class="lh-type-wx">
                <input type="radio" name="paytype" id="wxpay" value="2">
                <span>
                  <img src="/Public/Home/img/web/wx_pay.png" width="37" height="38">
                  <label for="wxpay">
                    微信支付
                  </label>
                </span>
              </div>
              <div class="lh-type-cft">
                <input type="radio" name="paytype" id="cftpay" value="3">
                <span>
                  <img src="/Public/Home/img/web/cft.png" width="37" height="38">
                  <label for="cftpay">
                    财付通支付
                  </label>
                </span>
              </div>

            </div>
          </div>
          <div class="lh-payment-btns">
            <span class="lh-payment-sureBtn">确 定</span><span class="lh-payment-cancleBtn">关闭</span>
          </div>

        </div>
      </div>
    </div>
  </div>

  </div>
</div>
<div class="footer bg1">
	<div class="footer-content">
		<ul class="lh-qr-footer">
			<li>
				<span>手机WAP</span>
			</li>
			<li>
				<span>手机APP</span>
			</li>
			<li>
				<span>淘宝店</span>
			</li>
			<li>
				<span>微博</span>
			</li>
			<li>
				<span>公众号</span>
			</li>
		</ul>
	</div>
	<div class="lh-copyright-footer">浙公网安备 33011802000397 Copyright&copy;2017 杭州幸运符 浙ICP备14013442号 - 5</div>
</div>

</body>
<script type="text/javascript" src="/Public/Home/js/plugin/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/plugin/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/global/global.js"></script>
<script>window._bd_share_config = {
	'common': {
		'bdSnsKey': {},
		'bdText': '',
		'bdMini': '1',
		'bdMiniList': ['qzone', 'tsina', 'weixin'],
		'bdPic': '',
		'bdStyle': '0',
		'bdSize': '32'
	}, 'slide': { 'type': 'slide', 'bdImg': '0', 'bdPos': 'right', 'bdTop': '250' }
};
with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
<!-- 用于加载js代码 -->

  <script src="/Public/Home/js/index/index_detail.js"></script>

</html>