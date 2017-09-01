<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />

	<!-- 全局样式导入  -->
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<!-- bootstrap样式 引入   -->
	<!-- <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7.min.css">
	

	<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap-3.3.7.min.js"></script>

	<!-- layUI -->
	<link rel="stylesheet" href="/layui/css/layui.css">
	<script type="text/javascript" src="/layui/layui.js"></script>

	<!-- 文件上传 -->
	<link rel="stylesheet" href="/dist/ssi-uploader/styles/ssi-uploader.css"/> 
	<script src="/dist/ssi-uploader/js/ssi-uploader.min.js"></script> 


	<!-- <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

	<title>资讯列表</title>
</head>
<body >
	<h1 style="font-size:30px;color:#fff;">我是标题1 h1. <small>我是副标题1 h1</small></h1>
	<h2>我是标题2 h2. <small>我是副标题2 h2</small></h2>
	<h3>我是标题3 h3. <small>我是副标题3 h3</small></h3>
	<h4>我是标题4 h4. <small>我是副标题4 h4</small></h4>
	<h5>我是标题5 h5. <small>我是副标题5 h5</small></h5>
	<h6>我是标题6 h6. <small>我是副标题6 h6</small></h6>

	<p class="text-left">向左对齐文本</p>
	<p class="text-center">居中对齐文本</p>
	<p class="text-right">向右对齐文本</p>
	<p class="text-muted">本行内容是减弱的</p>
	<p class="text-primary">本行内容带有一个 primary class</p>
	<p class="text-success">本行内容带有一个 success class</p>
	<p class="text-info">本行内容带有一个 info class</p>
	<p class="text-warning">本行内容带有一个 warning class</p>
	<p class="text-danger">本行内容带有一个 danger class</p>


	<abbr title="World Wide Web">WWW</abbr><br>
	<abbr title="Real Simple Syndication" class="initialism">RSS</abbr>


	<blockquote>
		这是一个带有源标题的引用。
		<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
	</blockquote>
	<blockquote class="pull-right">
		这是一个向右对齐的引用。
		<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
	</blockquote>



	<p><code>&lt;header&gt;</code> 作为内联元素被包围。</p>
	<p>如果需要把代码显示为一个独立的块元素，请使用 &lt;pre&gt; 标签：</p>
	<pre>
		&lt;article&gt;
		&lt;h1&gt;Article Heading&lt;/h1&gt;
		&lt;/article&gt;
	</pre>



	<table class="table">
		<caption>基本的表格布局</caption>
		<thead>
			<tr>
				<th>名称</th>
				<th>城市</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tanmay</td>
				<td>Bangalore</td>
			</tr>
			<tr>
				<td>Sachin</td>
				<td>Mumbai</td>
			</tr>
		</tbody>b
	</table>



	<table class="table table-striped">
		<caption>条纹表格布局</caption>
		<thead>
			<tr>
				<th>名称</th>
				<th>城市</th>
				<th>邮编</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tanmay</td>
				<td>Bangalore</td>
				<td>560001</td>
			</tr>
			<tr>
				<td>Sachin</td>
				<td>Mumbai</td>
				<td>400003</td>
			</tr>
			<tr>
				<td>Uma</td>
				<td>Pune</td>
				<td>411027</td>
			</tr>
		</tbody>
	</table>

	<h1 style="font-size:30px;color:#fff;">含有边框</h1>
	<table class="table table-bordered">
		<caption>边框表格布局</caption>
		<thead>
			<tr>
				<th>名称</th>
				<th>城市</th>
				<th>邮编</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tanmay</td>
				<td>Bangalore</td>
				<td>560001</td>
			</tr>
			<tr>
				<td>Sachin</td>
				<td>Mumbai</td>
				<td>400003</td>
			</tr>
			<tr>
				<td>Uma</td>
				<td>Pune</td>
				<td>411027</td>
			</tr>
		</tbody>
	</table>

	<h1 style="font-size:30px;color:#fff;">可以悬停效果</h1>
	<table class="table table-hover">
		<caption>悬停表格布局</caption>
		<thead>
			<tr>
				<th>名称</th>
				<th>城市</th>
				<th>邮编</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tanmay</td>
				<td>Bangalore</td>
				<td>560001</td>
			</tr>
			<tr>
				<td>Sachin</td>
				<td>Mumbai</td>
				<td>400003</td>
			</tr>
			<tr>
				<td>Uma</td>
				<td>Pune</td>
				<td>411027</td>
			</tr>
		</tbody>
	</table>

	<h1 style="font-size:30px;color:#fff;">带颜色的表格</h1>
	<table class="table">
		<caption>上下文表格布局</caption>
		<thead>
			<tr>
				<th>产品</th>
				<th>付款日期</th>
				<th>状态</th>
			</tr>
		</thead>
		<tbody>
			<tr class="active">
				<td>产品1</td>
				<td>23/11/2013</td>
				<td>待发货</td>
			</tr>
			<tr class="success">
				<td>产品2</td>
				<td>10/11/2013</td>
				<td>发货中</td>
			</tr>
			<tr class="warning">
				<td>产品3</td>
				<td>20/10/2013</td>
				<td>待确认</td>
			</tr>
			<tr class="danger">
				<td>产品4</td>
				<td>20/10/2013</td>
				<td>已退货</td>
			</tr>
		</tbody>
	</table>

	<h1 style="font-size:30px;color:#fff;">基本表单</h1>
	<form role="form">
		<div class="form-group">
			<label for="name">名称</label>
			<input type="text" class="form-control" id="name" placeholder="请输入名称">
		</div>
		<div class="form-group">
			<label for="inputfile">文件输入</label>
			<input type="file" id="inputfile">
			<p class="help-block">这里是块级帮助文本的实例。</p>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox">请打勾
			</label>
		</div>
		<button type="submit" class="btn btn-default">提交</button>
	</form>

	<h1 style="font-size:30px;color:#fff;">水平表单</h1>
	<form class="form-horizontal" role="form">
		<div class="form-group">
			<label for="firstname" class="col-sm-2 control-label">名字</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="firstname" placeholder="请输入名字">
			</div>
		</div>
		<div class="form-group">
			<label for="lastname" class="col-sm-2 control-label">姓</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="lastname" placeholder="请输入姓">
			</div>
		</div>
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label" >文本框</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="3"></textarea>
			</div>
		</div>
		
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">内联的复选框和单选按钮的实例</label>
			<div class="col-sm-10">
				<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox1" value="option1"> 选项 1
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox2" value="option2"> 选项 2
				</label>
				<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox3" value="option3"> 选项 3
				</label>
				<label class="radio-inline">
					<input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="option1" checked> 选项 1
				</label>
				<label class="radio-inline">
					<input type="radio" name="optionsRadiosinline" id="optionsRadios4"  value="option2"> 选项 2
				</label>
			</div>

		</div>
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">选择列表</label>
			<div class="col-sm-10" >
				<select class="form-control" id="select-one">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">可多选的选择列表</label>
			<div class="col-sm-10">
				
				<select multiple class="form-control" id="select-two">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<p class="form-control-static">email@example.com</p>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword" class="col-sm-2 control-label">密码</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputPassword" placeholder="请输入密码">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					<label>
						<input type="checkbox">请记住我
					</label>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">聚焦</label>
			<div class="col-sm-10">
				<input class="form-control" id="focusedInput" type="text" value="该输入框获得焦点...">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword" class="col-sm-2 control-label">禁用</label>
			<div class="col-sm-10">
				<input class="form-control" id="disabledInput" type="text" placeholder="该输入框禁止输入..." disabled>
			</div>
		</div>
		<fieldset disabled>
			<div class="form-group">
				<label for="disabledTextInput" class="col-sm-2 control-label">禁用输入（Fieldset disabled）</label>
				<div class="col-sm-10">
					<input type="text" id="disabledTextInput" class="form-control" placeholder="禁止输入">
				</div>
			</div>
			<div class="form-group">
				<label for="disabledSelect" class="col-sm-2 control-label">禁用选择菜单（Fieldset disabled）</label>
				<div class="col-sm-10">
					<select id="disabledSelect" class="form-control">
						<option>禁止选择</option>
					</select>
				</div>
			</div>
		</fieldset>
		<div class="form-group has-success">
			<label class="col-sm-2 control-label" for="inputSuccess">输入成功</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputSuccess">
			</div>
		</div>
		<div class="form-group has-warning">
			<label class="col-sm-2 control-label" for="inputWarning">输入警告</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputWarning">
			</div>
		</div>
		<div class="form-group has-error">
			<label class="col-sm-2 control-label" for="inputError">输入错误</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputError">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">登录</button>
			</div>
		</div>
	</form>

	<h1 style="font-size:30px;color:#fff;">表格的高度和宽度</h1>
	<form role="form">
		<div class="form-group">
			<input class="form-control input-lg" type="text" placeholder=".input-lg">
		</div>
		<div class="form-group">
			<input class="form-control" type="text" placeholder="默认输入">
		</div>
		<div class="form-group">
			<input class="form-control input-sm" type="text" placeholder=".input-sm">
		</div>
		<div class="form-group"></div>
		<div class="form-group">
			<select class="form-control input-lg">
				<option value="">.input-lg</option>
			</select>
		</div>
		<div class="form-group">
			<select class="form-control">
				<option value="">默认选择</option>
			</select>
		</div>
		<div class="form-group">
			<select class="form-control input-sm">
				<option value="">.input-sm</option>
			</select>
		</div>
		<div class="row">
			<div class="col-lg-2">
				<input type="text" class="form-control" placeholder=".col-lg-2">
			</div>
			<div class="col-lg-3">
				<input type="text" class="form-control" placeholder=".col-lg-3">
			</div>
			<div class="col-lg-4">
				<input type="text" class="form-control" placeholder=".col-lg-4">
			</div>
		</div>
	</form>

	<h1 style="font-size:30px;color:#fff;">按钮</h1>
	<!-- 标准的按钮 -->
	<button type="button" class="btn btn-default">默认按钮</button>
	<!-- 提供额外的视觉效果，标识一组按钮中的原始动作 -->
	<button type="button" class="btn btn-primary">原始按钮</button>
	<!-- 表示一个成功的或积极的动作 -->
	<button type="button" class="btn btn-success">成功按钮</button>
	<!-- 信息警告消息的上下文按钮 -->
	<button type="button" class="btn btn-info">信息按钮</button>
	<!-- 表示应谨慎采取的动作 -->
	<button type="button" class="btn btn-warning">警告按钮</button>
	<!-- 表示一个危险的或潜在的负面动作 -->
	<button type="button" class="btn btn-danger">危险按钮</button>
	<!-- 并不强调是一个按钮，看起来像一个链接，但同时保持按钮的行为 -->
	<button type="button" class="btn btn-link">链接按钮</button>

	<p>
		<button type="button" class="btn btn-primary btn-lg">大的原始按钮</button>
		<button type="button" class="btn btn-default btn-lg">大的按钮</button>
	</p>
	<p>
		<button type="button" class="btn btn-primary">默认大小的原始按钮</button>
		<button type="button" class="btn btn-default">默认大小的按钮</button>
	</p>
	<p>
		<button type="button" class="btn btn-primary btn-sm">小的原始按钮</button>
		<button type="button" class="btn btn-default btn-sm">小的按钮</button>
	</p>
	<p>
		<button type="button" class="btn btn-primary btn-xs">特别小的原始按钮</button>
		<button type="button" class="btn btn-default btn-xs">特别小的按钮</button>
	</p>
	<p>
		<button type="button" class="btn btn-primary btn-lg btn-block">块级的原始按钮</button>
		<button type="button" class="btn btn-default btn-lg btn-block">块级的按钮</button>
	</p>

	<p>
		<button type="button" class="btn btn-primary btn-lg" disabled="disabled">禁用的原始按钮</button>
		<a href="#" class="btn btn-default btn-lg disabled" role="button">禁用链接</a>
	</p>

	<P>
		<img src="https://img6.bdstatic.com/img/image/smallpic/xiaoqingxbanq.jpg" class="img-rounded">
		<img src="https://img6.bdstatic.com/img/image/smallpic/xiaoqingxbanq.jpg" class="img-circle">
		<img src="https://img6.bdstatic.com/img/image/smallpic/xiaoqingxbanq.jpg" class="img-thumbnail">
	</P>

	<p>关闭图标实例
		<button type="button" class="btn btn-primary btn-xs" class="close" aria-hidden="true">
			&times;
		</button>
	</p>

	<p>插入符实例
		<span class="caret"></span>
	</p>

	<h1 style="font-size:30px;color:#fff;">小图标</h1>
	<p>
		<button type="button" class="btn btn-primary btn-lg" style="color: rgb(212, 106, 64);">
			<span class="glyphicon glyphicon-user"></span> User
		</button>
		<button type="button" class="btn btn-primary btn-lg" style="text-shadow: black 5px 3px 3px;">
			<span class="glyphicon glyphicon-user"></span> User
		</button>
	</p>
	<h1 style="font-size:30px;color:#fff;">下拉菜单</h1>
	<p>
		<div class="dropup">
			<button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">主题
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation" class="dropdown-header">下拉菜单标题</li>
				<li role="presentation">
					<a role="menuitem" tabindex="-1" href="#">Java</a>
				</li>
				<li role="presentation">
					<a role="menuitem" tabindex="-1" href="#">数据挖掘</a>
				</li>
				<li role="presentation">
					<a role="menuitem" tabindex="-1" href="#">数据通信/网络</a>
				</li>
				<li role="presentation" class="divider"></li>
				<li role="presentation" class="dropdown-header">下拉菜单标题</li>
				<li role="presentation">
					<a role="menuitem" tabindex="-1" href="#">分离的链接</a>
				</li>
			</ul>
		</div>
	</p>


	<p>
		<div class="btn-group btn-group-lg">
			<button type="button" class="btn btn-default">按钮 1</button>
			<button type="button" class="btn btn-default">按钮 2</button>
			<button type="button" class="btn btn-default">按钮 3</button>
		</div>
		<div class="btn-group btn-group-sm">
			<button type="button" class="btn btn-default">按钮 4</button>
			<button type="button" class="btn btn-default">按钮 5</button>
			<button type="button" class="btn btn-default">按钮 6</button>
		</div>
		<div class="btn-group btn-group-xs">
			<button type="button" class="btn btn-default">按钮 7</button>
			<button type="button" class="btn btn-default">按钮 8</button>
			<button type="button" class="btn btn-default">按钮 9</button>
		</div>
	</p>

	<p>
		<div class="btn-group">
			<button type="button" class="btn btn-default">按钮 1</button>
			<button type="button" class="btn btn-default">按钮 2</button>
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					下列
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><a href="#">下拉链接 1</a></li>
					<li><a href="#">下拉链接 2</a></li>
				</ul>
			</div>
		</div>
	</p>
	<p>
		<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle btn-lg" data-toggle="dropdown">默认
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li>
					<a href="#">功能</a>
				</li>
				<li>
					<a href="#">另一个功能</a>
				</li>
				<li>
					<a href="#">其他</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">分离的链接</a>
				</li>
			</ul>
		</div>
		<div class="btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown">原始
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li>
					<a href="#">功能</a>
				</li>
				<li>
					<a href="#">另一个功能</a>
				</li>
				<li>
					<a href="#">其他</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">分离的链接</a>
				</li>
			</ul>
		</div>
		<div class="btn-group">
			<button type="button" class="btn btn-success dropdown-toggle btn-xs" data-toggle="dropdown">成功
				<span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="#">功能</a>
					</li>
					<li>
						<a href="#">另一个功能</a>
					</li>
					<li>
						<a href="#">其他</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#">分离的链接</a>
					</li>
				</ul>
			</div>
			<div class="btn-group dropup">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">默认
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="#">功能</a>
					</li>
					<li>
						<a href="#">另一个功能</a>
					</li>
					<li>
						<a href="#">其他</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#">分离的链接</a>
					</li>
				</ul>
			</div>
		</p>

		<h1 style="font-size:30px;color:#fff;">输入框组</h1>
		<p>
			<form class="bs-example bs-example-form" role="form">
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" class="form-control" placeholder="twitterhandle">
				</div>
				<br>
				<div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-addon">.00</span>
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">$</span>
					<input type="text" class="form-control">
					<span class="input-group-addon">.00</span>
				</div>


				<div class="input-group input-group-lg">
					<span class="input-group-addon">@</span>
					<input type="text" class="form-control" placeholder="Twitterhandle">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" class="form-control" placeholder="Twitterhandle">
				</div>
				<br>
				<div class="input-group input-group-sm">
					<span class="input-group-addon">@</span>
					<input type="text" class="form-control" placeholder="Twitterhandle">
				</div>





				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
							</span>
							<input type="text" class="form-control">
						</div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->
					<br>
					<div class="col-lg-6">
						<div class="input-group">
							<input type="text" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
							</span>
						</div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->



				<div class="row">
					<div class="col-lg-6">
						<div class="input-group">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default 
								dropdown-toggle" data-toggle="dropdown">下拉菜单
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li>
									<a href="#">功能</a>
								</li>
								<li>
									<a href="#">另一个功能</a>
								</li>
								<li>
									<a href="#">其他</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">分离的链接</a>
								</li>
							</ul>
						</div><!-- /btn-group -->
						<input type="text" class="form-control">
					</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
				<br>
				<div class="col-lg-6">
					<div class="input-group">
						<input type="text" class="form-control">
						<div class="input-group-btn">
							<button type="button" class="btn btn-default 
							dropdown-toggle" data-toggle="dropdown">下拉菜单
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#">功能</a>
							</li>
							<li>
								<a href="#">另一个功能</a>
							</li>
							<li>
								<a href="#">其他</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">分离的链接</a>
							</li>
						</ul>
					</div><!-- /btn-group -->
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</form>
</p>


