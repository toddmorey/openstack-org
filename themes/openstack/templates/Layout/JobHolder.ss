    $Content
	<div class="span-24 last titleArea">
			<h1>OpenStack Job Board</h1>
		</div>
		<div class="span-18">
			<h2>Latest Job Postings</h2>
		</div>
		<div class="span-6 last postJob">
			<a href="post-a-job.html" rel="shadowbox;height=240;width=320">Post A Job For Free</a>
		</div>
		
	<% control Children %>
	<!-- Job Posting -->
	<div class="jobPosting span-24 last">
		<div class="span-2">
			<% if RecentJob(JobPostedDate) %>
				<p class="type"><span class="label">Type: </span>New!</p>
			<% else %>
				<p class="type"><span class="label">Type: </span></p>
			<% end_if %>
		</div>
		<div class="span-19 jobBlock">
		<ul class="details">
			<li class="location"><span class="label">Location: </span>$JobLocation</li>
			<li class="title"><span class="label">Job Title: </span><a href="#" class="jobTitle">$Title</a></li>
			<li class="employer"><span class="label">Employer: </span>at <strong>$JobCompany</strong></li>
		</ul>
		</div>
		<div class="span-3 last postDate">
			<p><span class="label">Date Posted: </span>$JobPostedDate.format(F) $JobPostedDate.format(d)</p>
		</div>

			<div class="span-22 last prepend-2 jobDescription">

			$Content

				<div class="moreInfo">
						<span class="label">More information: </span><a href="$JobMoreInfoLink">More About This Job</a>		
				</div>
			</div>
		
	</div>
    <% end_control %>
