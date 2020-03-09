/*
jQWidgets v3.1.0 (2013-Dec-23)
Copyright (c) 2011-2014 jQWidgets.
License: http://jqwidgets.com/license/
*/

(function(a){a.jqx.jqxWidget("jqxCheckBox","",{});a.extend(a.jqx._jqxCheckBox.prototype,{defineInstance:function(){this.animationShowDelay=300,this.animationHideDelay=300,this.width=null;this.height=null;this.boxSize="13px";this.checked=false;this.hasThreeStates=false;this.disabled=false;this.enableContainerClick=true;this.locked=false;this.groupName="";this.keyboardCheck=true;this.enableHover=true;this.hasInput=true;this.rtl=false;this.updated=null;this.disabledContainer=false;this._canFocus=true;this.aria={"aria-checked":{name:"checked",type:"boolean"},"aria-disabled":{name:"disabled",type:"boolean"}};this.events=["checked","unchecked","indeterminate","change"]},createInstance:function(b){this.render()},_addInput:function(){if(this.hasInput){var b=this.host.attr("name");if(!b){b=this.element.id}this.input=a("<input type='hidden'/>");this.host.append(this.input);this.input.attr("name",b);this.input.val(this.checked);this.host.attr("role","checkbox");a.jqx.aria(this)}},render:function(){this.init=true;var c=this;this.setSize();this.propertyChangeMap.width=function(e,g,f,h){c.setSize()};this.propertyChangeMap.height=function(e,g,f,h){c.setSize()};if(this.checkbox){this.checkbox.remove()}if(this.boxSize==null){this.boxSize=13}var d=parseInt(this.boxSize)+"px";this.checkbox=a('<div><div style="width: '+d+"; height: "+d+';"><span style="width: '+d+"; height: "+d+';"></span></div></div>');this.host.prepend(this.checkbox);if(!this.disabledContainer){if(!this.host.attr("tabIndex")){this.host.attr("tabIndex",0)}this.host.append(a('<div style="clear: both;"></div>'))}this.checkMark=a(this.checkbox[0].firstChild.firstChild);this.box=this.checkbox;this.box.addClass(this.toThemeProperty("jqx-checkbox-default")+" "+this.toThemeProperty("jqx-fill-state-normal")+" "+this.toThemeProperty("jqx-rc-all"));if(this.disabled){this.disable()}if(!this.disabledContainer){this.host.addClass(this.toThemeProperty("jqx-widget"));this.host.addClass(this.toThemeProperty("jqx-checkbox"))}if(this.locked&&!this.disabledContainer){this.host.css("cursor","auto")}var b=this.element.getAttribute("checked");if(b=="checked"||b=="true"||b==true){this.checked=true}this._addInput();this._render();this._addHandlers();this.init=false},refresh:function(b){if(!b){this.setSize();this._render()}},setSize:function(){if(this.width!=null&&this.width.toString().indexOf("px")!=-1){this.host.width(this.width)}else{if(this.width!=undefined&&!isNaN(this.width)){this.host.width(this.width)}}if(this.height!=null&&this.height.toString().indexOf("px")!=-1){this.host.height(this.height)}else{if(this.height!=undefined&&!isNaN(this.height)){this.host.height(this.height)}}},_addHandlers:function(){var d=this;var c=a.jqx.mobile.isTouchDevice();var b="mousedown";if(c){b=a.jqx.mobile.getTouchEventName("touchend")}this.addHandler(this.box,b,function(e){if(!d.disabled&&!d.enableContainerClick&&!d.locked){d.toggle();if(d.updated){e.owner=d;d.updated(e,d.checked,d.oldChecked)}if(e.preventDefault){e.preventDefault()}return false}});if(!this.disabledContainer){this.addHandler(this.host,"keydown",function(e){if(!d.disabled&&!d.locked&&d.keyboardCheck){if(e.keyCode==32){if(!d._canFocus){return true}d.toggle();if(d.updated){e.owner=d;d.updated(e,d.checked,d.oldChecked)}if(e.preventDefault){e.preventDefault()}return false}}});this.addHandler(this.host,b,function(e){if(!d.disabled&&d.enableContainerClick&&!d.locked){d.toggle();if(e.preventDefault){e.preventDefault()}return false}});this.addHandler(this.host,"selectstart",function(e){if(!d.disabled&&d.enableContainerClick){if(e.preventDefault){e.preventDefault()}return false}});this.addHandler(this.host,"mouseup",function(e){if(!d.disabled&&d.enableContainerClick){if(e.preventDefault){e.preventDefault()}}});this.addHandler(this.host,"focus",function(e){if(!d.disabled&&!d.locked){if(!d._canFocus){return true}if(d.enableHover){d.box.addClass(d.toThemeProperty("jqx-checkbox-hover"))}d.box.addClass(d.toThemeProperty("jqx-fill-state-focus"));if(e.preventDefault){e.preventDefault()}d.hovered=true;return false}});this.addHandler(this.host,"blur",function(e){if(!d.disabled&&!d.locked){if(!d._canFocus){return true}if(d.enableHover){d.box.removeClass(d.toThemeProperty("jqx-checkbox-hover"))}d.box.removeClass(d.toThemeProperty("jqx-fill-state-focus"));if(e.preventDefault){e.preventDefault()}d.hovered=false;return false}});this.addHandler(this.host,"mouseenter",function(e){if(d.locked){d.host.css("cursor","arrow")}if(d.enableHover){if(!d.disabled&&d.enableContainerClick&&!d.locked){d.box.addClass(d.toThemeProperty("jqx-checkbox-hover"));d.box.addClass(d.toThemeProperty("jqx-fill-state-hover"));if(e.preventDefault){e.preventDefault()}d.hovered=true;return false}}});this.addHandler(this.host,"mouseleave",function(e){if(d.enableHover){if(!d.disabled&&d.enableContainerClick&&!d.locked){d.box.removeClass(d.toThemeProperty("jqx-checkbox-hover"));d.box.removeClass(d.toThemeProperty("jqx-fill-state-hover"));if(e.preventDefault){e.preventDefault()}d.hovered=false;return false}}});this.addHandler(this.box,"mouseenter",function(){if(d.locked){return}if(!d.disabled&&!d.enableContainerClick){d.box.addClass(d.toThemeProperty("jqx-checkbox-hover"));d.box.addClass(d.toThemeProperty("jqx-fill-state-hover"))}});this.addHandler(this.box,"mouseleave",function(){if(!d.disabled&&!d.enableContainerClick){d.box.removeClass(d.toThemeProperty("jqx-checkbox-hover"));d.box.removeClass(d.toThemeProperty("jqx-fill-state-hover"))}})}},focus:function(){try{this.host.focus()}catch(b){}},_removeHandlers:function(){var c=a.jqx.mobile.isTouchDevice();var b="click";if(c){b="touchend"}this.removeHandler(this.box,b);this.removeHandler(this.box,"mouseenter");this.removeHandler(this.box,"mouseleave");this.removeHandler(this.host,b);this.removeHandler(this.host,"mouseup");this.removeHandler(this.host,"selectstart");this.removeHandler(this.host,"mouseenter");this.removeHandler(this.host,"mouseleave");this.removeHandler(this.host,"keydown");this.removeHandler(this.host,"blur");this.removeHandler(this.host,"focus")},_render:function(){if(!this.disabled){if(this.enableContainerClick){this.host.css("cursor","pointer")}else{if(!this.init){this.host.css("cursor","auto")}}}else{this.disable()}if(this.rtl){this.box.addClass(this.toThemeProperty("jqx-checkbox-rtl"));this.host.addClass(this.toThemeProperty("jqx-rtl"))}this.updateStates()},_setState:function(b){if(this.checked!=b){this.checked=b;if(this.checked){this.checkMark[0].className=this.toThemeProperty("jqx-checkbox-check-checked")}else{if(this.checked==null){this.checkMark[0].className=this.toThemeProperty("jqx-checkbox-check-indeterminate")}else{this.checkMark[0].className=""}}}},val:function(b){if(arguments.length==0||(b!=null&&typeof(b)=="object")){return this.checked}if(typeof b=="string"){if(b=="true"){this.check()}if(b=="false"){this.uncheck()}if(b==""){this.indeterminate()}}else{if(b==true){this.check()}if(b==false){this.uncheck()}if(b==null){this.indeterminate()}}return this.checked},check:function(){this.checked=true;var b=this;this.checkMark.removeClass();if(a.jqx.browser.msie||this.animationShowDelay==0){this.checkMark.addClass(this.toThemeProperty("jqx-checkbox-check-checked"))}else{this.checkMark.addClass(this.toThemeProperty("jqx-checkbox-check-checked"));this.checkMark.css("opacity",0);this.checkMark.stop().animate({opacity:1},this.animationShowDelay,function(){})}if(this.groupName!=null&&this.groupName.length>0){var c=a.find(this.toThemeProperty(".jqx-checkbox",true));a.each(c,function(){var d=a(this).jqxCheckBox("groupName");if(d==b.groupName&&this!=b.element){a(this).jqxCheckBox("uncheck")}})}this._raiseEvent("0",true);this._raiseEvent("3",{checked:true});if(this.input!=undefined){this.input.val(this.checked);a.jqx.aria(this,"aria-checked",this.checked)}},uncheck:function(){this.checked=false;var b=this;if(a.jqx.browser.msie||this.animationHideDelay==0){if(b.checkMark[0].className!=""){b.checkMark[0].className=""}}else{this.checkMark.css("opacity",1);this.checkMark.stop().animate({opacity:0},this.animationHideDelay,function(){if(b.checkMark[0].className!=""){b.checkMark[0].className=""}})}this._raiseEvent("1");this._raiseEvent("3",{checked:false});if(this.input!=undefined){this.input.val(this.checked);a.jqx.aria(this,"aria-checked",this.checked)}},indeterminate:function(){this.checked=null;this.checkMark.removeClass();if(a.jqx.browser.msie||this.animationShowDelay==0){this.checkMark.addClass(this.toThemeProperty("jqx-checkbox-check-indeterminate"))}else{this.checkMark.addClass(this.toThemeProperty("jqx-checkbox-check-indeterminate"));this.checkMark.css("opacity",0);this.checkMark.stop().animate({opacity:1},this.animationShowDelay,function(){})}this._raiseEvent("2");this._raiseEvent("3",{checked:null});if(this.input!=undefined){this.input.val(this.checked);a.jqx.aria(this,"aria-checked","undefined")}},toggle:function(){if(this.disabled){return}if(this.locked){return}if(this.groupName!=null&&this.groupName.length>0){if(this.checked!=true){this.checked=true;this.updateStates()}return}this.oldChecked=this.checked;if(this.checked==true){this.checked=this.hasThreeStates?null:false}else{this.checked=this.checked!=null}this.updateStates();if(this.input!=undefined){this.input.val(this.checked)}},updateStates:function(){if(this.checked){this.check()}else{if(this.checked==false){this.uncheck()}else{if(this.checked==null){this.indeterminate()}}}},disable:function(){this.disabled=true;if(this.checked==true){this.checkMark.addClass(this.toThemeProperty("jqx-checkbox-check-disabled"))}else{if(this.checked==null){this.checkMark.addClass(this.toThemeProperty("jqx-checkbox-check-indeterminate-disabled"))}}this.box.addClass(this.toThemeProperty("jqx-checkbox-disabled-box"));this.host.addClass(this.toThemeProperty("jqx-checkbox-disabled"));this.host.addClass(this.toThemeProperty("jqx-fill-state-disabled"));this.box.addClass(this.toThemeProperty("jqx-checkbox-disabled"));a.jqx.aria(this,"aria-disabled",this.disabled)},enable:function(){if(this.checked==true){this.checkMark.removeClass(this.toThemeProperty("jqx-checkbox-check-disabled"))}else{if(this.checked==null){this.checkMark.removeClass(this.toThemeProperty("jqx-checkbox-check-indeterminate-disabled"))}}this.box.removeClass(this.toThemeProperty("jqx-checkbox-disabled-box"));this.host.removeClass(this.toThemeProperty("jqx-checkbox-disabled"));this.host.removeClass(this.toThemeProperty("jqx-fill-state-disabled"));this.box.removeClass(this.toThemeProperty("jqx-checkbox-disabled"));this.disabled=false;a.jqx.aria(this,"aria-disabled",this.disabled)},destroy:function(){this.host.remove()},_raiseEvent:function(g,e){if(this.init){return}var c=this.events[g];var f=new jQuery.Event(c);f.owner=this;f.args=e;try{var b=this.host.trigger(f)}catch(d){}return b},propertyChangedHandler:function(b,c,e,d){if(this.isInitialized==undefined||this.isInitialized==false){return}if(c==b.enableContainerClick&&!b.disabled&&!b.locked){if(d){b.host.css("cursor","pointer")}else{b.host.css("cursor","auto")}}if(c=="rtl"){if(d){b.box.addClass(b.toThemeProperty("jqx-checkbox-rtl"));b.host.addClass(b.toThemeProperty("jqx-rtl"))}else{b.box.removeClass(b.toThemeProperty("jqx-checkbox-rtl"));b.host.removeClass(b.toThemeProperty("jqx-rtl"))}}if(c=="theme"){a.jqx.utilities.setTheme(e,d,b.host)}if(c=="checked"){if(d!=e){switch(d){case true:b.check();break;case false:b.uncheck();break;case null:b.indeterminate();break}}}if(c=="disabled"){if(d!=e){if(d){b.disable()}else{b.enable()}}}}})})(jQuery);