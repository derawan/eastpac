'use strict'

var Web3 = require("web3")
var util = require("util")

const mainnet = 'http://127.0.0.1:7545'

const { validate } = use('Validator')

const { rule } = require('indicative')

let web3 = new Web3(new Web3.providers.HttpProvider(mainnet));

class BalanceController {
    newBalances() {
        web3.eth.getBalance(address)
        .then(data => callback(data))

        // Attaches a callback for only the rejection of the Promise   
        .catch(err => {
            console.log("Error: " + err)
        })
    }

    async balanceStore({ request, response, auth }) {
        try {
            const rules = {
                address: [
                    rule('required')
                ]
            }

            const messages = {
                required: '{{ field }} can\'t be blank'
            }

            const validation = await validate(request.body, rules, messages)

            if (validation.fails()) {
                // return response.send(validation.messages())
                return response.json({
                    error_code: 115,
                    error_messages: validation.messages()
                })
            }

            let address_val = request.body.address

            // Call Web3
            const gb = await web3.eth.getBalance(address_val)
            
            // Debugging via console
            // console.log(address_val);
            // console.log(util.inspect(gb))

            // Show response IF successfully request
            return response.json({
                error_code: 100,
                message: 'Hi, your request successfully accepted. Here\'s your Balance. Thank you.',
                balance: gb
            })
        } catch (error) {
            // Show response IF failed request
            return response.json({
                error_code: 111,
                message: 'Sorry, you can\'t check balance. Please try again!' 
            })
        }
        
    }
}

module.exports = BalanceController