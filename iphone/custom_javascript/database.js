// JavaScript Document

var currentUser = function () {
	// Replace with loading data from the database for a logged in user.
	return {
		username: "John Smith",
		email: "johnsmith@mailinator.com",
	};
};

// Perform logging out (remove session, etc).
// afterLoggedOut should be called when user was logged out.
var logOut = function (afterLoggedOut) {
	afterLoggedOut();
}

var findPubs = function (successCallback) {
	successCallback([
		{
			name: "The Prince of Wales Feathers",
			poi: "BT Tower",
			latitude: 51.524352,
			longitude: -0.138553,
			address: "8 Warren Street, Fitzrovia, London, W1T 5LD",
			description: "An elegant pub with access to speciality beer, quizzes every Tuesday and even a roof terrace. The terrace had been featured on popular site Buzzfeed’s “Rooftop bars you must visit before you die” in 2015."
		},
		{
			name: "The Lukin",
			poi: "BT Tower",
			latitude: 51.522195,
			longitude: -0.139464,
			address: "4 Conway Mews, Fitzrovia, London, W1T 6BB",
			description: "A new pub on the scene, opened in 2008 with much to offer- 2 plasma screen TVs, a foozball table, private bar and a fireplace. Can house up to 120 guests in a location sat right next to the BT Tower."
		},
		{
			name: "The King & Queen",
			poi: "BT Tower",
			latitude: 51.520210,
			longitude: -0.138701,
			address: "1 Foley St, Fitzrovia, London, W1W 6DL",
			description: "An independent traditional pub since 1985. Live folk music plays regularly. Includes free wi-fi and regular viewings of popular sports on 2 TV screens."
		},
		{
			name: "Dean Swift",
			poi: "Tower Bridge",
			latitude: 51.502791,
			longitude: -0.075041,
			address: "10 Gainsford St, London SE1 2NE",
			description: "A quirky and bright local beer house dedicated to fun, relaxation and conversation. If sports aren’t your thing, the pub provides a variety of board games to play."
		},
		{
			name: "Windsor Fenchurch",
			poi: "Tower Bridge",
			latitude: 51.511491,
			longitude: -0.079241,
			address: "2 New London St, London EC3R 7NA",
			description: "A traditional pub serving traditional beer and food. Events are held weekly, including DJ/karaoke, board games, poker and champagne parties."
		},
		{
			name: "Princess of Prussia",
			poi: "Tower Bridge",
			latitude: 51.511544,
			longitude: -0.070521,
			address: "15 Prescot St, London E1 8AZ",
			description: "Made in the Victorian times, this long-standing pub has since been refurbished to bring its aging features back to life. It boasts authentic thai cuisine and even a Beer Garden, which includes heating for the Winter months."
		},
		{
			name: "Cask & Glass",
			poi: "Buckingham Palace",
			latitude: 51.498534,
			longitude: -0.140280,
			address: "39-41 Palace St, London SW1 5HN",
			description: "A very small pub with plenty of character- the Cask & Glass still stands out amongst larger pubs in Central London. Best known for their toasties and was even featured in the Good Beer Guide in 2016."
		},
		{
			name: "The Albert",
			poi: "Buckingham Palace",
			latitude: 51.497706,
			longitude: -0.135611,
			address: "52 Victoria St, Victoria, London SW1H 0NP",
			description: "Running since 1855, this Victorian pub is known not only for their wide variety of beers, but the wide variety of seating. Enjoy a beer by the fireplace, lounge outside in one of two outdoor areas, or even sit in the Secret Courtyard (if you can find it!)."
		},
		{
			name: "The Speaker",
			poi: "Buckingham Palace",
			latitude: 51.496969,
			longitude: -0.132394,
			address: "46 Great Peter St, Victoria, London SW1P 2HA",
			description: "Warm, cozy and hospitable: The Speaker is closely located to the St James Park station for when you want to drop in for a quick drink or bite. No loud TVs, fruit machines or music to distract you!"
		},
		{
			name: "St Stephen's Tavern",
			poi: "Big Ben",
			latitude: 51.501168,
			longitude: -0.125597,
			address: "10 Bridge St, Westminster, London SW1A 2JR",
			description: "A friendly family-run pub sitting opposite to the Houses of Parliament- it even has some visitors from there on occasion! It has served them and many other customers for over 230 years."
		},
		{
			name: "The Red Lion",
			poi: "Big Ben",
			latitude: 51.502067,
			longitude: -0.125711,
			address: "48 Parliament St, London SW1A 2NH",
			description: "Housing big names like Charles Dickens and Winston Churchill, the grand Red Lion pub is fit for royalty- and you!"
		},
		{
			name: "Sherlock Holmes",
			poi: "Big Ben",
			latitude: 51.507339,
			longitude: -0.125310,
			address: "10 Northumberland St, St James's WC2N 5DB",
			description: "Named after the famous fictional detective- even celebrating his birthday every year with a party- this pub prides itself not only on its name, but on its superb food, drink and even Sherlock Holmes-related props."
		},
		{
			name: "Ye Olde Cheshire Cheese",
			poi: "St. Paul's Cathedral",
			latitude: 51.514349,
			longitude: -0.107215,
			address: "145 Fleet St, London EC4A 2BU",
			description: "A pub known just as much for its history as much as its beer- small on the outside but houses a staircase to many different levels of the pub. A very unique setting to visit."
		},
		{
			name: "Bishops Finger",
			poi: "St. Paul's Cathedral",
			latitude: 51.518552,
			longitude: -0.101839,
			address: "9-10 W Smithfield, London EC1A 9JR",
			description: "Taking its name from the finger-shaped signs of Canterbury, the uniquely named Bishops Finger, this pub boasts not only an interesting name, but the only English beer to have a charter- meaning it must be made and taste-tested only on certain days. Only here can you taste such a carefully crafted beer!"
		},
		{
			name: "Butchers Hook & Cleaver",
			poi: "St. Paul's Cathedral",
			latitude: 51.518812,
			longitude: -0.100551,
			address: "61 W Smithfield, London EC1A 9DY",
			description: "Adorned with flowers (award-winning, no less!), lit with a beautiful chandelier and brimming with friendly faces, the Butchers Hook & Cleaver is a beautifully crafted pub with equally good food and drink. Opened in 1999, it is not the oldest pub in London, yet it holds several awards for Fuller’s Best City pub to make up for lost time."
		},
		{
			name: "The Admiral Hardy",
			poi: "Greenwich",
			latitude: 51.481928,
			longitude: -0.009238,
			address: "7 College Approach, London SE10 9HY",
			description: "The Admiral Hardy is a particularly unique pub- the walls covered with framed records, neon signs and even a lava lamp or four. For rock fans, young and old, this pub provides great food, great drink, and above all: great music."
		},
		{
			name: "The Gipsy Moth",
			poi: "Greenwich",
			latitude: 51.482266,
			longitude: -0.009842,
			address: "60 Greenwich Church St, London SE10 9BL",
			description: "You won’t miss this pub in Greenwich- it sits right next to the Cutty Sark ship! A picturesque pub in a picturesque location. If you want to bring the family over, come on Sundays for Sunday roast and board games."
		},
		{
			name: "Trafalgar Tavern",
			poi: "Greenwich",
			latitude: 51.484464,
			longitude: -0.004345,
			address: "Park Row, Greenwich, London SE10 9NW",
			description: "This large tavern has one of the most unique views in London, sitting right next to the River Thames. Enjoy a meal and a pint as you watch the ships drive by, indoors or out. It even has a ballroom!"
		},
	]);
};

