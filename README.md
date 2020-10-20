# MariaGwyn's Multisites

MariaGwyn's Drupal Multisites project.

## BLT

Please see the [BLT documentation](https://docs.acquia.com/blt/) for information on build, testing, and deployment processes.

## Resources

* [GitHub](https://github.com/mariagwyn/eemmcdowell/)
* TravisCI - link me!


drush si standard --account-name=mariagwyn --account-pass=drupal --site-mail=mariagwyn@gmail.com --site-name=MariaGwyn --locale=us


Was in: docroot/themes/custom/mariagwyn/templates/components/recipe-collections/block--views-block--recipe-collections-block.html.twig
{% extends "block.html.twig" %}
{#
/**
 * @file
 * Theme override for recipe collections block.
 */
#}
{% block content %}
  {{ attach_library('mariagwyn/recipe-collections') }}
  <div class="container">
    {{ parent() }}
  </div>
{% endblock %}
