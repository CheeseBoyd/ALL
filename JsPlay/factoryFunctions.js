let carFactory = {
	createCar: (color, model, type) => {
		return {
			model: model,
			type: type,
			color: color
		}
	}
}

module.exports = carFactory;
