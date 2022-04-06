$(function() {
  var replacePage = function(url) {
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

      $('.nav-item').removeClass('active');
      $('.link-active').removeClass('active');
      if (segment(2) !== undefined) {
        $('a[href="' + window.location.href + '"]').addClass('active');
        $('a[href="' + window.location.href + '"]').closest('.nav-expandable').addClass('active');
        $('a[href="' + window.location.href + '"]').closest('.collapse').collapse('show');
      } else {
        $('a[href="' + window.location.href + '"]').parent().addClass('active');
        $('.sidebar').find('.collapse.show').collapse('hide');
      }
    });
  }

  var redirect = function(url) {
    $('title').text(loadingText());
    history.pushState({ page: Date.now() }, null, url);
    replacePage(url);
  }

  $('.link-active').on('click', function(e) {
    if (this.href != 'javascript:' || this.href != '#') {
      redirect(this.href);
      e.preventDefault();
    }
  });

  $(window).on('popstate', function(event) {
    $('title').text(loadingText());
    replacePage(document.location);
  });
});
