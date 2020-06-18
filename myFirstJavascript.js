<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
  var x = document.getElementById("myVideo").duration;
  document.getElementById("demo").innerHTML = x;
}
</script>
