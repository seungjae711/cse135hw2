

const request = require('request');

request('https://cse135winter2019.slack.com/messages/CF4C57H89/convo/CF4C1GTS5-1550179534.004300/', function(err, res, bay){
   
    res.writeHead(200, {'Content-Type' : 'text/html'});

    var payload = "";

    payload += "<html><head><title>Headers!</title></head></html><body>";

    payload += req.method + "" + req.url + "HTTP/" +req.httpVersion +"<br>";

    for (var a in req.headers) {
        payload += a + ":" + req.headers[a] + "<br>"; 

    }
    payload += "</body></html>";
    res.end(payload);

});
request.listen(8081);