var towerbridgeQuestions = [{
    question: "Who designed the tower bridge?",
    choices: ["Horace Jones", "George Gilbert Scott", "Indigo Jones", "Augustus Pugin"],
    correctAnswer: 0  
}, {
    question: "How long it took to build Tower Bridge?",
    choices: ["5 years", "6 years", "7 years", "8 years"],
    correctAnswer: 3
}];

var bigbenQuestions = [{
    question: "When was Big Ben completed?",
    choices: ["10th April 1858", "31st May 1859", "11th July 1859", "15th January 1857"],
    correctAnswer: 1
}, {
    question: "Who named Big Ben?",
    choices: ["Londoners", "Queen Victoria", "Winston Churchill", "Queen Elizabeth II"],
    correctAnswer: 0
}];

var bttowerQuestions = [{
    question: "When was BT Tower constructed?",
    choices: ["1968", "1969", "1964", "1967"],
    correctAnswer: 2
}, {
    question: "How many floors does BT Tower have?",
    choices: ["34", "33", "36", "30"],
    correctAnswer: 0
}];

var stpaulsQuestions = [{
    question: "How many bells are in the St Paul’s Cathedral?",
    choices: ["18", "4", "1", "10"],
    correctAnswer: 0
}, {
    question: "Who designed the St Paul’s Cathedral?",
    choices: ["Charles Barry", "Edwin Lutyens", "Christopher Wren", "Leslie Martin"],
    correctAnswer: 2
}];

var buckinghamQuestions = [{
     question: "Who was the first monarch to live in the Buckingham Palace?",
    choices: ["Queen Elizabeth II", "Queen Victoria", "Queen Mary II", "George IV"],
    correctAnswer: 1
}, {
    question: "How many rooms does Buckingham palace have?",
    choices: ["775", "312", "650", "821"],
    correctAnswer: 0
}];

var greenwichQuestions = [{
    question: "Who established Greenwich Meridian?",
    choices: ["Ernst Georg Ravenstein", "Sir George Airy", "Nicholas Crane", "Roger Tomlinson"],
    correctAnswer: 1
}, {
    question: "When was Greenwich Meridian established?",
    choices: ["1851", "1844", "1872", "1892"],
    correctAnswer: 0
}];
