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
                        <div class="col-md-1 the_month text-center">Ten</div>
                        <div class="col-md-1 the_month text-center">Eleven</div>
                        <div class="col-md-1 the_month text-center last">Twelve</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-1 the_month text-center">Seven</div>
                        <div class="col-md-1 the_month text-center">Eight</div>
                        <div class="col-md-1 the_month text-center last">Nine</div>
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
                        <div class="col-md-1 the_month text-center">Four</div>
                        <div class="col-md-1 the_month text-center">Five</div>
                        <div class="col-md-1 the_month text-center last">Six</div>
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
                        <div class="col-md-1 the_month text-center month_current">One</div>
                        <div class="col-md-1 the_month text-center">Two</div>
                        <div class="col-md-1 the_month text-center last">Three</div>
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
            
                <div class="article now current_step">
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