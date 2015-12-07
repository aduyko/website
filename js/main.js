// the var "timestamp" is defined in the default template by jekyll
// pages is hardcoded until I add a blog
var pages = {'Projects': false, 'Work': false, 'About': false};
$(document).ready(function(){
  Object.keys(pages).forEach(function(key){
    $("#content_"+key).load("/"+key+"/index.html?"+timestamp+" #content",function(e){
      pages[key]=true;
    });
  });
  $("#nav").find('a').click(function(){
    var $this = $(this);
    var target = $this.prop('name');
    if(pages[target]===false) {
      $("#content").html('<img class="loader" src="ajax-loader.gif" alt="Loading!" />');
      checkLoaded($this,target);
    } else {
      insert($this,target);
    }
    history.pushState({'page':target},document.title,this.href);
    window.scrollTo(0,0);
    return false;
  });
  $(window).bind("popstate", function(evt) {
    var state = evt.originalEvent.state;
    if (state && state.page) {
      insert($('a[name='+state.page+']'),state.page)
    }
  });
  var ajaxLoader = new Image();
  ajaxLoader.src="/assets/images/ajax-loader.gif";
});
function checkLoaded(source,target){
  if(pages[target]===false){
    window.setTimeout(function(){
      checkLoaded(source,target)
    },1000);
  } else {
    insert(source,target);
  }
}
function insert(source,target){
	console.log(source,target);
  $("#content").parent().html($("#content_"+target).html());
  $("a.selected").removeClass();
  source.addClass('selected');
}
