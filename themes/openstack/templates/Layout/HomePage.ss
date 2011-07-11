 <div class="opener span-16">
  	<h1>Open source software for building<br /> private and public clouds.</h1>  	
  	<div id="projects" class="span-8">
  		<h3 class="subhead">Software</h3>
  		  		<p>OpenStack Software delivers a massively scalable cloud operating system. The three major components are:</p>
  		
  		<ul>
  			<li id="compute"><a href="/projects/compute/">Compute</a></li>
  			<li id="storage"><a href="/projects/storage/">Object Storage</a></li>
  			<li id="glance"><a href="/projects/image-service/">Image Service</a></li>
  			</ul>
  	</div>
  	<div id="people" class="span-8 last">
  		<h3 class="subhead">Community</h3>
  		Join our global community of technologists, developers, researchers,  corporations and cloud computing experts.
  		<div class="clear"></div>
  		<div class="statBlock" id="members">
  			<p class="number">$NumberOfMembers</p>
  			<p>People</p>
  		</div>
  		<div class="statBlock" id="companies">
  			<p class="number">$CompanyCount</p>
  			<p>Companies</p>
  		</div>		
  		
  		
  	</div>
  	
  	
  </div>
  <div class="rotatingQuotes span-8 last">
		<ul id="quotes">
			<li id="oreilly">
				<p>“Rackspace and NASA are taking an amazing step towards my vision of an open cloud future.”</p>
				<p class="name"><strong>Tim O'Reilly,</strong> oreilly.com</p>
			</li>			
		</ul>
</div>

<div class="span-8"><a href="/projects/" class="roundedButton">All Software Projects...</a></div>
<div class="span-8"><a href="/community/" class="roundedButton">Meet Our Community</a></div>

</div> <!--Close The Blueprint Container -->    

<div class="tabSet">
    
<ul class="tabs">
	<% if ReturningVisitor %>
		<li class="active">
			<a href="#tabActivity">Latest Activity</a>
		</li>
		<li>
			<a href="#tabWhatIs">What is OpenStack?</a>
		</li>
	<% else %>
		<li>
			<a href="#tabActivity">Latest Activity</a>
		</li>
		<li class="active">
			<a href="#tabWhatIs">What is OpenStack?</a>
		</li>
	<% end_if %>
</ul>
    
	    	<div id="tabActivity" class="tabContent">
	    
			    <div class="feeds span-15">
				    <div id="openStackFeed">$FeedData</div>
			    </div>
				
				<div class="events prepend-1 span-6 last"><!-- Events Container -->
				
					<h2>Come See Us</h2>
					
					<% control LatestEvents %>
					
					<p><strong>NEXT UP:</strong> <a href="$EventLink">{$Title}</a>, $formatDateRange in {$EventLocation}.</p>
					
					<% end_control %>					
					
					
					<a href="/events/" class="roundedButton">More Events...</a>
				
				</div><!-- Events Container -->
				
		    
		    
		    </div><!-- tabActivity -->
		    
	    	<div id="tabWhatIs" class="tabContent"><!-- tabWhatIs -->
	    	
	    		<h2 class="prepend-1">OpenStack: The 5-minute Overview</h2>
	    				    <div class="overview span-10 prepend-1"><!-- overview -->		    
	    				    <p class="point"><strong>OpenStack</strong> OpenStack is a global collaboration of developers and cloud computing technologists producing the ubiquitous open source cloud computing platform for public and private clouds. The project aims to deliver solutions for all types of clouds by being simple to implement, massively scalable, and feature rich.  The technology consists of a series of <a href="/projects/">interrelated projects</a> delivering various components for a cloud infrastructure solution.
	    				    </p>
	    				    
	    				    
	    				    <p class="point"><strong>Who's behind OpenStack?</strong> Founded by Rackspace Hosting and NASA, OpenStack has grown to be a <a href="/community/">global software community</a> of developers collaborating on a standard and massively scalable open source cloud operating system. Our mission is to enable any organization to create and offer cloud computing services running on standard hardware.</p>
	    				    
	    					 </div>
	    				    
	    				    <div class="overview span-10 prepend-1"><!-- overview -->
	    				    
	    				    <p class="point"><strong>Who uses OpenStack?</strong> Corporations, service providers,  VARS, SMBs, researchers, and global data centers looking to deploy large-scale cloud deployments for private or public clouds leveraging the support and resulting technology of a global open source community.</p>
	    				    	    				    		    
	    				    <p class="point"><strong>Why open matters:</strong> All of the code for OpenStack is freely available under the Apache 2.0 license. Anyone can run it, build on it, or submit changes back to the project. We strongly believe that an open development model is the only way to foster badly-needed cloud standards, remove the fear of proprietary lock-in for cloud customers, and create a large ecosystem that spans cloud providers.</p>
	    				    
	    				    <p class="point">For more information, visit the <a href="/projects/openstack-faq/">OpenStack Community Q&amp;A</a>.</p>
	    				    </div><!-- overview -->
	    	
	    	</div><!-- tabWhatIs -->
    
    	<p class="clear"></p>
</div><!-- tabSet -->

<div><!-- Reopen BluePrint Container -->