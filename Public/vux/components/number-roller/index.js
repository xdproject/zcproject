!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?exports.vuxNumberRoller=e():t.vuxNumberRoller=e()}(this,function(){return function(t){function e(n){if(r[n])return r[n].exports;var i=r[n]={exports:{},id:n,loaded:!1};return t[n].call(i.exports,i,i.exports,e),i.loaded=!0,i.exports}var r={};return e.m=t,e.c=r,e.p="",e(0)}([function(t,e,r){t.exports=r(9)},function(t,e,r){"use strict";function n(t){return t&&t.__esModule?t:{"default":t}}Object.defineProperty(e,"__esModule",{value:!0});var i=r(2),o=n(i);e["default"]={props:{number:{type:Number},width:{type:Number,"default":3}},ready:function(){this._roller=new o["default"]({container:this.$el,width:this.width}),this._roller.roll(this.number)},watch:{number:function(t){this._roller.roll(t)}}}},function(t,e,r){"use strict";function n(t){return t&&t.__esModule?t:{"default":t}}Object.defineProperty(e,"__esModule",{value:!0});var i=r(4),o=n(i),s=r(5),u=n(s),l=function(){function t(e){if((0,o["default"])(this,t),this.container="string"==typeof e.container?document.querySelector(e.container):e.container,this.width=e.width||1,!this.container)throw Error("no container");this.container.style.overflow="hidden",this.rollHeight=parseInt(getComputedStyle(this.container).height),this.rollHeight<1&&(this.container.style.height="20px",this.rollHeight=20),this.setWidth()}return(0,u["default"])(t,[{key:"roll",value:function(t){var e=this;this.number=parseInt(t)+"",this.number.length<this.width?this.number=new Array(this.width-this.number.length+1).join("0")+this.number:this.number.length>this.width&&(this.width=this.number.length,this.setWidth()),Array.prototype.forEach.call(this.container.querySelectorAll(".num"),function(t,r){var n=parseInt(t.querySelector("div:last-child").innerHTML),i=parseInt(e.number[r]),o=0,s="";if(n!==i){if(i>n){o=i-n;for(var u=n;i+1>u;u++)s+="<div>"+u+"</div>"}else{o=10-n+i;for(var l=n;10>l;l++)s+="<div>"+l+"</div>";for(var a=0;i+1>a;a++)s+="<div>"+a+"</div>"}t.style.cssText+="-webkit-transition-duration:0;s-webkit-transform:translateY(0)",t.innerHTML=s;var c=o*(1/9);setTimeout(function(){t.style.cssText+="-webkit-transition-duration:"+c+"s;-webkit-transform:translateY(-"+e.rollHeight*o+"px)"},50)}})}},{key:"setWidth",value:function(t){t=t||this.width;for(var e="",r=0;t>r;r++)e+='<div class="num" style="float:left;height:100%;line-height:'+this.rollHeight+'px"><div>0</div></div>';this.container.innerHTML=e}}]),t}();e["default"]=l},function(t,e,r){t.exports={"default":r(6),__esModule:!0}},function(t,e){"use strict";e.__esModule=!0,e["default"]=function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}},function(t,e,r){"use strict";function n(t){return t&&t.__esModule?t:{"default":t}}e.__esModule=!0;var i=r(3),o=n(i);e["default"]=function(){function t(t,e){for(var r=0;r<e.length;r++){var n=e[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),(0,o["default"])(t,n.key,n)}}return function(e,r,n){return r&&t(e.prototype,r),n&&t(e,n),e}}()},function(t,e,r){var n=r(7);t.exports=function(t,e,r){return n.setDesc(t,e,r)}},function(t,e){var r=Object;t.exports={create:r.create,getProto:r.getPrototypeOf,isEnum:{}.propertyIsEnumerable,getDesc:r.getOwnPropertyDescriptor,setDesc:r.defineProperty,setDescs:r.defineProperties,getKeys:r.keys,getNames:r.getOwnPropertyNames,getSymbols:r.getOwnPropertySymbols,each:[].forEach}},function(t,e){t.exports="<div style=height:100px;font-size:100px></div>"},function(t,e,r){var n,i;n=r(1),i=r(8),t.exports=n||{},t.exports.__esModule&&(t.exports=t.exports["default"]),i&&(("function"==typeof t.exports?t.exports.options||(t.exports.options={}):t.exports).template=i)}])});