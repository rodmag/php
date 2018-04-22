var express = require('express');
var bodyParser = require('body-parser');
var app = express();
var router = express.Router();


// create application/x-www-form-urlencoded parser
var urlencodedParser = bodyParser.urlencoded({ extended: false })

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

//Passar parametro para a pagina teste
router.get('/teste', function(req, res, next) {
  res.render('teste', { title: 'Teste' });
});

//Render pagina teste2 com os valores do form dentro do objeto data
router.post('/teste2', urlencodedParser, function(req, res) {
  console.log(req.body);
  res.render('teste2', { data: req.body });
});

module.exports = router;
