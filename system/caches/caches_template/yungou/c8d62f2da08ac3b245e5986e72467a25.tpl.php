<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>
<!DOCTYPE html>
<html>
<head id="Head1"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" /><title>
	最新揭晓 - <?php echo $webname; ?>触屏版
</title><meta content="app-id=518966501" name="apple-itunes-app" /><meta content="yes" name="apple-mobile-web-app-capable" /><meta content="black" name="apple-mobile-web-app-status-bar-style" /><meta content="telephone=no" name="format-detection" />
<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css" rel="stylesheet" type="text/css" />
<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/lottery.css" rel="stylesheet" type="text/css" />
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
 <script id="pageJS" data="<?php echo G_TEMPLATES_JS; ?>/mobile/Lottery.js" language="javascript" type="text/javascript"></script> 
</head>
<body>
<div class="h5-1yyg-v1" id="loadingPicBlock">
    
<!-- 栏目页面顶部 -->
<?php include templates("mobile/index","header1");?>


<!-- 内页顶部 -->

    <section class="revealed" style="top: 49px;margin-bottom: 48px;">
	    <div id="divLottery" class="revCon">
	    	<style>
				.touxianga{
					position: absolute;
					right: 0px;
					top: 20px;
				}
	    	</style>
            <div id="divLotteryLoading" class="loading" style="height: 80px;"><b></b>正在加载</div>
            <a id="btnLoadMore" class="loading" href="javascript:;" style="display:none;"><i class="jiazai"></i>点击加载更多</a>
        </div>
    </section>
    
<?php include templates("mobile/index","footer");?>

<script language="javascript" type="text/javascript">
  var Path = new Object();
  Path.Skin="<?php echo G_TEMPLATES_STYLE; ?>";  
  Path.Webpath = "<?php echo WEB_PATH; ?>";
  Path.path = "<?php echo G_WEB_PATH; ?>";
  Path.imgpath = "<?php echo G_WEB_PATH; ?>/statics";
  
var Base={head:document.getElementsByTagName("head")[0]||document.documentElement,Myload:function(B,A){this.done=false;B.onload=B.onreadystatechange=function(){if(!this.done&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){this.done=true;A();B.onload=B.onreadystatechange=null;if(this.head&&B.parentNode){this.head.removeChild(B)}}}},getScript:function(A,C){var B=function(){};if(C!=undefined){B=C}var D=document.createElement("script");D.setAttribute("language","javascript");D.setAttribute("type","text/javascript");D.setAttribute("src",A);this.head.appendChild(D);this.Myload(D,B)},getStyle:function(A,B){var B=function(){};if(callBack!=undefined){B=callBack}var C=document.createElement("link");C.setAttribute("type","text/css");C.setAttribute("rel","stylesheet");C.setAttribute("href",A);this.head.appendChild(C);this.Myload(C,B)}}
function GetVerNum(){var D=new Date();return D.getFullYear().toString().substring(2,4)+'.'+(D.getMonth()+1)+'.'+D.getDate()+'.'+D.getHours()+'.'+(D.getMinutes()<10?'0':D.getMinutes().toString().substring(0,1))}
Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile/Bottom.js?v='+GetVerNum());
</script>

</div>


</body>
</html>
