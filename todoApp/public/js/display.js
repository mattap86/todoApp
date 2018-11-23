let completeButtons = document.querySelectorAll('.checkComplete')

completeButtons.forEach(function (completeButton) {

    if (completeButton.parentElement.getAttribute('data-complete') == 1) {
        completeButton.parentElement.style.color = 'green'
    }

    completeButton.addEventListener('click', function (e) {
        let element = e.target.parentNode
        let id = element.getAttribute('data-id')
        let data = {
            "id": id
        }
        fetch("/api/completeTodo", {
            credentials: "same-origin",
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json'
            },
            method: "post",
            body: JSON.stringify(data)
        })
        element.parentElement.style.color = 'green'
        window.location.reload()
    })
})

let deleteButtons = document.querySelectorAll('.checkDelete')

deleteButtons.forEach(function (deleteButton) {

    if (deleteButton.parentElement.getAttribute('data-delete') == 1) {
        deleteButton.parentElement.style.display = 'none'
    }

    deleteButton.addEventListener('click', function (e) {
        let element = e.target.parentElement
        let id = element.getAttribute('data-id')
        let data = {
            "id": id
        }
        fetch("/api/deleteTodo", {
            credentials: "same-origin",
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json'
            },
            method: "post",
            body: JSON.stringify(data)
        })
        element.parentElement.style.display = 'none'
        window.location.reload()
    })
})

document.getElementById('submitTodo').addEventListener('click', function () {
    let item = document.getElementById('addTodo').value
    let data = {
        "todoName": item
    }
    fetch("/api/addTodo", {
        credentials: "same-origin",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
        method: "POST",
        body: JSON.stringify(data)
    })
    window.location.reload()
})
