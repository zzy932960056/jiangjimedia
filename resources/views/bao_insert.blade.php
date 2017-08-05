<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>觅宝新增</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ URL::asset('/css/bootstrap-responsive.min.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ URL::asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ URL::asset('/css/style-metro.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ URL::asset('/css/style-responsive.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ URL::asset('/css/default.css') }}" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="{{ URL::asset('/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<link rel="shortcut icon" href="{{ URL::asset('/image/favicon.ico') }}" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	@include('top')

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->

	<div class="page-container row-fluid">

		<!-- BEGIN SIDEBAR -->

		@include('side')
		
		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->  

		<div class="page-content">

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->   

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						@include('style')

						<!-- END BEGIN STYLE CUSTOMIZER -->  

						<h3 class="page-title">

							觅宝管理

							 <small>觅宝新增</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="/me_bao/index">觅宝管理</a> 

								<span class="icon-angle-right"></span>

							</li>

							<li>

								<a href="/me_bao/index">觅宝信息</a>

								<span class="icon-angle-right"></span>

							</li>

							<li><a href="#">觅宝新增</a></li>

						</ul>

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN SAMPLE FORM PORTLET-->   

						<div class="portlet box blue tabbable">

							<div class="portlet-title">

								<div class="caption">

									<i class="icon-reorder"></i>

									<span class="hidden-480">觅宝设置</span>

								</div>

							</div>

							<div class="portlet-body form">

								<div class="tabbable portlet-tabs">

									<ul class="nav nav-tabs">

										<li class="active"><a href="#portlet_tab1" data-toggle="tab">觅宝新增</a></li>

									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="portlet_tab1">

											<!-- BEGIN FORM-->

											<form action="/me_bao/index/doinsert" class="form-horizontal" method="post">

												<div class="control-group">

													<label class="control-label">觅宝姓名</label>

													<div class="controls">

														<input type="text" name="bname" placeholder="请输入觅宝姓名" class="m-wrap large" />

														<span class="help-inline">请输入觅宝姓名</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">觅宝性别</label>

													<div class="controls">

														<input type="radio" name="sex" value="男" class="m-wrap large" />男

														<input type="radio" name="sex" value="女" class="m-wrap large" />女

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">觅宝年龄</label>

													<div class="controls">

														<input type="text" name="age" placeholder="请输入觅宝年龄" class="m-wrap large" />

														<span class="help-inline">请输入觅宝年龄</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">觅宝地区</label>

													<div class="controls">

														<input type="text" name="region" placeholder="请输入觅宝地区" class="m-wrap large" />

														<span class="help-inline">请输入觅宝地区</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">觅宝点赞数</label>

													<div class="controls">

														<input type="text" name="like" placeholder="请输入觅宝点赞数" class="m-wrap large" />

														<span class="help-inline">请输入觅宝点赞数</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">觅宝封面图路径</label>

													<div class="controls">

														<input type="text" name="picture" placeholder="请输入觅宝封面图路径" class="m-wrap large" />

														<span class="help-inline">请输入觅宝封面图路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">觅宝大图路径</label>

													<div class="controls">

														<input type="text" name="picture_big" placeholder="请输入觅宝大图路径" class="m-wrap large" />

														<span class="help-inline">请输入觅宝大图路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">商品购买信息</label>

													<div class="controls">

														<input type="text" name="shop" placeholder="请输入商品购买信息" class="m-wrap large" />

														<span class="help-inline">请输入商品购买信息(*)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">更多搭配信息</label>

													<div class="controls">

														<input type="text" name="collocation" placeholder="请输入更多搭配信息" class="m-wrap large" />

														<span class="help-inline">请输入更多搭配信息(*)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">淘宝信息</label>

													<div class="controls">

														<input type="text" name="taobao" placeholder="请输入淘宝信息" class="m-wrap large" />

														<span class="help-inline">请输入淘宝信息(*)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">是否热门</label>

													<div class="controls">

														<input type="radio" name="is_hot" value="1" class="m-wrap large" />热门

														<input type="radio" name="is_hot" value="0" class="m-wrap large" />不热门

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">热门头图路径</label>

													<div class="controls">

														<input type="text" name="hot_pic" placeholder="请输入热门头图路径" class="m-wrap large" />

														<span class="help-inline">请输入热门头图路径</span>

													</div>

												</div>

												<div class="form-actions">

													<button type="submit" class="btn blue"><i class="icon-ok"></i> 保存</button>

													<button type="reset" class="btn">重置</button>

												</div>

											</form>

											<!-- END FORM-->  

										</div>

									</div>

								</div>

							</div>

						</div>

						<!-- END SAMPLE FORM PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT-->         

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->  

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	@include('foot')

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="{{ URL::asset('/js/jquery-1.10.1.min.js') }}" type="text/javascript"></script>

	<script src="{{ URL::asset('/js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js') }} before bootstrap.min.js') }} to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="{{ URL::asset('/js/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>      

	<script src="{{ URL::asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="{{ URL::asset('/js/excanvas.min.js') }}"></script>

	<script src="{{ URL::asset('/js/respond.min.js') }}"></script>  

	<![endif]-->   

	<script src="{{ URL::asset('/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

	<script src="{{ URL::asset('/js/jquery.blockui.min.js') }}" type="text/javascript"></script>  

	<script src="{{ URL::asset('/js/jquery.cookie.min.js') }}" type="text/javascript"></script>

	<script src="{{ URL::asset('/js/jquery.uniform.min.js') }}" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<script src="{{ URL::asset('/js/app.js') }}"></script>     

	<script>

		jQuery(document).ready(function() {   

		   // initiate layout and plugins

		   App.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->   

</body>

<!-- END BODY -->

</html>