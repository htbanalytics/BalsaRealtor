import axios from "axios";
var axios = require("axios").default;

var options = {
  method: 'GET',
  url: 'https://realty-mole-property-api.p.rapidapi.com/saleListings',
  params: {city: 'Aptos', state: 'CA'},
  headers: {
    'x-rapidapi-key': '16e5bc17b7msh8eca5bc5694a3a7p18e6c4jsn9210d7235635',
    'x-rapidapi-host': 'realty-mole-property-api.p.rapidapi.com'
  }
};

axios.request(options).then(function (response) {
	console.log(response.data);
}).catch(function (error) {
	console.error(error);
});