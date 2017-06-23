/*
* Testing ground
*/

document.getElementById("status").innerHTML = "A regex that outputs all the matches found in a string given the match item";

var inputString = "Mick gordeon's rip and tear. Soundtrack";
var matchkeywords = "rip and tear";
var regex = /\s/gi;


// will split text into tokens based off the regular expression

function tokenizer(message, regex) {
	var tokenizer = message.split(regex);
	return tokenizer; 
}


var outputString = tokenizer(inputString, regex );

var concatString = '';
for(var i = 0; outputString.length > i; i++) {

}

if(outputString || regex || inputString || matchkeywords || inputString) {
document.getElementById("regex").innerHTML = "Regex: " + regex;
document.getElementById("input-string").innerHTML = "input-string: " + inputString;
document.getElementById("match-keywords").innerHTML = "match-keywords: " + matchkeywords;
document.getElementById("output-string").innerHTML = "output-string: " + outputString;

} else {
	console.log("error");
}


function mockUser(messageText) {
	let tokenizer = messageText.split(/\s/gi);
	let mockString = "";
	for(let word of tokenizer) {
		word.split
		console.log(word);
	}

}

mockUser("Hello World");

function getRandomIntInclusive(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

let a = "aaron";

let val = getRandomIntInclusive(0,a.length);

let aChar = a.charAt(val).toUpperCase();

function toTitleCase(str)
{
    return str.replace(/\w\S*/g, (txt)=>{
    	return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
}

var fun = (messageText)=> {
          let tokenizer = messageText.split(/\s/gi);
          let out = tokenizer.join("");
          return out;
        }

console.log(fun("hola negra"));




let speech = {
  greet: ["hello", "hi", "hola"],
  goodbye:  ["bye", "goodbye", "good bye", "good-bye", "bye-bye","bye bye"],
  inquire: ["what?","what", "help","do something"]
}


var keys = Object.keys(speech);

function filterBySpeech(){

	keys.forEach(function(keys){
		console.log("List of known words in " + keys)
		for(var i = 0;i < speech[keys].length; i++) {
	  }
	  return speech[keys][i];
	});

	return keys;
}
