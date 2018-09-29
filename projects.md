---
layout: page
title: Projects
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
    <div class="title">
      <span class="inline-title">
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
    <hr />
    <div class="desc">
      {{ project.desc }}
    </div>
    {% if forloop.last == false %}
      {% include spacer.html %}
    {% endif %}
  </div>
{% endfor %}
