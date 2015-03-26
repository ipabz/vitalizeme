
<?php
if ($topic != NULL) {
?>
<div class="mymodal-popup-wrapper">
<section class="mymodal-popup">
    	<div class="headerpart">
        	<img class="pull-left" src="assets/images/logo.png" />
            <div class="pull-right theright">
            	<div class="stars">
                	<a href=""><img src="assets/images/star.png" /></a>
                    <a href=""><img src="assets/images/star.png" /></a>
                    <a href=""><img src="assets/images/star.png" /></a>
                    <a href=""><img src="assets/images/star.png" /></a>
                    <a href=""><img src="assets/images/star.png" /></a>
                </div>
                <div class="sos">
                	<a href=""><img src="assets/images/message.png" /></a>
                    <a href=""><img src="assets/images/like.png" /></a>
                </div>
            </div>
            <div class="clearfix"></div>
            
        </div>
        <div class="part">
        	<h2>Fat is an essential ingredient that make us human</h2>
				<li>Our brain is made up of 60% fat</li>
				<li>Fat insulates and protects the nerve cells in he brain</li>
				<li>Fat is an essential part of life and keeping healthy</li>
				<li>Unsaturated fat is healthy and less subject to becoming rancid</li>
				
			<h2> Some fats are essential, meaning they can't be made by the body</h2>
				<li>They are involved in all the function of the body, including making essential hormones and keeping the body healthy</li>
				<li>Omega-3 acids are essential and are found in the fox oil, walnuts and cold water marine animals (mackerel, salmon, sardines,anchovies, cold liver oil)</li>
				<li>Only 1/6th of the fats we eat today, as we eat less fish, vegetables and seeds</li>
				
			<h2>Omega-6 Fats</h2>
				<li>Are the building blocks for inflammation in the body - eat too much and the body becomes inflamed, driving inflammatory diseases like heart attack and cancer</li>
				<li>The amount of Omega-6 we eat has doubled in recent times</li>
				<li>Found in vegetable oil and grain-fed meat</li>
			
			<h2>Vitamin, Lifestyle and Infection stops us from processing Omega-3.</h2>
			<h2 class="part1">All these things stop us from processing the food we eat into essential Omega-3</h2>
				<li>Magnesium, Zinc and B6 deficiency</li>
				<li>Alcohol </li>
				<li>Trans fatty acids </li>
				<div class="left">
					<li>High cholesterol levels</li>
					<li>Viral infections</li>
					<li>Aging </li>
				</div>
				
			<h2>Essential Fatty Acid Deficiency</h2>
			<h2 class="part1">Up to 70% of people do not have enough good, essential fats.  Also, lack of essential fatty acids have been implicated in the following diseases:</h2>
				<li>Rheumatoid arthritis, lupus, Crohn’s disease</li>
				<li>Arrhythmias, coronary heart disease, stroke</li>
				<li>Breast, prostate and colon cancer</li>
				<li class="reg">Regulation of triglycerides, cholesterol levels and prevention of atherosclerosis</li>
				<div class="left2">
					<li>Hypertension</li>
					<li>Atopic dermatitis</li>
					<li>Diabetes</li>
					<li>Human growth and development</li>
					<li>Mood disorders, depression and dementia</li>
				</div>
				
			<h2>Symptoms of Omega-3 fatty acid deficiency</h2>
				<li>ALA (Omega-3)</li>
				<li>High blood pressure</li>
				<li>High triglycerides</li>
				<li>Learning impairment</li>
				<li>Poor motor coordination</li>
				<li>Tingling in arms and legs</li>
				<div class="left3">
					<li>Behavioral changes</li>
					<li>Immune dysfunction</li>
					<li>Sticky platelets</li>
					<li>Dry skin or edema</li>
					<li>Mental deterioration</li>
				</div>
			
			<h2>Symptoms of Omega-6 fatty acid deficiency</h2>
			<h2 class="part1">Omega-6 recommendations:  Take GLA (Gamma Linoleic Acid)</h2>
				<li>This is an Omega-6 fatty that does not produce as much inflammation</li>
				<li>Found in Primrose Oil</li><br>
			<h2 class="part1">Omega-3 recommendations:  Find fish oil that is Pharmaceutical Grade</h2>
				<li>This means that toxins are removed – PCBs, DDT, mercury, lead</li>
				<li>Has reduced gastrointestinal problems and less bad taste</li>
				
			<h2>Suggested doses of Omega-3</h2>
			<h2 class="part1">Suggested daily intake of EPA + DHA</h2>
				<li>Maintenance</li>
				<li>mproved cardiovascular health</li>
				<li>Reduce chronic inflammation</li>
				<li>Treat neurological disease</li>
					<p>2.5 gm</p>
					<p>2.5 – 5 gm</p>
					<p>5 – 10 gm</p>
					<p>10 – 25 gm</p>
					
			<div class="headerpart"></div>
			
			<h2 class="part2">Test your Omega-3 levels today through Vitalyze.Me essential fatty acid test<h2>
			
			<div class="bleft"></div>
			
			<h2 class="part3">Pharmaceutical grade O3 Fish Oil and GLA Oil Mix<h2>
			<div class="image">
				<img class="img1" src="assets/images/img1.png" />
				<img class="img2" src="assets/images/img2.png" />
				<img class="img3" src="assets/images/img3.png" />
			</div>
			
			<div class="3img">
			<h3 class="get">Get Test</h3>
			<h3 class="get1">Buy Now</h3>
			<h3 class="get2">Buy Now</h3>
			</div>
			
        </div>
    </section>
    </div>

<section class="container-fluid" id="main-container">        
    <div id="timeline-body" class="topicview">
    	<br />
    	<a href="javascript: history.go(-1);"><span class="glyphicon glyphicon-menu-left"></span> Back</a>
        
    	<section class="page-title"><?php print $topic['topic']; ?></section>
        <br />
        <?php print $topic['contents']; ?>
    </div>
</section>
<?php
}
?>