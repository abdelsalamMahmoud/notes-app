<?php require "partials/head.php"; ?>

<h1>welcome in <span>notes</span> app</h1>


    <div class="center">
        <h1>login</h1>
        <form action="index.php" method="post">
            <div class="txt_field">
                <input type="text" id="email" name = "email" required>
                <span></span>
                <label for="email">email</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" name = "password" required>
                <span></span>
                <label for="password">password</label>
            </div>
            <input type="submit" value="login" class="submit">
            <div class="signup_link">
                not a member? <a href="controllers/registration-create.php">signup</a>
            </div>
        </form>
    </div>







<?php require "partials/footer.php"; ?>  