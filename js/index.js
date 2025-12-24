//タブ押して説明切り替え
const tabs=document.querySelectorAll(".tabItem");
const explanations=document.querySelectorAll(".explanationWrap");

tabs.forEach(tab=>{
    tab.addEventListener("click",()=>{
        const type=tab.dataset.type;

        tabs.forEach(t=>t.classList.remove("isActive"));
        tab.classList.add("isActive");

        explanations.forEach(exp=>{
            exp.classList.remove("isActive");
            if(exp.dataset.type===type){
                exp.classList.add("isActive");
            }
        });
    });
});