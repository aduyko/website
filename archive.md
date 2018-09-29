---
layout: archive
title: Posts Archive
nav: archive
permalink: /archive/
---

{% for post in site.posts %}
  <div class="post-link">
    <a href="{{ post.url }}">{{ post.date | date_to_long_string }} - {{ post.title }}</a>
  </div>
{% endfor %}
