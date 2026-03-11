<input type="text" id="review" placeholder="Masukkan ulasan">
<button onclick="analisis()">Analisis</button>

<h2 id="hasil"></h2>

<script>
function analisis(){

fetch('predict.php',{
    method:'POST',
    headers:{'Content-Type':'application/json'},
    body:JSON.stringify({
        text:document.getElementById("review").value
    })
})
.then(res=>res.json())
.then(data=>{
    document.getElementById("hasil").innerHTML = data.sentiment
})

}
</script>