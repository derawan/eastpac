'use strict'

var util = require("util")

const axios = require('axios')

const { validate } = use('Validator')

const { rule } = require('indicative')

class PriceConversionController {
    async priceRequest({ request, response, auth }){
        try {
            const rules = {
                amount: [
                    rule('number'),
                    rule('required')
                ],
                convert: [
                    rule('string'),
                    rule('required')
                ]
            }

            const messages = {
                required: '{{ field }} can\'t be blank!',
                string: '{{ field }} can\'t string!'
            }

            const validation = await validate(request.body, rules, messages)

            if (validation.fails()) {
                // return response.send(validation.messages())
                return response.status(400).json({
                    error_code: 400,
                    error_messages: validation.messages()
                })
            }
            
            // Using Env
            const Env = use('Env')
            
            // Get Price Conversion
            const testing_url = 'https://sandbox-api.coinmarketcap.com/v1/tools/price-conversion'
            
            let data = {
                params: {
                    amount: request.body.amount,
                    symbol: Env.get('PRICE_SYMBOL'),
                    time: request.body.time,
                    convert: request.body.convert,
                }
            }

            // Debugging via console
            // console.log(util.inspect(data))

            const header = axios.defaults.headers.common['X-CMC_PRO_API_KEY'] = Env.get('PRICE_APIKEY')

            // Call Axios
            const getpc = await axios.get(testing_url, data, header);
            
            /*##### Start display message when SUCCESS from API local to server CoinMarket #####*/
            return response.status(200).json({
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