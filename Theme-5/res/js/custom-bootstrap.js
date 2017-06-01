var jqxhr = $.ajax({
    type: 'post',
   url: 'https://api.github.com/repos/mmcweb/dec/contents/Responsives Image/HTML/responsive-image.html?ref=master&access_token=d1f745dfa90cf5e6f042fb16d95f52f1fe668f4c',
   jsonp: 'callback',
    dataType: 'jsonp'
  });

$.when(jqxhr).then(
  function(_data)
  {
    //console.log(_data);
    var jqxhr2 = $.ajax({
        type: 'get',
       url: _data.data.download_url
      });
    

    $.when(jqxhr2).then(
      function(_data2)
      {
        console.log(_data2);
      },
      function()
      {
        console.log(fail + 'ji');
      });
      },
  function()
  {
    console.log(fail + 'ji');
  });
