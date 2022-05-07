function setActive(pageName) {
    let element = document.querySelectorAll('.navbar-list a');
    var activePage;
    for (let index = 0; index < element.length; index++) {
        if (element[index].textContent == pageName) {
            activePage = element[index];
            break;
        }
    }

    if (typeof activePage !== 'undefined') {
        alert(activePage);
        activePage.setAttribute('disabled', '');
    }
}