<h1 style="font-size:30px;color:#fff;">导航</h1>
<div style="background-color: #fff;">
	<p>带有下拉菜单的标签</p>
	<ul class="nav nav-tabs" >
		<li class="active"><a href="#">Home</a></li>
		<li><a href="#">SVN</a></li>
		<li><a href="#">iOS</a></li>
		<li><a href="#">VB.Net</a></li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				Java <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#">Swing</a></li>
				<li><a href="#">jMeter</a></li>
				<li><a href="#">EJB</a></li>
				<li class="divider"></li>
				<li><a href="#">分离的链接</a></li>
			</ul>
		</li>
		<li><a href="#">PHP</a></li>
	</ul>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<ul class="nav nav-pills">
		<li class="active"><a href="#">Home</a></li>
		<li><a href="#">SVN</a></li>
		<li><a href="#">iOS</a></li>
		<li><a href="#">VB.Net</a></li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				Java <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#">Swing</a></li>
				<li><a href="#">jMeter</a></li>
				<li><a href="#">EJB</a></li>
				<li class="divider"></li>
				<li><a href="#">分离的链接</a></li>
			</ul>
		</li>
		<li><a href="#">PHP</a></li>
	</ul>
</div>


<h1 style="font-size:30px;color:#fff;">导航栏</h1>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">菜鸟教程</a>
		</div>

		<div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">iOS</a></li>
				<li><a href="#">SVN</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Java
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">jmeter</a></li>
						<li><a href="#">EJB</a></li>
						<li><a href="#">Jasper Report</a></li>
						<li class="divider"></li>
						<li><a href="#">分离的链接</a></li>
						<li class="divider"></li>
						<li><a href="#">另一个分离的链接</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">提交</button>
		</form>

		<div>
			<p class="navbar-text navbar-right">导航栏文本</p>
		</div>

		<ul class="nav navbar-nav navbar-right"> 
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> 注册</a></li> 
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li> 
		</ul> 
	</div>


</nav>


<h1 style="font-size:30px;color:#fff;">面包屑导航</h1>
<ol class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li><a href="#">2013</a></li>
	<li class="active">十一月</li>
</ol>

<h1 style="font-size:30px;color:#fff;">分页</h1>

<ul class="pager">
	<li><a href="#">Previous</a></li>
	<li><a href="#">Next</a></li>
</ul>

<ul class="pager">
	<li class="previous disabled"><a href="#">&larr; Older</a></li>
	<li class="next"><a href="#">Newer &rarr;</a></li>
</ul>
、

<h1 style="font-size:30px;color:#fff;">标签</h1>
<span class="label label-default">默认标签</span>
<span class="label label-primary">主要标签</span>
<span class="label label-success">成功标签</span>
<span class="label label-info">信息标签</span>
<span class="label label-warning">警告标签</span>
<span class="label label-danger">危险标签</span>

<h1 style="font-size:30px;color:#fff;">徽章</h1>


