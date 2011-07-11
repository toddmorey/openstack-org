

	<% include MediaHeader %>
		
	<div class="span-18 last">
	<% if DisplayMedia(press) %>
		<% control DisplayMedia(press) %>
			<!-- Media Entry -->
			<% include MediaEntry %>
	    <% end_control %>
	<% else %>
		There are no press releases to display.
    <% end_if %>
	</div>