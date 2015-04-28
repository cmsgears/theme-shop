<?php
use cmsgears\cms\widgets\Blog;
?>
<section class="module module-blog" id="module-blog">
	<div class="texture texture1"></div>
	<div class="module-wrap-content content-80">
		<div class="module-header">
			<h1 class="align-middle"><?=$page->name?></h1>
		</div>
		<div class="module-content">
			<?=$page->content?>
		</div>
		<?php
		    echo Blog::widget([
		        'options' => [ 'class' => 'blog-posts-regular' ]
		    ]);
		?>
	</div>
</section>