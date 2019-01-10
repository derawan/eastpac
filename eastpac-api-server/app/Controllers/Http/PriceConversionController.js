'use strict'

var util = require("util")

const axios = require('axios')

class PriceConversionController {
    async priceRequest({ request, response, auth }){
        try {
            // Using Env
            const Env = use('Env')
            
            // Get Price Conversion
            const testing_url = 'https://sandbox-api.coinmarketcap.com/v1/tools/price-conversion'

            let data = {
                params: {
                    amount: request.input('amount'),
                    symbol: 'ETH',
                    time: '2018-12-22T06:04:02.000Z',
                    convert: request.input('convert'),
                }
            }

            const header = axios.defaults.headers.common['X-CMC_PRO_API_KEY'] = 'b8552ff8-30a7-4cfc-9bab-d462687e8be4'

            // Call Axios
            const getpc = await axios.get(testing_url, data, header);
            
            // Debugging via console
            // console.log(util.inspect(getpc.data.data))

            if(getpc.error_code == 400) {
                /*##### Start display message when SUCCESS from API local to server CoinMarket #####*/
                return response.json({
                    error_code: 400,
                    message: getpc.error_message,
                })
                /*##### End display message when SUCCESS from API local to server CoinMarket #####*/
            } else {
                /*##### Start display message when SUCCESS from API local to server CoinMarket #####*/
                return response.json({
                    error_code: 0,
                    message: 'Your request about Price Conversion accepted. Here\'s result from Price Conversion',
                    data: getpc.data.data
                })
                /*##### End display message when SUCCESS from API local to server CoinMarket #####*/
            }
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