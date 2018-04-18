<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="render" content="webkit">
<meta name="keywords" content="">
<meta name="description" content="">
<title>幸福之家-登录-注册</title>
<link rel="shortcut icon" type="image/x-icon" href="">
<link rel="stylesheet" href="/Public/Home/css/mod/globe.css">
<link rel="stylesheet" href="/Public/Home/css/mod/model.css">


  <link rel="stylesheet" href="/Public/Home/css/login/index.css">

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
	        <a href = "<?php echo U('Index/user');?>" class="lh-userInfo-link">
		        <img src = "/Public/Home/img/web/logo-icon.png" width="43" height="43" class="lh-userInfo-avatar">
		        <span class="lh-userInfo-name">123123123123</span>
		        <br/>
		        <span class="lh-userInfo-level">等级：LV1</span>
	        </a>
		      <a href = "<?php echo U('Index/logout');?>" class="lh-logout">注销</a>
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
    <div class="lh-login-register">
      <div class="lh-login-register-type">
        <span class="current">普通登录</span><span>立即注册</span>
      </div>
      <div class="lh-login-register-area">
        <input type="text" name="phone" maxlength="11"  placeholder="请输入您的手机号码">
        <input type="text" name="code" placeholder="请输入验证码"><span class="getCode">获取验证码</span>
        <p class="lh-error-tips"></p>
        <span class="lh-login-register-sure">登录</span>
        <div class="lh-login-others">第三方登录</div>
        <div class="lh-login-types">
          <img src="/Public/Home/img/web/lh-login-qq.png">
          <img src="/Public/Home/img/web/lh-login-sina.png">
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
  <div class="lh-copyright-footer">浙公网安备 33011802000397    Copyright&copy;2017 杭州幸运符 浙ICP备14013442号 - 5</div>
</div>

</body>
<script type="text/javascript" src="/Public/Home/js/plugin/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/plugin/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/global/global.js"></script>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":["qzone","tsina","weixin"],"bdPic":"","bdStyle":"0","bdSize":"32"},"slide":{"type":"slide","bdImg":"0","bdPos":"right","bdTop":"250"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<!-- 用于加载js代码 -->

  <script src="/Public/Home/js/login/index.js"></script>

</html>