	<% include MediaHeader %>	
	
	<div class="span-18 last">
	<% if DisplayMedia(All) %>
		<% control DisplayMedia(All) %>
		<!-- Media Entry -->
		<% include MediaEntry %>
	    <% end_control %>
	<% else %>
		There are no items to display.
    <% end_if %>
	</div>