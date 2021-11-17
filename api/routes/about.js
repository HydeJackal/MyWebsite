var express = require('express');
var router = express.Router();

/* GET about page. */
router.get('/about', function(req, res, next) {
  res.send("API is working here");
});

module.exports = router;
