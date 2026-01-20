document.getElementById("diagnosisBtn").addEventListener("click",function(){
    const checked=document.querySelectorAll("input[type=radio]:checked");

    if(checked.length === 0){
        alert("どれか選ぼう！");
        return;
    }

    window.location.href="result.php";
});
