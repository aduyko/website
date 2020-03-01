---
layout: page
title: Posts Archive
nav: archive
permalink: /archive/
---

{% assign years = site.posts | group_by_exp:"post", "post.date | date: '%Y'" %}
{% for year in years %}
  <div class="inline-title">{{ year.name }}</div>
  ---
  {% for post in year.items %}
  <div class="post-link">
    <a href="{{ post.url }}">{{ post.date | date: '%B %d' }} - {{ post.title }}</a>
  </div>
  {% endfor %}
{% if forloop.last == false %}
  {% include spacer.html %}
{% endif %}
{% endfor %}
