
	<% include MediaHeader %>
		
	<div class="span-18 last">
	<% if DisplayMedia(slides) %>
		<% control DisplayMedia(slides) %>
			<!-- Media Entry -->
			<% include MediaEntry %>
	    <% end_control %>
	<% else %>
		There are no presentation slides to display.
    <% end_if %>
	</div>