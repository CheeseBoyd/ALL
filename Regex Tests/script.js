document.getElementById("status").innerHTML = "A regex that outputs all the matches found in a string given the match item";

var inputString = "Mick gordeon's rip and tear. Soundtrack";
var matchkeywords = "rip and tear";
var matchKeywords = matchkeywords.toLowerCase();
var outputString = "";
var regex = /rip/ + /matchkeywords/;

if(outputString || regex || inputString || matchkeywords || inputString) {
document.getElementById("regex").innerHTML = "Regex: " + regex;
document.getElementById("input-string").innerHTML = "input-string: " + inputString;
document.getElementById("match-keywords").innerHTML = "match-keywords: " + matchkeywords;
document.getElementById("output-string").innerHTML = "output-string: " + outputString;

} else {
	console.log("error");
}
// will split text into tokens based off the regular expression

function tokenizer(message, regex) {
	var tokenizer = message.split(regex);
	return tokenizer; 
}


var arr = tokenizer("still feel like your man", /\s+/ );
console.log(arr);