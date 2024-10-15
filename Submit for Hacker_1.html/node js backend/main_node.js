var http = require('http');
var url = require("url");

http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  var q = url.parse(req.url, true).query;
  var txt = q.year + " " + q.mounth;
  res.write(txt)
  res.end();
  exports.myDateTime = function() {
    return Date();
  }
}).listen(8080);
