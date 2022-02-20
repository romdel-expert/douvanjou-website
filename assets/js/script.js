
window.onscroll=function(){
    // console.log(document.documentElement.scrollTop);
    if (document.documentElement.scrollTop>170) {
        document.getElementById("top-header").style.visibility="hidden";
        document.getElementById("bottom-header").style.top="0";

    } else {
        document.getElementById("top-header").style.visibility="visible";
        document.getElementById("bottom-header").style.top="170px";
    }
}