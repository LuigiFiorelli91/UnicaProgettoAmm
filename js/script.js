function doLink(link){
    location.href = link;
}
function doSearch(){
    var bar = $("#searchBar").val();
    var link = "?page=search&search=" + bar + "&cat=" + $("#searchCategoria").val();
    
    doLink(link);
}