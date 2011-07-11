		<div class="span-24 last">
			<h2>Participating Companies</h2>
			<p>An expanding list of companies and organizations involved in the OpenStack ecosystem.</p>
		</div>
		
		
		<div class="span-14 logos last">

		<% control DisplayedCompanies %>
			<a href="$URL" style="background-image: url($Logo.URL);">$Name</a>
		<% end_control %>

		</div>
				
		<div class="span-9 last">
    			<ul id="quotes">
    				<li>
    					<p>“If cloud computing is the future, then understanding how to make that future open is one of the great technology challenges of our day.  Rackspace and NASA are taking an amazing step towards my vision of an open cloud future.”</p>
    					<p class="name"><strong>Tim O'Reilly,</strong> oreilly.com</p>
    				</li>
    				<li>
    					<p>“We believe that an open Cloud is the future of cloud computing. The internet would not be what it is today, had it not been built on open and interoperable standards.”</p>
    					<p class="name"><strong>Phil Worms,</strong> iomart Group</p>
    				</li>
					<li>
						<p>“OpenStack will seed many clouds&mdash;public and private&mdash;powered by this single, open industry standard.”</p>
						<p class="name"><strong>Justin Santa Barbara,</strong> FathomDB</p>
					</li>
					<li>
						<p>“We see significant interest among enterprises and service providers for scalable, open and proven platforms to deploy private and public clouds. OpenStack hits the mark.”</p>
						<p class="name"><strong> Bill Karpovich,</strong> Zenoss</p>
					</li>
					<li>
						<p>“The Openstack initiative is open source at its best... It will re-define cloud computing.”</p>
						<p class="name"><strong>Adam Jacob,</strong> Opscode</p>
					</li>
					<li>
						<p>“Choice is the big advantage here, as OpenStack enables integration with best of breed infrastructure network, storage &amp; compute services.”</p>
						<p class="name"><strong>Steve Mullaney,</strong> Nicira Networks</p>
					</li>
					<li>
						<p>“OpenStack will accelerate Open Source momentum for Cloud Computing and be used around the world.”</p>
						<p class="name"><strong>Yoichi Kihara,</strong> NTT DATA</p>
					</li>

    		</ul>
    		<hr />
    		
    		<h3 class="sideLogo">Newest Addition</h3>
			<% control MostRecent %>
    		<div class="span-5 sideLogo">
    		<p>$Name was added to this list $Created.Ago.</p>
    		</div>
    		<div class="logos span-3 last">
				<a href="$URL" style="background-image: url($Logo.URL);">$Name</a>
			</div>
			<% end_control %>
			
			<% if Featured %>
			<hr />
			
			<h3 class="sideLogo">Featured</h3>
			<% control Featured %>
			<div class="span-5 sideLogo">
			<p>$Description</p>
			</div>
			<div class="logos span-3 last">
				<a href="$URL" style="background-image: url($Logo.URL);">$Name</a>
			</div>
			<% end_control %>
			<% end_if %>
			
    	</div>
