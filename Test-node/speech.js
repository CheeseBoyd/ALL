// Test
'use strict'

var speech_class = {
	words: {
		GREET: ["hello", "how are you?", "hey"],
		GOODBYE: ["bye", "goodybe", "see you"]
	},
	get: function(){
		return this.words;
	},
	statement: "hello I am from speech.js",
	foo: function() {
		console.log("I am a function from speech.js");
	}

};



module.exports = speech_class;


/*
 // How to use
// local file module
const speech = require('./speech.js');
console.log(speech.get());
console.log(speech.statement);
speech.foo();



// Escapes regex
function escapeRegExp(str) {
  return str.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
}



 
let speechObj = speech.get();
let keys = null;
keys = Object.keys(speechObj);
console.log("keys: " + keys);
keys.forEach(function(key) {
	console.log("Key group array of: " + key);
	for(let value of speechObj[key]) {
		console.log("---->"+ value);
		let regex = new RegExp(value);
		if(regex.test("goodbye hello hey")) {
			console.log(regex + " found in array: ---> " + key );
			switch(key) {
				case 'GREET':
					console.log("GREET based response activated");
					break;
				case 'GOODBYE':
					console.log("GOODBYE based response activated");
					break;
				default: 
					console.log("NO AVAILABLE response");
			}

			// if no match is found break
			return false
		}

	}
});


*/