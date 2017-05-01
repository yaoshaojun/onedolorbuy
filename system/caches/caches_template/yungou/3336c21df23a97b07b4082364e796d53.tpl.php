<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>注册 - <?php echo $webname; ?>触屏版</title>
    <meta content="app-id=518966501" name="apple-itunes-app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/comm.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile/login.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
    <script id="pageJS" data="<?php echo G_TEMPLATES_JS; ?>/mobile/Register.js" language="javascript" type="text/javascript"></script>
</head>

<body style="background: #f4f4f4;">
    <div class="h5-1yyg-v1" id="content">
        <!-- 栏目页面顶部 -->
        <!-- 内页顶部 -->
        <header class="header" style="position: fixed;width: 100%;z-index: 99999999;">
            <h1 style="width: 100%;text-align: center;float: none;top: 0px;left: 0px;font-size: 25px;" class="fl">
    <span style="display: block;height: 49px;line-height: 49px;">
      <a style="font-size: 20px;line-height: 49px;" href="<?php echo WEB_PATH; ?>/mobile/mobile">
        帐号注册
      </a>
    </span>

    <!--<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>"/>
    -->
    <!--<img src="/statics/templates/yungou/images/sjlogo.png"/>
    -->
  </h1>
            <a id="fanhui" class="cefenlei" onclick="history.go(-1)" href="javascript:;">
                <img width="30" height="30" src="/statics/templates/yungou/images/mobile/fanhui.png"></a>
            <div class="fr head-r" style="position: absolute;right: 6px;top: 10px;">
                <!--<a href="<?php echo WEB_PATH; ?>/mobile/user/login" class="z-Member"></a>
  -->
                <a href="<?php echo WEB_PATH; ?>/mobile/mobile" class="z-shop" style="background-position: 2px -73px;"></a>
            </div>
        </header>
        <section>
            <div class="registerCon" style="padding-top: 49px;">
                <ul>
                    <li>
                        <input id="userMobile" type="tel" placeholder="请输入您的手机号码" class="rText">
                        <s class="rs1"></s>
                    </li>
                    <li>
                        <input type="password" id="txtPassword" placeholder="密码" class="rText">
                        <s style="margin-left: 0;" class="rs3"></s>
                    </li>
                    <li style="height: 45px;clear:both;">
                        <script>
                        $(function() {
                            $("#checkcode").attr("data", $("#checkcode").attr("src"));
                            $("#checkcode").click(function() {
                                $(this).attr("src", $(this).attr("data") + "&=" + new Date().getTime());
                            });
                        })
                        </script>
                        <style>
                        #yanzhengs {
                            background: url(<?php echo G_WEB_PATH; ?>/statics/templates/yungou/images/mobile/loginSet1.png) 7px 11px no-repeat;
                            background-color: #fff;
                            background-size: 20px auto;
                        }
                        </style>
                        <input id="yanzhengs" type="text" ajaxurl="<?php echo WEB_PATH; ?>/member/user/codeCheck" placeholder="验证码" ajaxurl="<?php echo WEB_PATH; ?>/member/user/codeCheck" class="inputxt" name="captcha" type="text" style="padding-left: 30px;width: 70%;float: left;" />
                        <span class="fog" style="display: block;width: 20%;float: left;height: 45px;"><img style="border-radius: 5px; margin-left: 5px;margin-top: 10px;" id="checkcode" src="<?php echo WEB_PATH; ?>/api/checkcode/image/80_27/"/></span>
                    </li>
                    <li><a id="btnNext" class="nextBtn  orgBtn">下一步</a></li>
                    <li><a style="text-align: right;line-height: 32px;" href="/index.php/mobile/user/login">已有帐号，点击登陆</a></li>
                    <li><span id="isCheck"><em></em>我已阅读并同意</span><a href="<?php echo WEB_PATH; ?>/mobile/mobile/terms">用户协议</a></li>
                </ul>
                <!--
            <div class="fastLogin">
            <?php 
                    $conn_cfg = System::load_app_config("connect",'','api');
             ?>  
                              <h2>        
                                  <span class="line_l"></span> 一键登录<span class="line_r"></span>
                                </h2>     
                                <div class="fastInfo">
                                      <a  href="<?php echo WEB_PATH; ?>/mobile/user/qqlogin">
                                <?php if($conn_cfg['qq']['off']): ?>   
                                          <img src="" alt="" class="user_login_q">
                                <?php endif; ?> 
                                          </a>
                                          <a  href="<?php echo WEB_PATH; ?>/api/wxlogin">
                                <?php if($conn_cfg['weixin']['off']): ?>   
                                          <img src="" alt="" class="user_login_w">
                                <?php endif; ?> 
                                      </a>
                                 </div>
              </div>
              -->
            </div>
        </section>
        <?php include templates("mobile/index","footer");?>
        <script language="javascript" type="text/javascript">
        var Path = new Object();
        Path.Skin = "<?php echo G_WEB_PATH; ?>/statics/templates/<?php echo _cfg('templates_name'); ?>";
        Path.Webpath = "<?php echo WEB_PATH; ?>";

        var Base = {
            head: document.getElementsByTagName("head")[0] || document.documentElement,
            Myload: function(B, A) {
                this.done = false;
                B.onload = B.onreadystatechange = function() {
                    if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) {
                        this.done = true;
                        A();
                        B.onload = B.onreadystatechange = null;
                        if (this.head && B.parentNode) {
                            this.head.removeChild(B)
                        }
                    }
                }
            },
            getScript: function(A, C) {
                var B = function() {};
                if (C != undefined) {
                    B = C
                }
                var D = document.createElement("script");
                D.setAttribute("language", "javascript");
                D.setAttribute("type", "text/javascript");
                D.setAttribute("src", A);
                this.head.appendChild(D);
                this.Myload(D, B)
            },
            getStyle: function(A, B) {
                var B = function() {};
                if (callBack != undefined) {
                    B = callBack
                }
                var C = document.createElement("link");
                C.setAttribute("type", "text/css");
                C.setAttribute("rel", "stylesheet");
                C.setAttribute("href", A);
                this.head.appendChild(C);
                this.Myload(C, B)
            }
        }

        function GetVerNum() {
            var D = new Date();
            return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1))
        }
        Base.getScript('<?php echo G_TEMPLATES_JS; ?>/mobile/Bottom.js');
        var checkcode = document.getElementById('checkcode');
        checkcode.src = checkcode.src + new Date().getTime();
        var src = checkcode.src;
        checkcode.onclick = function() {
            this.src = src + '/' + new Date().getTime();
        }
        </script>
    </div>
</body>

</html>