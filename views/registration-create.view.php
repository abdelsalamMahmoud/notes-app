<?php require "partials/head.php"; ?> 

    <div class="center">
      <h1>register</h1>
      <form method="post" action ="../controllers/registration-create.php">
      <div class="txt_field">
          <input id="name"  required type="text" name="name">
          <span></span>
          <label for="name">name</label>
          <?php if(isset($errors['name'])) :?>
            <p style = "color:red; margin-top:10px; font-size:14px;"><?=$errors['name']; ?></p>
        <?php endif; ?>
        </div>
        <div class="txt_field">
          <input id="email" required type="text" name="email">
          <span></span>
          <label for="email">email</label>
          <?php if(isset($errors['email'])) :?>
            <p style = "color:red; margin-top:10px; font-size:14px;"><?=$errors['email']; ?></p>
        <?php endif; ?>
        </div> 
        <div class="txt_field">
          <input id="password" required type="password" name="password">
          <span></span>
          <label for="password">password</label>
          <?php if(isset($errors['password'])) :?>
            <p style = "color:red; margin-top:10px; font-size:14px;"><?=$errors['password']; ?></p>
        <?php endif; ?>
        </div>
        <input type="submit"value="register" class="submit">
        <div class="signup_link">
           OR <a href="../index.php">login</a>
        </div>
      </form>
    </div>


<?php require "partials/footer.php"; ?> 