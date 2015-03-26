
<?php
if ($topic != NULL) {
?>
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