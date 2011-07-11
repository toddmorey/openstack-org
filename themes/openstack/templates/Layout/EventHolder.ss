<% control RandomEventImage %>
	<div class="eventsBanner" style="background-image: url($URL);">
<% end_control %>
		<div class="span-16">
		</div>
		<div class="span-8 last">
		<p class="eventsPhotoCaption">
		This Photo: The OpenStack Design Summit &amp; Conference 2011.
		</p>
	</div>
</div>
		
<div class="span-24 last">
	<div class="eventTitleArea">
		<h1>OpenStack Event Listing</h1>
	</div>
</div>

<div class="span-11">
	<h2>Upcoming Events</h2>
	<div class="eventBlock upcoming">
		<% control FutureEvents(8) %>
				<div class="event<% if First %> top<% end_if %>">
					<h3><a href="$EventLink" target="_blank">$Title</a></h3>
					<p class="details">$formatDateRange - $EventLocation</p>
					<p class="eventButton"><a href="$EventLink" target="_blank">$EventLinkLabel</a></p>
				</div>
		<% end_control %>
		<div class="clear"></div>
	</div>
</div>

<div class="prepend-2 span-11 last">

	<h2>Recent OpenStack Summits &amp; Conferences</h2>
	<div class="eventBlock past">
		<% control PastSummits(4) %>
				<div class="event<% if First %> top<% end_if %>">
					<h3><a href="$EventLink" target="_blank">$Title</a></h3>
					<p class="details">$formatDateRange - $EventLocation</p>
					<% if EventLink %><p class="eventButton"><a href="$EventLink" target="_blank">$EventLinkLabel</a></p><% end_if %>
				</div>
		<% end_control %>		
		<div class="clear"></div>
	</div>


	<h2>Past Events</h2>
	<div class="eventBlock past">
		<% control PastEvents(4) %>
				<div class="event<% if First %> top<% end_if %>">
					<h3><a href="$EventLink" target="_blank">$Title</a></h3>
					<p class="details">$formatDateRange - $EventLocation</p>
					<% if EventLink %><p class="eventButton"><a href="$EventLink" target="_blank">$EventLinkLabel</a></p><% end_if %>
				</div>
		<% end_control %>		
		<div class="clear"></div>
	</div>
