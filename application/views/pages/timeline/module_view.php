<?php
if ($timeline_data != NULL) {
	foreach($timeline_data['modules'] as $module_id => $module_name) {
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
        <div class="article <?php print (($month <= 6 && $counter == 1) ? 'now' : (($counter == 1) ? 'now2' : '')); ?> <!--current_step-->">
            <div class="a_title"><span class="box"></span><?php print $chapter_name; ?></div>
            <div class="topics">
            	<?php
				foreach($timeline_data['topics'][$chapter_id] as $topic) {
				?>
                <div class="topic"><a class="thelink" href=""><?php print $topic['topic']; ?></a> <a href="" class="star glyphicon glyphicon-star-empty"></a></div>
                <?php	
				}
				?>
            </div>
        </div>
        <?php	
			$counter++;
		}
		?>
    	<!--
        <div class="article <?php print (($month <= 6) ? 'now' : 'now2'); ?> current_step">
            <div class="a_title"><span class="box"></span>Introduction</div>
            <div class="topics">
                <div class="topic"><a class="thelink" href="">Stop treating symptoms <strong>CURE</strong> the cause.</a> <a href="" class="star glyphicon glyphicon-star-empty"></a></div>
                <div class="topic"><a class="thelink" href=""><strong>Mindset Matters:</strong> Fixed Mindset and Growth Mindset</a> <a href="" class="star glyphicon glyphicon-star-empty"></a></div>
            </div>
        </div>
        
        <div class="article">
            <div class="a_title"><span class="box"></span>Mind-Body</div>
            <div class="topics">
                <div class="topic"><a class="thelink" href=""><strong>Stress:</strong>  About stress and the body</a> <a href="" class="star glyphicon glyphicon-star-empty"></a></div>
                <div class="topic"><a class="thelink" href=""><strong>Stress Management:</strong>  The five Bs</a> <a href="" class="star glyphicon glyphicon-star-empty"></a></div>
                <div class="topic"><a class="thelink" href=""><strong>Exercise:</strong>  When you feel stress, get physical.</a> <a href="" class="star glyphicon glyphicon-star-empty"></a></div>
            </div>
        </div>
        
        <div class="article">
            <div class="a_title"><span class="box"></span>Nutrition</div>
            <div class="topics">
                <div class="topic"><a class="thelink" href="">Stop treating symptoms <strong>CURE</strong> the cause.</a> <a href="" class="star glyphicon glyphicon-star-empty"></a></div>
                <div class="topic"><a class="thelink" href=""><strong>Mindset Matters:</strong> Fixed Mindset and Growth Mindset</a> <a href="" class="star glyphicon glyphicon-star-empty"></a></div>
            </div>
        </div>
        
        <div class="article">
            <div class="a_title"><span class="box"></span>Nutrition</div>
            <div class="topics">
                <div class="topic"><a class="thelink" href="">Stop treating symptoms <strong>CURE</strong> the cause.</a> <a href="" class="star glyphicon glyphicon-star-empty"></a></div>
                <div class="topic"><a class="thelink" href=""><strong>Mindset Matters:</strong> Fixed Mindset and Growth Mindset</a> <a href="" class="star glyphicon glyphicon-star-empty"></a></div>
            </div>
        </div>
    	-->
    </div>
    <div class="clearall"></div>
</section>

<?php
	}
}
?>