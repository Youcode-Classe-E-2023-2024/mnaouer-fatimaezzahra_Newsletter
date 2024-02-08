

<form action="{{ route('login') }}" method="POST">
@csrf
<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>

        <button name="login" href= "{{ route('login.show')}} class="w-100 btn btn-lg btn-secondary" type="submit">Sign in</button>
        <a href="index.php?page=register" class="w-100 btn btn-lg btn-dark mt-2" type="button">Sign up</a>
        <a href="index.php?page=home" class="w-100 btn btn-lg btn-outline-dark mt-2" type="button">Back</a>
    </form>


