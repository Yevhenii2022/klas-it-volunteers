document.addEventListener("DOMContentLoaded",(function(){const t=document.querySelectorAll(".tab"),e=document.querySelectorAll(".tab-content");function a(a){e.forEach((t=>{t.classList.remove("tab-active")})),t.forEach((t=>{t.classList.remove("tab-active")}));document.getElementById(a).classList.add("tab-active");document.querySelector(`[data-target="${a}"]`).classList.add("tab-active")}t.forEach((t=>{t.addEventListener("click",(()=>a(t.dataset.target)))})),a("tab1")}));