<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>form</title>
  </head>
  <body>
    <?php foreach ($jokes as $joke): ?>
       <form action="?deletejoke" method="post">
             <blockquote>
                <p><?php echo htmlspecialchars($joke['text'], ENT_QUOTES,'UTF-8'); ?>
                  <input type="hidden" name="id" value="<?php echo $joke['id']; ?>">
                   <input type="submit" value="Delete">
                      </p>
                      </blockquote>
                    </form>
                   <?php endforeach; ?>

  </body>
</html>
