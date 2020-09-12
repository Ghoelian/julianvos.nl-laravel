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

router.get('/lyrics_graph', function (req, res, next) {
  res.render('projects/lyrics_graph/index.pug', { title: 'Lyrics Graph | JULIANVOS.NL' })
})

router.get('/dungeon_crawler', function (req, res, next) {
  res.render('projects/dungeon_crawler/index.pug', { title: 'Dungeon Crawler | JULIANVOS.NL' })
})

router.get('/dungeon_crawler_editor', function (req, res, next) {
  res.render('projects/dungeon_crawler_editor/index.pug', { title: 'Dungeon Crawler Editor | JULIANVOS.NL' })
})

module.exports = router
