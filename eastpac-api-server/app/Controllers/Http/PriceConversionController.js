'use strict'

var util = require("util")

const axios = require('axios')

const { validate } = use('Validator')

const { rule } = require('indicative')

class PriceConversionController {
    async priceRequest({ request, response, auth }){
        try {
            const rules = {
                amount: 'required',
                convert: 'required|string'
            }

            const messages = {
                required: 'Require!',
                string: 'Must string!'
            }

            const validation = await validate(request.body, rules, messages)

            // Debugging via console
            if (validation.fails()) {
                return response.send(validation.messages())
            }

            // Using Env
            const Env = use('Env')
            
            // Get Price Conversion
            const testing_url = 'https://sandbox-api.coinmarketcap.com/v1/tools/price-conversion'

            let data = {
                params: {
                    amount: request.body.amount,
                    symbol: request.body.symbol,
                    time: request.body.time,
                    convert: request.body.convert,
                }
            }

            const header = axios.defaults.headers.common['X-CMC_PRO_API_KEY'] = 'b8552ff8-30a7-4cfc-9bab-d462687e8be4'

            // Call Axios
            const getpc = await axios.get(testing_url, data, header);
            

            /*##### Start display message when SUCCESS from API local to server CoinMarket #####*/
            return response.json({
                error_code: 0,
                message: 'Your request for Price Conversion accepted. Here\'s result from Price Conversion',
                data: getpc.data.data
            })
            /*##### End display message when SUCCESS from API local to server CoinMarket #####*/
        } catch (error) {
            /*##### Start display message when ERROR from frontend to API local #####*/
            // console.error(error)
            return response.status(422).json({
                status: 'Failed',
                message: 'Sorry, process failed. Please try again!'
            })
            /*##### End display message when ERROR from frontend to API local #####*/
        }

    }
}

module.exports = PriceConversionController