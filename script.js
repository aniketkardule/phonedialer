const num = document.querySelectorAll(".dial-no"),
      dial = document.getElementById("dial"),
      dialNum = document.getElementById("number");
      


var number = "";

 for(let i = 0; i <num.length; i++){
    num[i].onclick = function(){
        if(this.innerText !== ""){
            number = number + this.innerText;
            dialNum.innerText = number;
        }
        
    }
 }



dial.addEventListener("click", function(){
    number = number.substring(0,number.length - 1);
    dialNum.innerText = number;
})