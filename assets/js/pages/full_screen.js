$(function() {
  var replaceFullScreenPage = function(url) {
    $.ajax({
      url: url,
      type: 'get',
      dataType: 'html',
      cache: false,
    }).always(function(data, textStatus, errorThrown) {
      if (data.status == 404 || errorThrown == 'Not Found') {
        var dom = $(data.responseText);
      } else {
        var dom = $(data);
      }
      var title = dom.filter('title').text();
      var html = dom.find('#page-content').html();
      $('title').text(title);
      $('#page-content').html(html);
    });
  }

  var redirectFullScreen = function(url) {
    $('title').text(loadingText());
    history.pushState({ page: Date.now() }, null, url);
    replaceFullScreenPage(url);
  }

  $('#back-to-home').on('click', '.link-active-full-screen', function(e) {
    if (this.href != 'javascript:' || this.href != '#') {
      redirectFullScreen(this.href);
      e.preventDefault();
    }
  });
});
