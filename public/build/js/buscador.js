function iniciarApp(){buscarPorFecha()}function buscarPorFecha(){document.querySelector("#fecha").addEventListener("input",(function(n){const e=n.target.value;window.location="?fechaHoy="+e}))}document.addEventListener("DOMContentLoaded",(function(){iniciarApp()}));