$("li").on('click', function(e){
    let modal = $(".m-content");
    let content = $(e.target).children();
    modal.children().remove();
    modal.append(content);
    modal.show();
})