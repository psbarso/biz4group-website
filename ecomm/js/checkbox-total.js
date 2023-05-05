function totalIt() {
  var input = document.getElementsByName("product");
  console.log ('input', input);
  var total = 0;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += parseFloat(input[i].value);
    }
  }
  document.getElementsByName("total")[0].value = "$" + total.toFixed(2);
  console.log(document.getElementsByName("total"))
}