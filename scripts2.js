function search_fn() {
    document.getElementById("search-logo").style.display = "none";
    let input = document.getElementById('search-bar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('search-list');
    
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}