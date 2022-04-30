
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


// alert("bonjour");

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
    // console.log(choice);
}








function cleanMessEmail(){
    document.getElementById("errEmail").innerHTML="";
}







function showRegInt(){
   let rglInt=document.querySelector("div[class='modal-gl']");
   rglInt.removeAttribute('hidden');
}


function hideRegInt(resp){
    if (resp==="YES") {
        document.getElementById("regl_int").setAttribute('value',1);
        document.getElementById("regl_int").setAttribute('checked',true);
        let rglInt=document.querySelector("div[class='modal-gl']");
        rglInt.setAttribute('hidden',true);
    } else {
        document.getElementById("regl_int").removeAttribute('checked');
        let rglInt=document.querySelector("div[class='modal-gl']");
        rglInt.setAttribute('hidden',true);
    }
 }



 function closeMenu(){
    let block = document.getElementById("bottom-header1");
    // block.setAttribute("hidden",true);
    // block.style.display="none";
    block.style.cssText="display: none";
    // console.log(block);
 }



 function openMenu(){
    let block = document.getElementById("bottom-header1");
    block.setAttribute("style","display:block")
    // block.setAttribute("hidden",false);
    // console.log(block);
}



