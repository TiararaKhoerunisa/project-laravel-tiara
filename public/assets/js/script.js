document.getElementById ('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const correctUsername = 'tiara';
    const correctPassword = 'tiara';
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    if(username === correctUsername && password === correctPassword){
        alert("login berhasil");
        window.location.href = '/';
    }else{
        alert("salah bro");
    }
    });