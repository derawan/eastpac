'use strict'

var Web3 = require("web3")
var util = require("util")

const mainnet = 'http://127.0.0.1:7545'
const Account = use('App/Models/etherium/Account')

let web3 = new Web3(new Web3.providers.HttpProvider(mainnet));

class AccountController {
    newAccounts() {
        web3.eth.accounts.create()
        .then(data => callback(data))

        // Attaches a callback for only the rejection of the Promise   
        .catch(err => {
            console.log("Error: " + err)
        })
    }

    async accountStore({ request, response, auth }) {
        try {
            // Adding await keyword, because web3.eth.personal.newAccount as promise callback style
            const ca =  await web3.eth.accounts.create()
            
            // Prepare store into database
            const account = new Account()
            account.address = ca.address
            account.private_key = ca.privateKey

            // Store 
            await account.save()

            // Debugging via console
            // console.log(util.inspect(res))

            // Show response IF successfully store
            return response.json({
                error_code: 100,
                message: 'Congratulation, your account successfully created',
                data: ca
            })
        } catch (error) {
            // Show response IF failed store
            return response.json({
                error_code: 111,
                message: 'You can\'t create account. Please try again!'
            })
        }

    }
}

module.exports = AccountController