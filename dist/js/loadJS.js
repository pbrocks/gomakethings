/*!
 * gomakethings v10.49.0: The WordPress theme for GoMakeThings.com
 * (c) 2016 Chris Ferdinandi
 * MIT License
 * https://github.com/cferdinandi/gomakethings
 * Open Source Credits: https://github.com/ftlabs/fastclick, https://github.com/toddmotto/fluidvids, http://prismjs.com
 */

/*! loadJS: load a JS file asynchronously. [c]2014 @scottjehl, Filament Group, Inc. (Based on http://goo.gl/REQGQ by Paul Irish). Licensed MIT */
function loadJS( src, cb ){
	"use strict";
	var ref = window.document.getElementsByTagName( "script" )[ 0 ];
	var script = window.document.createElement( "script" );
	script.src = src;
	script.async = true;
	ref.parentNode.insertBefore( script, ref );
	if (cb && typeof(cb) === "function") {
		script.onload = cb;
	}
	return script;
}