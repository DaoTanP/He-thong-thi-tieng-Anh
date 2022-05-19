function preventGoBack() {
    window.history.pushState(null, null, window.location.href);
    window.onpopstate = function () {
        window.history.go(1);
    };
}

function preventGoBack_ToThisPage() {
    setTimeout(() => {
        window.history.forward();
    }, 0);

    window.onunload = function () {
        null
    };
}

function removeAllChilds(parent) {
    while (parent.lastChild) {
        parent.removeChild(parent.lastChild);
    }
}