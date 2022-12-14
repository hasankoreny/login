<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap');

:root {
    --primary-color: #90e0ef;
    --secondary-color: #00b4d8;
    --tertiary-color: #0077b6;
    --gray-color: #b0b0b0;
}

* {
    box-sizing: border-box;
    font-family: 'Raleway', sans-serif;
    line-height: 1;
    padding: 0;
    margin: 0;
}

.container {
    background-color: var(--primary-color);
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.box {
    background-color: white;
    border-radius: 10px;
    padding: 45px;
    width: 375px;
    max-width: 95%;
    box-shadow: 5px 5px 10px 1px rgb(0, 0, 0, 10%);
}

@media (max-width: 480px) {
    .box {
        padding: 75px 25px;
    }
}

.box h1 {
    font-size: 35px;
    font-weight: 800;
    text-align: center;
    margin-bottom: 45px;
}

.box .fff label {
    display: block;
    font-size: 12px;
    margin-bottom: 3px;
}

.box .fff div {
    display: flex;
    align-items: center;
    border-bottom: 1px solid var(--gray-color);
}

.box .fff div:hover {
    border-bottom-color: var(--secondary-color);
}

.box .fff div:first-of-type {
    margin-bottom: 35px;
}

.box .fff div i {
    font-size: 15px;
    padding-left: 10px;
    color: var(--gray-color);
}

.box .fff div:hover i {
    color: var(--secondary-color);
}

.box .fff div input {
    font-size: 12px;
    outline: none;
    border: none;
    padding: 10px;
    min-width: 0;
    flex: 1;
}

.box .fff div input::placeholder {
    opacity: 1;
    color: var(--gray-color);
    font-size: 12px;
}

.box a {
    color: var(--gray-color);
    text-decoration: none;
    font-size: 12px;
    display: block;
}

.box a:hover {
    color: var(--secondary-color);
}

.box .fff .forgot {
    margin-top: 15px;
    float: right;
}

.box .fff input[type="submit"] {
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    background-color: var(--secondary-color);
    color: white;
    border: none;
    width: 100%;
    padding: 15px;
    margin-top: 45px;
    border-radius: 250px;
}

.box .fff input[type="submit"]:hover {
    background-color: var(--tertiary-color);
    cursor: pointer;
}

.box .sign-up {
    margin-top: 25px;
    text-align: center;
    text-transform: uppercase;
}

    </style>
</head>
<body>
    <form method="post" action="/hasan/handling.php">
    <div class="container">
        <div class="box">
            <h1>Login</h1>
            <div class="fff">
                <label>Username</label>
                <div>
                    <i class="fa-solid fa-user"></i>
                    <input name="nam" type="text" autocomplete="off" placeholder="Enter Username">
                </div>
                <label>Password</label>
                <div>
                    <i class="fa-solid fa-lock"></i>
                    <input name="pas" type="password" placeholder="Enter Password">
                </div>
                <a href="#" class="forgot">Forgot Password?</a>
                <input type="submit" value="Login">
            </div>
            <a href="#" class="sign-up">Sign Up</a>
        </div>
    </div>
    </form>
</body>
</html>
