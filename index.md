---
layout: blank
title: Andriy Duyko's Blog
nav: blog
permalink: /
---

{% for post in site.posts limit:5 %}
  <div class="project">
    <h1>
      <a href="{{ post.url }}">{{ post.title }}</a>
      <div class="posted-on">Posted: {{ post.date | date_to_long_string }}</div>
    </h1>
    {% include spacer.html %}
    <!-- thanks to https://gist.github.com/mikeygee/2626538 -->
    {{ post.content | split:'<!--break-->' | first }}
    {% if post.content contains '<!--break-->' %}
      <a href="{{ post.url }}">Continue Reading</a>
    {% else %}
      <a href="{{ post.url }}">Permalink</a>
    {% endif %}
  </div>
  {% if forloop.last == false %}
  ---
  {% include spacer.html %}
  {% endif %}
  ---
  See more posts in the [full archive](/archive)
{% endfor %}
