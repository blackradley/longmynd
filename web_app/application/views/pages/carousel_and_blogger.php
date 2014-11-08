<section class="content-main">
<h1><a class="secret" href="<?php echo  $blogger_page->sourceUrl ?>"><?php echo  $blogger_page->title ?></a></h1>
	<div id="myCarousel" class="carousel visible-desktop visible-tablet hidden-phone">
		<div class="carousel-inner">
		<?php $first = true; ?>
		<?php foreach ($carousel->set as $photo): ?>
			<div class="item<?php ($first)? print ' active"': print '"' ?>><?php $first = false; ?>
				<img src="<?php echo $photo['image']?>" alt="<?php echo $photo['title']?>" style="height: 100%; width: 100%;">
				<div class="carousel-caption">
					<h4><a class="secret" href="<?php echo $photo['sourceUrl']?>"><?php echo $photo['title']?></a></h4>
					<p class="visible-desktop hidden-tablet hidden-phone"><?php echo $photo['content']?></p>
				</div>
			</div>
		<?php endforeach ?>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&#8249;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&#8250;</a>
	</div>
	<div class="blogContent">
	<p><?php echo  $blogger_page->content ?></p>
	</div>
</section>