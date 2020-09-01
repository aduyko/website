---
layout: page
title: Reviews Index
nav: reviews
permalink: /reviews/
---

<div class="inline-title">Books</div>
---
{% assign books = site.data.books | sort: 'author' %}
{% for book in books %}
<div class="post-link">
  <a href="{{ book.url | prepend: site.baseurl }}#books">{% if book.liked %}[*] {% endif %}{{ book.author }} - {{ book.title }}</a>
</div>
{% endfor %}
{% include spacer.html %}

<div class="inline-title">Movies</div>
---
{% assign movies = site.data.movies | sort: 'title' %}
{% for movie in movies %}
<div class="post-link">
  <a href="{{ movie.url | prepend: site.baseurl }}#movies">{% if movie.liked %}[*] {% endif %}{{ movie.title }}</a>
</div>
{% endfor %}
{% include spacer.html %}

<div class="inline-title">Podcasts</div>
---
{% assign podcasts = site.data.podcasts| sort: 'title' %}
{% for podcast in podcasts %}
<div class="post-link">
  <a href="{{ podcast.url | prepend: site.baseurl }}#podcasts">{% if podcast.liked %}[*] {% endif %}{{ podcast.title }}</a>
</div>
{% endfor %}
{% include spacer.html %}

<div class="inline-title">Music</div>
---
{% assign albums = site.data.music | sort: 'author' %}
{% for album in albums %}
<div class="post-link">
  <a href="{{ album.url | prepend: site.baseurl }}#music">{% if album.liked %}[*] {% endif %}{{ album.author }} - {{ album.title }}</a>
</div>
{% endfor %}
{% include spacer.html %}

<div class="inline-title">TV</div>
---
{% assign shows = site.data.shows | sort: 'title' %}
{% for show in shows %}
<div class="post-link">
  <a href="{{ show.url | prepend: site.baseurl }}#tv">{% if show.liked %}[*] {% endif %}{{ show.title }}</a>
</div>
{% endfor %}
