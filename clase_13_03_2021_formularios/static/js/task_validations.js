function taskValidation(){
    let task = document.getElementById("task").value;
    let description = document.getElementById("description").value;
    let date = document.getElementById("date").value;
    if(task == "" || description == "" || date == ""){
        alert("Debe llenar todos los campos");
        return false;
    }
    return true;
}