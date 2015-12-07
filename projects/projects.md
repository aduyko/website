---
layout: page
title: Projects
description: Personal projects and concepts which are mostly unfinished, but which I think demonstrate something cool
permalink: /projects/
---

{% for project in site.data.projects %}
  <div class="project">
    <div class="thumb">
      {% if project.thumb %}
        <img src="{{ site.baseurl }}/images/{{ project.name }}/{{ project.thumb }}" />
      {% endif %}
    </div>
    <div class="desc">
      <div class="title">
        <span class="heading">
          {{ project.name }}
        </span>
        <span class="links">
          {% for link in project.links %}
            <a href="{{ link[1] }}" target="_blank">
              {{ link[0] }}&emsp;
            </a>
          {% endfor %}
        </span>
      </div>
      {{ project.desc }}
    </div>
  </div>
{% endfor %}
