---
layout: blank
title: Latest Blog Posts
nav: blog
permalink: /
---

<h1>
  {{ page.title }}
</h1>
{% for post in site.posts limit:5 %}
  <div class="project">
    <h1>
      <a href="{{ post.url }}">{{ post.title }}</a>
      <div class="posted-on">Posted: {{ post.date | date_to_long_string }}</div>
    </h1>
    {% include spacer.html %}
    <!-- thanks to https://gist.github.com/mikeygee/2626538 -->
    {{ post.content | split:'<!--break-->' | first }}
    <hr/>
    <span class="posted-on">
      {% if post.content contains '<!--break-->' %}
        <a href="{{ post.url }}">Keep Reading</a>
      {% else %}
        <a href="{{ post.url }}">Permalink</a>
      {% endif %}
      | See more posts in the <a href="/archive">full archive</a>
    </span>
  </div>
{% endfor %}
