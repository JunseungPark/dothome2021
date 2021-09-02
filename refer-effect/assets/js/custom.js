
//code view
document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((el) => {
        hljs.highlightElement(el);
    });
});

//Code tab menu
const codeTabBtn = $(".view-title ul li"); // 3개의 버튼을 변수에 할당
const codeTabCont = $(".view-cont > div"); // 3개의 컨텐츠를 변수에 할당
codeTabBtn.click(function(){
    let target = $(this);
    codeTabBtn.removeClass("active");
    target.addClass("active");
    let index = target.index();
    codeTabCont.css("display", "none");
    codeTabCont.eq(index).css("display", "block")
});

// Modal
// $(".info button").click(function () {
//     $("#modal").removeClass().addClass("show");
// })

// $(".modal-cont button").click(function () {
//     $("#modal").addClass("hide");
// })
document.querySelector(".info button").addEventListener("click", function () {
    document.querySelector("#modal").className = '';
    document.querySelector("#modal").classList.add("show");
});
document.querySelector(".modal-cont button").addEventListener("click", function () {
    document.querySelector("#modal").classList.add("hide");
});