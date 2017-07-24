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
	}
}

	

module.exports = carFactory;
