/*!CK:1330691969!*//*1445959921,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["L7Jfi"]); }

__d('UFIUIEvents',[],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h='UFIUIEvents/ufiActionAddComment',i='UFIUIEvents/ufiActionLinkLike',j='UFIUIEvents/ufiActionLinkUnlike',k='ufi/blur',l='ufi/changed',m='ufi/comment',n='comment/focus',o='CommentUFI.Pager',p='ufi/focus',q='ufi/inputHeightChanged',r='ufi/page_cleared',s='ufi/photoPreviewHightChanged',t='ufi/translationRendered',u='ufi/reactionButtonClicked',v={ActionAddComment:h,ActionLinkLike:i,ActionLinkUnlike:j,Blur:k,Changed:l,Comment:m,CommentFocus:n,CommentPager:o,Focus:p,InputHeightChanged:q,PageCleared:r,PhotoPreviewHeightChanged:s,TranslationRendered:t,ReactionButtonClicked:u};f.exports=v;},null);
__d('LoadingIndicator.react',['React','Image.react','cx','keyMirror','ix','joinClasses'],function a(b,c,d,e,f,g,h,i,j,k,l,m){if(c.__markCompiled)c.__markCompiled();var n=k({white:true,blue:true,black:true}),o=k({small:true,medium:true,large:true}),p={white:{large:l('/images/loaders/indicator_blue_large.gif'),medium:l('/images/loaders/indicator_blue_medium.gif'),small:l('/images/loaders/indicator_blue_small.gif')},blue:{large:l('/images/loaders/indicator_white_large.gif'),small:l('/images/loaders/indicator_white_small.gif')},black:{large:l('/images/loaders/indicator_black.gif')}},q=h.createClass({displayName:'LoadingIndicator',render:function(){var r=this.props.color,s=this.props.size;if(!p[r])return h.createElement('span',null);if(!p[r][s])return h.createElement('span',null);var t=this.props.showonasync?"uiLoadingIndicatorAsync":'',u=p[r][s];return (h.createElement(i,babelHelpers._extends({},this.props,{src:u,className:m(this.props.className,t)})));}});q.SIZES=o;q.COLORS=n;f.exports=q;},null);
__d('highlight',['Animation','Style'],function a(b,c,d,e,f,g,h,i){if(c.__markCompiled)c.__markCompiled();function j(k,l,m,n){new h(k).from('background',n||'#fff9d7').to('background',m||'#fff').ease(h.ease.both).duration(2000).ondone(function(){i.set(k,'background','');l&&l();}).go();}f.exports=j;},null);
__d("XLtgPostTranslationController",["XController"],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports=c("XController").create("\/intl\/see_translation\/",{ftid:{type:"String",required:true},text_size:{type:"Enum",defaultValue:"medium",enumType:1}});},null,{});
__d('LtgPostTranslation',['Arbiter','AsyncRequest','cx','DOM','Event','fbt','highlight','LoadingIndicator.react','React','ReactDOM','UFIUIEvents','XLtgPostTranslationController'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s){if(c.__markCompiled)c.__markCompiled();function t(v,w){var x=k.create('div',{'class':"_49k0"},w||m._("Kh\u00f4ng c\u00f3 s\u1eb5n b\u1ea3n d\u1ecbch"));k.replace(v,x);if(w)n(x);}var u={bindListener:function(v,w){l.listen(v,'click',function(){q.render(p.createElement(o,{size:'small',color:'white'}),v);var x=s.getURIBuilder().setString('ftid',w).getURI();new i().setURI(x).setHandler(function(y){var z=y.getPayload();t(v,z&&z.text);h.inform(r.TranslationRendered);}).setErrorHandler(function(){t(v,null);}).send();});}};f.exports=u;},null);