<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Login Page</title>
</head>

<body>
    <div class="main-container">
        <div class="login-container">
            <h1>Login</h1>
            <form class="login-form">
                <div class="input-container">
                    <label for="username"><i class="fas fa-user"></i></label>
                    <input type="text" id="username" class="form-control custom-input" placeholder="ID Number" required>
                </div>
                <div class="input-container">
                    <label for="password"><i class="fas fa-lock"></i></label>
                    <input type="password" id="password" class="form-control custom-input" placeholder="Password"
                        required>
                    <i id="password-toggle" class="far fa-eye"></i>
                </div>
                <button type="submit" class="btn btn-primary login-btn"><i class="fas fa-sign-in-alt"></i>Login</button>
                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>
            </form>
        </div>
        <div class="school-box">
            <p>Ruby School</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>