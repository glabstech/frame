<?php get_header(); ?>

<main id="main">
		<?php
			$titleOption = [
				'title' => get_the_title(),
				'sub_title' => 'Blog',
				'background' => 'http://profacc.local/wp-content/uploads/2019/10/page-header-bg.png',
				'heading_height' => ''
			];
			include('includes/partials/_header.php');
			// include_once('includes/partials/frame-partials.php');
		?>	
		<div class="article-wrapper">
			<div class="container mb-5">
				<div class="row">
					<div class="col-8">
						<article class="main-content">
							<div class="post-meta mb-2">
								<label style="font-weight:bold;">Published: <?php echo get_the_date() ?></label>
								
							</div>
						<?php
							
							echo $post->post_content;
							// echo get_the_content(get_the_ID()) 
						?>
						</article>
					</div>
					<div class="col-4">
						<div class="side-panel">
							<?php
								dynamic_sidebar('side-panel');
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			$sections = get_field('section','option')['section'];
			if(!empty($sections)){
				$i = 0;
					$sectionIndex = 0;
			
					foreach($sections as $section){
						$sectionIndex++;
			
						$type = $section['acf_fc_layout'];
						//var_dump($section);
						// var_dump($section);
						//print("<pre>".print_r($section,true)."</pre>");
			
						$fr_component = (object)$section[$type];
						//print("<pre>".print_r($fr_component,true)."</pre>");
						//var_dump($fr_component);
						//init settings
						$fr_settings = $section['settings'];
						$fr_settings['index'] = $sectionIndex;
						$fr_settings['background'] = '';
						$fr_settings = (object)$fr_settings;
			
						$fr_settings->id = !empty($fr_settings->id)?'id="'.$fr_settings->id.'"':'';
			
						//init padding
						$fr_settings->padding =
						 (!empty($fr_settings->padding['top'])?'padding-top:'.$fr_settings->padding['top'].'px;':'')
						.(!empty($fr_settings->padding['right'])?'padding-right:'.$fr_settings->padding['right'].'px;':'')
						.(!empty($fr_settings->padding['bottom'])?'padding-bottom:'.$fr_settings->padding['bottom'].'px;':'')
						.(!empty($fr_settings->padding['left'])?'padding-left:'.$fr_settings->padding['left'].'px;':'');
			
						//init margin
						$fr_settings->margin =
						 (!empty($fr_settings->margin['top'])?'margin-top:'.$fr_settings->margin['top'].'px;':'')
						.(!empty($fr_settings->margin['right'])?'margin-right:'.$fr_settings->margin['right'].'px;':'')
						.(!empty($fr_settings->margin['bottom'])?'margin-bottom:'.$fr_settings->margin['bottom'].'px;':'')
						.(!empty($fr_settings->margin['left'])?'margin-left:'.$fr_settings->margin['left'].'px;':'');
			
						//init zindex
						$fr_settings->zindex = !empty($fr_settings->zindex)?'z-index:'.$fr_settings->zindex:'';
						//init background
						$fr_settings->background =
						(!empty($fr_settings->background_image)?'background-image:url('.$fr_settings->background_image['url'].');':'').
						(!empty($fr_settings->background_color)?'background-color:'.$fr_settings->background_color.';':'');
						
			
						include('includes/partials/'.'_'.$type.'.php');
						
					}
			}
		?>

</main>

<?php //dynamic_sidebar('pre-footer'); ?>

<?php get_footer(); ?>