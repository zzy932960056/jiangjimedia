<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>匠几动态图文设置</title>

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

							匠几动态管理

							 <small>匠几动态图文设置</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="/admin/news">匠几动态管理</a> 

								<span class="icon-angle-right"></span>

							</li>

							<li>

								<a href="/admin/news">匠几动态</a>

								<span class="icon-angle-right"></span>

							</li>

							<li><a href="#">匠几动态图文设置</a></li>

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

									<span class="hidden-480">匠几动态图文设置</span>

								</div>

							</div>

							<div class="portlet-body form">

								<div class="tabbable portlet-tabs">

									<ul class="nav nav-tabs">

										<li class="active"><a href="#portlet_tab1" data-toggle="tab">匠几动态图文设置</a></li>

									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="portlet_tab1">

											<!-- BEGIN FORM-->

											<form action="/admin/news/third/index3/forth/doupdate/{{$news['id']}}" class="form-horizontal" method="post">

												<div class="control-group">

													<label class="control-label">匠几动态图文id</label>

													<div class="controls">   

														<input class="m-wrap medium" name="nid" type="text" value="{{$news['id']}}" readonly/>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四图片4.1路径</label>

													<div class="controls">

														<input type="text" name="pic4_1" value="{{$news['pic4_1']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四图片4.1路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四图片4.2路径</label>

													<div class="controls">

														<input type="text" name="pic4_2" value="{{$news['pic4_2']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四图片4.2路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四图片4.3路径</label>

													<div class="controls">

														<input type="text" name="pic4_3" value="{{$news['pic4_3']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四图片4.3路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四图片4.4路径</label>

													<div class="controls">

														<input type="text" name="pic4_4" value="{{$news['pic4_4']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四图片4.4路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四图片4.5路径</label>

													<div class="controls">

														<input type="text" name="pic4_5" value="{{$news['pic4_5']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四图片4.5路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四图片4.6路径</label>

													<div class="controls">

														<input type="text" name="pic4_6" value="{{$news['pic4_6']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四图片4.6路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四文4.1.1</label>

													<div class="controls">

														<input type="text" name="text4_1_1" value="{{$news['text4_1_1']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四文4.1.1</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四文4.1.2</label>

													<div class="controls">

														<input type="text" name="text4_1_2" value="{{$news['text4_1_2']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四文4.1.2</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四文4.2.1</label>

													<div class="controls">

														<input type="text" name="text4_2_1" value="{{$news['text4_2_1']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四文4.2.1</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四文4.2.2</label>

													<div class="controls">

														<input type="text" name="text4_2_2" value="{{$news['text4_2_2']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四文4.2.2</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四文4.3.1</label>

													<div class="controls">

														<input type="text" name="text4_3_1" value="{{$news['text4_3_1']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四文4.3.1</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四文4.3.2</label>

													<div class="controls">

														<input type="text" name="text4_3_2" value="{{$news['text4_3_2']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四文4.3.2</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四文4.4.1</label>

													<div class="controls">

														<input type="text" name="text4_4_1" value="{{$news['text4_4_1']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四文4.4.1</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四文4.4.2</label>

													<div class="controls">

														<input type="text" name="text4_4_2" value="{{$news['text4_4_2']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四文4.4.2</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四文4.5.1</label>

													<div class="controls">

														<input type="text" name="text4_5_1" value="{{$news['text4_5_1']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四文4.5.1</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四文4.5.2</label>

													<div class="controls">

														<input type="text" name="text4_5_2" value="{{$news['text4_5_2']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四文4.5.2</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四文4.6.1</label>

													<div class="controls">

														<input type="text" name="text4_6_1" value="{{$news['text4_6_1']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四文4.6.1</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">模块四文4.6.2</label>

													<div class="controls">

														<input type="text" name="text4_6_2" value="{{$news['text4_6_2']}}" class="m-wrap huge" />

														<span class="help-inline">请输入模块四文4.6.2</span>

													</div>

												</div>																																																																																																																																																

												<div class="control-group">

													<label class="control-label">当前匠几动态id</label>

													<div class="controls">

														<input type="text" name="mid" value="{{$news['news_id']}}" readonly class="m-wrap huge" />

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