var express = require('express')
var router = express.Router()

router.get('/', function (req, res, next) {
  res.render('privacy_policy', { title: 'Privacy Policy | JULIANVOS.NL' })
})

module.exports = router
