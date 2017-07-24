// BASICS OF JS UNIT TESTING

/*
* NOTES:
* mocha by default will look or a 
* test folder where the test file is located
*/

/*
* folders should be arranged 
* in the same manner in your application
*
* e.g this user folder will have userTests.js 
* in it
*/


const assert = require('chai').assert 
// npm has its own assert module
const app = require('../app').sayHello
// calls the exported sayHello function
// ('../app') means going out of the test folder


describe('app', function(){
	describe('sayHello()', function(){
		// Tests sayHello() results
		it('sayHello should return hello', function(){
			assert.equal(app.sayHello(), 'hello')
		})

		it('sayHello should return str type', function(){
			assert.equal(app.sayHello(), 'string')
		})		

	})

})

