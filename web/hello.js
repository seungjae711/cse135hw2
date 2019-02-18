
const express = require('express');
const app = express();
const fs = require('fs');
var bodyParser = require('body-parser');
const path = require('path');
const xmlbuilder = require('xmlbuilder');


app.use(bodyParser.urlencoded({extended:true}));

app.get('/', (req, res) => {
        res.set ('Content-Type', 'text/html');
	res.sendFile('nodeH.html', {root: path.join(__dirname, './')});
});

 

//Q2
app.get('/hellodata', (req, res) => {     
  
    var url = require('url');
    var queryData = url.parse(req.url, true).query;
    var response = queryData.response;
      
    var msg = `Hello World at ${new Date()}`;
    var error = "<html>\n<head>\n<title>Hello Node!</title>\n</head>";
    error +="<body><h1>Error: Specifyresponse paramter</h1></body></html>";
    myObj = new Object()
    myObj["msg"] = msg;
    

    var dd2 = "<? xml version='1.0" + "encoding='UTF-8'?>" + msg;
 
    res.set('Content-Type', 'text/html'); 
    //string += `Hello World at ${new Date()}`;
   
       

    if (response === "") {
        res.send(error);
    }else {
        if (response === "JSON") {
		res.setHeader('Content-Type', 'text/html');
		res.send(JSON.stringify(myObj));
	}else if (response === "XML"){
		res.send(dd2); 
        }
    }
    res.end();	

});


//Q3
app.get('/header', (req, res) => {
    res.setHeader('Content-Type', 'text/html');

    var payload = "<html><head><title>webSite</title></head></html><body><br>";
    for (var a in req.headers) {
        payload += a + ":" + req.headers[a] + "<br>"; 
    }
    payload += "</body></html>";
    
    res.send(payload)
    res.end();	
});




//Q1 
app.get('/hello', (req, res) => {
    var color_array = ['#FFFF00', '#0000FF', '#FFFFFF'];
    var ri = Math.floor(Math.random() * color_array.length);
    var rn = color_array[ri];
    var html1 = `<!DOCTYPE html><html><body style="background:${rn}">`;
    var html2 = `</body></html>`;
    res.set ('Content-Type', 'text/html');
    res.send(`${html1}<p>Hello Web World from Language JavaScript on ${new Date()} enjoy my COLOR page</p>${html2}`);
    res.end();
});

//Q4
app.get('/food',(req, res) => {
    var url = require('url');
    var queryData = url.parse(req.url, true).query;
    var name = queryData.name; 
    var color = queryData.color
    var html1 = `<!DOCTYPE html><html><body style="background:${color}">`;
    var html2 = `</body></html>`;
    var name = queryData.name;
    var color = queryData.color;
    res.set ('Content-Type', 'text/html');
    res.send(`${html1}<p>Hello ${name} World from Language JavaScript on ${new Date()} enjoy my COLOR page</p>${html2}`);
});

//Q4
app.post('/food',(req, res) =>{
    var name  = req.body.name;
    var color = req.body.color;
    var html1 = `<!DOCTYPE html><html><body style="background:${color}">`;
    var html2 = `</body></html>`;
    res.set ('Content-Type', 'text/html');
    res.send(`${html1}<p>Hello Web ${name} from Language JavaScript on ${new Date()} enjoy my COLOR page</p>${html2}`);
    res.send('You sent the name "'+req.body.name + '" .');
});

app.listen(3000, () => console.log('Listening on port 3000...'))
