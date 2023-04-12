var sub_page_elements = null;

window.addEventListener('load', function() {
    sub_page_elements = {
        main: document.getElementById('main'),
        ne_team: document.getElementById('ne_team'),
        roles: document.getElementById('roles'),
        fundraising: document.getElementById('fundraising'),
        travel: document.getElementById('travel')
    };
});

function loadPage(page) {
    for (const [page_id, element] of Object.entries(sub_page_elements)) {
        if (page_id === page) {
            element.style.display = 'block';
            continue;
        }
        element.style.display = 'none';
    }
}

