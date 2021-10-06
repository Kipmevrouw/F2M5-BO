const prevBtns = document.querySelectorAll(".btn-previous");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");

let formStepsNum = 0;

nextBtns.forEach(btn =>{
    btn.addEventListener("click", () => {
        formStepsNum ++;
        updatFormSteps();   
    })
});

function updateFormSteps(){
    formSteps[formStepsNum].classList.add("form-step-active");
}