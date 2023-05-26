
window.requestAnimFrame = (function(){
    return  window.requestAnimationFrame       ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame    ||
        function( callback ){
            window.setTimeout(callback, 1000 / 60);
        };
})();
function scrollToY(o,n){function a(){t+=1/60;var n=t/c,l=i(n);1>n?(requestAnimFrame(a),window.scrollTo(0,r+(o-r)*l)):window.scrollTo(0,o)}var r=window.scrollY,o=o||0,n=n||2e3,t=0,c=Math.max(.1,Math.min(Math.abs(r-o)/n,.8)),i=function(o){return-.5*(Math.cos(Math.PI*o)-1)};a()}
!function() {
    var el;
    var _scrollToY = function(event) {
        event.preventDefault ? event.preventDefault() : (event.returnValue = false);
        var el = event.target || event.originalTarget || event.srcElement;
        var name = (el.getAttribute("href") || el.href).slice(1);
        el = document.getElementsByName(name);
        if (el.length>0) {
            scrollToY(el[0].offsetTop, 1500);
            return false;
        }
    }
    for (var a=document.querySelectorAll('a[href^="#anchor-"]'), i=0; i<a.length; i++) {
        el=a[i];
        if (el.addEventListener){
            el.addEventListener('click', _scrollToY, false);
        } else if (el.attachEvent) {
            el.attachEvent('onclick', _scrollToY);
        }
    }
}();