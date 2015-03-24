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
                        <div <?php print (($month == 1 OR $month > 1) ? 'data-href="'.site_url('timeline/1').'"' : ''); ?> class="col-md-1 the_month text-center <?php print (($month == 1) ? 'month_current' : (($month > 1) ? 'month_passed' : '')); ?>">One</div>
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
        
        <?php
		$this->load->view('pages/timeline/module_view');
		?>
        
    </div>
</section>