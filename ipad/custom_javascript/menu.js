$(function () {
	$("#menu").panel();
	$("#menu ul").listview();
	
	// Wires "Log out" menu item.
	// 1.  Calls database.js logOut function.
	// 2.  In the callback navigates back to the login page.
	$("#menutestlog").click(function () {
		logOut(function () {
			$.mobile.changePage("#login");
		});
	});
});