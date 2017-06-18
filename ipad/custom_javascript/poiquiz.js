var currentQuestion = 0;
var correctTower = 0;
var correctBigBen = 0;
var correctBT = 0;
var correctStPauls = 0;
var correctPalace = 0;
var correctGreenwich = 0;
var quizOver = false;

$(document).ready(function () {

    // Display the first question
   // displayCurrentQuestion();
    $(this).find(".quizMessage").hide();

    // On clicking next, display the next question
    $(this).find(".nextButton").on("click", function () {
        if (!quizOver) {

            value = $("input[type='radio']:checked").val();

            if (value == undefined) {
                $(document).find(".quizMessage").text("Please select an answer");
                $(document).find(".quizMessage").show();
            } else {
                // TODO: Remove any message -> not sure if this is efficient to call this each time....
                $(document).find(".quizMessage").hide();

                if (value == towerbridgeQuestions[currentQuestion].correctAnswer) 
                {
                    correctTower++;
                }
                 if (value == bigbenQuestions[currentQuestion].correctAnswer) 
                {
                    correctBigBen++;
                }
                 if (value == bttowerQuestions[currentQuestion].correctAnswer) 
                {
                    correctBT++;
                }
                 if (value == stpaulsQuestions[currentQuestion].correctAnswer) 
                {
                    correctStPauls++;
                }
                 if (value == buckinghamQuestions[currentQuestion].correctAnswer) 
                {
                    correctPalace++;
                }
                 if (value == greenwichQuestions[currentQuestion].correctAnswer) 
                {
                    correctGreenwich++;
                }
                
                currentQuestion++; // Since we have already displayed the first question on DOM ready
                if (correctTower == towerbridgeQuestions.length) {
                    alert("display pubs here");
                    $(document).find(".nextButton").text("Play Again?");
                    quizOver = true;
                } else {
                    displaytowerQuestion();
                    displayScore();
                }
                
                if (correctBigBen == bigbenQuestions.length) {
                    alert("display pubs here");
                    $(document).find(".nextButton").text("Play Again?");
                    quizOver = true;
                } else {
                    displaybigbenQuestion();
                    displayScore();
                }
                
                if (correctBT == bttowerQuestions.length) {
                    alert("display pubs here");
                    $(document).find(".nextButton").text("Play Again?");
                    quizOver = true;
                } else {
                    displaybtQuestion();
                    displayScore();
                }
                if (correctStPauls == stpaulsQuestions.length) {
                    alert("display pubs here");
                    $(document).find(".nextButton").text("Play Again?");
                    quizOver = true;
                } else {
                    displayStPaul();
                    displayScore();
                }
                if (correctPalace == buckinghamQuestions.length) {
                    alert("display pubs here");
                    $(document).find(".nextButton").text("Play Again?");
                    quizOver = true;
                } else {
                    displayPalace();
                    displayScore();
                }
                if (correctGreenwich == greenwichQuestions.length) {
                    alert("display pubs here");
                    $(document).find(".nextButton").text("Play Again?");
                    quizOver = true;
                } else {
                    displayGreenwich();
                    displayScore();
                }
            }
        } else { // quiz is over and clicked the next button (which now displays 'Play Again?'
            quizOver = false;
            $(document).find(".nextButton").text("Next Question");
            resetQuiz();
            //displaytowerQuestion();
            //displaybigbenQuestion();
            hideScore();
        }
    });

});

// This displays the current question AND the choices
function displaytowerQuestion(poi) {

    console.log("In display current Question");

    var question1 = towerbridgeQuestions[currentQuestion].question;    
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices1 = towerbridgeQuestions[currentQuestion].choices.length;
    $(".poiText").text(poi);

    // Set the questionClass text to the current question
    $(questionClass).text(question1);

    // Remove all current <li> elements (if any)
    $(choiceList).find("li").remove();

    var choice;
    for (i = 0; i < numChoices1; i++) {
        choice = towerbridgeQuestions[currentQuestion].choices[i];
        $('<li><input type="radio" value=' + i + ' name="dynradio" />' + choice + '</li>').appendTo(choiceList);
    }
}

