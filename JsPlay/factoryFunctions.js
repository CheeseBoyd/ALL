/*
* obj does not make any sense and is only for testing
*/


let carFactory = {
	prop: 'cheese',
	changeProp: function(str) {
		return this.prop = str
	},
	createCar: (color, model, type) => {
		return {
			model: model,
			type: type,
			color: color
		}
	},
	giveFood: function() {
		console.log(this.prop + ' is a food item')
		return this.prop
	}
}

	

module.exports = carFactory;
