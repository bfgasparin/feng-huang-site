window.Tether = require('tether');

window.$ = window.jQuery = require('jquery')
require('bootstrap');

$( document ).ready(function() {
    console.log($.fn.tooltip.Constructor.VERSION);
});