<section class="container-fluid" id="main-container">        
    <div id="timeline-body">
        
        <section class="page-title">My Wellness Journey</section>
        
        <section class="months">                	
            <div class="month_left">Month</div>
            <div class="month_right">                
                <?php
				if ($month < 12) {
				?>
				<img class="fourth_locked" src="assets/images/locked_icon.png" width="9" />
				<?php
				}
				?>
                <div class="wrapper">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-1 the_month text-center <?php print (($month == 10) ? 'month_current' : (($month > 10) ? 'month_passed' : '')); ?>">Ten</div>
                        <div class="col-md-1 the_month text-center <?php print (($month == 11) ? 'month_current' : (($month > 11) ? 'month_passed' : '')); ?>">Eleven</div>
                        <div class="col-md-1 the_month text-center last <?php print (($month == 12) ? 'month_current' : (($month > 12) ? 'month_passed' : '')); ?>">Twelve</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-1 the_month text-center <?php print (($month == 7) ? 'month_current' : (($month > 7) ? 'month_passed' : '')); ?>">Seven</div>
                        <div class="col-md-1 the_month text-center <?php print (($month == 8) ? 'month_current' : (($month > 8) ? 'month_passed' : '')); ?>">Eight</div>
                        <div class="col-md-1 the_month text-center last <?php print (($month == 9) ? 'month_current' : (($month > 9) ? 'month_passed' : '')); ?>">Nine</div>
                        <div class="col-md-1 locked_icon">
                            <?php
							if ($month <= 9) {
							?>
                            <img src="assets/images/locked_icon.png" width="9" />
                            <?php
							}
							?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-1 the_month text-center <?php print (($month == 4) ? 'month_current' : (($month > 4) ? 'month_passed' : '')); ?>">Four</div>
                        <div class="col-md-1 the_month text-center <?php print (($month == 5) ? 'month_current' : (($month > 5) ? 'month_passed' : '')); ?>">Five</div>
                        <div class="col-md-1 the_month text-center last <?php print (($month == 6) ? 'month_current' : (($month > 6) ? 'month_passed' : '')); ?>">Six</div>
                        <div class="col-md-1 locked_icon">
                            <?php
							if ($month <= 6) {
							?>
                            <img src="assets/images/locked_icon.png" width="9" />
                            <?php
							}
							?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 the_month text-center <?php print (($month == 1) ? 'month_current' : (($month > 1) ? 'month_passed' : '')); ?>">One</div>
                        <div class="col-md-1 the_month text-center <?php print (($month == 2) ? 'month_current' : (($month > 2) ? 'month_passed' : '')); ?>">Two</div>
                        <div class="col-md-1 the_month text-center last <?php print (($month == 3) ? 'month_current' : (($month > 3) ? 'month_passed' : '')); ?>">Three</div>
                        <div class="col-md-1 locked_icon">
                        	<?php
							if ($month <= 3) {
							?>
                            <img src="assets/images/locked_icon.png" width="9" />
                            <?php
							}
							?>
                        </div>
                    </div>
                </div>
                <div class="clearall"></div>
            </div>
            <div class="clearall"></div>
        </section>
        
        <section class="steps_lines">                	
            <div class="sl_left">
            	<?php
				if ($month <= 6) {
				?>
                <div class="<?php print $month_word; ?>_arrow"></div>
                <?php
				}
				?>                 
            </div>
            <div class="sl_right">
            	<?php
				if ($month > 6) {
				?>
                <div class="<?php print $month_word; ?>_arrow"></div>
                <?php
				}
				?>                     	                   
            </div>
            <div class="clearall"></div>
            
        </section>
        
        <section class="the_contents">
            <div class="tc_left">
                
                <div class="the_title">MINDSET Program</div>
            </div>
            <div class="tc_right">
            
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
            
            </div>
            <div class="clearall"></div>
        </section>
        
        
    </div>
</section>