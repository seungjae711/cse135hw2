

var http = require('http');


function onRequest(request, response) {
    var color_array = ['#FFFF00', '#0000FF', '#FFFFFF'];
    var ri = Math.floor(Math.random() * color_array.length);
    var rn = color_array[ri];
    var html1 = `<!DOCTYPE html><html><body style="background:${rn}">`;
    var html2 = `</body></html>`;
    var currentdate = new Date();
    var date = currentdate.getDate() + " /" +currentdate.getMonth() +" /"+ currentdate.getFullYear();

    response.writeHead(200, {'Content-Type': 'text/html'});
    response.write(`${html1}`);
    response.write(`<p>Hello Web World from Language JavaScript on ${date} enjoy my COLOR page</p>`);
    response.write(`${html2}`)
    response.end();
}
http.createServer(onRequest).listen(8000);





