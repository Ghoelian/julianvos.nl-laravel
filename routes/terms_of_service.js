var express = require('express')
var router = express.Router()

router.get('/', function (req, res, next) {
  res.render('terms_of_service', { title: 'Terms of Service | JULIANVOS.NL' })
})

module.exports = router
