<section class="copy my-5 py-3">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col text-center">
				<?php if (get_sub_field('title')) : ?>
					<h2 class="text700">
						<?php echo get_sub_field('title'); ?>
					</h2>
				<?php endif; ?>
				<?php if (get_sub_field('text')) : ?>
					<div class="w-50 mx-auto mb-2">
						<?php echo get_sub_field('text'); ?>
					</div>
				<?php endif; ?>
				<?php if (have_rows('links')) : ?>
					<div class="d-flex justify-content-center pt-2">
						<?php while (have_rows('links')) : the_row(); ?>
							<a href="<?php echo get_sub_field('link')['url']; ?>" class="h5 text700 mx-5 text-underline">
								<?php echo htmlspecialchars_decode(get_sub_field('link')['title'], ENT_QUOTES); ?>
							</a>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php if (have_rows('cards')) : ?>
	<section class="cards mb-5 pb-4">
		<div class="container">
			<div class="row">
				<?php while (have_rows('cards')) : the_row(); ?>
					<div class="col-lg-6 mb-2">
						<div class="cards__card position-relative mb-4 p-0">
							<div class="cards__card-img">
								<img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['title']; ?>" class="bg-cover-abs">
							</div>
							<div class="cards__card-corner position-absolute bottom-0 left-0 bg-white p-3 pr-5">
								<?php if (get_sub_field('title')) : ?>
									<span class="h3 text700 d-block">
										<?php echo get_sub_field('title'); ?>
									</span>
								<?php endif; ?>
								<?php if (get_sub_field('link')) : ?>
									<span class="text-underline">
										<?php echo get_sub_field('link')['title']; ?>
									</span>
								<?php endif; ?>
							</div>
							<?php if (get_sub_field('link')) : ?>
								<a href="<?php echo get_sub_field('link')['url']; ?>" class="whole-element-link"></a>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; ?>