<article class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="attribution">
    <?php print $unpublished; ?>
    <?php print $picture; ?>

    <div class="submitted">
      <p class="commenter-name">
        <?php print $author; ?>
      </p>
      <p class="comment-time">
        <?php print $created; ?>
      </p>
      <p class="comment-permalink">
        <?php print $permalink; ?>
      </p>
    </div>
  </div>
  <div class="comment-text">
  <header>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h3<?php print $title_attributes; ?>><?php print $title ?></h3>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($new): ?>
      <em class="new"><?php print $new ?></em>
    <?php endif; ?>
  </header>

  <div<?php print $content_attributes; ?>>
    <?php
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php if ($signature): ?>
    <div class="user-signature"><?php print $signature ?></div>
  <?php endif; ?>

  <?php if ($links = render($content['links'])): ?>
    <nav class="clearfix"><?php print $links; ?></nav>
  <?php endif; ?>
  </div> <!-- /.comment-text -->
</article>
