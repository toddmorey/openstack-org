<script type="text/javascript">
$(document).ready(function(){
	
	//hide job descriptions
	$('.jobDescription').hide();
	
	// toggles the job descriptions  
	 $('a.jobTitle').click(function() {
	   $(this).closest('div.jobPosting').find('div.jobDescription').slideToggle(400);
	   return false;
	 });
			
})
</script>