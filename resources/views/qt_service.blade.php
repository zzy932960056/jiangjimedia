<!DOCTYPE html>
<!-- saved from url=(0016)http://so-ai.jp/ -->
<html lang="ja" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>匠几服务</title>
    <link rel="shortcut icon" href="{{URL::asset('/images/jiangji.ico')}}">
    <link rel="Bookmark" href="{{URL::asset('/images/jiangji.ico')}}">
    <link href="{{URL::asset('/css2/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/css2/so-ai.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/css2/index.css')}}" rel="stylesheet" media="screen">
	<link href="{{URL::asset('/css2/animate.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/dist/jquery.vm-carousel.css')}}">
	<script type="text/javascript" src="{{URL::asset('/js2/jquery-1.11.3.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('/js2/wow.min.js')}}"></script>
    <script type="text/javascript" src="//s.union.360.cn/205812.js" async defer></script> 
<body class="home blog has-drawer">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css2/slick.css')}}">
    <script type="text/javascript" src="{{URL::asset('/js2/slick.min.js')}}"></script>
    
<div class="top-content place" style="position:relative; z-index:2">
	<div class="slider-wrapper">
		<div class="slider-inner item-5 after-load" style="display: block;">
		</div>
	</div>
	<div class="border">
		<div class="bottom">
			<div class="bottom-table">
				<div class="side-cell">
					<p></p>
				</div>
				<div class="center-cell" style="text-align:center">
					<img src="{{URL::asset('/images/hello.png')}}" class="img-responsive" style="display: inline-block">
				</div>
				<div class="side-cell">
					<p></p>
				</div>
			</div>
		</div>
		<div style="position: absolute; bottom: 20px; left: 50%;">
              <h4 class="rounded-text hello">
              <span style="transform: rotate(-30deg); -webkit-transform: rotate(-30deg);">H</span>
              <span style="transform: rotate(-15deg); -webkit-transform: rotate(-15deg);">E</span>
              <span style="transform: rotate(-0deg); -webkit-transform: rotate(-0deg);">L</span>
              <span style="transform: rotate(15deg); -webkit-transform: rotate(15deg);">L</span>
              <span style="transform: rotate(30deg); -webkit-transform: rotate(30deg);">O</span>
              </h4>
		</div>

        <div class="container-fluid jjtd_tanchu_hei2" id="index_youshang_tan">
            <div class="container">
	        	<div class="index_youshang_tan">
                	<img src="{{URL::asset('/images/tanchu_cha.png')}}" class="img-responsive index_youshang_tan_cha">
					<img src="{{$company_info[0]->alert_info}}" class="img-responsive">
                    <a href="/contact" class="index_youshang_tan_a"></a>
                </div>             
            </div>
        </div>
        
	</div>

</div>

<div id="page" style="position:relative; z-index:1">

    @include('qt_navigate')

<div class="top hidden-xs">
</div>
<div class="bottom hidden-xs">
</div>
<div class="left hidden-xs">
</div>
<div class="right hidden-xs">
</div>
<div class="top-left hidden-xs">
</div>
<div class="top-right hidden-xs">
</div>
<div class="bottom-left hidden-xs">
</div>
<div class="bottom-right hidden-xs">
</div>

<div class="logo hidden-xs">
  <div style="width: 240px; height: 90px; margin-left: -120px; background-color: #b3b8ba; padding-top: 25px;">
    <p class="text-center" style="margin-bottom:0">
      <a href="/"><img src="{{URL::asset('/images/top-logo-lg.png')}}" style="width:60%; margin-top:-10px"></a>
    </p>
  </div>
</div>



