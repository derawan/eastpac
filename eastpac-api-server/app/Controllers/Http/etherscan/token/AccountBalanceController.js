'use strict'

var util = require("util")

const axios = require('axios')
// const Balance = use('App/Models/etherscan/TokenAccountBalance')

class AccountBalanceController {
    async tokenAccountStore({ request, response, auth }) {
        try {
            // Using Env
            const Env = use('Env')
            
            // Get Token Balance 
            const testing_url = 'https://rinkeby.etherscan.io/api'
            let data = {
                params: {
                    module: Env.get('MODULE_TOKBAL'),
                    action: Env.get('ACTION_TOKBAL'),
                    contractaddress: request.input('contractaddress'),
                    address: request.input('address'),
                    tag: Env.get('TAG_TOKBAL'),
                    apikey: Env.get('API_KEY_TOKBAL')
                }
            }
            
            // Call Axios
            const getacc = await axios.get(testing_url, data);
            
            // Debugging via console
            //console.log(util.inspect(getacc))

           /*##### Start display message when ERROR from API local to server Etherscan #####*/
           if(getacc.data.message == 'NOTOK') {
            return response.json({
                status: 1,
                message: getacc.data.message
            })
        } else {
            return response.json({
                status: 0,
                message: 'Hi, your request successfully accepted. Here\'s your Token Balance. Thank you.',
                balance: getacc.data.result
            })
        }
        /*##### End display message when ERROR from API local to server Etherscan #####*/
        } catch (error) {
            /*##### Start display message when ERROR from frontend to API local #####*/
            // console.error(error)
            return response.status(422).json({
                status: 'Failed',
                message: getacc.data.message
            })
            /*##### End display message when ERROR from frontend to API local #####*/
        }
    }
}

module.exports = AccountBalanceController