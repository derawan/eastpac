'use strict'

var Web3 = require("web3")
var util = require("util")

const mainnet = 'http://127.0.0.1:7545'
// const Balance = use('App/Models/etherium/Balance')

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
            let address_val = request.input('address')

            // Call Web3
            const gb = await web3.eth.getBalance(address_val)
            
            // Debugging via console
            // console.log(address_val);
            // console.log(util.inspect(gb))

            // Show response IF successfully request
            return response.json({
                status: 'Successfully',
                message: 'Hi, your request successfully accepted. Here\'s your Balance. Thank you.',
                data: gb
            })
        } catch (error) {
            // Show response IF failed request
            return response.status(422).json({
                status: 'Failed',
                message: getacc.data.message
            })
        }
        
    }
}

module.exports = BalanceController