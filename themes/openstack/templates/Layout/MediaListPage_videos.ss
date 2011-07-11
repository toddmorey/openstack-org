
	<% include MediaHeader %>
		
	<div class="span-18 last">
	<% if DisplayMedia(Video) %>
		<% control DisplayMedia(Video) %>
			<!-- Media Entry -->
			<% include MediaEntry %>
	    <% end_control %>
	<% else %>
		There are no videos to display.
    <% end_if %>
	</div>