/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\laragon\\www\\tweeter2\\resources\\js\\app.js: Identifier 'app' has already been declared (38:6)\n\n  36 | Vue.component('profile', require('./components/profile/Profile.vue'));\n  37 | \n> 38 | const app = new Vue({\n     |       ^\n  39 |     el: '#app'\n  40 | });\n  41 | \n    at Parser.raise (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:3851:17)\n    at ScopeHandler.declareName (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:8819:12)\n    at Parser.checkLVal (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:5537:22)\n    at Parser.parseVarId (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:7977:10)\n    at Parser.parseVar (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:7948:12)\n    at Parser.parseVarStatement (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:7773:10)\n    at Parser.parseStatementContent (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:7360:21)\n    at Parser.parseStatement (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:7293:17)\n    at Parser.parseBlockOrModuleBlockBody (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:7879:25)\n    at Parser.parseBlockBody (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:7866:10)\n    at Parser.parseTopLevel (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:7222:10)\n    at Parser.parse (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:8871:17)\n    at parse (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\parser\\lib\\index.js:11133:38)\n    at parser (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:170:34)\n    at normalizeFile (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:138:11)\n    at runSync (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\core\\lib\\transformation\\index.js:44:43)\n    at runAsync (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\core\\lib\\transformation\\index.js:35:14)\n    at process.nextTick (C:\\laragon\\www\\tweeter2\\node_modules\\@babel\\core\\lib\\transform.js:34:34)\n    at process._tickCallback (internal/process/next_tick.js:61:11)");

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\laragon\www\tweeter2\resources\js\app.js */"./resources/js/app.js");
!(function webpackMissingModule() { var e = new Error("Cannot find module 'C:\\laragon\\www\\tweeter2\\resources\\sass\\app.scss'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());


/***/ })

/******/ });