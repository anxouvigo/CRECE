var mediaWikiLoadStart=(new Date()).getTime(),mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}};mwPerformance.mark('mwLoadStart');function isCompatible(str){var ua=str||navigator.userAgent;return!!('querySelector'in document&&'localStorage'in window&&'addEventListener'in window&&!(ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60|NetFront|Opera Mini|S40OviBrowser|MeeGo/)||(ua.match(/Glass/)&&ua.match(/Android/))));}(function(){var NORLQ,script;if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');NORLQ=window.NORLQ||[];while(NORLQ.length){NORLQ.shift()();}window.NORLQ={push:function(fn){fn();}};window.RLQ={push:function(){}};return;}function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/310/en/load.php"});mw.loader.register([["site","neRMZSAW"],["noscript","FjqJ6VjD",[],"noscript"],["filepage","9l2FvPxp"],[
"user.groups","+bO9Ot/S",[],"user"],["user","5HfNKEfh",[],"user"],["user.cssprefs","GqV9IPpY",[],"private"],["user.defaults","q9XCupYo"],["user.options","C9rS/VRT",[6],"private"],["user.tokens","gBiCm5k3",[],"private"],["mediawiki.language.data","bHbxm6Jh",[174]],["mediawiki.skinning.elements","+TeU6qx1"],["mediawiki.skinning.content","eVhkFxUZ"],["mediawiki.skinning.interface","NWHR/+l7"],["mediawiki.skinning.content.parsoid","FxFb3zRz"],["mediawiki.skinning.content.externallinks","D/yGlYXG"],["jquery.accessKeyLabel","JdE6evPO",[25,130]],["jquery.appear","sMJxDE6R"],["jquery.arrowSteps","x5nGsztF"],["jquery.async","TtBg5+ES"],["jquery.autoEllipsis","vRS1MClW",[37]],["jquery.badge","kaPoF7Jn",[171]],["jquery.byteLength","ScMqvmxb"],["jquery.byteLimit","0ewd68R2",[21]],["jquery.checkboxShiftClick","EAGiFWuL"],["jquery.chosen","HJXNEzg2"],["jquery.client","AYRCQRAJ"],["jquery.color","OTSAKrUw",[27]],["jquery.colorUtil","PayOTOm2"],["jquery.confirmable","OlfCt+ty",[175]],["jquery.cookie",
"+aprap8P"],["jquery.expandableField","uTXWLnvb"],["jquery.farbtastic","oU5U6cc+",[27]],["jquery.footHovzer","dp6JYn/I"],["jquery.form","loyUbayS"],["jquery.fullscreen","6M1RaqxY"],["jquery.getAttrs","saNJelsb"],["jquery.hidpi","xGZjFf4F"],["jquery.highlightText","oxVTvNTR",[242,130]],["jquery.hoverIntent","Jm4d9ku4"],["jquery.i18n","TCB+Otbd",[173]],["jquery.localize","my9sAsO8"],["jquery.makeCollapsible","N31eYo09"],["jquery.mockjax","T6oQRUj+"],["jquery.mw-jump","EKQ2q4zz"],["jquery.mwExtension","H5o6vZhC"],["jquery.placeholder","XwKGcvgm"],["jquery.qunit","YG7dKb5b"],["jquery.qunit.completenessTest","dwfkJIxa",[46]],["jquery.spinner","XUBEvpaR"],["jquery.jStorage","Ee5Z+YKv",[92]],["jquery.suggestions","1z2+pAJD",[37]],["jquery.tabIndex","aNorBXnG"],["jquery.tablesorter","r8q+VYCS",[242,130,176]],["jquery.textSelection","vKdpXU1f",[25]],["jquery.throttle-debounce","QxYr1Y4P"],["jquery.xmldom","1a/NfwL9"],["jquery.tipsy","KA9rQ1dL"],["jquery.ui.core","wT0DJqCo",[58],"jquery.ui"],[
"jquery.ui.core.styles","2x/ln1Pt",[],"jquery.ui"],["jquery.ui.accordion","QJPYbGZT",[57,77],"jquery.ui"],["jquery.ui.autocomplete","MZ2IRFsy",[66],"jquery.ui"],["jquery.ui.button","BtlaAbK6",[57,77],"jquery.ui"],["jquery.ui.datepicker","mJwNrKtM",[57],"jquery.ui"],["jquery.ui.dialog","k4Bs9C7r",[61,64,68,70],"jquery.ui"],["jquery.ui.draggable","9Gu66pGW",[57,67],"jquery.ui"],["jquery.ui.droppable","LVIJEzys",[64],"jquery.ui"],["jquery.ui.menu","FaGKGsjk",[57,68,77],"jquery.ui"],["jquery.ui.mouse","olYOdFEL",[77],"jquery.ui"],["jquery.ui.position","l4UC6Ous",[],"jquery.ui"],["jquery.ui.progressbar","+hMfGwoJ",[57,77],"jquery.ui"],["jquery.ui.resizable","etQhUvtA",[57,67],"jquery.ui"],["jquery.ui.selectable","N1wOtgoL",[57,67],"jquery.ui"],["jquery.ui.slider","Kqkis+YG",[57,67],"jquery.ui"],["jquery.ui.sortable","h308cc8n",[57,67],"jquery.ui"],["jquery.ui.spinner","qSz5N3Yy",[61],"jquery.ui"],["jquery.ui.tabs","eyExkYaB",[57,77],"jquery.ui"],["jquery.ui.tooltip","JiDtwRDP",[57,68,77],
"jquery.ui"],["jquery.ui.widget","K4QEyRRy",[],"jquery.ui"],["jquery.effects.core","7c1xOtpn",[],"jquery.ui"],["jquery.effects.blind","nVq4k68/",[78],"jquery.ui"],["jquery.effects.bounce","YvKQjHne",[78],"jquery.ui"],["jquery.effects.clip","bsxIsL5e",[78],"jquery.ui"],["jquery.effects.drop","hWKChv0V",[78],"jquery.ui"],["jquery.effects.explode","qogYm5Gs",[78],"jquery.ui"],["jquery.effects.fade","0NFKxLRa",[78],"jquery.ui"],["jquery.effects.fold","yHMPQj0W",[78],"jquery.ui"],["jquery.effects.highlight","Ca3nyZfO",[78],"jquery.ui"],["jquery.effects.pulsate","ET2TRnON",[78],"jquery.ui"],["jquery.effects.scale","WNQjymic",[78],"jquery.ui"],["jquery.effects.shake","b0gqJxfD",[78],"jquery.ui"],["jquery.effects.slide","9aqZDf/x",[78],"jquery.ui"],["jquery.effects.transfer","vl618WXN",[78],"jquery.ui"],["json","Pndn8sU/",[],null,null,"return!!(window.JSON\u0026\u0026JSON.stringify\u0026\u0026JSON.parse);"],["moment","/raSQkJY"],["mediawiki.apihelp","foGAdAk/"],["mediawiki.template","Z9n24K7+"
],["mediawiki.template.mustache","E34BNo8a",[95]],["mediawiki.template.regexp","uetfLaJh",[95]],["mediawiki.apipretty","gmWy1ZBl"],["mediawiki.api","30CV/J6Z",[147,8]],["mediawiki.api.category","FnMy7b7N",[135,99]],["mediawiki.api.edit","c505/S1S",[135,99]],["mediawiki.api.login","xJHWS1PB",[99]],["mediawiki.api.options","2k3taA0r",[99]],["mediawiki.api.parse","4bbW3EQa",[99]],["mediawiki.api.upload","o+loG8DS",[242,92,101]],["mediawiki.api.user","xqXRAX2K",[99]],["mediawiki.api.watch","3j18dhRu",[99]],["mediawiki.api.messages","UHzHo5ab",[99]],["mediawiki.content.json","F46o7Ieb"],["mediawiki.confirmCloseWindow","FLzMczZX"],["mediawiki.debug","BzQaSLs3",[32,56]],["mediawiki.debug.init","45Z2UP0J",[111]],["mediawiki.feedback","1r0DRTVi",[135,126,250]],["mediawiki.feedlink","/xg1/EMX"],["mediawiki.filewarning","9KvOqqTt",[245]],["mediawiki.ForeignApi","iEdpkFZ8",[117]],["mediawiki.ForeignApi.core","RAijJRZM",[99,243]],["mediawiki.helplink","9/CUmJlp"],["mediawiki.hidpi","G3gJGUlS",[36],
null,null,"return'srcset'in new Image();"],["mediawiki.hlist","PFNQuVJL"],["mediawiki.htmlform","CxqvAU4z",[22,130]],["mediawiki.htmlform.styles","s5dyEkW4"],["mediawiki.htmlform.ooui.styles","wo7DXCS1"],["mediawiki.icon","zzzRUs+C"],["mediawiki.inspect","kEmUW1Op",[21,92,130]],["mediawiki.messagePoster","itEHOvgg",[116]],["mediawiki.messagePoster.wikitext","y2YKCiqo",[101,126]],["mediawiki.notification","PbeEsyDJ",[183]],["mediawiki.notify","LWoXV9j0"],["mediawiki.RegExp","0pjHXcgl"],["mediawiki.pager.tablePager","f0f1PwNr"],["mediawiki.searchSuggest","TCi5wysO",[35,45,50,99]],["mediawiki.sectionAnchor","9/iBvgJB"],["mediawiki.storage","MbNZkBcw"],["mediawiki.Title","JZvLsrE8",[21,147]],["mediawiki.Upload","OMtGXZ0e",[105]],["mediawiki.ForeignUpload","N5cNcD1Y",[116,136]],["mediawiki.ForeignStructuredUpload.config","JtmRymYi"],["mediawiki.ForeignStructuredUpload","JjowBMh9",[138,137]],["mediawiki.Upload.Dialog","VMxbBsbX",[141]],["mediawiki.Upload.BookletLayout","JnaMFDzN",[136,175,
145,240,93,250,256,257]],["mediawiki.ForeignStructuredUpload.BookletLayout","Yrt5uckg",[139,141,108,179,236,234]],["mediawiki.toc","dWaSR+YR",[151]],["mediawiki.Uri","tInB7c+Q",[147,97]],["mediawiki.user","Mae6UTgp",[106,151,7]],["mediawiki.userSuggest","OsetKEcX",[50,99]],["mediawiki.util","hnymDU7d",[15,129]],["mediawiki.viewport","UCh4cviX"],["mediawiki.checkboxtoggle","nnnsIM55"],["mediawiki.checkboxtoggle.styles","AOvmZXFh"],["mediawiki.cookie","xhciY0vM",[29]],["mediawiki.toolbar","+reWZqln"],["mediawiki.experiments","GlbFA5ru"],["mediawiki.raggett","NJtNW0e7"],["mediawiki.action.edit","akJmCh5T",[22,53,156]],["mediawiki.action.edit.styles","RJf1/Dgr"],["mediawiki.action.edit.collapsibleFooter","OAVquQm7",[41,151,124]],["mediawiki.action.edit.preview","t2S/eCs/",[33,48,53,161,99,175]],["mediawiki.action.edit.stash","WCNV5bkw",[35,99]],["mediawiki.action.history","jHTPtFLP"],["mediawiki.action.history.diff","ASv2Hnge"],["mediawiki.action.view.dblClickEdit","ZQBB1JzT",[183,7]],[
"mediawiki.action.view.metadata","kI8Z7sma"],["mediawiki.action.view.categoryPage.styles","G8l1DUt8"],["mediawiki.action.view.postEdit","mfXy58Wp",[151,175,95]],["mediawiki.action.view.redirect","xnO2/CBj",[25]],["mediawiki.action.view.redirectPage","QAuDV0u0"],["mediawiki.action.view.rightClickEdit","pfLg21B/"],["mediawiki.action.edit.editWarning","YxD46fa5",[53,110,175]],["mediawiki.action.view.filepage","ZP+ukF70"],["mediawiki.language","tkKeSinm",[172,9]],["mediawiki.cldr","4oTiC9OR",[173]],["mediawiki.libs.pluralruleparser","Dkr+KLdE"],["mediawiki.language.init","zcAvHnMq"],["mediawiki.jqueryMsg","3BFJOerX",[242,171,147,7]],["mediawiki.language.months","fYwV8zFs",[171]],["mediawiki.language.names","dVn8oVHH",[174]],["mediawiki.language.specialCharacters","v31HqVfX",[171]],["mediawiki.libs.jpegmeta","D39wkagO"],["mediawiki.page.gallery","4HEugGob",[54,181]],["mediawiki.page.gallery.styles","7NvrYeNk"],["mediawiki.page.ready","yVnua0j+",[15,23,41,43,45]],["mediawiki.page.startup",
"ySKYhyhY",[147]],["mediawiki.page.patrol.ajax","mMR0uSm+",[48,135,99,183]],["mediawiki.page.watch.ajax","dpOXzx6a",[107,183]],["mediawiki.page.image.pagination","pHQuJTVp",[48,147]],["mediawiki.special","WALKQCp3"],["mediawiki.special.apisandbox.styles","JCJAnAPj"],["mediawiki.special.apisandbox","1634cJ+x",[99,175,187,235,244]],["mediawiki.special.block","G+iRb6L7",[147]],["mediawiki.special.blocklist","gnwCyP56"],["mediawiki.special.changeslist","IjDcIMqy"],["mediawiki.special.changeslist.legend","WiEv9e9O"],["mediawiki.special.changeslist.legend.js","m7JAB0Yl",[41,151]],["mediawiki.special.changeslist.enhanced","hUcdV9Fd"],["mediawiki.special.changeslist.visitedstatus","GhVxfqwt"],["mediawiki.special.comparepages.styles","IQ87gEdh"],["mediawiki.special.edittags","Yn8rjQPU",[24]],["mediawiki.special.edittags.styles","+N8r3nAT"],["mediawiki.special.import","kBv/k06f"],["mediawiki.special.movePage","WxtgJsWn",[232]],["mediawiki.special.movePage.styles","Vxf2QunY"],[
"mediawiki.special.pageLanguage","4WsBdn/k",[245]],["mediawiki.special.pagesWithProp","ZcWQw99a"],["mediawiki.special.preferences","+Svh7GW6",[110,171,128]],["mediawiki.special.preferences.styles","YVkhBwv6"],["mediawiki.special.recentchanges","VaJNZQuX",[187]],["mediawiki.special.search","Lm8PMHeo",[238]],["mediawiki.special.undelete","isEDuQoy"],["mediawiki.special.upload","545XZZ4o",[48,135,99,110,175,179,95]],["mediawiki.special.userlogin.common.styles","yQZIRftU"],["mediawiki.special.userlogin.signup.styles","UyyBcuM7"],["mediawiki.special.userlogin.login.styles","ycwOolJE"],["mediawiki.special.userlogin.signup.js","Dt4onvFy",[54,99,175]],["mediawiki.special.unwatchedPages","jHLb+vhm",[135,107]],["mediawiki.special.watchlist","1aKMcDR5"],["mediawiki.special.version","Sd87sLyc"],["mediawiki.legacy.config","pSeJxaLf"],["mediawiki.legacy.commonPrint","jOkTT8U0"],["mediawiki.legacy.protect","n9XS0AOO",[22]],["mediawiki.legacy.shared","Ikok2fCy"],["mediawiki.legacy.oldshared",
"ua6tI/C9"],["mediawiki.legacy.wikibits","9ECeJsdR",[147]],["mediawiki.ui","ObYMvOpY"],["mediawiki.ui.checkbox","6C1NFDSR"],["mediawiki.ui.radio","nNid3g5k"],["mediawiki.ui.anchor","YrZsL9BZ"],["mediawiki.ui.button","6hHyauXP"],["mediawiki.ui.input","T+IB6kVx"],["mediawiki.ui.icon","yOkxSVAH"],["mediawiki.ui.text","ThS6MokR"],["mediawiki.widgets","w1DP/OjD",[19,22,135,99,233,248]],["mediawiki.widgets.styles","KenMqkBk"],["mediawiki.widgets.DateInputWidget","FkV5sCTj",[93,248]],["mediawiki.widgets.datetime","bcYvdzzP",[245]],["mediawiki.widgets.CategorySelector","DT+qG4p1",[116,135,248]],["mediawiki.widgets.UserInputWidget","ec6GAiWa",[248]],["mediawiki.widgets.SearchInputWidget","Y5FyWUZj",[132,232]],["mediawiki.widgets.SearchInputWidget.styles","1LwtF5wY"],["mediawiki.widgets.StashedFileWidget","UoM/GXsq",[245]],["es5-shim","+BICHuhR",[],null,null,"return(function(){'use strict';return!this\u0026\u0026!!Function.prototype.bind;}());"],["dom-level2-shim","HZPiU+4M",[],null,null,
"return!!window.Node;"],["oojs","H/2ggbJn",[241,92]],["oojs-ui","Z4N8Q1qp",[249,248,250]],["oojs-ui-core","37oLFtI3",[171,243,246]],["oojs-ui-core.styles","9doMSSNr",[251,252,253],null,null,"return!!jQuery('meta[name=\"X-OOUI-PHP\"]').length;"],["oojs-ui.styles","U8zdsZOs",[251,252,253],null,null,"return!!jQuery('meta[name=\"X-OOUI-PHP\"]').length;"],["oojs-ui-widgets","t0ScDHGS",[245]],["oojs-ui-toolbars","zTGFVdfS",[245]],["oojs-ui-windows","QbCUs6Kn",[245]],["oojs-ui.styles.icons","4BzsNOH6"],["oojs-ui.styles.indicators","gIvZx002"],["oojs-ui.styles.textures","a7DgAWDm"],["oojs-ui.styles.icons-accessibility","/FunfYac"],["oojs-ui.styles.icons-alerts","Z9Y5tGkM"],["oojs-ui.styles.icons-content","z+4R8A4C"],["oojs-ui.styles.icons-editing-advanced","y6u2ciM1"],["oojs-ui.styles.icons-editing-core","WnOSp741"],["oojs-ui.styles.icons-editing-list","arOa/zMG"],["oojs-ui.styles.icons-editing-styling","hQKU9jcZ"],["oojs-ui.styles.icons-interactions","eyRxXAMO"],["oojs-ui.styles.icons-layout"
,"OwU0Dxev"],["oojs-ui.styles.icons-location","A27n85HL"],["oojs-ui.styles.icons-media","6pWcQgia"],["oojs-ui.styles.icons-moderation","a6s78VFP"],["oojs-ui.styles.icons-movement","INFkJuMa"],["oojs-ui.styles.icons-user","UhNfuTvB"],["oojs-ui.styles.icons-wikimedia","4Ow/Z3o9"],["jquery.wikiEditor","9HqZu0qp",[53,171],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","NVc++Ouv",[51,63,274],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","u157YMsH",[50,270,142,140,95],"ext.wikiEditor"],["jquery.wikiEditor.preview","n1fbc3Hs",[269,99],"ext.wikiEditor"],["jquery.wikiEditor.publish","rdjKej41",[270],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","F999fYb2",[18,29,269,276],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","beM+jU7c",[274,178],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","hpqCnrtj",[],"ext.wikiEditor"],["ext.wikiEditor","8rq6yYod",[269,145],"ext.wikiEditor"],["ext.wikiEditor.dialogs","ccLX6kmE",[281,271],"ext.wikiEditor"],["ext.wikiEditor.preview","mT5vdQBn",[
277,272],"ext.wikiEditor"],["ext.wikiEditor.publish","ClS9EAWw",[277,273],"ext.wikiEditor"],["ext.wikiEditor.toolbar","8rGri/uY",[277,275],"ext.wikiEditor"],["ext.wikiEditor.toolbar.styles","tfOT/OAN",[],"ext.wikiEditor"],["ext.embedVideo","pSU+biJu"],["ext.embedVideo-evl","rmuRJonT"],["ext.embedVideo.styles","hbX+Wbco"],["ext.math.styles","6bRLYRby"],["ext.math.desktop.styles","FGz4sDZ8"],["ext.math.scripts","wuZtmBsl"],["ext.math.editbutton.enabler","cvsdhvGe"],["ext.math.visualEditor","4cdroSw3",["ext.visualEditor.mwcore"]],["ext.math.visualEditor.data","pXtNsv6z",[290]],["ext.math.visualEditor.symbols","CrTQ6eM8",[291]],["ext.nuke","6/NRi+jU"],["ext.moderation.ajaxhook","02ptM2jh"],["ext.moderation.edit","NeZQglTG"],["ext.moderation.notify","WavS89Zm",[144,175,145]],["ext.moderation.notify.desktop","tMn6WFFe"],["ext.moderation.special.ajax","sqXeEJFK",[144,99]],["ext.moderation.special.css","9gelaIsw"],["ext.moderation.ve","ZL3TrhEp",[294,"ext.visualEditor.targetLoader",99]],[
"skins.moodledocs.bootstrap","OQBE9wDM"],["custom.editortoolbar","bACKQhpB"]]);;mw.config.set({"wgLoadScript":"/310/en/load.php","debug":!1,"skin":"moodledocs","stylepath":"/310/en/skins","wgUrlProtocols":"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/310/en/$1","wgScriptPath":"/310/en","wgScriptExtension":".php","wgScript":"/310/en/index.php","wgSearchType":null,"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"https://docs.moodle.org","wgServerName":"docs.moodle.org","wgUserLanguage":"en","wgContentLanguage":"en","wgTranslateNumerals":!0,"wgVersion":"1.27.4","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Main page","wgFormattedNamespaces":{"-2":"Media","-1":
"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"MoodleDocs","5":"MoodleDocs talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","100":"Development","101":"Development talk","102":"Obsolete"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"moodledocs":4,"moodledocs_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"development":100,"development_talk":101,"obsolete":102,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"MoodleDocs","wgDBname":"310docs_en","wgExtraSignatureNamespaces":[],"wgAvailableSkins":{"moodledocs":"moodledocs","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/310/en/extensions","wgCookiePrefix":"310docs_en","wgCookieDomain":"",
"wgCookiePath":"/","wgCookieExpiration":15552000,"wgResourceLoaderMaxQueryLength":2000,"wgCaseSensitiveNamespaces":[0,-2,1,4,5,6,7,10,11,12,13,14,15,100,101,102],"wgLegalTitleChars":" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":!1,"wgResourceLoaderLegacyModules":[],"wgForeignUploadTargets":[],"wgEnableUploads":!0,"wgWikiEditorMagicWords":{"redirect":"#REDIRECT","img_right":"right","img_left":"left","img_none":"none","img_center":"center","img_thumbnail":"thumb","img_framed":"frame","img_frameless":"frameless"}});var RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};window.NORLQ={push:function(){}};}script=document.createElement('script');script.src="/310/en/load.php?debug=false&lang=en&modules=jquery%2Cmediawiki&only=scripts&skin=moodledocs&version=dhA6Pkgz";script.onload=script.onreadystatechange=function(){if(!script.readyState||/loaded|complete/.test(script.
readyState)){script.onload=script.onreadystatechange=null;script=null;startUp();}};document.getElementsByTagName('head')[0].appendChild(script);}());