<div class="container-fluid">
			<div class="flex-column flex-sm-row" style="display: flex; align-items: flex-start; gap: 20px; padding: 20px;">
				<div style="flex-shrink: 0;">
					<?php if (has_post_thumbnail()) : ?>
						<div class="container-fluid d-flex justify-content-center align-items-center">
							<?php the_post_thumbnail('medium', ['class' => 'resimg rounded m-0']); ?>
						</div>
					<?php endif; ?>

				</div>
				<div style="flex-grow: 1;">
					<h2 style="margin-top: 0; border-bottom: 3px solid #32CD32; display: inline-block; padding-bottom: 5px; color: #007bff;"><?php the_title(); ?></h2>
					<p style="border-right: 2px #00B518 solid; text-align: justify;" class="px-3">
						<?php
						$content = get_the_content();
						$content = wp_strip_all_tags($content);
						if (mb_strlen($content) > 300) {
							$content = mb_substr($content, 0, 300) . '...';
						}
						?>
					<p class="p-0 m-0 text-secondary" style="text-align: justify;"><?= esc_html($content); ?> </p>
					<div class="container-fluid text-end">
						<a href="<?php the_permalink(); ?>" class="mt-2" style="color: #00B518;">Read More...</a>
					</div>
					</p>
				</div>
			</div>
		</div>