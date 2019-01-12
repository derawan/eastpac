'use strict'

/** @type {import('@adonisjs/lucid/src/Schema')} */
const Schema = use('Schema')

class TokenAccountBalanceSchema extends Schema {
  up () {
    this.create('token_account_balances', (table) => {
      table.increments()
      table.timestamps()
    })
  }

  down () {
    this.drop('token_account_balances')
  }
}

module.exports = TokenAccountBalanceSchema
