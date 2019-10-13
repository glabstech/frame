var copydir = require('copy-dir');

copydir('node_modules/@fortawesome/fontawesome-free/webfonts', 'assets/webfonts', {
    utimes: true,  // keep add time and modify time
    mode: true,    // keep file mode
    cover: true    // cover file when exists, default is true
  }, function(err){
    if(err) throw err;
    console.log('done');
  });

  //copy folder from slick-carousel
  copydir('node_modules/slick-carousel/slick/fonts', 'assets/css/fonts', {
    utimes: true,  // keep add time and modify time
    mode: true,    // keep file mode
    cover: true    // cover file when exists, default is true
  }, function(err){
    if(err) throw err;
    console.log('slick-carousel dependencies copy process done successfully!');
  });