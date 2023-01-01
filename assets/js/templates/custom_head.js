function base_url(param) {
  var pathparts = location.pathname.split('/');
  if (location.host == 'localhost' || location.host == '127.0.0.1') {
    var url = location.origin + '/' + pathparts[1].trim('/') + '/' + (param !== undefined ? param : ''); // http://localhost/myproject/
  } else {
    var url = location.origin + '/' + (param !== undefined ? param : ''); // http://stackoverflow.com
  }
  return url;
}

function segment(param) {
  var pathparts = window.location.pathname.split('/');
  if (location.host == 'localhost' || location.host == '127.0.0.1') {
    var url = pathparts[(param + 1)];
  } else {
    var url = pathparts[param];
  }
  return url;
}

function get_param(param) {
  var full_url = window.location.href
  var url = new URL(full_url);
  var c = url.searchParams.get(param);
  return c
}

function loadingText() {
  return 'Loading...';
}
