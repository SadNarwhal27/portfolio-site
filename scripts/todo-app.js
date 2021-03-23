// Select page elements
const clear = document.querySelector(".clear");
const dateElement = document.getElementById("date");
const list = document.getElementById("list");
const input = document.getElementById("input");

// Class names
const CHECK = "fa-check-circle";
const UNCHECK = "fa-circle-thin";
const LINE_THROUGH = "lineThrough";

// Shows today's date
let options = {weekday: "long", month: "short", day: "numeric"};
let today = new Date();
dateElement.innerHTML = today.toLocaleDateString("en-US", options);

// Variables
let LIST, id;

// Get tasks from local storage if data is present
let data = localStorage.getItem("TODO");
if(data) {
    LIST = JSON.parse(data);
    loadToDo(LIST);
    id = LIST.length;
} else{
    LIST = [];
    id = 0;
}

// Loads in the tasks in local storage
function loadToDo(array) {
    array.forEach(function(item) {
        addToDo(item.name, item.id, item.done, item.trash);
    });
}

// Adds a task to the list of todos
function addToDo(todo, id, done, trash) {

    if(trash){return;}

    const DONE = done ? CHECK : UNCHECK;
    const LINE = done ? LINE_THROUGH : "";

    const item = 
        `<li class="item">
            <i class="fa ${DONE} co" job="complete" id="${id}"></i>
            <p class="text ${LINE}">${todo}</p>
            <i class="fa fa-trash-o de" job="delete" id="${id}"></i>
        </li>`
    const position = "beforeend";
    list.insertAdjacentHTML(position, item);
}

// Called when a user clicks the complete button
function completeToDo(element) {
    // Toggle removes a specific class if it exists or adds it in if not
    element.classList.toggle(CHECK);
    element.classList.toggle(UNCHECK);
    element.parentNode.querySelector(".text").classList.toggle(LINE_THROUGH);
    LIST[element.id].done = LIST[element.id].done ? false : true;
}

// Removes a task from the list
function removeToDo(element) {
    element.parentNode.parentNode.removeChild(element.parentNode)
    LIST[element.id].trash = true;
}

// Listens for the enter key and calls the addToDo function if something is written in the input field
document.addEventListener("keyup", function(event){
    if(event.key == "Enter") {
        const toDo = input.value;

        if(toDo) {
            addToDo(toDo, id, false, false);

            LIST.push(
                {
                    name: toDo,
                    id: id,
                    done: false,
                    trash: false
                }
            );

            // Add task to local storage
            localStorage.setItem("TODO", JSON.stringify(LIST))

            input.value = "";
            id++;
        }
    }
});

// Listens for clicks on the complete or delete button
list.addEventListener("click", function(event){
    const element = event.target; // return the clicked element inside list
    const elementJOB = event.target.attributes.job.value; // delete or complete

    if(elementJOB == "complete") {
        completeToDo(element);
    } else if(elementJOB == "delete"){
        removeToDo(element);
    }

    // Add task to local storage
    localStorage.setItem("TODO", JSON.stringify(LIST))
});

// Clears all tasks from local storage and reloads the page if the refresh button is clicked
clear.addEventListener("click", function(){
    localStorage.clear();
    location.reload();
});