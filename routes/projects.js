var express = require('express')
var router = express.Router()

router.get('/', function (req, res, next) {
  console.log(req.url)
  res.render('projects', { title: 'Projects | JULIANVOS.NL' })
})

router.get('/snake', function (req, res, next) {
  res.render('projects/snake/index.pug', { title: 'Snake | JULIANVOS.NL' })
})

router.get('/pong', function (req, res, next) {
  res.render('projects/pong/index.pug', { title: 'Pong | JULIANVOS.NL' })
})

router.get('/match4', function (req, res, next) {
  res.render('projects/match4/index.pug', { title: 'Match 4 | JULIANVOS.NL' })
})

module.exports = router
