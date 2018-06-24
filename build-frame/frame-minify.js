var compressor = require('node-minify');

//vendor js
compressor.minify({
    compressor: 'uglifyjs',
    input: 'lib/**/*.js',
    output: 'assets/js/vendors.js',
    callback: function(err, min) {
        console.log("Minify Error: " + err);
    }
});

//vendor css
compressor.minify({
    compressor: 'crass',
    input: 'lib/**/*.css',
    output: 'assets/css/vendors.css',
    callback: function(err, min) {
        console.log("Minify Error: " + err);
    }
});