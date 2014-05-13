function formatDate (input) {
		  var datePart = input.match(/\d+/g),
		  year = datePart[0], // get only two digits
		  month = datePart[1], day = datePart[2];
		  return day+'/'+month+'/'+year;
		}
if (typeof jQuery === "undefined") {
    var script = document.createElement('script');
    script.src = 'http://code.jquery.com/jquery-latest.min.js';
    script.type = 'text/javascript';
    document.getElementsByTagName('head')[0].appendChild(script);
}
document.onreadystatechange = function(e)
{
    if (document.readyState === 'complete')
    {
  	var load = '<img src="http://www.biota-labs.com/ei/sales/img/loading.gif" alt="Loading">';
	$(".listing-widget-initializer").html( load );
    }
};
window.onload = function() {
	$.getScript("bbking.json");
	$(".listing-widget-initializer").each(function(){
		   var getParams = "";
		   var artistid = $(this).attr('artistid');
		   var tourid = $(this).attr('tourid');
		   if (tourid && !artistid) {
		   		getParams = "tourid="+tourid;
		   } else if (artistid && !tourid) {
		   		getParams = "artistid="+artistid;
		   } else {
		   	getParams = "artistid="+artistid+"&tourid="+tourid;
		   }
		$.getJSON('http://www.biota-labs.com/ei/sales/ei_tour_details.php?'+getParams, function(data) {
		      var table='<table style="width: 100%; margin-bottom: 20px;"><thead style="border-bottom: 1px solid #999999; padding-bottom: 10px;"><tr style="font-weight: bold;" align="left"><th>Date</th><th>Artist</th><th>Location</th><th>Buy</th></tr></thead><tbody align="left">';
		      if (data == '') {
		      	table = "<h4><strong>No dates associated with this campaign/artist</strong><h4>";
		      }
		      $.each( data, function( index, item){
		            /* add to html string started above*/
		            var link = '';
		            if (item.buylink) { link='<a href="'+item.buylink+'">Buy Tickets</a>';
					} else { link = ''; }
					var date = formatDate(item.eventdate);
		     //table+='<tr><td>'+item.artist+'</td><td>'+date+'</td><td>'+item.venue+'</td><td>'+item.location+'</td><td>'+link+'</td></tr>';
		     table+='<tr itemscope itemtype="http://schema.org/MusicEvent"><td class="date"><meta content="'+date+'" itemprop="startDate" />'+date+'</td><td class="venue"><a href="'+item.buylink+'" itemprop="url"><span itemprop="name">'+item.artist+'</span></a></td><td class="location" itemprop="location" itemscope="" itemtype="http://schema.org/Place"><span itemprop="name" class="venue-name"><a href="/venues/venue.php?id=88" itemprop="url">'+item.venue+'</a>, '+item.location+', '+item.country+'</span><span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates"><meta itemprop="latitude" content="'+item.lattitude+'"><meta itemprop="longitude" content="'+item.longitude+'"></span></td><td>'+link+'</td></tr>';
		      });
		      table+='</tbody></table>';
		      $(".listing-widget-initializer").html( table );		
		});
	});
}