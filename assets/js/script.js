
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




document.getElementById("form-don-adherent").style.cssText="display: none";
document.getElementById("form-don-usualy").style.cssText="display: none";
document.getElementById("form-don").style.cssText="display: none";
document.getElementById("comon-bloc-form-don").style.cssText="display: none";
document.getElementById("form-don-complete").style.cssText="display: none";



function getChoiceFormDon(){
    let choice=document.querySelector("input[type='radio'][name='don_choice']:checked").value;
    
    if (choice==="ADHERENT") {
        document.getElementById("form-don-adherent").style.cssText="display: bloc";
        document.getElementById("form-don-usualy").style.cssText="display: none";
        document.getElementById("form-don").style.cssText="display: none";
        document.getElementById("comon-bloc-form-don").style.cssText="display: none";
        document.getElementById("form-don-complete").style.cssText="display: none";
    }else if (choice==="USUALY" || choice==="SUBSCRIBED") {
        document.getElementById("form-don-adherent").style.cssText="display: none";
        document.getElementById("form-don-usualy").style.cssText="display: bloc";
        document.getElementById("form-don").style.cssText="display: none";
        document.getElementById("comon-bloc-form-don").style.cssText="display: none";
        document.getElementById("form-don-complete").style.cssText="display: none";
    } else {
        document.getElementById("form-don-adherent").style.cssText="display: none";
        document.getElementById("form-don-usualy").style.cssText="display: none";
        document.getElementById("form-don").style.cssText="display: bloc";
        document.getElementById("comon-bloc-form-don").style.cssText="display: bloc";
        document.getElementById("form-don-complete").style.cssText="display: bloc";
    }
    console.log(choice);
}