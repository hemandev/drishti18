
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes jQuery and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const jQuery = require('jquery');
// Add jQuery to DOM
window.jQuery = window.$ = jQuery;

require('bootstrap');
require('letteringjs');
require('popper.js');
require('lodash');
require('velocity-animate');
require('skrollr');
// Load custom written scripts
require('./main');
require('./main-circle-anim-trigger');