<div class="container-fluid" style="position:relative">
        <div class="index_youshang" id="you2" style="position: fixed; right:8vw; top:115px; height:130px; z-index:999; display:none">
        	<img src="http://static.meyoungbaby.com/dengpao1.png" class="img-responsive" id="youshang_deng">
        </div>
    <div class="container" style="padding-top:115px; padding-bottom: 60px; position:relative">
		
        <!--匠几服务主体-->
        <div class="row jjal_zhuti" style="padding-bottom:20vh">
        	<div class="col-md-12 col-xs-12 col-sm-12 jjdt_biaoti" style="margin-bottom:10vh">
            	<img src="{{URL::asset('/images/fuwu_biaoti.png')}}" class="img-responsive">
            </div>
			
            <div class="col-md-12 col-xs-12 col-sm-12">
            
                <div class="carousel slide" id="picc" data-ride="carousel" >


                        <ol class="carousel-indicators" id="jjfw_ol">
                            <li class="active" data-target="#picc" data-slide-to="0" id="aaaa"><span class="jjfw_lo_span"></span></li>
                            <li data-target="#picc" data-slide-to="1" id="bbbb"><span class="jjfw_lo_span"></span></li>
                            <li data-target="#picc" data-slide-to="2" id="cccc"><span class="jjfw_lo_span"></span></li>
                            <li data-target="#picc" data-slide-to="3" id="dddd"><span class="jjfw_lo_span"></span></li>
                            <li data-target="#picc" data-slide-to="4" id="eeee"><span class="jjfw_lo_span"></span></li>
                            <li data-target="#picc" data-slide-to="5" id="ffff"><span class="jjfw_lo_span"></span></li>
                            <li data-target="#picc" data-slide-to="6" id="gggg"><span class="jjfw_lo_span"></span></li>
                        </ol>


                    
                    <div class="carousel-inner">
                        @foreach($service as $ke => $va)
                        @if($ke == 0)
                        <div class="item active">
							<img src="{{$va->service_img}}" class="img-responsive">
                            <p class="jjfw_bt">{{$va->service_title}}</p>
                            <p class="jjfw_btn">
                                @foreach($va->service_label as $v)
                                <span>{{$v}}</span>
                                @endforeach
                            </p>
                            <p class="jjfw_neirong">
                                {{$va->service_desc}} 
                            </p>
                        </div>
                        @else
                        <div class="item">
							<img src="{{$va->service_img}}" class="img-responsive">
                            <p class="jjfw_bt">{{$va->service_title}}</p>
                            <p class="jjfw_btn">
                                @foreach($va->service_label as $v)
                                <span>{{$v}}</span>
                                @endforeach
                            </p>
                            <p class="jjfw_neirong">
                                {{$va->service_desc}}
                            </p>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            
            </div>
            
            
        </div>
        
        
    </div>
</div>

    	<!--底部-->
<a href="javascript:;" id="toTop" title="回到顶部"><div class="index_dibu_top_guding" id="index_totop"><img src="{{URL::asset('/images/jiangji_sun.gif')}}" class="img-responsive"></div></a>
       
<div class="container-fluid" style="padding-bottom:55px;">
	<div style="position:relative">
        <img src="{{URL::asset('/images/index_dibutuan.png')}}" class="img-responsive" style="width:100%">
        <a href="javascript:;" id="toTop2" title="回到顶部"><div class="index_dibu_top" id="index_totop2"><img src="{{URL::asset('/images/top-2.gif')}}" class="img-responsive"></div></a>
    </div>
    <div style="width:100%; background:#b3b8ba; position:relative; z-index:1000; padding:5vh 0">
    
        <div class="container">
                <div class="row index_dibu">
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <p class="index_dibu_biaoti">{{$company_info[0]->company_name}}</p>
                        <p>公司地址：{{$company_info[0]->company_address}}</p>
                        <p>官方邮箱：{{$company_info[0]->company_email}}</p>
                        <p>官方电话：{{$company_info[0]->company_tel}}</p>
                        <p>官方微博：{{$company_info[0]->company_weibo}}</p>
                    </div>

                    @include('qt_foot')

    				<div class="col-md-2 col-sm-2 col-xs-2 index_dibu_beian"><img src="{{$company_info[0]->qr_code}}" class="img-responsive"></div>
                </div>
         </div>
         
    </div>
</div>


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" type="text/javascript"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="{{URL::asset('/js2/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js2/script.js')}}"></script>
<script src="{{URL::asset('/js2/modernizr.js')}}"></script>
<script src="{{URL::asset('/dist/jquery.vm-carousel.js')}}"></script>
<script type="text/javascript">
	jQuery(function($){

		  $('.vmcarousel-centered-infitine').vmcarousel({
			 centered: true,
			 start_item: 1,
			 autoplay: true,
			 infinite: true,
		  });

	   });
</script>
<style>
.top-content.place {
  background-image: url("{{$banner[0]->banner_path}}");
}
</style>