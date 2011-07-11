
	<% include MediaHeader %>
	
	<div class="span-18 last">
	<% if DisplayMedia(Whitepaper) %>
		<% control DisplayMedia(Whitepaper) %>
			<!-- Media Entry -->
			<% include MediaEntry %>
	    <% end_control %>
	<% else %>
		There are no items to display.
    <% end_if %>
	</div>