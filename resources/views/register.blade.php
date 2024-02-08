
<form action="{{ route('register') }}" method="POST">
@csrf
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
            <input name="name" type="text" class="form-control" id="floatingUsername" placeholder="Username" required>
            <label for="floatingUsername">First name</label>
        </div>

        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>

        <button name="register" class="w-100 btn btn-lg btn-dark " type="submit">Sign up</button>
        <a href="index.php?page=login" class="w-100 btn btn-lg btn-secondary mt-2" type="button">Sign in</a>
        <a href="index.php?page=home" class="w-100 btn btn-lg btn-outline-dark mt-2" type="button">Back</a>
    </form>

