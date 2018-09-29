---
layout: page
title: Projects
description: Projects and concepts I've worked on, which are mostly unfinished
nav: projects
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
        <h1>
          {{ project.name }}
        </h1>
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
