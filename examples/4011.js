var config = {
  initialList: 'states',
  lists: {
    states: {
      ajaxLoadingHTML: 'Loading states&hellip;',
      cacheAjax: false,
      url: 'api/states.php?slow=true&q={value}'
    }
  }
};
var widget = new AutoComplete('search_bar', config);