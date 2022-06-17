var feeds={};
var page = 0;

$(function(){
    feeds.init();
});

feeds.init = function(){
    window.onscroll = function() {
        var d = document.documentElement;
        var offset = d.scrollTop + window.innerHeight;
        var height = (d.offsetHeight);

        if (offset >= height) {
            page++;
            feeds.getNextFeed(page);
        }
    }
}

feeds.getNextFeed = function(page){
    $(".overlay").toggle();
    var parentDiv = document.getElementById('m_pink-villa-div');

    if(page > 498){
        parentDiv.innerHTML = parentDiv.innerHTML + '<p> No more feeds </p>';
        $(".overlay").toggle();
        return false;
    }
    
    var xmlhttp = new XMLHttpRequest();
    
    var params = "page="+page;
    xmlhttp.open("POST", 'next/feed', true); // set true for async, false for sync request
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(params); // or null, if no parameters are passed

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            try {
                $(".overlay").toggle();
                var obj = JSON.parse(xmlhttp.responseText);

                parentDiv.innerHTML = parentDiv.innerHTML + obj;
            } catch (error) {
                throw Error;
            }
        }
    }


}