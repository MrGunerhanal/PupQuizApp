//Home Page JavaScript Document

$(function () {
	
	if (typeof(Number.prototype.toRadians) === "undefined") {
		Number.prototype.toRadians = function() {
			return this * Math.PI / 180;
		}
	}
	
	// Function which calculates the distance between two points.
	// Reused from Stack Overflow (http://stackoverflow.com/questions/5260423/torad-javascript-function-throwing-error)
	var distanceBetween = function (point1, point2) {
		var R = 3959; // Earth radius in miles
		var phi1 = point1.latitude.toRadians();
		var phi2 = point2.latitude.toRadians();
		var deltaPhi = (point2.latitude - point1.latitude).toRadians();
		var deltaLambda = (point2.longitude - point1.longitude).toRadians();
		
		var a = Math.sin(deltaPhi/2) * Math.sin(deltaPhi/2) +
				Math.cos(phi1) * Math.cos(phi2) *
				Math.sin(deltaLambda/2) * Math.sin(deltaLambda/2);
		var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
		console.log("Distance", point1, point2, c);
		return R * c;
	};
	
	// user_coordinates = {longitude: 54.11, latitude: 44.76}
	// pubs = [{name: "Pub name", longitude: ..., latitude: ...}, ...]
	var displayNearestPubs = function (pubs, user_coordinates) {
		// Look in the 2 mile radius.
		var boundary = 2;
		
		// Make an empty array of pubs.
		var closestPubs = [];
		
		// Find 3 pubs closest to the user location.
		for (var i = 0; i < pubs.length; i++) {
			var single_pub = pubs[i];
			single_pub.distance = distanceBetween(user_coordinates, single_pub);
			console.log("Pub ", single_pub);
			if (single_pub.distance < boundary) {
				closestPubs.push(single_pub);
			}
		}
		
		// Sort and only take 3 with the lowest (shortest) distance.
		closestPubs.sort(function (a, b) { return a.distance - b.distance; });
		closestPubs = closestPubs.slice(0, 3);
		
		// Display the pubs. Function in poimap.js.
		displayPubs(closestPubs, "you");
	};
	
	// Function to execute when "Explore" button is clicked.
	$('#btn-explore').click(function () {
		navigator.geolocation.getCurrentPosition(function (position) {
			console.log("Got geolocation ", position);
			findPubs(function (pubs) {
				console.log("Got pubs!", pubs);
				displayNearestPubs(pubs, position.coords);	
			});
		});
	});
    
    var towerScore = 0;
    var bigbenScore = 0;
    var btScore = 0;
    var stScore = 0;
    var palaceScore = 0;
    var greenScore = 0;
    
    $('.firstSubmit').click(function () {
        
        
        var towerCorrectOne = document.getElementById("tower1");
        
          if(towerCorrectOne.checked === true){
            towerScore++;
            alert("Correct! Your Score is " + towerScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is " + towerScore);
        }
        
    });
    $('.secondSubmit').click(function () {
        
        var towerCorrectTwo = document.getElementById("tower2");
        
          if(towerCorrectTwo.checked === true){
            towerScore++;
            alert("Correct! Your Score is " + towerScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is " + towerScore);
        }
        if(towerScore==2)
        {
            findPubs(function (pubs) {
			var poiPubs = [];
			for (var i = 0; i < pubs.length; i++) {
				if (pubs[i].poi === "Tower Bridge") {
					poiPubs.push(pubs[i]);
				}
			}
                 
				 displayPubs(poiPubs, "Tower Bridge");
				 
		});
        }
        
    });
    
    
       $('.thirdSubmit').click(function () {
        
        
        var bigbenCorrectOne = document.getElementById("bigben1");
        
          if(bigbenCorrectOne.checked === true){
            bigbenScore++;
            alert("Correct! Your Score is " + bigbenScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is " + bigbenScore);
        }
        
    });
    $('.fourthSubmit').click(function () {
        
        var bigbenCorrectwo = document.getElementById("bigben2");
        
          if(bigbenCorrectwo.checked === true){
            bigbenScore++;
            alert("Correct! Your Score is " + bigbenScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is " + bigbenScore);
        }
        if(bigbenScore==2)
        {
            findPubs(function (pubs) {
			var poiPubs = [];
			for (var i = 0; i < pubs.length; i++) {
				if (pubs[i].poi === "Big Ben") {
					poiPubs.push(pubs[i]);
				}
			}
                 displayPubs(poiPubs, "Big Ben");
		});
        }
        
    });
    
           $('.fifthSubmit').click(function () {
        
        
        var btCorrectOne = document.getElementById("bt1");
        
          if(btCorrectOne.checked === true){
            btScore++;
            alert("Correct! Your Score is " + btScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is " + btScore);
        }
        
    });
    $('.sixthSubmit').click(function () {
        
        var btCorrectTwo = document.getElementById("bt2");
        
          if(btCorrectTwo.checked === true){
            btScore++;
            alert("Correct! Your Score is " + btScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is " + btScore);
        }
        if(btScore==2)
        {
            findPubs(function (pubs) {
			var poiPubs = [];
			for (var i = 0; i < pubs.length; i++) {
				if (pubs[i].poi === "BT Tower") {
					poiPubs.push(pubs[i]);
				}
			}
                 displayPubs(poiPubs, "BT Tower");
				 
		});
        }
        
    });
    
      $('.seventhSubmit').click(function () {
        
        
        var stCorrectOne = document.getElementById("st1");
        
          if(stCorrectOne.checked === true){
            stScore++;
            alert("Correct! Your Score is " + stScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is " + stScore);
        }
        
    });
    $('.eigthSubmit').click(function () {
        
        var stCorrectTwo = document.getElementById("st2");
        
          if(stCorrectTwo.checked === true){
            stScore++;
            alert("Correct! Your Score is " + stScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is " + stScore);
        }
        if(stScore==2)
        {
            findPubs(function (pubs) {
			var poiPubs = [];
			for (var i = 0; i < pubs.length; i++) {
				if (pubs[i].poi === "St. Paul's Cathedral") {
					poiPubs.push(pubs[i]);
				}
			}
                 displayPubs(poiPubs, "St. Paul's Cathedtal");
		});
        }
        
    });
    
         $('.ninethSubmit').click(function () {
        
        
        var palaceCorrectOne = document.getElementById("palace1");
        
          if(palaceCorrectOne.checked === true){
            palaceScore++;
            alert("Correct! Your Score is " + palaceScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is " + palaceScore);
        }
        
    });
    $('.tenthSubmit').click(function () {
        
        var palaceCorrectTwo = document.getElementById("palace2");
        
          if(palaceCorrectTwo.checked === true){
            palaceScore++;
            alert("Correct! Your Score is " + palaceScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is " + palaceScore);
        }
        if(palaceScore==2)
        {
            findPubs(function (pubs) {
			var poiPubs = [];
			for (var i = 0; i < pubs.length; i++) {
				if (pubs[i].poi === "Buckingham Palace") {
					poiPubs.push(pubs[i]);
				}
			}
                 displayPubs(poiPubs, "Buckingham Palace");
		});
        }
        
    });
    
    $('.eleventhSubmit').click(function () {
        
        
        var greenCorrectOne = document.getElementById("green1");
        
          if(greenCorrectOne.checked === true){
            greenScore++;
            alert("Correct! Your Score is " + greenScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is " + greenScore);
        }
        
    });
    $('.twelwethSubmit').click(function () {
        
        var greenCorrectTwo = document.getElementById("green2");
        
          if(greenCorrectTwo.checked === true){
            greenScore++;
            alert("Correct! Your Score is " + greenScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is " + greenScore);
        }
        if(greenScore==2)
        {
            findPubs(function (pubs) {
			var poiPubs = [];
			for (var i = 0; i < pubs.length; i++) {
				if (pubs[i].poi === "Greenwich") {
					poiPubs.push(pubs[i]);
				}
			}
                 displayPubs(poiPubs, "Greenwich");
		});
        }
        
    });
});

// The temporary "Skip Quiz" button to get to the map and booking.
$(function () {
	$.each({
		"#towerquestions": "Tower Bridge",
		"#bigbenquestions": "Big Ben",
		"#btquestions": "BT Tower",
		"#stpaulsquestions": "St. Paul's Cathedral",
		"#palacequestions": "Buckingham Palace",
		"#greenwichquestions": "Greenwich"
	}, function (pageSelector, name) {
		$(pageSelector).find('.skip-quiz').click(function (e) {
			e.preventDefault();
			findPubs(function (pubs) {
				var poiPubs = [];
				for (var i = 0; i < pubs.length; i++) {
					if (pubs[i].poi === name) {
						poiPubs.push(pubs[i]);
					}
				}
				displayPubs(poiPubs, name);
			});
		});
	});
});