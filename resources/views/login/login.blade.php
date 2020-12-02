<script src="/static/js/jquery.js"></script>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>品优购，欢迎登录</title>

    <link rel="stylesheet" type="text/css" href="/static/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/pages-login.css" />
</head>

<body>
	<div class="login-box">
		<!--head-->
		<div class="py-container logoArea">
			<a href="" class="logo"></a>
		</div>
		<!--loginArea-->
		<div class="loginArea">
			<div class="py-container login">
				<div class="loginform">
					<ul class="sui-nav nav-tabs tab-wraped">
						<li>
							<a href="#index" data-toggle="tab">
								<h3>扫描登录</h3>
							</a>
						</li>
						<li class="active">
							<a href="#profile" data-toggle="tab">
								<h3>账户登录</h3>
							</a>
						</li>
					</ul>
					<div class="tab-content tab-wraped">
						<div id="index" class="tab-pane">
							<p>二维码登录，暂为官网二维码</p>
							<img src="/static/img/wx_cz.jpg" />
						</div>
						<div id="profile" class="tab-pane  active">
                            @if(!empty(session('msg')))
                                <div class="alert alert-msg" role="alert" style="color:red;">
                                    *{{session('msg')}}
                                </div>
                            @endif
							<form class="sui-form" method="post" action="{{url('login/logindo')}}">
								<div class="input-prepend"><span class="add-on loginname"></span>
									<input id="prependedInput" type="text" name="user_name" placeholder="邮箱/用户名/手机号" class="span2 input-xfat">
								</div>
								<div class="input-prepend"><span class="add-on loginpwd"></span>
									<input id="prependedInput" name="user_pwd" type="password" placeholder="请输入密码" class="span2 input-xfat">
								</div>
								<div class="setting">
									<label class="checkbox inline">
          <input name="m1" type="checkbox" value="2" checked="">
          自动登录
        </label>
									<span class="forget">忘记密码？</span>
								</div>
								<div class="logined">
{{--									<a class="sui-btn btn-block btn-xlarge btn-danger" href="home-index.html" >登&nbsp;&nbsp;录</a>--}}
                                    <input type="submit" class="sui-btn btn-block btn-xlarge btn-danger" value="登  录">
								</div>
							</form>
							<div class="otherlogin">
								<div class="types">
									<ul>
										<li><img src="/static/img/qq.png" width="35px" height="35px" /></li>
										<li><img src="/static/img/sina.png" /></li>
										<li><img src="/static/img/ali.png" /></li>
										<li><img src="/static/img/weixin.png" /></li>
                                        <li style='width:55px;height:55px'><img src="/static/img/github.jpg" id="cart"></li>
									</ul>
								</div>
								<span class="register"><a href="{{url('login/register')}}" target="_blank">立即注册</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--foot-->
		<div class="py-container copyright">
			<ul>
				<li>关于我们</li>
				<li>联系我们</li>
				<li>联系客服</li>
				<li>商家入驻</li>
				<li>营销中心</li>
				<li>手机品优购</li>
				<li>销售联盟</li>
				<li>品优购社区</li>
			</ul>
			<div class="address">地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096 电话：400-618-4000 传真：010-82935100</div>
			<div class="beian">京ICP备08001421号京公网安备110108007702
			</div>
		</div>
	</div>

<script type="text/javascript" src="/static/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/static/js/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/static/js/sui/sui.min.js"></script>
<script type="text/javascript" src="/static/js/jquery-placeholder/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="/static/js/login.js"></script>
</body>

</html>
<script>
    $(document).ready(function () {
        $('#cart').click(function () {
                location.href="https://github.com/login/oauth/authorize?client_id=d536c76f634c4fcb8c7f";
        });
    });
</script>