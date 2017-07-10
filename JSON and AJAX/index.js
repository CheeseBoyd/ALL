var req = new XMLHttpRequest();
req.open('GET' , 'https://learnwebcode.github.io/json-example/animals-1.json');
req.onload = function(){
  var data = JSON.parse(req.responseText);
  // JSON data is interpreted as string by the browser
  console.log(data) // Logs index of said string
  console.log("-----------------------")
  console.log(req.responseText)
  console.log("XXXXXXXXXXXXXXXXXXXXXXX")
  console.log(JSON.stringify(req.responseText))  

};
req.send();
