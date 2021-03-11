function updateTask(id, task_text) {
    // Create the form
    let form = document.createElement('form')
    if(location.pathname=='/index.php') {
        form.action = 'index.php?pag=index&action=update'
    } else {
        form.action = 'all_task.php?action=update'
    }
    form.method = 'post'
    form.className = 'row'
    // Create a input to text insertion
    let inputTask = document.createElement('input')
    inputTask.type = 'text'
    inputTask.name = 'task'
    inputTask.className = 'col-9 form-control'
    // Maintain text already saved
    inputTask.value = task_text
    // Create  a hdden input to store id
    let inputId = document.createElement('input')
    inputId.type = 'hidden'
    inputId.name = 'id'
    inputId.value = id
    // Create a button to submmit form
    let button = document.createElement('button')
    button.type = 'submit'
    button.className = 'col-3 btn btn-info'
    button.innerHTML = 'Atualizar'
    // Include items on builded form
    form.appendChild(inputTask)
    form.appendChild(inputId)
    form.appendChild(button)
    // Select the task div by Id
    let task = document.getElementById('task_'+id)
    // Clean the text for inclusion on form
    task.innerHTML = ''
    // Include form on page (element, node)
    task.insertBefore(form, task[0])

}

// Delete task
function deleteTask(id) {
    if(location.pathname=='/index.php'){
        location.href = 'index.php?pag=index&action=delete&id='+id; 
    } else {
        location.href = 'all_task.php?action=delete&id='+id;
    }
    
}

// Finish task
function markTaskConcluded(id) {
    if(location.pathname=='/index.php') {
        location.href = 'index.php?pag=index&action=markTaskConcluded&id='+id;
    } else {
        location.href = 'all_task.php?action=markTaskConcluded&id='+id;
    }

}