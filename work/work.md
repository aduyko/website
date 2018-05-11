---
layout: page
title: Work
description: Places I have worked and projects I have taken part in
permalink: /work/
---

{% for work in site.data.works %}
  <div class="project">
    <div class="thumb">
      {% if work.thumb %}
        <img src="{{ site.baseurl }}/images/{{ work.name }}/{{ work.thumb }}" />
      {% endif %}
    </div>
    <div class="desc">
      <div class="title">
        <h1>
          {{ work.name }}
        </h1>
        <span class="links">
          {% for link in work.links %}
            <a href="{{ link[1] }}" target="_blank">
              {{ link[0] }}&emsp;
            </a>
          {% endfor %}
        </span>
      </div>
      {{ work.desc }}
    </div>
  </div>
{% endfor %}
