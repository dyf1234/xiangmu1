var reuqire('nodesjs-websocket');
var PORT=3000
var server=ws.createSever(function(conn){
	response.writeHead("200,{'Content-type:'text/plain}");
	response.end("conn");

}).listen(PORT);
console.log("Server running at http://127.0.0.1:3000/");