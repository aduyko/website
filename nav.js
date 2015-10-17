var pages = {'projects': false, 'concepts': false, 'about': false};
$(document).ready(function(){
  $.ajaxSetup({ cache:false });
  Object.keys(pages).forEach(function(key){
    if (pages[key]===false){
      $("#content_"+key).load(key+"_.php",function(){ pages[key]=true; });
    }
  });
  $("#nav").find('a').click(function(){
    var target = $(this).prop('name');
    if(target==='art') { return true; }
    if(pages[target]===false) {
      $("#content").html('<img class="loader" src="ajax-loader.gif" alt="Loading!" />');
      checkLoaded($(this),target);
    } else {
      insert($(this),target);
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
  ajaxLoader.src="/ajax-loader.gif";
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
  $("#content").html($("#content_"+target).html());
  $("a.selected").removeClass();
  source.addClass('selected');
}