var input = document.getElementById("input");
var messages = document.getElementById("messages");
function post() {
  var message = document.createElement("li");
  message.innerText = input.value;  
  messages.appendChild(message);
  input.value = "";
}
