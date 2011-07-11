
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>$Title &raquo; OpenStack Open Source Cloud Computing Software</title>

    <% base_tag %>
    
    <!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=PT+Sans&subset=latin' rel='stylesheet' type='text/css'>
    
    <!-- Framework CSS -->
    <link rel="stylesheet" href="/themes/openstack/css/blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/themes/openstack/css/blueprint/print.css" type="text/css" media="print">
    
    <!-- IE CSS -->
    <!--[if lt IE 8]><link rel="stylesheet" href="/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
    
    <!-- OpenStack Specific CSS -->
    <link rel="stylesheet" href="/themes/openstack/css/main.css" type="text/css" media="screen, projection, print">
    
    <!-- Page Specific CSS -->
	$IncludePageCSS
	
    
    <% if IncludeShadowBox %>
	<!-- OpenStack Specific CSS -->
	<link rel="stylesheet" href="/themes/openstack/javascript/shadowbox/shadowbox.css" type="text/css" media="screen, projection">
	<% end_if %>
       
  </head>
  <body id="$URLSegment">
  
  <% include Analytics %>
    	  	
    <div class="container">
		<div id="header">
			<div class="span-5">
				<h1 id="logo"><a href="/">Open Stack</a></h1>
			</div>
			<div class="span-19 last">
				
				<div id="navigation">
					<ul id="Menu1">
						  <% include Navigation %>
						  <li><a href="/blog/" title="Go to the OpenStack Blog">Blog</a></li>
					  	  <li><a href="http://wiki.openstack.org/" title="Go to the OpenStack Wiki">Wiki</a></li>
					  	  <li><a href="http://docs.openstack.org/" title="Go to OpenStack Documentation">Documentation</a></li>
					</ul>
				</div>
				
			</div>
	  	</div>
	</div>
	<!-- Page Content -->

    <div class="container">
  		$Layout  	
	</div>

<div class="container">
	<div id="footer">
		<hr>
		<p>The OpenStack project is provided under the Apache 2.0 license. Openstack.org is powered by <a href="http://www.rackspacecloud.com/">Rackspace Cloud Computing</a>.</p>
	</div>
</div>

<% if IncludeJquery %>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>

<% end_if %>


<% if IncludeShadowBox %>
<script type="text/javascript" src="/themes/openstack/javascript/shadowbox/shadowbox.js"></script>
<script type="text/javascript">
		 Shadowbox.init();
</script>
<% end_if %>

$IncludePageJavascript

</body>
</html>