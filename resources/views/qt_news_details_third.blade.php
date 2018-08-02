<!DOCTYPE html>
<!-- saved from url=(0016)http://so-ai.jp/ -->
<html lang="ja" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>匠几动态</title>
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
<div class="top-content concept" style="position:relative; z-index:2">
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
    <div class="container" style="padding-top:115px; padding-bottom: 160px; position:relative">
		<div class="row jjdt_snaji_mianbaoxie">当前位置：<a href="/news" style="color:#fff;">匠几动态</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="/news" style="color:#fff;">{{$news[0]->category}}</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="/news/details/{{$news[0]->id}}" style="color:#fff;">{{$news[0]->title}}</a>   </div>
		<div class="row jjdt_sanji_bt">
        	<p><span>{{$news[0]->title}}</span><br><b>标签：{{$news[0]->label}}&nbsp;&nbsp;&nbsp;&nbsp; 发布日期：{{$news[0]->date_time}}</b></p>
        </div>
		<div class="row jjdt_sanji3_nr">
        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_1">
                <div class="col-md-6 col-sm-6 col-xs-6"><img src="{{$news_details[0]->pic1_1}}" class="img-responsive"></div>
                <div class="col-md-6 col-sm-6 col-xs-6 jjdt_sanji3_nr_1_wenzi">
                    {!! $news_details[0]->text1_1 !!}
                </div>
			</div>
            
        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_2">
                <div class="col-md-6 col-sm-6 col-xs-6 jjdt_sanji3_nr_2_wenzi">
                    {!! $news_details[0]->text1_2 !!}
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-6"><img src="{{$news_details[0]->pic1_2}}" class="img-responsive"></div>
			</div>

        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_3">
                <div class="col-md-6 col-sm-6 col-xs-6"><img src="{{$news_details[0]->pic1_3}}" class="img-responsive"></div>
			</div>


        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_4">
                <div class="col-md-6 col-sm-6 col-xs-6 jjdt_sanji3_nr_4_wenzi">
                    {!! $news_details[0]->text1_3 !!}<br>
                    {!! $news_details[0]->text1_4 !!}<br>
                    {!! $news_details[0]->text1_5 !!}
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-6"><img src="{{$news_details[0]->pic1_4}}" class="img-responsive"></div>
			</div>

        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_5">
                <div class="col-md-6 col-sm-6 col-xs-6"><img src="{{$news_details[0]->pic1_5}}" class="img-responsive"></div>
                <div class="col-md-6 col-sm-6 col-xs-6 jjdt_sanji3_nr_1_wenzi">
                    {!! $news_details[0]->text1_6 !!}
                </div>
			</div>

        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_6">
                <div class="col-md-6 col-sm-6 col-xs-6 jjdt_sanji3_nr_6_wenzi">
                    {!! $news_details[0]->text1_7 !!}
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-6"><img src="{{$news_details[0]->pic1_6}}" class="img-responsive"></div>
			</div>


        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_santu">

				<div class="col-md-4 col-sm-4 col-xs-4">
                	<img src="{{$news_details[0]->pic2_1}}" class="img-responsive"><br>
                    {!! $news_details[0]->text2_1_1 !!}<br>
                    {!! $news_details[0]->text2_1_2 !!}
                </div>
				<div class="col-md-4 col-sm-4 col-xs-4">
                	<img src="{{$news_details[0]->pic2_2}}" class="img-responsive"><br>
					{!! $news_details[0]->text2_2_1 !!}<br>
                    {!! $news_details[0]->text2_2_2 !!}
                </div>
				<div class="col-md-4 col-sm-4 col-xs-4">
                	<img src="{{$news_details[0]->pic2_3}}" class="img-responsive"><br>
                    {!! $news_details[0]->text2_3_1 !!}<br>
                    {!! $news_details[0]->text2_3_2 !!}
                </div>

			</div>

        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_santuxia">

				<div class="col-md-4 col-sm-4 col-xs-4">
					<div><span></span><img src="{{$news_details[0]->pic3}}" class="img-responsive"></div>
                </div>
				<div class="col-md-6 col-sm-6 col-xs-6 jjdt_sanji3_nr_santuxia_wenzi">
					<p>{!! $news_details[0]->text3_1 !!}</p>
                    <p>{!! $news_details[0]->text3_2 !!}</p>
                </div>
				<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_santuxia_xiantiao"><img src="{{URL::asset('/images/dongtai_sanji_3_13.png')}}" class="img-responsive"></div>
			</div>

        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_santu" style="margin-top:10vh">
				<div class="col-md-4 col-sm-4 col-xs-4">
                	<img src="{{$news_details[0]->pic4_1}}" class="img-responsive"><br>
                    {!! $news_details[0]->text4_1_1 !!}<br>
                    {!! $news_details[0]->text4_1_2 !!}
                </div>
				<div class="col-md-4 col-sm-4 col-xs-4">
                	<img src="{{$news_details[0]->pic4_2}}" class="img-responsive"><br>
					{!! $news_details[0]->text4_2_1 !!}<br>
                    {!! $news_details[0]->text4_2_2 !!}
                </div>
				<div class="col-md-4 col-sm-4 col-xs-4">
                	<img src="{{$news_details[0]->pic4_3}}" class="img-responsive"><br>
                    {!! $news_details[0]->text4_3_1 !!}<br>
                    {!! $news_details[0]->text4_3_2 !!}
                </div>
			</div>
        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_santu" style="margin-top:10vh">
				<div class="col-md-4 col-sm-4 col-xs-4">
                	<img src="{{$news_details[0]->pic4_4}}" class="img-responsive"><br>
                    {!! $news_details[0]->text4_4_1 !!}<br>
                    {!! $news_details[0]->text4_4_2 !!}
                </div>
				<div class="col-md-4 col-sm-4 col-xs-4">
                	<img src="{{$news_details[0]->pic4_5}}" class="img-responsive"><br>
					{!! $news_details[0]->text4_5_1 !!}<br>
                    {!! $news_details[0]->text4_5_2 !!}
                </div>
				<div class="col-md-4 col-sm-4 col-xs-4">
                	<img src="{{$news_details[0]->pic4_6}}" class="img-responsive"><br>
                    {!! $news_details[0]->text4_6_1 !!}<br>
                    {!! $news_details[0]->text4_6_2 !!}
                </div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_santuxia_xiantiao" style="margin:8vh 0"></div>

        	<div class="col-md-12 col-sm-12 col-xs-12 jjdt_sanji3_nr_tuwen">
				<div class="col-md-10 col-sm-10 col-xs-10 col-xs-offset-1">
                	<p class="jjdt_sanji3_nr_tuwen_tu"><img src="{{$news_details[0]->pic5}}" class="img-responsive"></p>
                    <p class="jjdt_sanji3_nr_tuwen_wenzi">{!! $news_details[0]->text5 !!}
                    <span class="jjdt_sanji3_nr_tuwen_dingweitu"><img src="{{URL::asset('/images/dongtai_sanji_3_14.png')}}" class="img-responsive"></span>
                    </p>
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
<script src="dist/jquery.vm-carousel.js"></script>
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
.top-content.concept {
  background-image: url("{{$banner[0]->banner_path}}");
}
</style>
