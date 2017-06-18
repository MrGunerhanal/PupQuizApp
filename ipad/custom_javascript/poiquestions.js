// POI Questions JavaScript Document

// Displays the questions on the #poiquestions page.
// - pubs parameter is an Array of pubs, like in findPubs in database.js.
// - area is a text label to display, can be a poi name or "near you".
var displayQuestions = function (pubs, area) {
	$.mobile.changePage("#poiquestions");
	// In order to jump to POI map, call displayPubs(pubs, area);
};