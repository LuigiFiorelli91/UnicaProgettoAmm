function goLink(link){
    location.href = link;
}
function doSearch(){
    var bar = $("#searchBar").val();
    var link = "?page=search&search=" + bar + "&cat=" + $("#searchCategoria").val();
    
    goLink(link);
}
function doFilterSearch(){
    
    //Testo della barra di ricerca
    var bar = $("#searchBar").val();
    
    //Categoria
    var cat = $("input[type=radio][name=cat]:checked").val();
    if(cat == null){
        cat = $("#searchCategoria").val();
    }
    //Sottocategoria
    var subCat = $("input[type=radio][name=subCat]:checked").val();
    if(subCat == null){
        subCat = "-1";
    }
    
    //Montaggio link
    var link = "?page=search&search=" + bar + "&cat=" + cat + "&subCat=" + subCat;
        
    goLink(link);
}