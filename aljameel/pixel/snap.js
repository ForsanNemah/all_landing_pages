 
 var event_phn=phn;

(function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
r.src=n;var u=t.getElementsByTagName(s)[0];
u.parentNode.insertBefore(r,u);})(window,document,
'https://sc-static.net/scevent.min.js');

snaptr('init', 'c530b9a9-f8d4-48df-ba97-3958aae4f9a6', {
    'user_phone_number': event_phn
});

snaptr('track', 'PAGE_VIEW');
 
 