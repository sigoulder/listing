<?php include 'db_connection.php'; ?>
<?php 

	// $campaign_id = isset($_GET["tourid"]);
	// $artist_id = isset($_GET["artistid"]);

	// 	$sql = "SELECT ca.campaignid, c.name AS campaign, ca.artistid, a.name AS artist, q.date AS eventdate, v.name AS venue, v.location, v.country, v.postzip, v.lattitude, v.longitude, ro.name AS ticketoutlet, CONCAT(q.affiliatelink, '?afflink=', afd.affiliatecode) as buylink
	// 		FROM campaignartists AS ca
	// 		INNER JOIN campaigns AS c ON c.id = ca.campaignid
	// 		INNER JOIN artist AS a ON a.id = ca.artistid
	// 		INNER JOIN quotes AS q ON q.campaign_id = ca.campaignid
	// 		INNER JOIN venue AS v ON v.id = q.venue_id
	// 		LEFT JOIN redeemoutlets AS ro ON ro.id = q.redeemoutletid
	// 		LEFT JOIN affiliatedeals AS afd ON afd.id = q.affiliatedealid WHERE q.accepted = 1 ";
	// 	if (isset($_GET["artistid"]) && !isset($_GET["tourid"])) {
	// 		$sql .= "AND ca.artistid = {$_GET["artistid"]} ";
	// 	} elseif (isset($_GET["tourid"]) && !isset($_GET["artistid"])) {
	// 		$sql .= "AND ca.campaignid = {$_GET["tourid"]} ";
	// 	} elseif (isset($_GET["tourid"]) && isset($_GET["artistid"])) {
	// 		$sql .= "AND ca.artistid = {$_GET["artistid"]} ";
	// 		$sql .= "AND ca.campaignid = {$_GET["tourid"]} ";
	// 	}	elseif (!isset($_GET["tourid"]) && !isset($_GET["artistid"])) {
	// 		$sql .= "AND ca.artistid = 0 ";
	// 		$sql .= "AND ca.campaignid = 0 ";
	// 	}
	// 	$sql .= " ORDER BY q.date ";
	// 	$data = mysqli_query($connection, $sql);

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<script type="application/ld+json">
[{
  "@context" : "http://schema.org",
  "@type" : "MusicEvent",
  "name" : "B.B. King",
  "startDate" : "2014-04-12T19:30",
  "location" : {
     "@type" : "Place",
     "name" : "Lupo’s Heartbreak Hotel",
     "address" : "79 Washington St., Providence, RI"
  },
  "offers" : {
     "@type" : "Offer",
     "url" : "https://www.etix.com/ticket/1771656"
  }
},
{
  "@context" : "http://schema.org",
  "@type" : "MusicEvent",
  "name" : "B.B. King",
  "startDate" : "2014-04-13T20:00",
  "location" : {
     "@type" : "Place",
     "name" : "Lynn Auditorium",
     "address" : "Lynn, MA, 01901"
  },
  "offers" : {
     "@type" : "Offer",
     "url" : "http://frontgatetickets.com/venue.php?id=11766"
  }
}
{
  "@context" : "http://schema.org",
  "@type" : "MusicEvent",
  "name" : "The Decors",
  "startDate" : "2014-04-8T20:00",
  "location" : {
     "@type" : "Place",
     "name" : "Gig Venue 1",
     "address" : "London, NW63QS"
  },
  "offers" : {
     "@type" : "Offer",
     "url" : "http://tickets.com/thedecors/event1"
}
}
{
  "@context" : "http://schema.org",
  "@type" : "MusicEvent",
  "name" : "The Decors",
  "startDate" : "2014-04-8T20:00",
  "location" : {
     "@type" : "Place",
     "name" : "Gig Venue 2",
     "address" : "London, W86TA"
  },
  "offers" : {
     "@type" : "Offer",
     "url" : "http://tickets.com/thedecors/event2"
  }
}]
</script>
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Ei | Listing</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>
	<div class="container" style="height: 100%;">
		<div class="sixteen columns">

		</div>
		<div>
			<script type='text/javascript' src='js/listing_widget.js'></script>
            <div class="listing-widget-initializer" artistid="8"></div>
		</div>
<div style="margin-bottom: 0; float: right;">
	<br>
	
	<h6 style="line-height: 5px;"><span style="font-size: 10px; ">Powered by: </span></h6>
	<img src="images/logo-inline.png" height="10px" width="127px">
</div>
	</div><!-- container -->
<!-- End Document
================================================== -->
</body>
</html>