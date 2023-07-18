<header>
            <div id="logo">
                <p><span>Notes</span>App</p>
            </div>
            <nav>
               <a href="index.php" class="<?= $_SERVER['REQUEST_URI']==='/course/controllers/index.php' ? 'active' : 'normal'?>">Home</a>
               <a href="about.php" class="<?= $_SERVER['REQUEST_URI']=== '/course/controllers/about.php' ? 'active' : 'normal'?>">about</a>
               <a href="notes.php" class="<?= $_SERVER['REQUEST_URI']==='/course/controllers/notes.php' ? 'active' : 'normal'?>">notes</a>
               <a href="contact.php" class="<?= $_SERVER['REQUEST_URI']==='/course/controllers/contact.php' ? 'active' : 'normal'?>">contact</a>
            </nav>
            <a href="../index.php" class="logoutbtn">logout</a>
        </header> 