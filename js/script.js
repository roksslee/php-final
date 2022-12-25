let modal = $(".modal");
$(".adding").on('click', function(e){
    let content = $(e.target).parent().children().clone();
    let mCont = $(".m-content");
    let items = $("<li></li>");
    if(mCont.children().length >= 3) mCont.children().remove();
    items.append(content);
    items.children().last().remove();
    mCont.append(items);
    if(mCont.children().length <= 1){
        items.css("border", 0);
    }else{
        mCont.children().css("border-bottom", "1px solid gainsboro");
        mCont.children().last().css("border", 0);
    }
    modal.fadeIn();
})

$(".close").on("click", function(){
    modal.fadeOut();
})