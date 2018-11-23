let completeButtons = document.querySelectorAll('.checkComplete')

completeButtons.forEach(function (completeButton) {

    if (completeButton.parentElement.getAttribute('data-complete') == 1) {
        completeButton.parentElement.style.textDecoration = 'line-through'
        completeButton.parentElement.style.color = 'green'
    }

    completeButton.addEventListener('click', function (e) {
        let element = e.target.parentElement
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
        element.parentElement.style.textDecoration = 'line-through'
        element.parentElement.style.color = 'green'
    })
})

document.getElementById('submitTodo').addEventListener('click', function () {
    let item = document.querySelectorAll('.addTodo').value
    let data = {
        "item": item
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
})