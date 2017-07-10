const express = require('express')
const bodyParser = require('body-parser')
const cookieParser = require('cookie-parser')
const factoryFunctions = require('./factoryFunctions.js')
let app = express()


function doCallback(obj, callback){
	return callback(obj.color, obj.model, obj.type)
	
}

let car = factoryFunctions.createCar("red", "2017 BMW", "Sedan")

console.log(doCallback(car, function(color, model, type){
	return color
}))