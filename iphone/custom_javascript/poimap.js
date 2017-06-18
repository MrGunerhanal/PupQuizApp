// POI Map with Pubs JavaScript Document

// Displays the pubs on the #poimap page.
// - pubs parameter is an Array of pubs, like in findPubs in database.js.
// - area is a text label to display, can be a poi name or "near you".
var displayPubs = function (pubs, area) {
	$.mobile.changePage("#poimap");
	$("#pubs-area").text(area);
	$("#poi-map").empty();
	// Change to display in Google maps instead of a list.

	var iplus = 1;
	
	for (var i = 0; i < pubs.length; i++) {
		
		$("#poi-map").append("<p></p><div id=" + iplus + ">" + pubs[i].name + "</div><div>" + pubs[i].address + "</div><div><img class=\"picture\" id=\"findpic\" src=\"images/" + pubs[i].name + ".png\" alt=\"pub pic here\" id=\"pubpicture_book\"></div><div>" + pubs[i].description + "</div><p></p><div><input type=\"button\" class=\"ui-btn ui-corner-all\" id=\"booktable" + iplus + "\" value=\"BOOK A TABLE\"></div><p></p>");
		iplus++;
		;}	
		};
		
//<div style = \"float:right\"> <img id=\"addfav\" class=\"picture\" src=\"images/add_fav.png\" alt=\"heart\"></div>		
		
$(document).on('click', '#booktable1', function () { // Based on dynamic button pressed, take the name from the dynamic div to generate booking page.
	var pubname = document.getElementById('1').innerHTML
 	var pubpic = "<img class=\"picture\" id=\"pubpicture_book\" src=\"images/" + pubname + ".png\" alt=\"pub pic\">"
 $("#pubs-pic").empty();	 // If the user was previously looking at another pub, make sure it doesn't reappear
 $.mobile.changePage("#booking");
 $("#pubs-name").text(pubname);
 $("#pubs-pic").append(pubpic);

});

$(document).on('click', '#booktable2', function () {
 var pubname = document.getElementById('2').innerHTML
 var pubpic = "<img class=\"picture\" id=\"pubpicture_book\" src=\"images/" + pubname + ".png\" alt=\"pub pic\">"
 $("#pubs-pic").empty();	
 $.mobile.changePage("#booking");
 $("#pubs-name").text(pubname);
 $("#pubs-pic").append(pubpic);
});

$(document).on('click', '#booktable3', function () {
var pubname = document.getElementById('3').innerHTML
var pubpic = "<img class=\"picture\" id=\"pubpicture_book\" src=\"images/" + pubname + ".png\" alt=\"pub pic\">"
 $("#pubs-pic").empty();	
 $.mobile.changePage("#booking");
 $("#pubs-name").text(pubname);
 $("#pubs-pic").append(pubpic);
});



