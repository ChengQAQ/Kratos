<?php
/**
 * The template for displaying pages
 *
 * Stylesheet from osu!web https://github.com/ppy/osu-web
 * This file is licensed under the GNU Affero General Public License v3.0
 * 
 * Template Name: 友链模板
 * @package Milkice
 * @version 2.4
 */
$page_side_bar = kratos_option('page_side_bar');
$page_side_bar = (empty($page_side_bar)) ? 'right_side' : $page_side_bar;
get_header();
get_header('banner'); ?>
<style>.beatmapsets{background-color:#eee;padding:20px}.beatmapsets--dimmed .beatmapsets__content{opacity:.2}.beatmapsets__empty{text-align:center;width:100%;margin:10px 0 -20px}.beatmapsets__item{margin:5px;flex:none;width:calc(100% - 10px)}@media (min-width:840px){.beatmapsets__item{width:calc(50% - 10px)}.u-ellipsis-overflow-desktop{white-space:nowrap!important;text-overflow:ellipsis!important;overflow:hidden!important}}.beatmapsets__items{margin:-5px;display:flex;flex-wrap:wrap}.beatmapset-panel{transform:translateZ(0);color:#555}.beatmapset-panel__content{height:75px;padding:10px}.beatmapset-panel__count{display:flex;align-items:center;justify-content:flex-end}.beatmapset-panel__count-number{padding-right:5px}.beatmapset-panel__counts-box{position:absolute;right:10px;top:10px}.beatmapset-panel__difficulties{position:absolute;bottom:10px;left:10px;display:flex;align-items:center;font-size:12px}.beatmapset-panel__difficulty-icon{margin-right:5px}.beatmapset-panel__difficulty-count{margin-right:10px;margin-left:3px;font-weight:700}.beatmapset-panel__header{text-shadow:0 1px 3px rgba(0,0,0,.75);border-radius:4px 4px 0 0;background-image:url(<?php echo get_template_directory_uri();?>/images/layout/beatmaps/default-bg.png);background-position:center;background-size:cover;color:#fff;font-weight:400;font-style:italic}@media (-webkit-min-device-pixel-ratio:1.5),(min--moz-device-pixel-ratio:1.5),(-o-min-device-pixel-ratio:3/2),(min-resolution:1.5dppx){.beatmapset-panel__header{background-image:url(<?php echo get_template_directory_uri();?>/images/layout/beatmaps/default-bg@2x.png);background-size:auto auto}}.beatmapset-panel__header-text{text-shadow:0 2px 4px rgba(0,0,0,.75);font-weight:600}.beatmapset-panel__header-text--title{font-size:130%}.beatmapset-panel__icon{color:#555;padding-left:5px}.beatmapset-panel__icon:active,.beatmapset-panel__icon:focus,.beatmapset-panel__icon:hover{color:#777}.beatmapset-panel__play,.beatmapset-panel__play:active,.beatmapset-panel__play:focus,.beatmapset-panel__play:hover{color:#fff;text-decoration:none}.beatmapset-panel__icons-box{flex:none}.beatmapset-panel__mapper-source-box{font-size:70%;font-weight:600;flex:1;min-width:0;margin-top:4px;margin-left:4px}.beatmapset-panel__panel{transform:translateZ(0);box-shadow:0 1px 3px rgba(0,0,0,.25);border-radius:4px;width:100%;background:#fff}.beatmapset-panel__play{transition:all 120ms ease-in-out;position:absolute;left:10px;top:5px;font-size:40px;opacity:0;line-height:1}.beatmapset-panel__play:hover{color:#fc2}.beatmapset-panel:hover .beatmapset-panel__play{opacity:1}.beatmapset-panel--previewing .beatmapset-panel__play{color:#fc2;opacity:1}.beatmapset-panel__preview-bar{background-color:#fc2;position:absolute;bottom:0;left:0;width:0;height:3px;transition-timing-function:linear}.beatmapset-panel__shadow,.beatmapset-panel__thumb::before{left:0;top:0;width:100%;content:' ';position:absolute}.beatmapset-panel__row{display:flex}.beatmapset-panel__shadow{border-radius:4px;transform:translateZ(0);height:100%;box-shadow:0 10px 20px rgba(0,0,0,.25);transition:all 120ms ease-in-out;opacity:0;pointer-events:none}.beatmapset-panel:hover .beatmapset-panel__shadow{opacity:1}.beatmapset-panel__thumb{color:#fff;text-decoration:none;display:block;border-radius:4px 4px 0 0;background-position:center;background-size:cover;height:130px}.beatmapset-panel__thumb:active,.beatmapset-panel__thumb:focus,.beatmapset-panel__thumb:hover{color:#fff;text-decoration:none}.beatmapset-panel__thumb::before{height:100%;background-image:linear-gradient(to bottom,rgba(0,0,0,.1),rgba(0,0,0,.7))}.beatmapset-panel__title-artist-box{position:absolute;left:10px;bottom:10px;width:calc(100% - 20px)}.beatmapset-panel__video-icon{padding:10px;transition:all 120ms ease-in-out}.beatmapset-panel:hover .beatmapset-panel__video-icon{opacity:0}.u-blackout-visible{z-index:511!important}.u-ellipsis-overflow{white-space:nowrap!important;text-overflow:ellipsis!important;overflow:hidden!important}.u-hidden{display:none!important}.u-hide-by-height{height:0!important;margin:0!important;overflow:hidden!important}.u-nav-float{z-index:999!important}.u-nav-popup{z-index:998!important}*,:after,:before{position:relative;-webkit-box-sizing:border-box;box-sizing:border-box}.beatmap-icon::before,.beatmap-icon__shadow{position:absolute;content:' ';height:auto;border-radius:50%}.beatmap-icon{color:#fff;font-size:22px;display:flex}.beatmap-icon::before{background-image:url(/images/backgrounds/button.svg);background-position:50% 50%;background-size:cover;width:calc(100% - 4px);padding-bottom:calc(100% - 4px);top:2px;left:2px;background-color:#f6a}.beatmap-icon--large{font-size:30px}.beatmap-icon--beatmapset{font-size:40px}.beatmap-icon--easy::before{background-color:#88b300}.beatmap-icon--normal::before{background-color:#6cf}.beatmap-icon--hard::before{background-color:#fc2}.beatmap-icon--insane::before{background-color:#f6a}.beatmap-icon--expert::before{background-color:#86e}.beatmap-icon--expert-plus::before{background-color:#000}.beatmap-icon__shadow{box-shadow:0 1px 3px rgba(0,0,0,.25);width:calc(100% - 2px);padding-bottom:calc(100% - 2px);top:1px;left:1px}.beatmap-icon--with-hover:hover .beatmap-icon__shadow{box-shadow:0 10px 20px rgba(0,0,0,.25);transition:all 90ms ease-in-out}</style>
<div id="kratos-blog-post" style="background:<?php echo kratos_option('background_index_color'); ?>">
	<div class="container">
		<div class="row">
			<?php if( $page_side_bar == 'left_side' ){ ?>
				<aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
	                <div id="sidebar">
	                    <?php dynamic_sidebar('sidebar_tool'); ?>
	                </div>
	            </aside>
			<?php } ?>
            <section id="main" class='<?php echo ($page_side_bar == 'single') ? 'col-md-12' : 'col-md-8'; ?>'>
			<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<div class="kratos-hentry kratos-post-inner clearfix">
						<header class="kratos-entry-header">
							<h1 class="kratos-entry-title text-center"><?php the_title(); ?></h1>
						</header>
                        <div class="kratos-post-content"><?php the_content(); ?></div>
                        <div class="beatmapsets__content">
                            <div class="beatmapsets__items">
                            <?php
                                $bookmarks = get_bookmarks( array(
                                    'orderby'        => 'rand',
                                    'order'          => 'ASC'
                                ));
                                foreach ( $bookmarks as $bookmark ) {
                                    $attr=array();
                                    $attr['name']=$bookmark->link_name;
                                    $attr['url']=$bookmark->link_url;
                                    $attr['description']=$bookmark->link_description;
                                    foreach(explode("\n",$bookmark->link_notes) as $line){
                                        $split=explode(":",$line,2);
                                        $key=trim($split[0]);
                                        $value=trim($split[1]);
                                        if(!empty($key)&&!empty($value)){
                                            $attr[$key]=$value;
                                        }
                                    }
				    $attr['banner'] = $attr['banner'] ?: $bookmark->link_image;
                                    $iconsHTML='
                                    <div class="beatmapset-panel__row">
                                    <div class="beatmapset-panel__icons-box">';
                                    foreach($attr as $icon => $url){
                                        if(stripos($icon,"fa-")!==0) continue;
                                        $iconsHTML.='
                                            <a href="'.$url.'" class="beatmapset-panel__icon js-beatmapset-download-link" data-turbolinks="false" target="_blank">
                                                <span class="fa '.$icon.'"></span>
                                            </a>
                                        ';    
                                    }
                                    $iconsHTML.='</div></div>';
                                    echo '<div class="beatmapsets__item">
                                    <div class="beatmapset-panel">
                                        <div class="beatmapset-panel__panel">
                                            <div class="beatmapset-panel__header">
                                                <a href="'.$attr['url'].'" class="beatmapset-panel__thumb" style="background-image: url('.$attr['banner'].');" target="_blank">
                                                    <div class="beatmapset-panel__title-artist-box">
                                                        <div class="u-ellipsis-overflow beatmapset-panel__header-text beatmapset-panel__header-text--title">'.$attr['name'].'</div>
                                                        <div class="beatmapset-panel__header-text">'.$attr['owner'].'</div>
                                                    </div>
                                                    <!--div class="beatmapset-panel__counts-box">
                                                        <div class="beatmapset-panel__count">
                                                            <span class="beatmapset-panel__count-number">1,704,642</span>
                                                            <span class="fa fa-play-circle fa-fw"></span>
                                                        </div>
                                                        <div class="beatmapset-panel__count">
                                                            <span class="beatmapset-panel__count-number">729</span>
                                                            <span class="fa fa-heart fa-fw"></span>
                                                        </div>
                                                    </div-->
                                                    <div class="beatmapset-panel__preview-bar" style="transition-duration: 0s; width: 0px;"></div>
                                                </a>
                                            </div>
                                            <div class="beatmapset-panel__content">
                                                <div class="beatmapset-panel__row">
                                                    <div class="beatmapset-panel__mapper-source-box">
                                                        <div class="u-ellipsis-overflow">'.$attr['description'].'
                                                        </div>
                                                        <div class="u-ellipsis-overflow"></div>
                                                    </div>
                                                    <div class="beatmapset-panel__icons-box">
                                                        <a href="'.$attr['url'].'" class="beatmapset-panel__icon js-beatmapset-download-link" data-turbolinks="false" target="_blank">
                                                            <span class="fa fa-globe"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                '.$iconsHTML.'
                                            </div>
                                        </div>
                                        <!--a href="#" class="beatmapset-panel__play js-audio--play" data-audio-url="//b.ppy.sh/preview/176934.mp3">
                                            <span class="fa fa-play"></span>
                                        </a-->
                                        <div class="beatmapset-panel__shadow"></div>
                                    </div>
                                </div>';
                                }
                            ?> 
                            </div>
                        </div>
						<?php if( kratos_option('page_like_donate') || kratos_option('page_share') ) {?>
						<footer class="kratos-entry-footer clearfix">
								<div class="post-like-donate text-center clearfix" id="post-like-donate">
								<?php if ( kratos_option( 'page_like_donate' ) ) : ?>
					   			<a href="<?php echo kratos_option('donate_links'); ?>" class="Donate"><i class="fa fa-bitcoin"></i> 打赏</a>
					   			<?php endif; ?>
								<?php if ( kratos_option( 'page_share' ) ) : ?>
								<a href="javascript:;"  class="Share" ><i class="fa fa-share-alt"></i> 分享</a>
									<?php require_once( get_template_directory() . '/inc/share.php'); ?>
								<?php endif; ?>
					    		</div>
						</footer>
						<?php }?>
					</div>
						<div class="kratos-hentry kratos-copyright text-center clearfix">
							<img alt="GNU Affero通用公共许可证v3.0" src="<?php echo get_template_directory_uri(); ?>/images/agplv3.png">
							<h5> 本页部分样式表来源于 <a target="_blank" href="https://github.com/ppy/osu-web">osu!web</a> </h5>
							<h5> 本页采用 <a rel="license nofollow" target="_blank" href="https://www.gnu.org/licenses/agpl-3.0.en.html">GNU Affero通用公共许可证
                            </a> 进行许可</h5>
						</div>
						<?php comments_template(); ?>
				</article>
			<?php endwhile;?>
			</section>
			<?php if($page_side_bar == 'right_side'){ ?>
			<aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
                <div id="sidebar">
                    <?php dynamic_sidebar('sidebar_tool'); ?>
                </div>
            </aside>
			<?php } ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
