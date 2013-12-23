var CONF = {
        IO: {HOST: '0.0.0.0', PORT: 8080},
        EXPRESS: {HOST: 'localhost', PORT: 26300}
    },
    io = require('socket.io').listen(CONF.IO.PORT, CONF.IO.HOST),
    app = require('express')();

app.get('/emit/:id/:message', function (req, res) {
    io.sockets.emit(req.params.id, req.params.message);
    res.json('OK');
});

app.listen(CONF.EXPRESS.PORT, CONF.EXPRESS.HOST);