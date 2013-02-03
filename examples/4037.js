// AutoComplete provides an HTML escape function
var encode = AutoComplete.htmlEncode;

var buildLoadingMsg = function(input) {
  if (input === '') {
    return 'Loading states&hellip;';
  }  
  return 'Searching for "' + encode(input) + '"';
};

var config = {
  initialList: 'states',
  lists: {
    states: {
      ajaxLoadingHTML: buildLoadingMsg,
      cacheAjax: false,
      url: 'api/states.php?slow=true&q={value}'
    }
  }
};
var widget = new AutoComplete('search_bar', config);