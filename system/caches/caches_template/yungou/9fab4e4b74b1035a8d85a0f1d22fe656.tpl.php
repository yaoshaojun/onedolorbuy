<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>
<!DOCTYPE html>
<html>
<head><meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $key; ?></title>
<meta content="app-id=518966501" name="apple-itunes-app" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" /><meta content="yes" name="apple-mobile-web-app-capable" /><meta content="black" name="apple-mobile-web-app-status-bar-style" /><meta content="telephone=no" name="format-detection" /><link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css" rel="stylesheet" type="text/css" /><link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/single.css" rel="stylesheet" type="text/css" /><script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script><script id="pageJS" data="<?php echo G_TEMPLATES_JS; ?>/mobile/BuyRecord.js" language="javascript" type="text/javascript"></script></head>
<body style="background: #f4f4f4;">
<div class="h5-1yyg-v1" id="loadingPicBlock">
    
<!-- 栏目页面顶部 -->


<!-- 内页顶部 -->

    <header class="header" style="position: fixed;width: 100%;z-index: 99999999;">
	<h1 style="width: 100%;text-align: center;float: none;top: 0px;left: 0px;font-size: 25px;" class="fl">
		<span style="display: block;height: 49px;line-height: 49px;">
			<a style="font-size: 20px;line-height: 49px;" href="<?php echo WEB_PATH; ?>/mobile/mobile">
				商品晒单
			</a>
		</span>

		<!--<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>"/>
		-->
		<!--<img src="/statics/templates/yungou/images/sjlogo.png"/>
		-->
	</h1>
	<a id="fanhui" class="cefenlei" onclick="history.go(-1)" href="javascript:;">
		<img width="30" height="30" src="/statics/templates/yungou/images/mobile/fanhui.png"></a>
	<div class="fr head-r" style="position: absolute;right: 0px;top: 0px;">
		<!--<a href="<?php echo WEB_PATH; ?>/mobile/user/login" class="z-Member"></a>
	-->
	<a href="<?php echo WEB_PATH; ?>/mobile/mobile" class="z-shop" style="background-position: 12px -73px;"></a>
</div>
</header>

    <input name="hidCodeID" type="hidden" id="hidCodeID" value="18101" />
    <input name="hidIsEnd" type="hidden" id="hidIsEnd" value="1" />

    <!-- 晒单记录 -->
    <section class="goodsCon" style="padding-top: 52px;">
	    <div class="cSingleCon">
			<p class="cEntry">已有<em class="orange"><?php echo count($shaidan); ?></em>个幸运者晒单，<em class="orange"><?php echo $sum; ?></em>条评论！</p>
	        <div id="postList" class="cSingleCon2" style="display:block;" z-minheight>
				<?php $ln=1;if(is_array($shaidan)) foreach($shaidan AS $sd): ?>
				<div class="cSingleInfo">
					<dl class="fl"><a href="<?php echo WEB_PATH; ?>/mobile/mobile/userindex/<?php echo $sd['sd_userid']; ?>"><img src="<?php if(get_user_key($sd['sd_userid'],'img')!='photo/member.jpg'): ?>
						<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_key($sd['sd_userid'],'img'); ?>
					<?php elseif (get_user_key($sd['sd_userid'],'headimg')!=''): ?>
						<?php echo get_user_key($sd['sd_userid'],'headimg'); ?>
					<?php  else: ?>
						<?php echo G_UPLOAD_PATH; ?>/<?php echo get_user_key($sd['sd_userid'],'img'); ?>
					<?php endif; ?>"><b></b></a></dl>
					
					<div class="cSingleR m-round" id="<?php echo $sd['sd_id']; ?>">
						<ul>
							<li><em class="blue" uweb="<?php echo $sd['sd_userid']; ?>"><?php echo get_user_key($sd['sd_userid'],'username'); ?></em><strong>：</strong><span><?php echo $sd['sd_title']; ?></span></li>
							<?php 
								$qs=$this->db->GetOne("select * from `@#_shoplist` where `id`='$sd[sd_shopid]'");				
							 ?>							
							<li><h3><b>第<?php echo $qs['qishu']; ?>期晒单</b> <?php echo date('Y-m-d H:i:s',$sd['sd_time']); ?></h3></li>
							<li><p><?php echo $sd['sd_content']; ?></p></li>
							<li class="maxImg">
							<?php 
								$p=trim($sd['sd_photolist'],";");
								$img=explode(';',$p);
								foreach($img as $i){
									echo '<img src="'.G_UPLOAD_PATH.'/'.$i.'">';
								}								
							 ?>
							</li>
							<li><dd><s></s><strong><?php echo $sd['sd_zhan']; ?></strong>人羡慕嫉妒</dd><dd><i></i><strong><?php echo $sd['sd_ping']; ?></strong>条评论</dd></li>
						</ul><b class="z-arrow"></b>
					</div>
				</div>
				<?php  endforeach; $ln++; unset($ln); ?>
			</div>
        </div>
    </section>
   

    
<script language="javascript" type="text/javascript">
//跳转页面
	$(".cSingleInfo li:not(:first)").click(function(){
		var id=$(this).parent().parent().attr('id');
		if(id){
			window.location.href="<?php echo WEB_PATH; ?>/mobile/shaidan/detail/"+id;
		}			
	});
	$(".cSingleInfo .blue").click(function(){
		var id=$(this).attr('uweb');
		if(id){
			window.location.href="<?php echo WEB_PATH; ?>/mobile/mobile/userindex/"+id;
		}	
	});	
</script>

</div>
</body>
</html>