<div class="clearfix">
	<div class="pull-left col-sm-2" style="background-color: #fff;">
		<h4>列表导航中的激活状态</h4>
		<ul class="nav nav-pills nav-stacked " ">
			<li class="active">
				<a href="#">
					<span class="badge pull-right">42</span>首页</a>
				</li>
				<li>
					<a href="#">简介</a>
				</li>
				<li>
					<a href="#">
						<span class="badge pull-right">3</span>消息
					</a>
				</li>
			</ul>
		</div>
		<div class="pull-right col-sm-2" style="background-color: #fff;">
			<h4>胶囊式导航中的激活状态</h4>
			<ul class="nav nav-pills">
				<li class="active">
					<a href="#">首页
						<span class="badge">42</span>
					</a>
				</li>
				<li>
					<a href="#">简介</a>
				</li>
				<li>
					<a href="#">消息
						<span class="badge">3</span>
					</a>
				</li>
			</ul>
			<br>
		</div>
		
	</div>

	<h1 style="font-size:30px;color:#fff;">超大屏幕</h1>
	<div class="jumbotron">
		<div class="container">
			<div class="jumbotron">
				<h1 style="font-size:30px;color:#fff;">欢迎登陆页面！</h1>
				<p>这是一个超大屏幕（Jumbotron）的实例。</p>
				<p><a class="btn btn-primary btn-lg" role="button">
					学习更多</a>
				</p>
			</div>
		</div>
	</div>


	<h1 style="font-size:30px;color:#fff;">well效果</h1>
	<div class="well well-lg">您好，我在大的 Well 中！</div>
	<div class="well well-sm">您好，我在小的 Well 中！</div>


	<h1 style="font-size:30px;color:#fff;">面板</h1>
	<div class="panel panel-default">
		<div class="panel-heading">面板标题</div>
		<div class="panel-body">
			<p>这是一个基本的面板内容。这是一个基本的面板内容。
				这是一个基本的面板内容。这是一个基本的面板内容。
				这是一个基本的面板内容。这是一个基本的面板内容。
				这是一个基本的面板内容。这是一个基本的面板内容。
			</p>
		</div>
		<ul class="list-group">
			<li class="list-group-item">免费域名注册</li>
			<li class="list-group-item">免费 Window 空间托管</li>
			<li class="list-group-item">图像的数量</li>
			<li class="list-group-item">24*7 支持</li>
			<li class="list-group-item">每年更新成本</li>
		</ul>

		<table class="table">
			<th>产品</th><th>价格 </th>
			<tr><td>产品 A</td><td>200</td></tr>
			<tr><td>产品 B</td><td>400</td></tr>
		</table>

		<div class="panel-footer">面板脚注</div>
	</div>

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">面板标题</h3>
		</div>
		<div class="panel-body">
			这是一个基本的面板
		</div>
	</div>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">面板标题</h3>
		</div>
		<div class="panel-body">
			这是一个基本的面板
		</div>
	</div>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">面板标题</h3>
		</div>
		<div class="panel-body">
			这是一个基本的面板
		</div>
	</div>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title">面板标题</h3>
		</div>
		<div class="panel-body">
			这是一个基本的面板
		</div>
	</div>
	<div class="panel panel-danger">
		<div class="panel-heading">
			<h3 class="panel-title">面板标题</h3>
		</div>
		<div class="panel-body">
			这是一个基本的面板
		</div>
	</div>

	<h1 style="font-size:30px;color:#fff;">页面标题</h1>
	
	<div class="container">
		<div class="page-header">
			<h1 style="font-size:30px;color:#fff;">页面标题实例
				<small>子标题</small>
			</h1>
		</div>
		<p>这是一个示例文本。这是一个示例文本。这是一个示例文本。这是一个示例文本。这是一个示例文本。</p>
	</div>

	<h1 style="font-size:30px;color:#fff;">缩略图</h1>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="https://img6.bdstatic.com/img/image/smallpic/xiaoqingxbanq.jpg" 
					alt="通用的占位符缩略图">
					<div class="caption">
						<h3>缩略图标签</h3>
						<p>一些示例文本。一些示例文本。</p>
						<p>
							<a href="#" class="btn btn-primary" role="button">
								按钮
							</a> 
							<a href="#" class="btn btn-default" role="button">
								按钮
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="https://img6.bdstatic.com/img/image/smallpic/xiaoqingxbanq.jpg" 
					alt="通用的占位符缩略图">
					<div class="caption">
						<h3>缩略图标签</h3>
						<p>一些示例文本。一些示例文本。</p>
						<p>
							<a href="#" class="btn btn-primary" role="button">
								按钮
							</a> 
							<a href="#" class="btn btn-default" role="button">
								按钮
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="https://img6.bdstatic.com/img/image/smallpic/xiaoqingxbanq.jpg" 
					alt="通用的占位符缩略图">
					<div class="caption">
						<h3>缩略图标签</h3>
						<p>一些示例文本。一些示例文本。</p>
						<p>
							<a href="#" class="btn btn-primary" role="button">
								按钮
							</a> 
							<a href="#" class="btn btn-default" role="button">
								按钮
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="https://img6.bdstatic.com/img/image/smallpic/xiaoqingxbanq.jpg" 
					alt="通用的占位符缩略图">
					<div class="caption">
						<h3>缩略图标签</h3>
						<p>一些示例文本。一些示例文本。</p>
						<p>
							<a href="#" class="btn btn-primary" role="button">
								按钮
							</a> 
							<a href="#" class="btn btn-default" role="button">
								按钮
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>		
	</div>


	<h1 style="font-size:30px;color:#fff;">警告</h1>
	<div class="container">
		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert"  aria-hidden="true">
				&times;
			</button>
			成功！很好地完成了提交。
		</div>
		<div class="alert alert-info alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
				&times;
			</button>
			信息！请注意这个信息。
		</div>
		<div class="alert alert-warning alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
				&times;
			</button>
			警告！请不要提交。
		</div>
		<div class="alert alert-danger alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
				&times;
			</button>
			错误！请进行一些更改。
		</div>
	</div>
	<h1 style="font-size:30px;color:#fff;">进度条</h1>
	<div class="container">
		<div class="progress progress-striped active">
			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
				<span class="sr-only">40% 完成</span>
			</div>
		</div>
		<div class="progress">
			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
				<span class="sr-only">40% 完成</span>
			</div>
			<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
				<span class="sr-only">30% 完成（信息）</span>
			</div>
			<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
				<span class="sr-only">20% 完成（警告）</span>
			</div>
		</div>

	</div>
	<h1 style="font-size:30px;color:#fff;">多媒体对象</h1>
	<div class="container">
		
		<ul class="media-list">
			<li class="media">
				<a class="media-left" href="#">
					<img class="media-object" src="https://img6.bdstatic.com/img/image/smallpic/xiaoqingxbanq.jpg"
					alt="通用的占位符图像">
				</a>
				<div class="media-body">
					<h4 class="media-heading">媒体标题</h4>
					<p>这是一些示例文本。这是一些示例文本。
						这是一些示例文本。这是一些示例文本。
						这是一些示例文本。这是一些示例文本。
						这是一些示例文本。这是一些示例文本。
						这是一些示例文本。这是一些示例文本。</p>
						<!-- 嵌套的媒体对象 -->
						<div class="media">
							<a class="media-left" href="#">
								<img class="media-object" src="https://img6.bdstatic.com/img/image/smallpic/xiaoqingxbanq.jpg"
								alt="通用的占位符图像">
							</a>
							<div class="media-body">
								<h4 class="media-heading">嵌套的媒体标题</h4>
								这是一些示例文本。这是一些示例文本。
								这是一些示例文本。这是一些示例文本。
								这是一些示例文本。这是一些示例文本。
								这是一些示例文本。这是一些示例文本。
								这是一些示例文本。这是一些示例文本。
								<!-- 嵌套的媒体对象 -->
								<div class="media">
									<a class="media-left" href="#">
										<img class="media-object" src="https://img6.bdstatic.com/img/image/smallpic/xiaoqingxbanq.jpg"
										alt="通用的占位符图像">
									</a>
									<div class="media-body">
										<h4 class="media-heading">嵌套的媒体标题</h4>
										这是一些示例文本。这是一些示例文本。
										这是一些示例文本。这是一些示例文本。
										这是一些示例文本。这是一些示例文本。
										这是一些示例文本。这是一些示例文本。
										这是一些示例文本。这是一些示例文本。
									</div>
								</div>
							</div>
						</div>
						<!-- 嵌套的媒体对象 -->
						<div class="media">
							<a class="media-left" href="#">
								<img class="media-object" src="https://img6.bdstatic.com/img/image/smallpic/xiaoqingxbanq.jpg"
								alt="通用的占位符图像">
							</a>
							<div class="media-body">
								<h4 class="media-heading">嵌套的媒体标题</h4>
								这是一些示例文本。这是一些示例文本。
								这是一些示例文本。这是一些示例文本。
								这是一些示例文本。这是一些示例文本。
								这是一些示例文本。这是一些示例文本。
								这是一些示例文本。这是一些示例文本。
							</div>
						</div>
					</div>
				</li>
				<li class="media">
					<a class="pull-right" href="#">
						<img class="media-object" src="https://img6.bdstatic.com/img/image/smallpic/xiaoqingxbanq.jpg"
						alt="通用的占位符图像">
					</a>
					<div class="media-body">
						<h4 class="media-heading">媒体标题</h4>
						这是一些示例文本。这是一些示例文本。
						这是一些示例文本。这是一些示例文本。
						这是一些示例文本。这是一些示例文本。
						这是一些示例文本。这是一些示例文本。
						这是一些示例文本。这是一些示例文本。
					</div>
				</li>
			</ul>

		</div>


		<h1 style="font-size:30px;color:#fff;">列表组</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<ul class="list-group">
						<li class="list-group-item">免费域名注册</li>
						<li class="list-group-item">免费 Window 空间托管</li>
						<li class="list-group-item">图像的数量</li>
						<li class="list-group-item">
							<span class="badge">新</span>
							24*7 支持
						</li>
						<li class="list-group-item">每年更新成本</li>
						<li class="list-group-item">
							<span class="badge">新</span>
							折扣优惠
						</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<div class="list-group">
						<a href="#" class="list-group-item active">
							<h4 class="list-group-item-heading">
								入门网站包
							</h4>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">
								免费域名注册
							</h4>
							<p class="list-group-item-text">
								您将通过网页进行免费域名注册。
							</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">
								24*7 支持
							</h4>
							<p class="list-group-item-text">
								我们提供 24*7 支持。
							</p>
						</a>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item active">
							<h4 class="list-group-item-heading">
								商务网站包
							</h4>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">
								免费域名注册
							</h4>
							<p class="list-group-item-text">
								您将通过网页进行免费域名注册。
							</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">24*7 支持</h4>
							<p class="list-group-item-text">我们提供 24*7 支持。</p>
						</a>
					</div>
				</div>
			</div>
			
		</div>


		<h1 style="font-size:30px;color:#fff;">js插件</h1>
		<div class="container">
			<h2>创建模态框（Modal）</h2>
			<!-- 按钮触发模态框 -->
			<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">开始演示模态框</button>
			<!-- 模态框（Modal） -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">模态框（Modal）标题</h4>
						</div>
						<div class="modal-body">在这里添加一些文本</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
							<button type="button" class="btn btn-primary" id="modal-one-submit">提交更改</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal -->
			</div>

			<script type="text/javascript">
				$(function() {
					$('#modal-one-submit').click(function(){
						$('#myModal').modal('hide');

					});
				});
			</script>
		</div>

		<h1 style="font-size:30px;color:#fff;">下拉菜单</h1>
		
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid"> 
				<div class="navbar-header">
					<a class="navbar-brand" href="#">菜鸟教程</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">iOS</a></li>
						<li><a href="#">SVN</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Java 
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">jmeter</a></li>
								<li><a href="#">EJB</a></li>
								<li><a href="#">Jasper Report</a></li>
								<li class="divider"></li>
								<li><a href="#">分离的链接</a></li>
								<li class="divider"></li>
								<li><a href="#">另一个分离的链接</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<h1 style="font-size:30px;color:#fff;">标签页</h1>
		<div class="container" style="background-color: #fff;">
			<ul id="myTab" class="nav nav-tabs">
				<li class="active">
					<a href="#home" data-toggle="tab">
						菜鸟教程
					</a>
				</li>
				<li><a href="#ios" data-toggle="tab">iOS</a></li>
				<li class="dropdown">
					<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Java
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
						<li><a href="#jmeter" tabindex="-1" data-toggle="tab">jmeter</a></li>
						<li><a href="#ejb" tabindex="-1" data-toggle="tab">ejb</a></li>
					</ul>
				</li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade in active" id="home">
					<p>菜鸟教程是一个提供最新的web技术站点，本站免费提供了建站相关的技术文档，帮助广大web技术爱好者快速入门并建立自己的网站。菜鸟先飞早入行——学的不仅是技术，更是梦想。</p>
				</div>
				<div class="tab-pane fade" id="ios">
					<p>iOS 是一个由苹果公司开发和发布的手机操作系统。最初是于 2007 年首次发布 iPhone、iPod Touch 和 Apple TV。iOS 派生自 OS X，它们共享 Darwin 基础。OS X 操作系统是用在苹果电脑上，iOS 是苹果的移动版本。</p>
				</div>
				<div class="tab-pane fade" id="jmeter">
					<p>jMeter 是一款开源的测试软件。它是 100% 纯 Java 应用程序，用于负载和性能测试。</p>
				</div>
				<div class="tab-pane fade" id="ejb">
					<p>Enterprise Java Beans（EJB）是一个创建高度可扩展性和强大企业级应用程序的开发架构，部署在兼容应用程序服务器（比如 JBOSS、Web Logic 等）的 J2EE 上。
					</p>
				</div>
			</div>
		</div>


		<h1 style="font-size:30px;color:#fff;">提示工具</h1>
		<div class="container"  style="background-color: #fff;">
			<h4>提示工具（Tooltip）插件 - 锚</h4>
			这是一个 <a href="#" class="tooltip-test" data-toggle="tooltip" title="默认的 Tooltip">默认的 Tooltip</a>.这是一个 <a href="#" class="tooltip-test" data-toggle="tooltip" data-placement="left" title="左侧的 Tooltip"> 左侧的 Toolti</a>.这是一个 <a href="#" data-toggle="tooltip" data-placement="top"title="顶部的 Tooltip">顶部的 Tooltip</a>.这是一个 <a href="#" data-toggle="tooltip" data-placement="bottom"title="底部的 Tooltip">底部的 Tooltip</a>.这是一个 <a href="#" data-toggle="tooltip" data-placement="right" title="右侧的 Tooltip">右侧的 Tooltip</a>

			<br>

			<h4>提示工具（Tooltip）插件 - 按钮</h4>
			<button type="button" class="btn btn-default" data-toggle="tooltip" title="默认的 Tooltip">默认的 Tooltip</button>
			<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="左侧的 Tooltip">
				左侧的 Tooltip
			</button>
			<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="顶部的 Tooltip">
				顶部的 Tooltip
			</button>
			<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="底部的 Tooltip">
				底部的 Tooltip
			</button>
			<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="右侧的 Tooltip">
				右侧的 Tooltip
			</button>
			<button type="button" class="btn btn-default" data-toggle="tooltip"  data-html="true" data-original-title="hello <strong> Gary</strong>"> original HTML
			</button>
			<script>
				$(function () { $("[data-toggle='tooltip']").tooltip(); });
			</script>
		</div>

		<h1 style="font-size:30px;color:#fff;">popover</h1>
		<div class="container"  style="background-color: #fff;">
			<div class="container" style="padding: 100px 50px 10px;" >
				<button type="button" class="btn btn-default" title="Popover title" data-container="body" data-toggle="popover" data-placement="left" data-content="左侧的 Popover 中的一些内容">
					左侧的 Popover
				</button>
				<button type="button" class="btn btn-primary" title="Popover title" data-container="body" data-toggle="popover" data-placement="top" data-content="顶部的 Popover 中的一些内容">
					顶部的 Popover
				</button>
				<button type="button" class="btn btn-success" title="Popover title" data-container="body" data-toggle="popover" data-placement="bottom" data-content="底部的 Popover 中的一些内容">
					底部的 Popover
				</button>
				<button type="button" class="btn btn-warning" title="Popover title" data-container="body" data-toggle="popover" data-placement="right" data-content="右侧的 Popover 中的一些内容">
					右侧的 Popover
				</button>
				<button type="button" class="btn btn-warning" title="Popover title" data-container="body" data-toggle="popover" data-placement="right" data-content="右侧的 Popover 中的一些内容" data-trigger="hover">
					触发方式改变
				</button>
			</div>

			<script>
				$(function (){
					$("[data-toggle='popover']").popover();
				});
			</script>
		</div>

		<h1 style="font-size:30px;color:#fff;">折叠框</h1>
		<div class="container">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" 
							href="#collapseOne">
							点击我进行展开，再次点击我进行折叠。第 1 部分--hide 方法
						</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in">
					<div class="panel-body">
						Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred 
						nesciunt sapiente ea proident. Ad vegan excepteur butcher vice 
						lomo.
					</div>
				</div>
			</div>
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							点击我进行展开，再次点击我进行折叠。第 2 部分--show 方法
						</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse">
					<div class="panel-body">
						Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred 
						nesciunt sapiente ea proident. Ad vegan excepteur butcher vice 
						lomo.
					</div>
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion"  href="#collapseThree">
							点击我进行展开，再次点击我进行折叠。第 3 部分--toggle 方法
						</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse">
					<div class="panel-body">
						Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred 
						nesciunt sapiente ea proident. Ad vegan excepteur butcher vice 
						lomo.
					</div>
				</div>
			</div>
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion"  href="#collapseFour">
							点击我进行展开，再次点击我进行折叠。第 4 部分--options 方法
						</a>
					</h4>
				</div>
				<div id="collapseFour" class="panel-collapse collapse">
					<div class="panel-body">
						Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred 
						nesciunt sapiente ea proident. Ad vegan excepteur butcher vice 
						lomo.
					</div>
				</div>
			</div>
		</div>
		<script>
			$(function () { $('#collapseFour').collapse({
				toggle: false
			})});
			$(function () { $('#collapseTwo').collapse('show')});
			$(function () { $('#collapseThree').collapse('toggle')});
			$(function () { $('#collapseOne').collapse('hide')});
		</script>
	</div>

	<h1 style="font-size:30px;color:#fff;">轮播图</h1>
	<div class="container">
		<div id="myCarousel" class="carousel slide">
			<!-- 轮播（Carousel）指标 -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- 轮播（Carousel）项目 -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="https://f11.baidu.com/it/u=1981748892,3031683197&fm=72" alt="First slide">
					<div class="carousel-caption">标题 1</div>
				</div>
				<div class="item">
					<img src="https://f11.baidu.com/it/u=1981748892,3031683197&fm=72" alt="Second slide">
					<div class="carousel-caption">标题 2</div>
				</div>
				<div class="item">
					<img src="https://f11.baidu.com/it/u=1981748892,3031683197&fm=72" alt="Third slide">
					<div class="carousel-caption">标题 3</div>
				</div>
			</div>
			<!-- 轮播（Carousel）导航 -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			<!-- 控制按钮 -->
			<div style="text-align:center;">
				<input type="button" class="btn start-slide" value="Start">
				<input type="button" class="btn pause-slide" value="Pause">
				<input type="button" class="btn prev-slide" value="Previous Slide">
				<input type="button" class="btn next-slide" value="Next Slide">
				<input type="button" class="btn slide-one" value="Slide 1">
				<input type="button" class="btn slide-two" value="Slide 2">            
				<input type="button" class="btn slide-three" value="Slide 3">
			</div>
		</div> 
		<script>
			$(function(){
				$('#myCarousel').carousel({
					interval: 1000
				})
		        // 初始化轮播
		        $(".start-slide").click(function(){
		        	$("#myCarousel").carousel('cycle');
		        });
		        // 停止轮播
		        $(".pause-slide").click(function(){
		        	$("#myCarousel").carousel('pause');
		        });
		        // 循环轮播到上一个项目
		        $(".prev-slide").click(function(){
		        	$("#myCarousel").carousel('prev');
		        });
		        // 循环轮播到下一个项目
		        $(".next-slide").click(function(){
		        	$("#myCarousel").carousel('next');
		        });
		        // 循环轮播到某个特定的帧 
		        $(".slide-one").click(function(){
		        	$("#myCarousel").carousel(0);
		        });
		        $(".slide-two").click(function(){
		        	$("#myCarousel").carousel(1);
		        });
		        $(".slide-three").click(function(){
		        	$("#myCarousel").carousel(2);
		        });
		    });
		</script>
	</div>




	<h1 style="font-size:30px;color:#fff;">layUI  </h1>
	<div class="container">
		<div style="width: 100px;height: 100px;background-color: #009688;margin: 10px;color: #fff;" class="pull-left">#009688  通常用于按钮、及任何修饰元素</div>
		<div style="width: 100px;height: 100px;background-color: #5FB878;margin: 10px;color: #fff;" class="pull-left">#5FB878 一般用于选中状态</div>
		<div style="width: 100px;height: 100px;background-color: #393D49;margin: 10px;color: #fff;" class="pull-left">#393D49 通常用于导航</div>
		<div style="width: 100px;height: 100px;background-color: #1E9FFF;margin: 10px;color: #fff;" class="pull-left">#1E9FFF 比较适合一些鲜艳色系的页面</div>
		<div style="width: 100px;height: 100px;background-color: #F7B824;margin: 10px;color: #fff;" class="pull-left">#F7B824 暖色系，一般用于提示性元素</div>
		<div style="width: 100px;height: 100px;background-color: #FF5722;margin: 10px;color: #fff;" class="pull-left">#FF5722 比较引人注意的颜色</div>
		<div style="width: 100px;height: 100px;background-color: #01AAED;margin: 10px;color: #fff;" class="pull-left">#01AAED 用于文字着色，如链接文本</div>
		<div style="width: 100px;height: 100px;background-color: #2F4056;margin: 10px;color: #fff;"  class="pull-left">#2F4056 侧边或底部普遍采用的颜色</div>
	</div>

	<ul style="display: block;" class="container">
		<li style="background-color: #fbfbfb; color: #000;display: inline-block;width: 100px;">
			<p>#fbfbfb</p><p>
		</p></li>
		<li style="background-color: #f2f2f2; color: #000;display: inline-block;width: 100px;">
			<p>#f2f2f2</p><p>
		</p></li>
		<li style="background-color: #eeeeee; color: #000;display: inline-block;width: 100px;">
			<p>#eeeeee</p><p>
		</p></li>
		<li style="background-color: #e2e2e2; color: #000;display: inline-block;width: 100px;">
			<p>#e2e2e2</p><p>
		</p></li>
		<li style="background-color: #dddddd; color: #000;display: inline-block;width: 100px;">
			<p>#dddddd</p><p>
		</p></li>
		<li style="background-color: #d2d2d2; color: #000;display: inline-block;width: 100px;">
			<p>#d2d2d2</p><p>
		</p></li>
		<li style="background-color: #c2c2c2;display: inline-block;width: 100px;">
			<p>#c2c2c2</p><p>
		</p></li>
	</ul>


	
	
	<script>
		
	  //当使用了 layui.all.js，无需再执行layui.use()方法
	  layui.use(['table','layer','form'],function(){
	  	var form = layui.form;
	  	var layer = layui.layer;

	  	layer.msg('hello');

	  });
	  
	  //…

	</script> 


	<h1 style="font-size:30px;color:#fff;">文件上传</h1>
	<div class="container">
		<input type="file" multiple id="ssi-upload"/>
		<input type="file" multiple id="ssi-upload2"/>
		<input type="file" multiple id="ssi-upload3"/>
		<script type="text/javascript">
			$('#ssi-upload').ssi_uploader({
				url: 'http://ssinput.com/php/upload.php',
				maxFileSize: 6,
				allowed: ['jpg', 'gif', 'txt', 'png', 'pdf'],
				locale: "zh_CN",
				maxNumberOfFiles: 3,
				onEachUpload:function(file){

					var files = $('#company_pic').val();
					$('#company_pic').val(file.responseMsg.pic_url);
					layer.msg(file.responseMsg.pic_url);

				},
				onUpload:function(){
			            // 文件上传后执行的回调函数
			            var files = $('#company_pic').val();
			            $('#company_logo').attr('src',files);
			            layer.msg('全部完成');
			        },
			    });



			$('#ssi-upload2').ssi_uploader({url: 'http://ssinput.com/php/upload.php', preview: false});
			$('#ssi-upload3').ssi_uploader({url: 'http://ssinput.com/php/uploadError.php', dropZone: false});
		</script>
	</div>

	<h1 style="font-size:30px;color:#fff;">视觉颜色</h1>
	<div class="container">
		<p class="layui-bg-red">赤色：class="layui-bg-red"</p>
		<p class="layui-bg-orange">橙色：class="layui-bg-orange"</p>
		<p class="layui-bg-green">墨绿：class="layui-bg-green"</p>
		<p class="layui-bg-cyan">藏青：class="layui-bg-cyan"</p>
		<p class="layui-bg-blue">蓝色：class="layui-bg-blue"</p>
		<p class="layui-bg-black">雅黑：class="layui-bg-black"</p>
		<p></p>
	</div>

	<h1 style="font-size:30px;color:#fff;">动画效果</h1>
	
	<div class="container">
		<div id="anim-1" style="display:inline-block; width:100px;height: 100px;"  class="layui-anim layui-bg-blue">从最底部往上滑入</div>
		<div id="anim-2" style="display:inline-block; width:100px;height: 100px;"  class="layui-anim layui-bg-blue">微微往上滑入</div>
		<div id="anim-3" style="display:inline-block; width:100px;height: 100px;"  class="layui-anim layui-bg-blue">平滑放大</div>
		<div id="anim-4" style="display:inline-block; width:100px;height: 100px;"  class="layui-anim layui-bg-blue">弹簧式放大</div>
		<div id="anim-5" style="display:inline-block; width:100px;height: 100px;"  class="layui-anim layui-bg-blue">渐现</div>
		<div id="anim-6" style="display:inline-block; width:100px;height: 100px;"  class="layui-anim layui-bg-blue">渐隐</div>
		<div id="anim-7" style="display:inline-block; width:100px;height: 100px;"  class="layui-anim layui-bg-blue">360度旋转</div>
		<div id="anim-8" style="display:inline-block; width:100px;height: 100px;"  class="layui-anim layui-bg-blue layui-anim-rotate layui-anim-loop">循环动画</div>
	</div>

	<script type="text/javascript">
		$('#anim-1').click(function(){
			$(this).addClass('layui-anim-up');
			var that = $(this);
			setTimeout(function(){
				that.removeClass('layui-anim-up');
			}, 1000);
		});
		$('#anim-2').click(function(){
			$(this).addClass('layui-anim-upbit');
			var that = $(this);
			setTimeout(function(){
				that.removeClass('layui-anim-upbit');
			}, 1000);
		});
		$('#anim-3').click(function(){
			$(this).addClass('layui-anim-scale');
			var that = $(this);
			setTimeout(function(){
				that.removeClass('layui-anim-scale');
			}, 1000);
		});
		$('#anim-4').click(function(){
			$(this).addClass('layui-anim-scaleSpring');
			var that = $(this);
			setTimeout(function(){
				that.removeClass('layui-anim-scaleSpring');
			}, 1000);
		});
		$('#anim-5').click(function(){
			$(this).addClass('layui-anim-fadein');
			var that = $(this);
			setTimeout(function(){
				that.removeClass('layui-anim-fadein');
			}, 1000);
		});
		$('#anim-6').click(function(){
			$(this).addClass('layui-anim-fadeout');
			var that = $(this);
			setTimeout(function(){
				that.removeClass('layui-anim-fadeout');
			}, 1000);
		});
		$('#anim-7').click(function(){
			$(this).addClass('layui-anim-rotate');
			var that = $(this);
			setTimeout(function(){
				that.removeClass('layui-anim-rotate');
			}, 1000);
		});


	</script>


	<h1  style="font-size:30px;color:#fff;" >table表格</h1>
	<div class="container">
		<table class="layui-hide" id="test" lay-filter="test"></table>
		<button class="btn btn-warning" id="check-status">检查选中整体状态</button>
		<button class="btn btn-warning" id="reload">重载</button>
		<table class="layui-table" lay-data="{height:315, url:'/v1/testData', page:true, id:'test2'}">
			<thead>
				<tr>
					<th lay-data="{field:'username', width:80}" rowspan="2">联系人</th>
					<th lay-data="{field:'amount', width:120}" rowspan="2">金额</th>
					<th lay-data="{align:'center'}" colspan="3">地址</th>
				</tr>
				<tr>
					<th lay-data="{field:'province', width:80}">省</th>
					<th lay-data="{field:'city', width:120}">市</th>
					<th lay-data="{field:'county', width:300}">详细</th>
				</tr>
			</thead>
		</table>
		<script>
			layui.use(['table','laytpl','layer'],function(){
				var  table = layui.table;
				var laytpl = layui.laytpl;
				var layer = layui.layer;
				
				var ins1 = table.render({
					elem: '#test'
					,url: '/v1/testData'
					,cols: [[
					{checkbox:true,LAY_CHECKED: true,fixed:true}
					,{field:'id', title: 'ID', width:80, sort: true, fixed: true}
					,{field:'username', title: '用户名', width:80,edit:'text'}
					,{field:'sex', title: '性别', width:80, sort: true}
					,{field:'city', title: '城市', width:80,templet: '#titleTpl'}
					,{field:'sign', title: '签名', width:177,event: 'setSign', style:'cursor: pointer;'}
					,{field:'experience', title: '积分', sort: true, width:80}
					,{field:'score', title: '评分', sort: true, width:80}
					,{field:'classify', title: '职业', width:80}
					,{field:'wealth', title: '财富', sort: true, width:135}
					,{fixed:'right', width:160, align:'center', toolbar: '#barDemo'}
					]]
					,page: true
					,height: 315
					,id:'test'
				});
				//重新加载
				$('#reload').click(function(){
					
					ins1.reload({
						where: {
							key: {
								id: 100001
							}
						}
					});
				});
				
				
				
				$('#check-status').click(function(){
					 var checkStatus = table.checkStatus('test'); //test即为参数id设定的值
					 layer.alert(JSON.stringify(checkStatus.data) + '=='+ checkStatus.data.length + '=='+  checkStatus.isAll);

					// console.log(checkStatus.data) //获取选中行的数据
					// console.log(checkStatus.data.length) //获取选中行数量，可作为是否有选中行的条件
					// console.log(checkStatus.isAll ) //表格是否全选
				});

				//复选框事件
				table.on('checkbox(test)', function(obj){
				  layer.msg(obj.checked + '==' + JSON.stringify(obj.data) + '== '+  obj.type); //当前是否选中状态
				  // layer.msg(JSON.stringify(obj.data)); //选中行的相关数据
				  // layer.msg(obj.type); //如果触发的是全选，则为：all，如果触发的是单选，则为：one
				});

				

				table.on('tool(test)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
					  var data = obj.data; //获得当前行数据
					  var layEvent = obj.event; //获得 lay-event 对应的值
					  var tr = obj.tr; //获得当前行 tr 的DOM对象
					  
					  if(layEvent === 'detail'){ //查看
					    //do somehing
					    layer.msg('click  detail');
					  } else if(layEvent === 'del'){ //删除
					  	layer.confirm('真的删除行么', function(index){
					      obj.del(); //删除对应行（tr）的DOM结构
					      layer.close(index);
					      //向服务端发送删除指令
					  });
					  } else if(layEvent === 'edit'){ //编辑
					    //do something
					    
					    //同步更新缓存对应的值
					    obj.update({
					    	city: '123'
					    });
					}
					if(layEvent === 'setSign'){
						layer.prompt({
							formType: 2
							,title: '修改 ID 为 ['+ data.id +'] 的用户签名'
							,value: data.sign
						}, function(value, index){
							layer.close(index);

					        //这里一般是发送修改的Ajax请求
					        
					        //同步更新表格和缓存对应的值
					        obj.update({
					        	sign: value
					        });
					    });
					}

				});
			});

		</script>
		<script type="text/html" id="titleTpl">
			@{{# if(d.id == 10000 ){ }}
			<a href="/detail/@{{ d.id}}" class="">@{{ d.city }}</a>
			@{{# }else{ }}
			<a href="/detail/@{{ d.id }}" class="layui-table-link">@{{ d.city }}</a>
			@{{# } }}
			
		</script>
		<script type="text/html" id="barDemo">
			<a class="layui-btn layui-btn-mini" lay-event="detail">查看</a>
			<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>
			<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>

		</script>



		
	</div>


	<h1>时间线</h1>
	<div class="container">
		<div class="jumbotron layui-bg-orange">
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>常规时间线</legend>
			</fieldset>
			<ul class="layui-timeline">
				<li class="layui-timeline-item">
					<i class="layui-icon layui-timeline-axis"></i>
					<div class="layui-timeline-content layui-text">
						<h3 class="layui-timeline-title">8月18日</h3>
						<p>
							layui 2.0 的一切准备工作似乎都已到位。发布之弦，一触即发。
							<br>不枉近百个日日夜夜与之为伴。因小而大，因弱而强。
							<br>无论它能走多远，抑或如何支撑？至少我曾倾注全心，无怨无悔 <i class="layui-icon"></i>
						</p>
					</div>
				</li>
				<li class="layui-timeline-item">
					<i class="layui-icon layui-timeline-axis"></i>
					<div class="layui-timeline-content layui-text">
						<h3 class="layui-timeline-title">8月16日</h3>
						<p>杜甫的思想核心是儒家的仁政思想，他有<em>“致君尧舜上，再使风俗淳”</em>的宏伟抱负。个人最爱的名篇有：</p>
						<ul>
							<li>《登高》</li>
							<li>《茅屋为秋风所破歌》</li>
						</ul>
					</div>
				</li>
				<li class="layui-timeline-item">
					<i class="layui-icon layui-timeline-axis"></i>
					<div class="layui-timeline-content layui-text">
						<h3 class="layui-timeline-title">8月15日</h3>
						<p>
							中国人民抗日战争胜利72周年
							<br>常常在想，尽管对这个国家有这样那样的抱怨，但我们的确生在了最好的时代
							<br>铭记、感恩
							<br>所有为中华民族浴血奋战的英雄将士
							<br>永垂不朽
						</p>
					</div>
				</li>
				<li class="layui-timeline-item">
					<i class="layui-icon layui-timeline-axis"></i>
					<div class="layui-timeline-content layui-text">
						<div class="layui-timeline-title">过去</div>
					</div>
				</li>
			</ul>  

			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>简约时间线：大事记</legend>
			</fieldset> 
			<ul class="layui-timeline">
				<li class="layui-timeline-item">
					<i class="layui-icon layui-timeline-axis"></i>
					<div class="layui-timeline-content layui-text">
						<div class="layui-timeline-title">2018年，layui 5.0 发布。并发展成为中国最受欢迎的前端UI框架（期望）</div>
					</div>
				</li>
				<li class="layui-timeline-item">
					<i class="layui-icon layui-timeline-axis"></i>
					<div class="layui-timeline-content layui-text">
						<div class="layui-timeline-title">2017年，layui 里程碑版本 2.0 发布</div>
					</div>
				</li>
				<li class="layui-timeline-item">
					<i class="layui-icon layui-timeline-axis"></i>
					<div class="layui-timeline-content layui-text">
						<div class="layui-timeline-title">2016年，layui 首个版本发布</div>
					</div>
				</li>
				<li class="layui-timeline-item">
					<i class="layui-icon layui-timeline-axis"></i>
					<div class="layui-timeline-content layui-text">
						<div class="layui-timeline-title">2015年，layui 孵化</div>
					</div>
				</li>
				<li class="layui-timeline-item">
					<i class="layui-icon layui-anim layui-anim-rotate layui-anim-loop layui-timeline-axis"></i>
					<div class="layui-timeline-content layui-text">
						<div class="layui-timeline-title">更久前，轮子时代。维护几个独立组件：layer等</div>
					</div>
				</li>
			</ul>
		</div>
	</div>


	<H1>时间</H1>
	<div class="container">
		<div class="jumbotron layui-bg-cyan">
			<blockquote class="layui-elem-quote">layDate 是目前 layui 独立维护的三大组件（即：layer、layim、layDate）之一。在 layui 2.0 的版本中，layDate 完成了一次巨大的逆袭。</blockquote>

			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>常规用法</legend>
			</fieldset>

			<div class="layui-form">
				<div class="layui-form-item">
					<div class="layui-inline">
						<label class="layui-form-label">中文版</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test1" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">国际版</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test1-1" placeholder="yyyy-MM-dd">
						</div>
					</div>
				</div>
			</div>

			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>其它选择器</legend>
			</fieldset>

			<div class="layui-form">
				<div class="layui-form-item">
					<div class="layui-inline">
						<label class="layui-form-label">年选择器</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test2" placeholder="yyyy">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">年月选择器</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test3" placeholder="yyyy-MM">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">时间选择器</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test4" placeholder="HH:mm:ss">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">日期时间选择器</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test5" placeholder="yyyy-MM-dd HH:mm:ss">
						</div>
					</div>
				</div>
			</div>

			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>范围选择</legend>
			</fieldset>

			<div class="layui-form">
				<div class="layui-form-item">
					<div class="layui-inline">
						<label class="layui-form-label">日期范围</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test6" placeholder=" - ">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">年范围</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test7" placeholder=" - ">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">年月范围</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test8" placeholder=" - ">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">时间范围</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test9" placeholder=" - ">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">日期时间范围</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test10" placeholder=" - ">
						</div>
					</div>
				</div>
			</div>

			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>自定义格式</legend>
			</fieldset>

			<div class="layui-form">
				<div class="layui-form-item">
					<div class="layui-inline">
						<label class="layui-form-label">请选择日期</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test11" placeholder="yyyy年MM月dd日">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">请选择日期</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test12" placeholder="dd/MM/yyyy">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">请选择月份</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test13" placeholder="yyyyMM">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">请选择时间</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test14" placeholder="H点M分">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">请选择范围</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test15" placeholder=" → ">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">请选择范围</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test16" placeholder="开始 到 结束">
						</div>
					</div>
				</div>
			</div>

			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>公历节日和自定义重要日子</legend>
			</fieldset>

			<div class="layui-form">
				<div class="layui-form-item">
					<div class="layui-inline">
						<label class="layui-form-label">开启公历节日</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test17" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">自定义重要日</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test18" placeholder="yyyy-MM-dd">
						</div>
					</div>
				</div>
			</div>

			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>其它功能示例</legend>
			</fieldset>

			<div class="layui-form">
				<div class="layui-form-item">
					<div class="layui-inline">
						<label class="layui-form-label">初始赋值</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test19" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">选中后的回调</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test20" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">日期切换的回调</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test21" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">控制可选日期</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test22" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">控制在前后5天</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test23" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">不出现底部栏</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test24" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">只出现确定按钮</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test25" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">自定义事件</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test26" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label" id="test26-0">点我触发</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test26-1" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label" id="test27-0">双击我触发</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test27" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">日期只读</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test27-1" readonly="" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">非input元素</label>
						<div class="layui-input-inline">
							<div id="test27-2" style="height: 38px; line-height: 38px; cursor: pointer; border-bottom: 1px solid #e2e2e2;"></div>
						</div>
					</div>
				</div>
			</div>

			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>其它主题</legend>
			</fieldset>

			<div class="layui-form">
				<div class="layui-form-item">
					<div class="layui-inline">
						<label class="layui-form-label">墨绿主题</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test28" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">自定义颜色主题</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test29" placeholder="yyyy-MM-dd">
						</div>
					</div>
					<div class="layui-inline">
						<label class="layui-form-label">格子主题</label>
						<div class="layui-input-inline">
							<input type="text" class="layui-input" id="test30" placeholder="yyyy-MM-dd">
						</div>
					</div>
				</div>
			</div> 
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>直接嵌套显示</legend>
			</fieldset>

			<div class="site-demo-laydate">
				<div class="layui-inline" id="test-1"></div>
				<div class="layui-inline" id="test-2"></div>
				<div class="layui-inline" id="test-3"></div>
				<div class="layui-inline" id="test-4"></div>
			</div>


			<script>
				layui.use('laydate', function(){
					var laydate = layui.laydate;

			  //常规用法
			  laydate.render({
			  	elem: '#test1'
			  });
			  
			  //国际版
			  laydate.render({
			  	elem: '#test1-1'
			  	,lang: 'en'
			  });
			  
			  //年选择器
			  laydate.render({
			  	elem: '#test2'
			  	,type: 'year'
			  });
			  
			  //年月选择器
			  laydate.render({
			  	elem: '#test3'
			  	,type: 'month'
			  });
			  
			  //时间选择器
			  laydate.render({
			  	elem: '#test4'
			  	,type: 'time'
			  });
			  
			  //时间选择器
			  laydate.render({
			  	elem: '#test5'
			  	,type: 'datetime'
			  });
			  
			  //日期范围
			  laydate.render({
			  	elem: '#test6'
			  	,range: true
			  });
			  
			  //年范围
			  laydate.render({
			  	elem: '#test7'
			  	,type: 'year'
			  	,range: true
			  });
			  
			  //年月范围
			  laydate.render({
			  	elem: '#test8'
			  	,type: 'month'
			  	,range: true
			  });
			  
			  //时间范围
			  laydate.render({
			  	elem: '#test9'
			  	,type: 'time'
			  	,range: true
			  });
			  
			  //日期时间范围
			  laydate.render({
			  	elem: '#test10'
			  	,type: 'datetime'
			  	,range: true
			  });
			  
			  //自定义格式
			  laydate.render({
			  	elem: '#test11'
			  	,format: 'yyyy年MM月dd日'
			  });
			  laydate.render({
			  	elem: '#test12'
			  	,format: 'dd/MM/yyyy'
			  });
			  laydate.render({
			  	elem: '#test13'
			  	,format: 'yyyyMM'
			  });
			  laydate.render({
			  	elem: '#test14'
			  	,type: 'time'
			  	,format: 'H点M分'
			  });
			  laydate.render({
			  	elem: '#test15'
			  	,type: 'month'
			  	,range: '→'
			  	,format: 'yyyy-MM'
			  });
			  laydate.render({
			  	elem: '#test16'
			  	,type: 'datetime'
			  	,range: '到'
			  	,format: 'yyyy年M月d日H时m分s秒'
			  });
			  
			  //开启公历节日
			  laydate.render({
			  	elem: '#test17'
			  	,calendar: true
			  });
			  
			  //自定义重要日
			  laydate.render({
			  	elem: '#test18'
			  	,mark: {
			  		'0-10-14': '生日'
			  		,'0-12-31': '跨年'
			      ,'2017-8-15': '' //如果为空字符，则默认显示数字+徽章
			      ,'2017-8-29': '奔跑'
			      ,'2017-8-30': '旅行' 
			      ,'2017-8-31': '睡觉'
			  }
			  ,done: function(value, date){
			      if(date.year === 2017 && date.month === 8 && date.date === 15){ //点击2017年8月15日，弹出提示语
			      	layer.msg('这一天是：中国人民抗日战争胜利72周年');
			      }
			  }
			});
			  
			  //初始赋值
			  laydate.render({
			  	elem: '#test19'
			  	,value: '1989-10-14'
			  });
			  
			  //选中后的回调
			  laydate.render({
			  	elem: '#test20'
			  	,done: function(value, date){
			  		layer.alert('你选择的日期是：' + value + '<br>获得的对象是' + JSON.stringify(date));
			  	}
			  });
			  
			  //日期切换的回调
			  laydate.render({
			  	elem: '#test21'
			  	,change: function(value, date){
			  		layer.msg('你选择的日期是：' + value + '<br><br>获得的对象是' + JSON.stringify(date));
			  	}
			  });
			  
			  //控制可选日期
			  var ins22 = laydate.render({
			  	elem: '#test22'
			  	,min: '2016-10-14'
			  	,max: '2080-10-14'
			  	,ready: function(){
			  		ins22.hint('日期可选值设定在 <br> 2016-10-14 到 2080-10-14');
			  	}
			  });
			  
			  //控制在前后5天
			  laydate.render({
			  	elem: '#test23'
			  	,min: -5
			  	,max: 5
			  });
			  
			  //不出现底部栏
			  laydate.render({
			  	elem: '#test24'
			  	,showBottom: false
			  });
			  
			  //只出现确定按钮
			  laydate.render({
			  	elem: '#test25'
			  	,btns: ['confirm']
			  });
			  
			  //自定义事件
			  laydate.render({
			  	elem: '#test26'
			  	,trigger: 'mousedown'
			  });
			  
			  //点我触发
			  laydate.render({
			  	elem: '#test26-1'
			  	,eventElem: '#test26-0'
			  	,trigger: 'click'
			  });
			  
			  //双击我触发
			  lay('#test27-0').on('dblclick', function(){
			  	laydate.render({
			  		elem: '#test27'
			  		,show: true
			  		,closeStop: '#test27-0'
			  	});
			  });
			  
			  //日期只读
			  laydate.render({
			  	elem: '#test27-1'
			  	,trigger: 'click'
			  });
			  
			  //非input元素
			  laydate.render({
			  	elem: '#test27-2'
			  });
			  
			  //墨绿主题
			  laydate.render({
			  	elem: '#test28'
			  	,theme: 'molv'
			  });
			  
			  //自定义颜色
			  laydate.render({
			  	elem: '#test29'
			  	,theme: '#393D49'
			  });
			  
			  //格子主题
			  laydate.render({
			  	elem: '#test30'
			  	,theme: 'grid'
			  });
			  
			  
			  //直接嵌套显示
			  laydate.render({
			  	elem: '#test-1'
			  	,position: 'static'
			  });
			  laydate.render({
			  	elem: '#test-2'
			  	,position: 'static'
			  	,lang: 'en'
			  });
			  laydate.render({
			  	elem: '#test-3'
			  	,type: 'month'
			  	,position: 'static'
			  });
			  laydate.render({
			  	elem: '#test-4'
			  	,type: 'time'
			  	,position: 'static'
			  });
			});
		</script>
	</div>
</div>

<h1>分页</h1>
<div class="container">
	<div class="jumbotron layui-bg-green">
		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>总页数低于页码总数</legend>
		</fieldset>

		<div id="demo0"></div>

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>总页数大于页码总数</legend>
		</fieldset>

		<div id="demo1"></div>

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>自定义主题 - 颜色随意定义</legend>
		</fieldset>

		<div id="demo2"></div>
		<div id="demo2-1"></div>
		<div id="demo2-2"></div>

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>自定义首页、尾页、上一页、下一页文本</legend>
		</fieldset>

		<div id="demo3"></div>

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>不显示首页尾页</legend>
		</fieldset>

		<div id="demo4"></div>

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>开启HASH</legend>
		</fieldset>

		<div id="demo5"></div>

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>只显示上一页、下一页</legend>
		</fieldset>

		<div id="demo6"></div>

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>显示完整功能</legend>
		</fieldset>

		<div id="demo7"></div>

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>自定义排版</legend>
		</fieldset>

		<div id="demo8"></div>
		<div id="demo9"></div>
		<div id="demo10"></div>

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>自定义每页条数的选择项</legend>
		</fieldset>

		<div id="demo11"></div>



		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>将一段已知数组分页展示</legend>
		</fieldset>

		<div id="demo20"></div>
		<ul id="biuuu_city_list"></ul> 


		<script>
			layui.use(['laypage', 'layer'], function(){
				var laypage = layui.laypage
				,layer = layui.layer;

			  //总页数低于页码总数
			  laypage.render({
			  	elem: 'demo0'
			    ,count: 50 //数据总数
			});
			  
			  //总页数大于页码总数
			  laypage.render({
			  	elem: 'demo1'
			    ,count: 70 //数据总数
			    ,jump: function(obj){
			    	console.log(obj)
			    }
			});
			  
			  //自定义样式
			  laypage.render({
			  	elem: 'demo2'
			  	,count: 100
			  	,theme: '#1E9FFF'
			  });
			  laypage.render({
			  	elem: 'demo2-1'
			  	,count: 100
			  	,theme: '#FF5722'
			  });
			  laypage.render({
			  	elem: 'demo2-2'
			  	,count: 100
			  	,theme: '#FFB800'
			  });
			  
			  //自定义首页、尾页、上一页、下一页文本
			  laypage.render({
			  	elem: 'demo3'
			  	,count: 100
			  	,first: '首页'
			  	,last: '尾页'
			  	,prev: '<em>←</em>'
			  	,next: '<em>→</em>'
			  });
			  
			  //不显示首页尾页
			  laypage.render({
			  	elem: 'demo4'
			  	,count: 100
			  	,first: false
			  	,last: false
			  });
			  
			  //开启HASH
			  laypage.render({
			  	elem: 'demo5'
			  	,count: 500
			    ,curr: location.hash.replace('#!fenye=', '') //获取hash值为fenye的当前页
			    ,hash: 'fenye' //自定义hash值
			});
			  
			  //只显示上一页、下一页
			  laypage.render({
			  	elem: 'demo6'
			  	,count: 50
			  	,layout: ['prev', 'next']
			  	,jump: function(obj, first){
			  		if(!first){
			  			layer.msg('第 '+ obj.curr +' 页');
			  		}
			  	}
			  });
			  
			  //完整功能
			  laypage.render({
			  	elem: 'demo7'
			  	,count: 100
			  	,layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
			  	,jump: function(obj){
			  		console.log(obj)
			  	}
			  });
			  
			  //自定义排版
			  laypage.render({
			  	elem: 'demo8'
			  	,count: 1000
			  	,layout: ['limit', 'prev', 'page', 'next']
			  });
			  laypage.render({
			  	elem: 'demo9'
			  	,count: 1000
			  	,layout: ['page', 'prev', 'next']
			  });
			  laypage.render({
			  	elem: 'demo10'
			  	,count: 1000
			  	,layout: ['page', 'count']
			  });
			  
			  //自定义每页条数的选择项
			  laypage.render({
			  	elem: 'demo11'
			  	,count: 1000
			  	,limit: 100
			  	,limits: [100, 300, 500]
			  });
			  
			  
			  //将一段数组分页展示
			  
			  //测试数据
			  var data = [
			  '北京',
			  '上海',
			  '广州',
			  '深圳',
			  '杭州',
			  '长沙',
			  '合肥',
			  '宁夏',
			  '成都',
			  '西安',
			  '南昌',
			  '上饶',
			  '沈阳',
			  '济南',
			  '厦门',
			  '福州',
			  '九江',
			  '宜春',
			  '赣州',
			  '宁波',
			  '绍兴',
			  '无锡',
			  '苏州',
			  '徐州',
			  '东莞',
			  '佛山',
			  '中山',
			  '成都',
			  '武汉',
			  '青岛',
			  '天津',
			  '重庆',
			  '南京',
			  '九江',
			  '香港',
			  '澳门',
			  '台北'
			  ];
			  
			  //调用分页
			  laypage.render({
			  	elem: 'demo20'
			  	,count: data.length
			  	,jump: function(obj){
			      //模拟渲染
			      document.getElementById('biuuu_city_list').innerHTML = function(){
			      	var arr = []
			      	,thisData = data.concat().splice(obj.curr*obj.limit - obj.limit, obj.limit);
			      	layui.each(thisData, function(index, item){
			      		arr.push('<li>'+ item +'</li>');
			      	});
			      	return arr.join('');
			      }();
			  }
			});
			  
			});
		</script>
	</div>
</div>

<h1>文件上传</h1>
<div class="container">
	<div class="jumbotron layui-bg-green">
		<blockquote class="layui-elem-quote">为节省服务器开销，以下示例均未配置真实上传接口，因为每次上传都会报提示：请求上传接口出现异常</blockquote>   

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>常规使用：普通图片上传</legend>
		</fieldset>

		<div class="layui-upload">
			<button type="button" class="layui-btn" id="test1-upload">上传图片</button>
			<div class="layui-upload-list">
				<img class="layui-upload-img" id="demo1-upload">
				<p id="demoText"></p>
			</div>
		</div>   

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>上传多张图片</legend>
		</fieldset>

		<div class="layui-upload">
			<button type="button" class="layui-btn" id="test2-upload">多图片上传</button> 
			<blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;">
				预览图：
				<div class="layui-upload-list" id="demo2-upload"></div>
			</blockquote>
			<button type="button" class="layui-btn" id="test2-button">开始上传</button>
		</div>

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>指定允许上传的文件类型</legend>
		</fieldset>

		<button type="button" class="layui-btn" id="test3-upload"><i class="layui-icon"></i>上传文件</button>
		<button type="button" class="layui-btn layui-btn-primary" id="test4-upload"><i class="layui-icon"></i>只允许压缩文件</button>
		<button type="button" class="layui-btn" id="test5-upload"><i class="layui-icon"></i>上传视频</button>
		<button type="button" class="layui-btn" id="test6-upload"><i class="layui-icon"></i>上传音频</button> 
		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
			<legend>设定文件大小限制</legend>
		</fieldset> 

		<button type="button" class="layui-btn layui-btn-danger" id="test7-upload"><i class="layui-icon"></i>上传图片</button>

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>选完文件后不自动上传</legend>
		</fieldset>

		<div class="layui-upload">
			<button type="button" class="layui-btn layui-btn-normal" id="test8-upload">选择文件</button>
			<button type="button" class="layui-btn" id="test9-upload">开始上传</button>
		</div>
		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>拖拽上传</legend>
		</fieldset> 

		<div class="layui-upload-drag" id="test10-upload">
			<i class="layui-icon"></i>
			<p>点击上传，或将文件拖拽到此处</p>
		</div>

		<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
			<legend>高级应用：制作一个多文件列表</legend>
		</fieldset> 

		<div class="layui-upload">
			<button type="button" class="layui-btn layui-btn-normal" id="testList">选择多文件</button> 
			<div class="layui-upload-list">
				<table class="layui-table">
					<thead>
						<tr><th>文件名</th>
							<th>大小</th>
							<th>状态</th>
							<th>操作</th>
						</tr></thead>
						<tbody id="demoList"></tbody>
					</table>
				</div>
				<button type="button" class="layui-btn" id="testListAction">开始上传</button>
			</div> 

			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
				<legend>绑定原始文件域</legend>
			</fieldset> 

			<input type="file" name="file" id="test20-upload">


			<script>
				layui.use('upload', function(){
					var upload = layui.upload;

					  //普通图片上传
					  var uploadInst = upload.render({
					  	elem: '#test1-upload'
					  	,url: '/upload'
					  	,before: function(obj){
					      //预读本地文件示例，不支持ie8
					      console.log('hello');
					      obj.preview(function(index, file, result){
					        $('#demo1-upload').attr('src', result); //图片链接（base64）
					    });
					  }
					  ,done: function(res){
					  	console.log(res);
					      //如果上传失败
					      if(res.code > 0){
					      	return layer.msg('上传失败');
					      }
					      //上传成功
					      return layer.msg('上传成功');
					  }
					  ,error: function(){
					      //演示失败状态，并实现重传
					      var demoText = $('#demoText');
					      demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
					      demoText.find('.demo-reload').on('click', function(){
					      	uploadInst.upload();
					      });
					  }
					});
					  
					  //多图片上传
					  upload.render({
					  	elem: '#test2-upload'
					  	,url: '/upload'
					  	,multiple: true
					  	,auto: false
					  	,bindAction: '#test2-button'
					  	,choose: function(obj){
					  		obj.preview(function(index, file, result){
					  			console.log(file.name);
					  			$('#demo2-upload').append('<img src="'+ result +'" alt="'+ file.name +'" class="layui-upload-img">')
					  		});
					  	}
					  	// ,before: function(obj){
					   //    //预读本地文件示例，不支持ie8
						  //     console.log('开始加载图片');
						  //     obj.preview(function(index, file, result){
						  //     	console.log(file.name);
						  //     	$('#demo2-upload').append('<img src="'+ result +'" alt="'+ file.name +'" class="layui-upload-img">')
						  //     });
						  // }
						  ,done: function(res){
						      //上传完毕
						      if(res.code > 0){
						      	return layer.msg('上传失败');
						      }
						      //上传成功
						      return layer.msg(res.msg);
						  }
						  ,error: function(){
						  	return layer.msg('未知错误');
						  }
						});
					  
					  //指定允许上传的文件类型
					  upload.render({
					  	elem: '#test3-upload'
					  	,url: '/upload/'
					    ,accept: 'file' //普通文件
					    ,done: function(res){
					    	console.log(res)
					    }
					});
					  upload.render({ //允许上传的文件后缀
					  	elem: '#test4-upload'
					  	,url: '/upload/'
					    ,accept: 'file' //普通文件
					    ,exts: 'zip|rar|7z' //只允许上传压缩文件
					    ,done: function(res){
					    	console.log(res)
					    }
					});
					  upload.render({
					  	elem: '#test5-upload'
					  	,url: '/upload/'
					    ,accept: 'video' //视频
					    ,done: function(res){
					    	console.log(res)
					    }
					});
					  upload.render({
					  	elem: '#test6-upload'
					  	,url: '/upload/'
					    ,accept: 'audio' //音频
					    ,done: function(res){
					    	console.log(res)
					    }
					});
					  
					  //设定文件大小限制
					  upload.render({
					  	elem: '#test7-upload'
					  	,url: '/upload/'
					    ,size: 6000 //限制文件大小，单位 KB
					    ,done: function(res){
					    	console.log(res)
					    }
					});
					  
					  //选完文件后不自动上传
					  upload.render({
					  	elem: '#test8-upload'
					  	,url: '/upload'
					  	,auto: false
					    //,multiple: true
					    ,bindAction: '#test9-upload'
					    ,done: function(res){
					    	console.log(res)
					    }
					});
					  
					  //拖拽上传
					  upload.render({
					  	elem: '#test10-upload'
					  	,url: '/upload/'
					  	,done: function(res){
					  		console.log(res)
					  	}
					  });
					  
					  //多文件列表示例
					  var demoListView = $('#demoList')
					  ,uploadListIns = upload.render({
					  	elem: '#testList'
					  	,url: '/upload/'
					  	,accept: 'file'
					  	,multiple: true
					  	,auto: false
					  	,bindAction: '#testListAction'
					  	,choose: function(obj){   
					      var files = obj.pushFile(); //将每次选择的文件追加到文件队列
					      //读取本地文件
					      obj.preview(function(index, file, result){
					      	var tr = $(['<tr id="upload-'+ index +'">'
					      		,'<td>'+ file.name +'</td>'
					      		,'<td>'+ (file.size/1014).toFixed(1) +'kb</td>'
					      		,'<td>等待上传</td>'
					      		,'<td>'
					      		,'<button class="layui-btn layui-btn-mini demo-reload layui-hide">重传</button>'
					      		,'<button class="layui-btn layui-btn-mini layui-btn-danger demo-delete">删除</button>'
					      		,'</td>'
					      		,'</tr>'].join(''));

					        //单个重传
					        tr.find('.demo-reload').on('click', function(){
					        	obj.upload(index, file);
					        });
					        
					        //删除
					        tr.find('.demo-delete').on('click', function(){
					          delete files[index]; //删除对应的文件
					          tr.remove();
					      });
					        
					        demoListView.append(tr);
					    });
					  }
					  ,done: function(res, index, upload){
					      if(res.code == 0){ //上传成功
					      	var tr = demoListView.find('tr#upload-'+ index)
					      	,tds = tr.children();
					      	tds.eq(2).html('<span style="color: #5FB878;">上传成功</span>');
					        tds.eq(3).html(''); //清空操作
					        delete files[index]; //删除文件队列已经上传成功的文件
					        return;
					    }
					    this.error(index, upload);
					}
					,error: function(index, upload){
						var tr = demoListView.find('tr#upload-'+ index)
						,tds = tr.children();
						tds.eq(2).html('<span style="color: #FF5722;">上传失败</span>');
					      tds.eq(3).find('.demo-reload').removeClass('layui-hide'); //显示重传
					  }
					});
					  
					  //绑定原始文件域
					  upload.render({
					  	elem: '#test20-upload'
					  	,url: '/upload/'
					  	,done: function(res){
					  		console.log(res)
					  	}
					  });
					  
					});
				</script>
			</div>
		</div>


		<h1 >富文本编辑器</h1>

		<div class="container" style="background-color: #fbfbfb;">
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
				<legend>完整功能（没错，目前工具栏只有这么多）</legend>
			</fieldset>

			<textarea class="layui-textarea" id="LAY_demo1" style="display: none">  
				把编辑器的初始内容放在这textarea即可
			</textarea>

			<div class="site-demo-button" style="margin-top: 20px;">
				<button class="layui-btn site-demo-layedit" data-type="content">获取编辑器内容</button>
				<button class="layui-btn site-demo-layedit" data-type="text">获取编辑器纯文本内容</button>
				<button class="layui-btn site-demo-layedit" data-type="selection">获取编辑器选中内容</button>
			</div>

			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
				<legend>自定义工具栏</legend>
			</fieldset>

			<div style="margin-bottom: 20px; width: 500px;">
				<textarea class="layui-textarea" id="LAY_demo2" style="display: none"></textarea>
			</div>               

			<script>
				layui.use('layedit', function(){
					var layedit = layui.layedit;


					  //构建一个默认的编辑器
					  var index = layedit.build('LAY_demo1',{
					  	uploadImage: {
						    url: '/upload' //接口url
						    ,type: 'post' //默认post
						}
					});
					  
					  //编辑器外部操作
					  var active = {
					  	content: function(){
					      alert(layedit.getContent(index)); //获取编辑器内容
					  }
					  ,text: function(){
					      alert(layedit.getText(index)); //获取编辑器纯文本内容
					  }
					  ,selection: function(){
					  	alert(layedit.getSelection(index));
					  }
					};

					$('.site-demo-layedit').on('click', function(){
						var type = $(this).data('type');
						active[type] ? active[type].call(this) : '';
					});

					  //自定义工具栏
					  layedit.build('LAY_demo2', {
					  	tool: ['face', 'link', 'unlink', '|', 'left', 'center', 'right']
					  	,height: 100
					  })
					});
				</script>

			</div>


			<h1>菜单树</h1>
			<div class="container layui-bg-green">
				<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
					<legend>基本树</legend>
				</fieldset>

				
				<ul id="demo1-tree"></ul>
				

				<p>点击每一级菜单，都会执行一个回调，返回该节点的一些信息</p>



				<script>
					//Demo
					layui.use(['tree', 'layer'], function(){
						var layer = layui.layer

						layui.tree({
					    elem: '#demo1-tree' //指定元素
					    ,target: '_blank' //是否新选项卡打开（比如节点返回href才有效）
					    ,click: function(item){ //点击节点回调
					    	layer.msg('当前节名称：'+ item.name + '<br>全部参数：'+ JSON.stringify(item));
					    	console.log(item);
					    }
					    ,nodes: [ //节点
					    {
					    	name: '常用文件夹'
					    	,id: 1
					    	,alias: 'changyong'
					    	,children: [
					    	{
					    		name: '所有未读（设置跳转）'
					    		,id: 11
					    		,href: 'http://www.layui.com/'
					    		,alias: 'weidu'
					    	}, {
					    		name: '置顶邮件'
					    		,id: 12
					    	}, {
					    		name: '标签邮件'
					    		,id: 13
					    	}
					    	]
					    }, {
					    	name: '我的邮箱'
					    	,id: 2
					    	,spread: true
					    	,children: [
					    	{
					    		name: 'QQ邮箱'
					    		,id: 21
					    		,spread: true
					    		,children: [
					    		{
					    			name: '收件箱'
					    			,id: 211
					    			,children: [
					    			{
					    				name: '所有未读'
					    				,id: 2111
					    			}, {
					    				name: '置顶邮件'
					    				,id: 2112
					    			}, {
					    				name: '标签邮件'
					    				,id: 2113
					    			}
					    			]
					    		}, {
					    			name: '已发出的邮件'
					    			,id: 212
					    		}, {
					    			name: '垃圾邮件'
					    			,id: 213
					    		}
					    		]
					    	}, {
					    		name: '阿里云邮'
					    		,id: 22
					    		,children: [
					    		{
					    			name: '收件箱'
					    			,id: 221
					    		}, {
					    			name: '已发出的邮件'
					    			,id: 222
					    		}, {
					    			name: '垃圾邮件'
					    			,id: 223
					    		}
					    		]
					    	}
					    	]
					    }
					    ,{
					    	name: '收藏夹'
					    	,id: 3
					    	,alias: 'changyong'
					    	,children: [
					    	{
					    		name: '爱情动作片'
					    		,id: 31
					    		,alias: 'love'
					    	}, {
					    		name: '技术栈'
					    		,id: 12
					    		,children: [
					    		{
					    			name: '前端'
					    			,id: 121
					    		}
					    		,{
					    			name: '全端'
					    			,id: 122
					    		}
					    		]
					    	}
					    	]
					    }
					    ]
					});

					});
				</script>
			</div>


			<h1>流加载</h1>
			<div class="container layui-bg-green">
				<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
					<legend>信息流 - 滚动加载</legend>
				</fieldset>

				<ul class="flow-default" id="water_demo1" style="width: 600px;height: 400px;overflow: auto;font-size: 2;"></ul>

				

				<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
					<legend>信息流 - 手工加载</legend>
				</fieldset>

				<ul class="flow-default" style="height: 300px;width: 600px;height: 400px;overflow: auto;font-size: 2;" id="water_demo2" ></ul>

				<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
					<legend>图片懒加载</legend>
				</fieldset>
				<div class="site-demo-flow" id="water_demo3" style="height: 300px;width: 600px;height: 400px;overflow: auto;font-size: 2;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i2/701696736/TB2PNl5ahQa61Bjy0FhXXaalFXa_!!701696736.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i2/162734861/TB2V5rsX_gc61BjSZFkXXcTkFXa_!!162734861.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i4/69476562/TB2htq4XTka61BjSszfXXXN8pXa_!!69476562.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i1/180558071/TB2sy6jXMQc61BjSZFGXXa1DFXa_!!180558071.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i2/701696736/TB2PNl5ahQa61Bjy0FhXXaalFXa_!!701696736.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i3/285892163/TB2qu2HX9Zb61BjSZPfXXaU.pXa_!!285892163.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i2/704998060/TB2S.gAXTgc61BjSZFkXXcTkFXa_!!704998060.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i3/117202952/TB25lckX_AX61Bjy0FcXXaSlFXa_!!117202952.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i2/162734861/TB2qijoX9Zb61BjSZPfXXaU.pXa_!!162734861.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i3/96216586/TB2S7EfXHMc61BjSZFFXXaDLFXa_!!96216586.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i8/TB1jSSFNFXXXXcoXFXXYXGcGpXX_M2.SS2_400x400q90.jpg?t=1503479199966">
					<img  lay-src="https://gw.alicdn.com/bao/uploaded/i2/162734861/TB2ylbsX37c61BjSZFKXXb6hFXa_!!162734861.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i2/117202952/TB2FdyZajUd61BjSZPcXXc6hXXa_!!117202952.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i4/777105914/TB2t.qbXZwb61Bjy0FfXXXvlpXa_!!777105914.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
					<img lay-src="https://gw.alicdn.com/bao/uploaded/i4/TB1XzupNFXXXXcpXXXXXXXXXXXX_!!0-item_pic.jpg_400x400q90.jpg?t=1503479199966"    style="width: 40%;
					height: 200px;display: inline-block;">
				</div>

				<p style="margin-top: 20px;">
					无论滚动条上滑还是下滑，都只始终加载当前屏的图片（你可以快速拉动滚动条到中间区域，然后再往上滑动试试）
					<br>Layui的图片懒加载，除了对滚动条的性能进行了美好的优化，也对图片的“当前屏”进行了高效计算，无惧于任何规模庞大的图片数量！
				</p>            
				<script>
					layui.use('flow', function(){
						var flow = layui.flow;

						flow.load({
						    elem: '#water_demo1' //流加载容器
						    ,scrollElem: '#water_demo1' //滚动条所在元素，一般不用填，此处只是演示需要。
						    ,done: function(page, next){ //执行下一页的回调

						      //模拟数据插入
						      setTimeout(function(){
						      	var lis = [];
						      	for(var i = 0; i < 8; i++){
						      		lis.push('<li style="width:48%;height:100px;margin:5px;display:inline-block;background-color:red;">'+ ( (page-1)*8 + i + 1 ) +'</li>')
						      	}
						      	console.log('page='+page+',lis='+lis.join(''));
						        //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
						        //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
						        next(lis.join(''), page < 10); //假设总页数为 10
						    }, 500);
						  }
						});

						flow.load({
						    elem: '#water_demo2' //流加载容器
						    ,scrollElem: '#water_demo2' //滚动条所在元素，一般不用填，此处只是演示需要。
						    ,isAuto: false
						    ,isLazyimg: true
						    ,done: function(page, next){ //执行下一页的回调

						      //模拟数据插入
						      setTimeout(function(){
						      	var lis = [];
						      	for(var i = 0; i < 8; i++){
						      		lis.push('<li style="width:48%;height:100px;margin:5px;display:inline-block;background-color:red;">'+ ( (page-1)*8 + i + 1 ) +'</li>')
						      	}
						      	console.log('page='+page+',lis='+lis.join(''));
						        //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
						        //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
						        next(lis.join(''), page < 10); //假设总页数为 10
						    }, 500);
						  }
						});

						//按屏加载图片
						flow.lazyimg({
							elem: '#water_demo3 img'
						    ,scrollElem: '#water_demo3' //一般不用设置，此处只是演示需要。
						});
					});
				</script>

			</div>


			<h1>工具</h1>
			<div class="container layui-bg-orange">
				<pre class="layui-code" lay-title="标题" lay-height="200px" lay-skin="notepad" lay-encode="true" >
					<pre class="layui-code" lay-title="" lay-height="" lay-skin="" lay-encode="">
						这样有木有觉得更方便些
					</pre>   
				</pre>
				<div class="well well-sm" id="test-date" style="color: blue;">您好，我在小的 Well 中！</div>
				<div class="well well-sm" id="test-date2" style="color: blue;">您好，我在小的 Well 中！</div>
				<script type="text/javascript">
					layui.use(['util','laydate','layer','code'],function(){
						var util = layui.util;
						var laydate = layui.laydate;
						var layer  = layui.layer;
						layui.code(); //引用code方法

						util.fixbar({
							bar1: true
							,bar2: true
							,css: {right: 50, bottom: 100}
							,bgcolor: '#393D49'
							,click: function(type){
								if(type === 'bar1'){
									layer.msg('icon是可以随便换的')
								} else if(type === 'bar2') {
									layer.msg('两个bar都可以设定是否开启')
								}
							}
						});

						var endTime = new Date(2099,1,1).getTime() //假设为结束日期
						  ,serverTime = new Date().getTime(); //假设为当前服务器时间，这里采用的是本地时间，实际使用一般是取服务端的

						  util.countdown(endTime, serverTime, function(date, serverTime, timer){
						  	var str = date[0] + '天' + date[1] + '时' +  date[2] + '分' + date[3] + '秒';
						  	$('#test-date').html('距离2099年1月1日还有：'+ str);
						  });

						  var str = util.timeAgo('1503484522');
						  $('#test-date2').html('距离2015年一月一日：'+ str);

						});


					</script>
				</div>

				<h1>web弹窗</h1>
				<div class="container">
					<ul id="myTab" class="nav nav-tabs">
						<li class="active"><a href="#first-tab" data-toggle="tab">one</a></li>
						<li><a href="#second-tab" data-toggle="tab">two</a></li>
						<li><a href="#third-tab" data-toggle="tab">three</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active " id="first-tab">
							<div class="panel panel-danger">
								<div class="panel-heading">
									<h3 class="panel-title">基本弹窗</h3>
								</div>
								<div class="panel-body">
									<div class="btn-group "> 
										<button type="button" class="btn btn-primary" id="win-one">初体验</button>
										<button type="button" class="btn btn-primary"  id="win-2">第三方扩展皮肤</button>
										<button type="button" class="btn btn-primary"  id="win-3">询问框</button>
										<button type="button" class="btn btn-primary"  id="win-4">提示层</button>
										<button type="button" class="btn btn-primary"  id="win-5">墨绿风格，点击确认看深蓝</button>
										<button type="button" class="btn btn-primary"  id="win-6">捕获页</button>
										<button type="button" class="btn btn-primary"  id="win-7">页面层</button>
										<button type="button" class="btn btn-primary"  id="win-8">自定页</button>
										<button type="button" class="btn btn-primary"  id="win-9">tips层</button>
										<button type="button" class="btn btn-primary"  id="win-10">iframe层</button>
										<button type="button" class="btn btn-primary"  id="win-11">iframe窗</button>
										<button type="button" class="btn btn-primary"  id="win-12">加载层</button>
										<button type="button" class="btn btn-primary"  id="win-13">loading层</button>
										<button type="button" class="btn btn-primary"  id="win-14">小tips</button>
										<button type="button" class="btn btn-primary"  id="win-15">prompt层</button>
										<button type="button" class="btn btn-primary"  id="win-16">tab层</button>
										<button type="button" class="btn btn-primary"  id="win-17">相册层</button>
									</div>
								</div>
							</div>
							
						</div>
						<div class="tab-pane fade" id="second-tab">
							<div class="panel panel-danger">
								<div class="panel-heading">
									<h3 class="panel-title">进一步弹窗</h3>
								</div>
								<div class="panel-body">
									<div class="btn-group "> 
										
										<button type="button" class="btn btn-primary"  id="win-20">玩命卖萌中</button>
										<button type="button" class="btn btn-primary"  id="win-21">页面层-自定义</button>
										<button type="button" class="btn btn-primary"  id="win-22">页面层-佟丽娅</button>
										<button type="button" class="btn btn-primary"  id="win-23">parentIframe</button>
										<button type="button" class="btn btn-primary"  id="win-24">多媒体层</button>
										<button type="button" class="btn btn-primary"  id="win-25">iframe层-禁滚动条</button>
										<button type="button" class="btn btn-primary"  id="win-26">加载层-默认风格</button>
										<button type="button" class="btn btn-primary"  id="win-27">tips层-上</button>
										<button type="button" class="btn btn-primary"  id="win-28">默认prompt</button>
										<button type="button" class="btn btn-primary"  id="win-29">屏蔽浏览器滚动条</button>
										<button type="button" class="btn btn-primary"  id="win-30">弹出即全屏</button>
										<button type="button" class="btn btn-primary"  id="win-50">公告层</button>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="third-tab">
							<p>jMeter 是一款开源的测试软件。它是 100% 纯 Java 应用程序，用于负载和性能测试。</p>
						</div>
						
					</div>
					<script type="text/javascript">
						layui.use(['layer'],function(){
							var layer = layui.layer;
							$('#win-one').click(function(){
								layer.alert('初体验');
							});
							$('#win-2').click(function(){
								layer.alert('第三方扩展皮肤', {
									icon: 1,
								    skin: 'layer-ext-moon' //该皮肤由layer.seaning.com友情扩展。关于皮肤的扩展规则，去这里查阅
								})
							});
							$('#win-3').click(function(){
								layer.confirm('您是如何看待前端开发？', {
								  btn: ['重要','奇葩'] //按钮
								}, function(){
									layer.msg('的确很重要', {icon: 1});
								}, function(){
									layer.msg('也可以这样', {
								    time: 20000, //20s后自动关闭
								    btn: ['明白了', '知道了']
								});
								});
							});
							$('#win-4').click(function(){
								layer.msg('玩命提示中');
							});
							$('#win-5').click(function(){
								layer.alert('墨绿风格，点击确认看深蓝', {
								  skin: 'layui-layer-molv' //样式类名
								  ,closeBtn: 0
								}, function(){
									layer.alert('偶吧深蓝style', {
										skin: 'layui-layer-lan'
										,closeBtn: 0
								    ,anim: 4 //动画类型
								});
								});
							});
							$('#win-6').click(function(){
								layer.open({
									type: 1,
									shade: false,
									  title: false, //不显示标题
									  content: $('.layer_notice'), //捕获的元素，注意：最好该指定的元素要存放在body最外层，否则可能被其它的相对元素所影响
									  cancel: function(){
									  	layer.msg('捕获就是从页面已经存在的元素上，包裹layer的结构', {time: 5000, icon:6});
									  }
									});
							});
							$('#win-7').click(function(){
								//页面层
								layer.open({
									type: 1,
								    skin: 'layui-layer-rim', //加上边框
								    area: ['420px', '240px'], //宽高
								    content: 'html内容'
								});
							});
							$('#win-8').click(function(){
								//自定页
								layer.open({
									type: 1,
								  skin: 'layui-layer-demo', //样式类名
								  closeBtn: 0, //不显示关闭按钮
								  anim: 2,
								  shadeClose: true, //开启遮罩关闭
								  content: '内容'
								});
							});
							$('#win-9').click(function(){
								//tips层
								layer.tips('Hi，我是tips', '吸附元素选择器，如#id');
							});
							$('#win-10').click(function(){
								//iframe层
								layer.open({
									type: 2,
									title: 'layer mobile页',
									shadeClose: true,
									shade: 0.8,
									area: ['380px', '90%'],
								  content: 'mobile/' //iframe的url
								}); 
							});
							$('#win-11').click(function(){
								//iframe窗
								layer.open({
									type: 2,
									title: false,
								  closeBtn: 0, //不显示关闭按钮
								  shade: [0],
								  area: ['340px', '215px'],
								  offset: 'rb', //右下角弹出
								  time: 2000, //2秒后自动关闭
								  anim: 2,
								  content: ['test/guodu.html', 'no'], //iframe的url，no代表不显示滚动条
								  end: function(){ //此处用于演示
								  	layer.open({
								  		type: 2,
								  		title: '很多时候，我们想最大化看，比如像这个页面。',
								  		shadeClose: true,
								  		shade: false,
								      maxmin: true, //开启最大化最小化按钮
								      area: ['893px', '600px'],
								      content: '//fly.layui.com/'
								  });
								  }
								});
							});


							$('#win-12').click(function(){
								//加载层
								var index = layer.load(0, {shade: false}); //0代表加载的风格，支持0-2
							});

							$('#win-13').click(function(){
								//loading层
								var index = layer.load(1, {
								  shade: [0.1,'#fff'] //0.1透明度的白色背景
								});
							});
							//小tips
							layer.tips('我是另外一个tips，只不过我长得跟之前那位稍有些不一样。', '#win-14', {
								tips: [1, '#3595CC'],
								time: 4000
							});
							$('#win-14').click(function(){
								//小tips

							});
							$('#win-15').click(function(){
								//prompt层
								layer.prompt({title: '输入任何口令，并确认', formType: 1}, function(pass, index){
									layer.close(index);
									layer.prompt({title: '随便写点啥，并确认', formType: 2}, function(text, index){
										layer.close(index);
										layer.msg('演示完毕！您的口令：'+ pass +'<br>您最后写下了：'+text);
									});
								});
							});
							$('#win-16').click(function(){
								//tab层
								layer.tab({
									area: ['600px', '300px'],
									tab: [{
										title: 'TAB1', 
										content: '内容1'
									}, {
										title: 'TAB2', 
										content: '内容2'
									}, {
										title: 'TAB3', 
										content: '内容3'
									}]
								});
							});
							$('#win-17').click(function(){
								//相册层
									// $.getJSON('test/photos.json?v='+new Date, function(json){
									//   layer.photos({
									//     photos: json //格式见API文档手册页
									//     ,anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机
									//   });
									// });

									
								});

							layer.photos({
							    photos: '#layer-photos-demo' //格式见API文档手册页
							    ,anim: 5 //0-6的选择，指定弹出图片动画类型，默认随机
							});
							$('#win-20').click(function(){
								layer.msg('玩命卖萌中', function(){
								//关闭后的操作
							});
							});

							$('#win-21').click(function(){
								//页面层-自定义
								layer.open({
									type: 1,
									title: false,
									closeBtn: 0,
									shadeClose: true,
									skin: 'yourclass',
									content: '自定义HTML内容'
								});
							});
							$('#win-22').click(function(){
								//页面层-佟丽娅
								layer.open({
									type: 1,
									title: false,
									closeBtn: 0,
									area: '516px',
								  skin: 'layui-layer-nobg', //没有背景色
								  shadeClose: true,
								  content: $('#tone')
								});
							});
							$('#win-23').click(function(){
								//iframe层-父子操作
								layer.open({
									type: 2,
									area: ['700px', '450px'],
								  fixed: false, //不固定
								  maxmin: true,
								  content: '/iframe'
								});
							});
							$('#win-24').click(function(){
								//iframe层-多媒体
								layer.open({
									type: 2,
									title: false,
									area: ['630px', '360px'],
									shade: 0.8,
									closeBtn: 0,
									shadeClose: true,
									content: '/temp/123.mp4'
								});
							});
							$('#win-25').click(function(){
								//iframe层-禁滚动条
								layer.open({
									type: 2,
									area: ['360px', '500px'],
								  skin: 'layui-layer-rim', //加上边框
								  content: ['mobile/', 'no']
								});
							});
							$('#win-26').click(function(){
								//加载层-默认风格
								layer.load();
								//此处演示关闭
								setTimeout(function(){
									layer.closeAll('loading');
								}, 2000);
								// //加载层-风格2
								// layer.load(1);
								// //此处演示关闭
								// setTimeout(function(){
								// 	layer.closeAll('loading');
								// }, 2000);
								// //加载层-风格3
								// layer.load(2);
								// //此处演示关闭
								// setTimeout(function(){
								// 	layer.closeAll('loading');
								// }, 2000);
								// //加载层-风格4
								// layer.msg('加载中', {
								// 	icon: 16
								// 	,shade: 0.01
								// });
							});
							$('#win-27').click(function(){
								//tips层-上
								layer.tips('上', '#win-27', {
								  tips: [1, '#0FA6D8'] //还可配置颜色
								});
								//tips层-右
								// layer.tips('默认就是向右的', '#id或者.class');
								// //tips层-下
								// layer.tips('下', '#id或者.class', {
								//   tips: 3
								// });
								// //tips层-左
								// layer.tips('左边么么哒', '#id或者.class', {
								//   tips: [4, '#78BA32']
								// });
								// //tips层-不销毁之前的
								// layer.tips('不销毁之前的', '#id或者.class', {
								//   tipsMore: true
								// });
							});
							$('#win-28').click(function(){
								//默认prompt
								layer.prompt(function(val, index){
								  layer.msg('得到了'+val);
								  layer.close(index);
								});
							});
							$('#win-29').click(function(){
								//屏蔽浏览器滚动条
								layer.open({
								  content: '浏览器滚动条已锁',
								  scrollbar: false
								});
							});
							$('#win-30').click(function(){
								//弹出即全屏
								var index = layer.open({
								  type: 2,
								  content: 'http://layim.layui.com',
								  area: ['320px', '195px'],
								  maxmin: true
								});
								layer.full(index);
							});

							$('#win-50').click(function(){
								//示范一个公告层
								layer.open({
								  type: 1
								  ,title: false //不显示标题栏
								  ,closeBtn: false
								  ,area: '300px;'
								  ,shade: 0.8
								  ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
								  ,resize: false
								  ,btn: ['火速围观', '残忍拒绝']
								  ,btnAlign: 'c'
								  ,moveType: 1 //拖拽模式，0或者1
								  ,content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">你知道吗？亲！<br>layer ≠ layui<br>layer只是作为Layui的一个弹层模块，由于其用户基数较大，所以常常会有人以为layui是layeru<br>layer虽然已被 Layui 收编为内置的弹层模块，但仍然会作为一个独立组件全力维护、升级。<br>我们此后的征途是星辰大海 ^_^</div>'
								  ,success: function(layero){
								    var btn = layero.find('.layui-layer-btn');
								    btn.find('.layui-layer-btn0').attr({
								      href: 'http://www.layui.com/'
								      ,target: '_blank'
								    });
								  }
								});
							});
						});
					</script>
				</div>
				<div id="layer-photos-demo" class="layer-photos-demo">
					<img layer-pid="pic-one" layer-src="https://gw.alicdn.com/bao/uploaded/i3/117202952/TB25lckX_AX61Bjy0FcXXaSlFXa_!!117202952.jpg_400x400q90.jpg?t=1503479199966" src="https://gw.alicdn.com/bao/uploaded/i3/117202952/TB25lckX_AX61Bjy0FcXXaSlFXa_!!117202952.jpg_400x400q90.jpg?t=1503479199966" alt="图片名">
					<img layer-pid="pic-two" layer-src="https://gw.alicdn.com/bao/uploaded/i2/701696736/TB2PNl5ahQa61Bjy0FhXXaalFXa_!!701696736.jpg_400x400q90.jpg?t=1503479199966" src="https://gw.alicdn.com/bao/uploaded/i2/701696736/TB2PNl5ahQa61Bjy0FhXXaalFXa_!!701696736.jpg_400x400q90.jpg?t=1503479199966" alt="图片名">
				</div>
				<div id="tone">
					<img src="https://gw.alicdn.com/bao/uploaded/i3/117202952/TB25lckX_AX61Bjy0FcXXaSlFXa_!!117202952.jpg_400x400q90.jpg?t=1503479199966">
				</div>
			</body>
			<div id="" class="layui-layer-content">
				<ul style="display: block;padding: 10px;background-color: green;" class="list-group layer_notice">
					<li class="list-group-item active">
						<a href="javascript:void(0);" class="list-group-item-heading">更新信息</a>
					</li>
					<li class="list-group-item"><a href="http://fly.layui.com/jie/4827.html" target="_blank">1. layer 3.x 更新日志，最多人使用的Web弹层组件</a></li>
					<li class="list-group-item"><a href="http://fly.layui.com/jie/2461.html" target="_blank">2. 关注 Layui 微信公众号，与我们更近距离交流</a></li>
					<li class="list-group-item"><a href="http://fly.layui.com/jie/220.html" target="_blank">3. Fork layer on Github，用她，就给她加个星啵</a></li>
				</ul>
			</div>
			
			</html>