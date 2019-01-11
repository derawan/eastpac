'use strict'

/** @type {import('@adonisjs/lucid/src/Schema')} */
const Schema = use('Schema')

class AlterAccountsSchema extends Schema {
  up () {
    this.table('accounts', (table) => {
      table.dropColumn('module')
      table.dropColumn('action')
      table.dropColumn('tag')
      table.dropColumn('apikey')
      table.string('private_key')
    })
  }

  down () {
    this.table('accounts', (table) => {
      // reverse alternations
    })
  }
}

module.exports = AlterAccountsSchema
