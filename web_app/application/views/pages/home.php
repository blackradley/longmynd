<section>
	<div id="myCarousel" class="carousel visible-desktop visible-tablet hidden-phone">
		<div class="carousel-inner">
		<?php $first = true; ?>
		<?php foreach ($carousel->set as $photo): ?>
			<div class="item<?php ($first)? print ' active"': print '"' ?>><?php $first = false; ?>
				<img src="<?php echo $photo['image']?>" alt="<?php echo $photo['title']?>" style="height: 100%; width: 100%;">
	 			<div class="carousel-caption">
					<h4><?php echo $photo['title']?></h4>
					<p class="visible-desktop hidden-tablet hidden-phone"><?php echo $photo['content']?></p>
				</div>
			</div>
		<?php endforeach ?>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&#8249;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&#8250;</a>
	</div>
</section>

<section>
	<h1><a class="secret" href="<?php echo $graph->sourceUrl?>">About</a></h1>
	<p><?php echo $graph->about?></p>
	<p><?php echo $graph->description?></p>
</section>

<section>
	<h2><a class="secret" href="<?php echo $events_list->sourceUrl?>">What's On</a></h2>
	<?php foreach ($events_list->events as $event): ?>
		<div class="whatson">
			<div class="img"><img class="img-rounded pull-left" style="margin-right:10px;" src="<?php echo $event->pic?>" alt="<?php echo $event->name?>"></div>
			<div class="content">
				<h4 itemprop="summary"><a href="<?php echo $event->url?>"><?php echo $event->name?></a></h4>
				<p class="when"><?php echo $event->when?></p>
				<p itemprop="description">
					<?php echo $event->descriptionLong?>
				</p>
			</div>
		</div>
	<?php endforeach ?>
</section>