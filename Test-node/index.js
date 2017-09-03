'use strict'
// Create a simple server
// http is built in. No need to install
const http = require('http');
const hostname = '127.0.0.1'
const port = 3000;
// file system module 

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

/*
	speechObj[key].forEach(function(value){
		console.log("-------> " +value);
		let regex = new RegExp(value);
		if(regex.test("hello")){
			console.log(regex + " was found in " + key)
			return true;
		} else { console.log("ERROR")}
	})
*/

const fs = require('fs');
fs.readFile('index.html', (err, html) => {
	if(err) {
		throw err;
	}

const server = http.createServer((req, res) => {
	res.statusCode = 200;
	res.setHeader('Content-type', 'text/html');
	res.write(html);
	res.end();
});


server.listen(port, hostname, () => {
	console.log('server started on port: ' + port);
})

});

