<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Pinkvilla Test</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="<?php echo JS;?>feeds.js" type="text/javascript" charset="utf-8"></script>
		<style type="text/css">
			body{
				background-color:#fff;
				margin:40px;
				font:13px/20px normal Helvetica,Arial,sans-serif;
				color:#4f5155
			}
			a{
				color:#003399;
				background-color:transparent;
				font-weight:normal;
				text-decoration:none
			}
			a:hover{
				color:#97310e
			}
			h1{
				color:#444;
				background-color:transparent;
				border-bottom:1px solid #d0d0d0;
				font-size:19px;
				font-weight:normal;
				margin:0 0 14px 0;
				padding:14px 15px 10px 15px
			}
			code{
				font-family:Consolas,Monaco,Courier New,Courier,monospace;
				font-size:12px;background-color:#f9f9f9;border:1px solid #d0d0d0;color:#002166;display:block;margin:14px 0 14px 0;padding:12px 10px 12px 10px
			}
			#m_body{
				margin:0 15px 0 15px;min-height:96px
			}
			p{
				margin:0 0 10px;padding:0
			}
			p.m_footer{
				text-align:right;
				font-size:11px;
				border-top:1px solid #d0d0d0;
				line-height:32px;
				padding:0 10px 0 10px;
				margin:20px 0 0 0;
			}
			#m_container{
				margin:10px;border:1px solid #d0d0d0;
			}
			.overlay{
				position:fixed;
				top:0;
				left:50;
				background:rgba(0,0,0,0.1);
				z-index:9999;
				width:100%;
				height:100%;
				display:none;
			}
			.loader-spinner{
				position:absolute;
				top:50%;
				left:50%;
			}
			.m_img-container{
				float:left;
			}
			.m_text-container{
				margin-left:110px;
				display:block;
			}
			.m_saboxplugin-wrap{
				width:100%;
				display:inline-block;
				margin-bottom:5px;
				padding-bottom:5px;
				border-bottom:1px solid #ddd;
			}
		</style>
	</head>
	<body>
		<div id="m_pink-villa-div">
			<?php foreach($dataFeed->nodes as $feeds):?>
			<div class="m_saboxplugin-wrap">
				<div class="m_saboxplugin-gravatar">
					<div class="m_vcard m_author">
						<img class="m_img-container" src="https://www.pinkvilla.com<?php echo $feeds->node->ImageStyle_thumbnail;?>" width="100" height="100">
						<span class="m_text-container">
							<?php echo $feeds->node->title;?>
						</span>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<?php endforeach;?>
		</div>
		<div class="overlay"> <!-- on submit loader -->
            <div class="loader-spinner">
                <img class="m_img-container" src="<?php  echo IMG;?>ajax_loader-3.gif" alt="loading..." />
            </div>
        </div>
	</body>
</html>
