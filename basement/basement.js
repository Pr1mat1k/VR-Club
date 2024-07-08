const circle = document.querySelector(".circle");

circle.addEventListener("click", () =>{
    window.history.go(-1); 
    return false;
});