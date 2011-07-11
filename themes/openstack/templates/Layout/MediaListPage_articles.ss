	<% include MediaHeader %>
	
	<div class="span-18 last">
	<% if DisplayMedia(Article) %>
		<% control DisplayMedia(Article) %>
			<!-- Media Entry -->
			<% include MediaEntry %>
	    <% end_control %>
	<% else %>
		There are no articles to display.
    <% end_if %>
	</div>