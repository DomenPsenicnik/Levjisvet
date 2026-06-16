var inputBox = document.getElementById("input-box");
var listContainer = document.getElementById("list-container");

function AddTask() {
    if (inputBox.value === "") {
        alert("Napiši nekaj!");
    } 
        else {
        let li = document.createElement("li");
        li.className = "task";    
        li.innerHTML = inputBox.value;   
        listContainer.appendChild(li);
        let span = document.createElement("span");
        span.innerHTML = "\u00D7"; // Unicode znak × za brisanje
        li.appendChild(span);
    }
        inputBox.value = ""; // Počisti vnosno polje
        saveData();
}

listContainer.addEventListener("click", function(e) { // Popravljen zaklepaj
    if (e.target.tagName === "LI") {
        e.target.classList.toggle("klik"); // Označi / odstrani označbo
    } else if (e.target.tagName === "SPAN") {
        e.target.parentElement.remove(); // Odstrani opravilo
        saveData();
    }
}, false);

function saveData()
{
    localStorage.setItem("data", listContainer.innerHTML);
}
function showTask()
{
    listContainer.innerHTML = localStorage.getItem("data");
}
    showTask();

