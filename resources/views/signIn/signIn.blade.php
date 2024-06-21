<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/sign-in.css">

</head>
<body>
    <main class="form-signin w-100 m-auto">
        <form action="/simpan_signIn" method="POST"> 
            @csrf 
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        
            <div class="form-floating">
                <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
        
            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
            <p class="mt-3 mb-3 text-center text-body-secondary">Don't have an account? <a href="/signUp">Sign up</a></p>
        </form>
    </main>
</body>
</html>
