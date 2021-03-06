

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script>
jQuery.noConflict();
(function($) {
	    $(function(){
	        $(".btn").on("click",
					function() {
							console.log($(this).parent(),$(this).text());
			   			$(this).closest("div").css("display","none");
			   			id = $(this).attr("href");
			   			$(id).addClass("positionFit").show("fast");
					});
});
})(jQuery)
</script>

<style>
.yesno {
    height: 400px;
	position:relative;
	background: #fff;
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.07);
	margin:0 0 40px;
	clear: both;
	overflow: hidden;
}

.yesno ul{
	overflow: hidden;
	padding: 0 0 0 25px;
}

.yesno ul li {
	list-style:none;
	float: left;
	text-align: center;
	display: block;
	color: #FFF;
	background-color: #066;
	line-height: 200px;
	font-size: 120%;
	width: 320px;
	margin: 0 20px 0 0;
}
.positionFit {
	position:absolute;
	left: 0px;
	top: 70px;
	width: 710px;
}

.positionFit p{
	background: #eee none repeat scroll 0 0;
    padding: 10px 25px;
    margin: 0 25px;
}

.yesno ul li a {
    background-color: #3498db;
    color: #fff;
    display: block;
    height: 100%;
    text-decoration: none;
    width: 100%;
    font-size: 28px;
}

.no-bg{
	background: #48cc83!important;
}

.yesno ul li a:hover {
    background-color: #298dcf;
}

.yesno .material-icons{
	background: rgba(0, 0, 0, 0.1) none repeat scroll 0 0;
    border-radius: 50%;
    font-size: 30px;
    padding: 10px 10px 8px;
    vertical-align: middle;
    margin: 0 10px 0 0;
}
</style>
</head>

<div class="yesno clearfix">

    <div id="q_01" class="positionFit">
			<p>【質問1】</p>
			<ul>
			<li class="even"><a class="btn" href="#q_02">Yes</a></li>
			<li class="odd"><a class="btn" href="#q_02">No</a></li>
			</ul>
    </div>

    <div id="q_02" style="display: none;">
        <p>【質問2】</p>
        <ul>
        <li class="even"><a class="btn" href="#q_03">Yes</a></li>
        <li class="odd"><a class="btn" href="#q_03">No</a></li>
        </ul>
    </div>

    <div id="q_03" style="display: none;">
        <p>【質問3】</p>
        <ul>
        <li class="even"><a class="btn" href="#q_04">Yes</a></li>
        <li class="odd"><a class="btn" href="#q_04">No</a></li>
        </ul>
    </div>

    <div id="q_04" style="display: none;">
        <p>【質問4】</p>
        <ul>
        <li class="even"><a class="btn" href="#q_05">Yes</a></li>
				<li class="odd"><a class="btn" href="#q_05">No</a></li>
        </ul>
    </div>

    <div id="q_05" style="display: none;">
        <p>【質問5】</p>
        <ul>
					<li class="even"><a class="btn" href="#q_06">Yes</a></li>
					<li class="odd"><a class="btn" href="#q_06">No</a></li>
        </ul>
    </div>

		<div id="q_06" style="display: none;">
        <p>【質問6】</p>
        <ul>
					<li class="even"><a class="btn" href="#q_07">Yes</a></li>
					<li class="odd"><a class="btn" href="#q_07">No</a></li>
        </ul>
    </div>

		<div id="q_07" style="display: none;">
				<p>【質問7】</p>
				<ul>
					<li class="even"><a class="btn" href="#q_08">Yes</a></li>
					<li class="odd"><a class="btn" href="#q_08">No</a></li>
				</ul>
		</div>

		<div id="q_08" style="display: none;">
				<p>【質問8】</p>
				<ul>
					<li class="even"><a class="btn" href="#q_09">Yes</a></li>
					<li class="odd"><a class="btn" href="#q_09">No</a></li>
				</ul>
		</div>

		<div id="q_09" style="display: none;">
				<p>【質問9】</p>
				<ul>
					<li class="even"><a class="btn" href="#q_10">Yes</a></li>
					<li class="odd"><a class="btn" href="#q_10">No</a></li>
				</ul>
		</div>

		<div id="q_10" style="display: none;">
				<p>【質問10】</p>
				<ul>
					<li class="even"><a class="btn" href="#a_01">Yes</a></li>
					<li class="odd"><a class="btn" href="#a_01">No</a></li>
				</ul>
		</div>

		<div id="a_01" style="display: none;">
				<p>【結果】あなたは・・・・・</p>
				<ul>
					<li class="even"><a class="btn" href="#q_01">最初へ戻る</a></li>

				</ul>
		</div>

</div>
