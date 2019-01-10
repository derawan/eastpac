'use strict'

var util = require("util")

const axios = require('axios')
// const Balance = use('App/Models/etherscan/EtherBalance')

class EtherBalanceController {
    async etherBalanceStore({ request, response, auth }) {
        try {
            // Using Env
            const Env = use('Env')
            
            // Get Balance 
            const testing_url = 'https://rinkeby.etherscan.io/api'
            let data = {
                params: {
                    module: Env.get('MODULE_ETHBAL'),
                    action: Env.get('ACTION_ETHBAL'),
                    address: request.input('address'),
                    tag: Env.get('TAG__ETHBAL'),
                    apikey: Env.get('API_KEY_ETHBAL')
                }
            }
            
            // Call Axios
            const getacc = await axios.get(testing_url, data);
            
            // Debugging via console
            // console.log(util.inspect(getacc));
            
            if(getacc.data.message == 'NOTOK') {
                /*##### Start display message when ERROR from API local to server Etherscan #####*/
                return response.json({
                    status: 1,
                    message: getacc.data.message
                })
                /*##### End display message when ERROR from API local to server Etherscan #####*/
            } else {
                /*##### Start display message when SUCCESS from API local to server Etherscan #####*/
                return response.json({
                    status: 0,
                    message: 'Hi, your request successfully accepted. Here\'s your Balance. Thank you.',
                    balance: getacc.data.result
                })
                /*##### End display message when SUCCESS from API local to server Etherscan #####*/
            }
        } catch (error) {
            /*##### Start display message when ERROR from frontend to API local #####*/
            // console.error(error)
            return response.status(422).json({
                status: 'Failed',
                message: 'Sorry, you can\'t check balance. Please try again!'
            })
            /*##### End display message when ERROR from frontend to API local #####*/
        }
    }
}

module.exports = EtherBalanceController