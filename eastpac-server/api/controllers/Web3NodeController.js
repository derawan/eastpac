"use strict";

const mainnet = 'http://127.0.0.1:7545';

exports.CreateNewToken = function(req,res)
{
    var trx_id = req.body.trxid;
    var uid = req.body.uid;
    var upw = req.body.upw;

    var  Web3 = require("web3");
    var accountid  = "";
    let web3 = new Web3( new Web3.providers.HttpProvider(mainnet) );
    web3.eth.personal.newAccount("upw")
       .then((x) => {accountid  = x; res.send(JSON.stringify({trx_id:trx_id, uid:uid, passKey:upw,  accountId:x}))} );
    //res.send('hello brotha' + trx_id);
}

exports.UnlockAccount = function(req,res)
{
    res.send("sending account")
}