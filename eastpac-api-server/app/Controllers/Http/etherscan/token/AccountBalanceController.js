'use strict'

var util = require("util")

const axios = require('axios')

const { validate } = use('Validator')

const { rule } = require('indicative')

class AccountBalanceController {
    async tokenAccountStore({ request, response, auth }) {
        try {
            const rules = {
                contractaddress: [
                    rule('required')
                ],
                address: [
                    rule('required')
                ]
            }

            const messages = {
                required: '{{ field }} can\'t be blank!'
            }

            const validation = await validate(request.body, rules, messages)

            if (validation.fails()) {
                // return response.send(validation.messages())
                return response.json({
                    error_code: 115,
                    error_messages: validation.messages()
                })
            }

            // Using Env
            const Env = use('Env')
            
            // Get Token Balance 
            const testing_url = 'https://rinkeby.etherscan.io/api'
            let data = {
                params: {
                    module: Env.get('MODULE_TOKBAL'),
                    action: Env.get('ACTION_TOKBAL'),
                    contractaddress: request.body.contractaddress,
                    address: request.body.address,
                    tag: Env.get('TAG_TOKBAL'),
                    apikey: Env.get('API_KEY_TOKBAL')
                }
            }
            
            // Call Axios
            const getacc = await axios.get(testing_url, data);
            
            // Debugging via console
            // console.log(util.inspect(getacc))

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
                    message: 'Hi, your request successfully accepted. Here\'s your Token Balance. Thank you.',
                    token: getacc.data.result
                })
                /*##### End display message when SUCCESS from API local to server Etherscan #####*/
            }
        } catch (error) {
            /*##### Start display message when ERROR from Backend to API local #####*/
            // console.error(error)
            return response.json({
                error_code: 111,
                message: 'Sorry, you can\'t check token balance. Please try again!'
            })
            /*##### End display message when ERROR from Backend to API local #####*/
        }
    }
}

module.exports = AccountBalanceController