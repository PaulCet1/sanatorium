/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';


    
//ReactDOM.render(<Router><Home /></Router>, document.getElementById('root'));

// start the Stimulus application

import './bootstrap';
const $ = require('jquery');
require('bootstrap');
console.log("Test nie działa");

$(document).ready(function() {
    console.log('jQuery is working!');
});