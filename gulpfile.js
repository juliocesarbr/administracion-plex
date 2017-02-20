const elixir = require('laravel-elixir');

elixir((mix) => {
    mix.sass('app.scss')
       .webpack('app.js');

    //Unifico los scripts
    mix.scripts([
    	'app.js',
    	//'services.js'
    ], 'public/js/app.js');

    //Unifico los controladores
    mix.scripts([
    	'controllers/userController.js',
    ], 'public/js/controller.js');
});
