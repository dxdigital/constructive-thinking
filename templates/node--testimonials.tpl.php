<article<?php print $attributes; ?>>
<?php if ($teaser): ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content);
    ?>
  </div>
<div class="testimonial">
<h2><?php print $title ?></h2>
<p><?php print render($content['field_testimonial']); ?></p>
</div>
<?php else: ?>

  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content);
    ?>
  </div>
  <div class="clearfix">
    <?php if (!empty($content['field_case_study_image'])): ?>
        <?php print render($content['field_case_study_image']); ?>
    <?php endif; ?>
    <div class="case-study-content-wrap">
      <?php print $title ?>
      <button class="toggle">X</button>
    <div class="case-study-content">
      <?php print $node->body['und'][0]['value']; ?>
    </div>
    </div>
  </div>

<?php endif; ?>

</article>