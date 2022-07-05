
function stepper(btn, id) {

    const myInput = document.getElementById("my-input-"+id);
    let id = btn.getAttribute("id");
    let min = myInput.getAttribute("min");
    let max = myInput.getAttribute("max");
    let step = myInput.getAttribute("step");
    let val = myInput.getAttribute("value");
    let calcStep = (id == "increment") ? (step * 1) :
    (step * -1);
    let newValue = parseInt(val) + calcStep;

    if(newValue >= min && newValue <= max) {
        myInput.setAttribute("value", newValue);
    }

    console.log(id, calcStep);
}