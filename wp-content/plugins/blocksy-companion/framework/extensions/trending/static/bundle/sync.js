!function(){"use strict";var e={n:function(t){var r=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(r,{a:r}),r},d:function(t,r){for(var n in r)e.o(r,n)&&!e.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:r[n]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}},t=window.blocksyCustomizerSync,r=window.ctEvents;function n(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function o(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?n(Object(r),!0).forEach((function(t){c(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):n(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function c(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}e.n(r)().on("ct:customizer:sync:collect-variable-descriptors",(function(e){e.result=o(o(o(o({},e.result),{},{trendingBlockContainerSpacing:{selector:".ct-trending-block",variable:"padding",responsive:!0,unit:""}},(0,t.typographyOption)({id:"trendingBlockHeadingFont",selector:".ct-trending-block .ct-block-title"})),{},{trendingBlockHeadingFontColor:{selector:".ct-trending-block .ct-block-title",variable:"heading-color",type:"color",responsive:!0}},(0,t.typographyOption)({id:"trendingBlockPostsFont",selector:".ct-trending-block .ct-item-title"})),{},{trendingBlockFontColor:[{selector:".ct-trending-block a",variable:"color",type:"color:default",responsive:!0},{selector:".ct-trending-block a",variable:"linkHoverColor",type:"color:hover",responsive:!0}],trendingBlockArrowsColor:[{selector:'.ct-trending-block [class*="ct-arrow"]',variable:"color",type:"color:default",responsive:!0},{selector:'.ct-trending-block [class*="ct-arrow"]',variable:"linkHoverColor",type:"color:hover",responsive:!0}]},(0,t.handleBackgroundOptionFor)({id:"trending_block_background",selector:".ct-trending-block",responsive:!0}))})),wp.customize("trending_block_visibility",(function(e){return e.bind((function(e){return(0,t.responsiveClassesFor)("trending_block_visibility",document.querySelector(".ct-trending-block"))}))})),wp.customize("trending_block_label",(function(e){return e.bind((function(e){var t=document.querySelector(".ct-trending-block .ct-block-title");if(t){var r=t.innerHTML.split("<svg");r[0]=e,t.innerHTML=r.join("<svg")}}))}))}();