<div class="span-3">
	<a href="$URL" class="icon">$Type</a>
</div>
<div class="$Type mediaEntry span-15 last">
	<p class="title"><a href="$URL">$Title</a> ($Type)</p>
	<% if Description %>
		<p class="description">$Description</p>
	<% end_if %>
	<% if AuthorFirstName %>
		<p class="author">$AuthorFirstName $AuthorLastName</p>
	<% end_if %>
	<% if Date %>
		<p class="date">$Date.format(D F j), $Date.format(Y)</p>
	<% end_if %>
</div>
<hr />
