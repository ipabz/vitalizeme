<?php
if ($timeline_data != NULL) {
	foreach($timeline_data['modules'] as $module_id => $module_name) {
		$main_counter = 1;
?>

<section class="the_contents">
    <div class="tc_left">
        <div class="the_title"><?php print $module_name; ?></div>
    </div>
    <div class="tc_right">
    	<?php
		$counter = 1;
		
		foreach($timeline_data['chapters'][$module_id] as $chapter_id => $chapter_name) {
		?>
        <div id="chapter<?php print $chapter_id; ?>" class="article <?php print (($month <= 6 && $counter == 1) ? 'now' : (($counter == 1) ? 'now2' : '')); ?> <?php print (($current_step == $chapter_id OR ($counter == 1 && $current_step == 0)) ? 'current_step' : ''); ?>">
            <div class="a_title"><span class="box"></span><?php print $chapter_name; ?></div>
            <div class="topics">
            	<?php
				foreach($timeline_data['topics'][$chapter_id] as $topic) {
				?>
                <div class="topic"><a class="thelink" href="<?php print site_url('timeline/view_topic/'.$topic['topic_id']); ?>"><?php print $topic['topic']; ?></a> <a data-chapter-id="<?php print $chapter_id; ?>" href="<?php print site_url('pages/track/'.$topic['topic_id'].'/'.$chapter_id); ?>" class="star glyphicon glyphicon-star<?php print $this->timeline_model->topic_done($topic['topic_id']); ?>"></a></div>
                <?php	
				}
				?>
            </div>
        </div>
        <?php	
			$counter++;
		}
		?>
    </div>
    <div class="clearall"></div>
</section>

<?php
	}
}
?>