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

											<form action="/admin/news/third/index2/doupdate/{{$news['id']}}" class="form-horizontal" method="post">

												<div class="control-group">

													<label class="control-label">匠几动态图文id</label>

													<div class="controls">   

														<input class="m-wrap medium" name="nid" type="text" value="{{$news['id']}}" readonly/>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">p标签段落</label>

													<div class="controls">

														<input type="text" name="p_label" value="{{$news['p_label']}}" class="m-wrap huge" />

														<span class="help-inline">请输入p标签段落详情(如没有则不填)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">ul-li标签段落</label>

													<div class="controls">

														<input type="text" name="ul_li" value="{{$news['ul_li']}}" class="m-wrap huge" />

														<span class="help-inline">请输入ul-li标签段落详情(如没有则不填)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">左大右小图图1路径</label>

													<div class="controls">

														<input type="text" name="left_big_pic1" value="{{$news['left_big_pic1']}}" class="m-wrap huge" />

														<span class="help-inline">请输入左大右小图图1路径(如没有则不填)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">左大右小图图2路径</label>

													<div class="controls">

														<input type="text" name="left_big_pic2" value="{{$news['left_big_pic2']}}" class="m-wrap huge" />

														<span class="help-inline">请输入左大右小图图2路径(如没有则不填)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">3张并列图图1路径</label>

													<div class="controls">

														<input type="text" name="image_text_pic1" value="{{$news['image_text_pic1']}}" class="m-wrap huge" />

														<span class="help-inline">请输入3张并列图图1路径(如没有则不填)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">3张并列图图2路径</label>

													<div class="controls">

														<input type="text" name="image_text_pic2" value="{{$news['image_text_pic2']}}" class="m-wrap huge" />

														<span class="help-inline">请输入3张并列图图2路径(如没有则不填)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">3张并列图图3路径</label>

													<div class="controls">

														<input type="text" name="image_text_pic3" value="{{$news['image_text_pic3']}}" class="m-wrap huge" />

														<span class="help-inline">请输入3张并列图图3路径(如没有则不填)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">3张并列图图1标题</label>

													<div class="controls">

														<input type="text" name="image_text_title1" value="{{$news['image_text_title1']}}" class="m-wrap huge" />

														<span class="help-inline">请输入3张并列图图1标题(如没有则不填)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">3张并列图图2标题</label>

													<div class="controls">

														<input type="text" name="image_text_title2" value="{{$news['image_text_title2']}}" class="m-wrap huge" />

														<span class="help-inline">请输入3张并列图图2标题(如没有则不填)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">3张并列图图3标题</label>

													<div class="controls">

														<input type="text" name="image_text_title3" value="{{$news['image_text_title3']}}" class="m-wrap huge" />

														<span class="help-inline">请输入3张并列图图3标题(如没有则不填)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">右大左小图图1路径</label>

													<div class="controls">

														<input type="text" name="right_big_pic1" value="{{$news['right_big_pic1']}}" class="m-wrap huge" />

														<span class="help-inline">请输入右大左小图图1路径(如没有则不填)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">右大左小图图2路径</label>

													<div class="controls">

														<input type="text" name="right_big_pic2" value="{{$news['right_big_pic2']}}" class="m-wrap huge" />

														<span class="help-inline">请输入右大左小图图2路径(如没有则不填)</span>

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