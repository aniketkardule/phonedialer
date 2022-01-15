const del = document.getElementById("del"),
      dialNum = document.getElementById("number");
      


var number = "";

 function addNum(a){
       number = number + a;
       dialNum.innerText = number;
    }



del.addEventListener("click", function(){
    number = number.substring(0,number.length - 1);
    dialNum.innerText = number;
})

//we can convert number string into number using parseInt();
