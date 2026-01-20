document.getElementById("diagnosisBtn").addEventListener("click",function(){

    const groups=["taste","scent","noodles","soup","topping"];

    for(let name of groups){
        const checked=document.querySelector(`input[name="${name}"]:checked`);

        if(!checked){
            alert("全ての質問に答えてください!");
            return;
        }
    }
    window.location.href="result.php";
});
