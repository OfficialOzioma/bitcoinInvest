/*Sign Up Script*/
const firstname = document.getElementById('firstname')
const lastname = document.getElementById('lastname')
const email = document.getElementById('email')
const password = document.getElementById('password')
const passwordcheck = document.getElementById('passwordcheck')
const loginbox = document.getElementById('loginbox')
const errorElement = document.getElementById('error')


loginbox.addEventListener('submit', (e) => {
    let messages = []
    if (name.value === '' || name.value == null) {
        messages.push('First name is required')
    }

    if (messages.length > 0) {
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
    
})
