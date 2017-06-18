$(function () {
    var towerScore = 0;

	$('#firstSubmit').click(function () {
        
        var towerCorrectOne = document.getElementById("tower1");
        
          if(towerCorrectOne.checked === true){
            towerScore++;
            alert("Correct! Your Score is " + towerScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is" + towerScore);
        }
        
    });
    $('#secondSubmit').click(function () {
        
        var towerCorrectTwo = document.getElementById("tower2");
        
          if(towerCorrectTwo.checked === true){
            towerScore++;
            alert("Correct! Your Score is " + towerScore);
        }
        else{
            alert("Incorrect, but don't worry. Try Again. Your Score is" + towerScore);
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
		});
        }
        
    });


});