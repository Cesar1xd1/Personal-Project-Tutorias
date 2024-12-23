function validacionNumeros(e){
    let code = (e.which) ? e.which : e.keyCode;
    
    if(code>31 && (code<48 || code>57)){
        e.preventDefault();
    }
}
function validacionLetras(e) {
    let code = (e.which) ? e.which : e.keyCode;
    
    if(code==32 || (code>=65 && code<=90) || (code>=97 && code<=122)||code==180 ||code==193||code==201||code==205||code==211||code==218||code==225||code==233||code==237||code==243||code==250||code==241||code==209|| code==239){
        
    }else{
        e.preventDefault();
    }
}