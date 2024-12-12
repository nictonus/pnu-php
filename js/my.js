function calculation() {
    let x= 12;
    let y= 5;
    let result= x + y;
    alert(result);
    }

$(document).ready(function(){
alert("ready Jquery");

$("td").hover(
function(){
$(this).addClass("hover");
},

function(){
$(this).removeClass("hover");
}
);

$("a").hover(
function(){
$(this).addClass("hover");
},
function(){
$(this).removeClass("hover");
}
);

});