function displaybigbenQuestion(poi) {

    console.log("In display current Question");

    var question2 = bigbenQuestions[currentQuestion].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices2 = bigbenQuestions[currentQuestion].choices.length;
    $(".poiText").text(poi);

    // Set the questionClass text to the current question
    $(questionClass).text(question2); 

    // Remove all current <li> elements (if any)
    $(choiceList).find("li").remove();

    var choice;
    for (i = 0; i < numChoices2; i++) {
        choice = bigbenQuestions[currentQuestion].choices[i];
        $('<li><input type="radio" value=' + i + ' name="dynradio" />' + choice + '</li>').appendTo(choiceList);
    }
}

function displaybtQuestion(poi) {

    console.log("In display current Question");

    var question3 = bttowerQuestions[currentQuestion].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices3 = bttowerQuestions[currentQuestion].choices.length;
    $(".poiText").text(poi);

    // Set the questionClass text to the current question
    $(questionClass).text(question3); 

    // Remove all current <li> elements (if any)
    $(choiceList).find("li").remove();

    var choice;
    for (i = 0; i < numChoices3; i++) {
        choice = bttowerQuestions[currentQuestion].choices[i];
        $('<li><input type="radio" value=' + i + ' name="dynradio" />' + choice + '</li>').appendTo(choiceList);
    }
}

function displayStPaul(poi) {

    console.log("In display current Question");

    var question4 = stpaulsQuestions[currentQuestion].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices4 = stpaulsQuestions[currentQuestion].choices.length;
    $(".poiText").text(poi);

    // Set the questionClass text to the current question
    $(questionClass).text(question4); 

    // Remove all current <li> elements (if any)
    $(choiceList).find("li").remove();

    var choice;
    for (i = 0; i < numChoices4; i++) {
        choice = stpaulsQuestions[currentQuestion].choices[i];
        $('<li><input type="radio" value=' + i + ' name="dynradio" />' + choice + '</li>').appendTo(choiceList);
    }
}

function displayPalace(poi) {

    console.log("In display current Question");

    var question5 = buckinghamQuestions[currentQuestion].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices5 = buckinghamQuestions[currentQuestion].choices.length;
    $(".poiText").text(poi);

    // Set the questionClass text to the current question
    $(questionClass).text(question5); 

    // Remove all current <li> elements (if any)
    $(choiceList).find("li").remove();

    var choice;
    for (i = 0; i < numChoices5; i++) {
        choice = buckinghamQuestions[currentQuestion].choices[i];
        $('<li><input type="radio" value=' + i + ' name="dynradio" />' + choice + '</li>').appendTo(choiceList);
    }
}

function displayGreenwich(poi) {

    console.log("In display current Question");

    var question6 = greenwichQuestions[currentQuestion].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices6 = greenwichQuestions[currentQuestion].choices.length;
    $(".poiText").text(poi);

    // Set the questionClass text to the current question
    $(questionClass).text(question6); 

    // Remove all current <li> elements (if any)
    $(choiceList).find("li").remove();

    var choice;
    for (i = 0; i < numChoices6; i++) {
        choice = greenwichQuestions[currentQuestion].choices[i];
        $('<li><input type="radio" value=' + i + ' name="dynradio" />' + choice + '</li>').appendTo(choiceList);
    }
}

function resetQuiz() {
    currentQuestion = 0;
    correctAnswers = 0;
    hideScore();
}

function displayScore() {
 //   $(document).find(".quizContainer > .result").text("You scored: " + correctAnswers + " out of: " + towerbridgeQuestions.length);
    $(document).find(".quizContainer > .result").show();
}

function hideScore() {
    $(document).find(".result").hide();
}